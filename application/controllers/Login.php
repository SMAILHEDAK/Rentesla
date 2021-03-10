<?php
class Login extends CI_Controller
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

    public function loadlogin()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->helper('url');
        $this->load->library('form_validation');
        if (isset($_SESSION['login'])) {
            redirect('logged_main');
        }
        $this->form_validation->set_rules('login', 'Login', 'required', array('required' => "Le pseudo doit être renseigné."));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => "Le mot de passe doit etre renseigné."));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $this->load->model("login_model");
            $login = $this->input->post("login");
            $password = $this->input->post("password");
            $test = $this->login_model->get_data($login, $password);
            $sessiondata = array('id' => $test->id_user, 
            'name' => $test->name, 
            'surname' => $test->surname, 
            'address' => $test->address, 
            'birthdate' => $test->birthdate, 
            'licensedate' => $test->license_date, 
            'mail' => $test->mail,
            'login' => $test->login,
            'password' => $test->password,
            'admin' => $test->admin);
            $this->session->set_userdata($sessiondata);
            if($sessiondata['admin'] == '0'){
			redirect('logged_main');
            }
            else if($sessiondata['admin'] == '1'){
                redirect ('logged_admin');
            }
            }
        }
    }

