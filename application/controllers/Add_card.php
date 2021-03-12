
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add_card extends CI_Controller
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
public function addcard()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $this->form_validation->set_rules('card_number', 'Card_number', 'required', array('required' => "Le numéro de carte doit être renseigné."));
		$this->form_validation->set_rules('card_holder', 'Card_holder', 'required', array('required' => "Le bénéficiaire doit etre renseigné."));
		$this->form_validation->set_rules('ccv', 'Ccv', 'required', array('required' => "Le ccv doit etre renseigné."));
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('addcard_form');
			} else {
				$this->load->model("add_card_model");
				$datacard = array(
					"card_number"     => $this->input->post("card_number"),
					"card_holder"          => $this->input->post("card_holder"),
					"ccv"     => $this->input->post("ccv"),
					"id_user" => $_SESSION['id']
				);
				$this->add_card_model->add_card($datacard);
				redirect('add_card', 'refresh');
			}
		}
    }