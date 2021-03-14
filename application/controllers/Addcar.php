<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addcar extends CI_Controller
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
	public function add()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('model', 'Model', 'required', array('required' => "Le modèle doit être renseigné."));
		$this->form_validation->set_rules('color', 'Color', 'required', array('required' => "La couleur doit être renseignée."));
		$this->form_validation->set_rules('batterysize', 'Batterysize', 'required', array('required' => "La puissance de la batterie doit être renseignée."));
		$this->form_validation->set_rules('power', 'Power', 'required', array('required' => "La puissance du véhicule doit être renseignée."));
		$this->form_validation->set_rules('kilometer', 'Kilometer', 'required', array('required' => "Le kilométrage doit être renseigné."));
		$this->form_validation->set_rules('disponibility', 'Disponibility', 'required', array('required' => "La disponibilité doit être renseignée."));
		$this->form_validation->set_rules('autopilot', 'Autopilot', 'required', array('required' => "L'autopilot doit être renseigné."));
		$this->form_validation->set_rules('dailyprice', 'Dailyprice', 'required', array('required' => "Le prix doit être renseigné."));
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('addcar');
		} else {
			//Ici on demande de stocker nos informations post dans un tableau  
			$this->load->model("add_car_model");
			$cardata = array(
				"model"     => $this->input->post("model"),
				"batterysize"          => $this->input->post("batterysize"),
				"power"     => $this->input->post("power"),
				"color"          => $this->input->post("color"),
				"kilometer"          => $this->input->post("kilometer"),
				"disponibility"          => $this->input->post("disponibility"),
				"autopilot"          => $this->input->post("autopilot"),
				"dailyprice"          => $this->input->post("dailyprice"),
			);
			$this->add_car_model->add_car($cardata);
			redirect('logged_admin', 'refresh');
		}
	}
}
