<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modifyuser extends CI_Controller
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
	public function modify()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required', array('required' => "Le nom doit être renseigné."));
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[7]', array('required' => "Le mot de passe doit etre renseigné.", 'min_length' => "Le mot de passe doit contenir au moins 7 caractères."));
		$this->form_validation->set_rules('surname', 'Surname', 'required', array('required' => "Le prénom doit etre renseigné."));
		$this->form_validation->set_rules('mail', 'Email', 'required|valid_email', array('required' => "L'addresse mail doit etre renseignée."));
		$this->form_validation->set_rules('birthdate', 'Birthdate', 'required', array('required' => "La date de naissance doit etre renseignée."));
		$this->form_validation->set_rules('licensedate', 'Licensedate', 'required', array('required' => "La date d'obtention du permis doit etre renseignée."));
		$this->form_validation->set_rules('address', 'Address', 'required', array('required' => "L'addresse doit etre renseignée."));
        $userid=$this->uri->segment(2);
		if ($this->form_validation->run() == FALSE) {
			$this->load->model("modify_user_model");
			$data['user'] = $this->modify_user_model->get_user_info($userid);
			$this->load->view('modifyuser', $data);
		} else {
			//Ici on demande de stocker nos informations post dans un tableau  
			$this->load->model("modify_user_model");
			$userdata = array(
				"name"     => $this->input->post("name"),
				"surname"          => $this->input->post("surname"),
				"birthdate"     => $this->input->post("birthdate"),
				"password"          => $this->input->post("password"),
				"mail"          => $this->input->post("mail"),
				"license_date"          => $this->input->post("licensedate"),
				"address"          => $this->input->post("address"),
			);
			$this->modify_user_model->update_data($userdata,$userid);
			redirect('logged_admin', 'refresh');
		}
	}
}