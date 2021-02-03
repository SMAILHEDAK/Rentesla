<?php


class Modify_user_model extends CI_Model
{
    function test_main()
    {
        echo "This is model function";
    }
    //insertion données users
    function get_user_info($userid)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id_user', $userid);
        $query = $this->db->get();
        return $query->result_array();
    }

    function update_data($userdata, $userid)
    {
        $this->db->where('id_user', $userid);
        $this->db->set($userdata);
        $this->db->update('users');
    }
}
