<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logged_main extends CI_Controller
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
	public function logged()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $this->load->helper('cookie');
		$this->load->model("logged_main_model");
		$autopilot = $this->input->post("auto");
		if ($this->input->post('submit')) {
			$cars['cars'] = $this->logged_main_model->get_autopilot($autopilot);
			$this->load->view('logged_main', $cars);
		} else {
			$cars['cars'] = $this->logged_main_model->get_all_cars();
			$this->load->view('logged_main', $cars);
		}
	}
}
