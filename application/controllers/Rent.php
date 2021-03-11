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
        $this->session->set_userdata('car_id',$this->uri->segment(2));
        $cardata['cardata'] = $this->rent_model->get_car_info();
        $this->load->view('rent_view',$cardata);
    }
}
?>
