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
		$data['error'] = "";
		foreach ($data['rentals'] as $row) {
			 {
				$end_rental_date = strtotime($row['end_date']);
				$date_end_entered = strtotime($this->input->post('end_date'));
				$start_rental_date = strtotime($row['start_date']);
				$date_start_entered = strtotime($this->input->post('start_date'));
				$today = strtotime('today');
				if($date_start_entered < $today or $date_end_entered < $today){
					$data['error'] = "La location ne peux pas se faire avant la date d'aujourd'hui";
				}
				else if($date_start_entered<= $end_rental_date && $date_start_entered>=$start_rental_date){
					$data['error'] = "La véhicule n'est pas disponible pour ces dates";
				}
				else if($date_end_entered>=$start_rental_date && $date_end_entered<=$end_rental_date){
					$data['error'] = "La véhicule n'est pas disponible pour ces dates";
				}
				else if($date_end_entered <= $end_rental_date){
					$data['error'] = "La véhicule n'est pas disponible pour ces dates";
				}
				else if ($date_end_entered < $date_start_entered){
					$data['error'] = "La date de fin est inférieure à la date de début. Cela fait aucun sens.";
				}
				else{
					echo 'blablabla';
					// METTRE LE CODE POUR INSÉRER LES DONNÉES et redirect vers page confirmation
				}
			}
		}
		$this->load->view('rent_view',$data);
	}
}
