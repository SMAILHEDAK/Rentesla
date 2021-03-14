<?php


class Admin_model extends CI_Model
{
    function test_main()
    {
        echo "This is model function";
    }

    function get_clients()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('admin', '0');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_cars()
    {
        $this->db->select('*');
        $this->db->from('car_park');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_rentals()
    {
        $this->db->select('*');
        $this->db->from('rental');
        $this->db->join('users', 'users.id_user = rental.id_user', 'INNER');
        $this->db->join('car_park', 'rental.car_id = car_park.car_id', 'INNER');
        $this->db->join('payment_card', 'rental.id_card = payment_card.id_card', 'INNER');

        $query = $this->db->get();
        return $query->result_array();
    }

    function delete_rental($rentid)
    {
        $this->db->where('id_rental', $rentid);
        $this->db->delete('rental');
    }

    function delete_user($userid)
    {
        $this->db->where('id_user', $userid);
        $this->db->delete('users');
    }

    function delete_car($carid)
    {
        $this->db->where('car_id', $carid);
        $this->db->delete('car_park');
    }
}
