<?php


class Rent_model extends CI_Model
{
    function test_main()
    {
        echo "This is model function";
    }
    //insertion données users
    function get_car_info()
    {
        $cars = $this->db->get_where('car_park', array('car_id' => intval($_SESSION['car_id'])));
        return $cars->result_array();
    }

    function get_cards()
    {
        $this->db->select('*');
        $this->db->from('payment_card');
        $this->db->join('users', 'payment_card.id_user = users.id_user', 'inner');
        $this->db->where('payment_card.id_user', $_SESSION['id']);
        $query = $this->db->get();
        return $query->result_array();
    }

    function rent($rentdata)
    {
        $this->db->insert("rental", $rentdata);
    }

    function get_current_car_rental()
    {
        $this->db->select('*');
        $this->db->from('rental');
        $this->db->where('car_id', intval($_SESSION['car_id']));
        $query = $this->db->get();
        return $query->result_array();
    }

    function check($from_date, $to_date, $car_id)
    {
        $this->db->select('*');
        $this->db->from('rental');
        $this->db->where('car_id', $car_id);
        $this->db->where("'$from_date' BETWEEN start_date AND end_date");
        $this->db->where("'$to_date' BETWEEN start_date AND end_date");
        $this->db->where("start_date BETWEEN '$from_date' AND '$to_date'");
        $this->db->where("end_date BETWEEN '$from_date' AND '$to_date'");
        $query = $this->db->get();
        return $query->result_array();;
    }
}
