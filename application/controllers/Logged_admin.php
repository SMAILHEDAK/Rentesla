<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logged_admin extends CI_Controller
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
	public function loggedadmin()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model("admin_model");
		$data['clients']=$this->admin_model->get_clients();
		$data['cars']=$this->admin_model->get_cars();
		$data['rental']=$this->admin_model->get_rentals();
		$this->load->view('logged_admin',$data);
	}

	public function deleterent(){
		$this->load->helper(array('form', 'url'));
		$this->load->model("admin_model");
		$rentid = $this->uri->segment(3);
		$this->admin_model->delete_rental($rentid);
		redirect('logged_admin', 'refresh');
	}

	public function deletecar(){
		$this->load->helper(array('form', 'url'));
		$this->load->model("admin_model");
		$carid = $this->uri->segment(3);
		$this->admin_model->delete_car($carid);
		redirect('logged_admin', 'refresh');
	}

	public function deleteuser(){
		$this->load->helper(array('form', 'url'));
		$this->load->model("admin_model");
		$userid = $this->uri->segment(3);
		$this->admin_model->delete_user($userid);
		redirect('logged_admin', 'refresh');
	}

}
