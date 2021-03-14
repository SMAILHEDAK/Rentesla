<?php


class Modify_car_model extends CI_Model
{
    function test_main()
    {
        echo "This is model function";
    }
    //insertion données users
    function get_car_info($carid)
    {
        $this->db->select('*');
        $this->db->from('car_park');
        $this->db->where('car_id', $carid);
        $query = $this->db->get();
        return $query->result_array();
    }

    function update_data($cardata, $carid)
    {
        $this->db->where('car_id', $carid);
        $this->db->set($cardata);
        $this->db->update('car_park');
    }
}
