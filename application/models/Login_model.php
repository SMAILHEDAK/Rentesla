<?php
class Login_model extends CI_Model
{
    function test_main()
    {
        echo "This is model function";
    }
    //insertion données users

    function get_data($login, $password)
    {
        $datatest = $this->db->get_where('users', array('login' => $login, 'password' => $password));
        return $datatest->row();
    }
}
