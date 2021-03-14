<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rent extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function rent()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('rent_model');
		$this->session->set_userdata('car_id', $this->uri->segment(2));
		$data['cardata'] = $this->rent_model->get_car_info();
		$data['cards'] = $this->rent_model->get_cards();
		$data['rentals'] = $this->rent_model->get_current_car_rental();
		$to_date = date("Y-m-d", strtotime($this->input->post('end_date')));
		$from_date = date("Y-m-d", strtotime($this->input->post('start_date')));
		$car_id = intval($_SESSION['car_id']);
		$this->load->view('rent_view', $data);
		if ($this->input->post('submit')) {
			$result = $this->rent_model->check($from_date, $to_date, $car_id);
			if (empty($result)) {
				if($this->input->post('cards')){
				$this->registerrent();
				}
				else {
					redirect('errorpage','refresh');
				}
			} 
			else if (!empty($result)) {
				redirect('errorpage','refresh');
			}
		}
	}


	public function registerrent()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('rent_model');
		$rentdata = array(
			"start_date"     => $this->input->post("start_date"),
			"end_date"          => $this->input->post("end_date"),
			"id_user"     => $_SESSION['id'],
			"car_id"          => $_SESSION['car_id'],
			"id_card"          => $this->input->post("cards"),
		);
		$this->rent_model->rent($rentdata);
		redirect('successpage','refresh');

	}
}
