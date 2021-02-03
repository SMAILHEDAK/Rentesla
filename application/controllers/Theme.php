<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Theme extends CI_Controller
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
    public function setthemeday()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->helper('cookie');
        
        $theme = array(
            'name'   => 'theme',
            'value'  => 'style.css',                            
            'expire' => '3450',                                                                                   
            'secure' => TRUE
            );
        set_cookie($theme);
        // $theme = array(
        //     'name'   => 'theme',
        //     'value'  => 'styledark.css',                            
        //     'expire' => '3450',                                                                                   
        //     'secure' => TRUE
        //     );
        // set_cookie($theme);
    }
}
