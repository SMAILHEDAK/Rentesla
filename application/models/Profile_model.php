<?php


class Profile_model extends CI_Model
{
    function test_main()
    {
        echo "This is model function";
    }
    //insertion données users
    function update_data($data)
    {
        $this->db->where('id_user', $_SESSION['id']);
        $this->db->set($data);
        $this->db->update('users');
    }

    function get_card_data()
    {
        $this->db->select('*');
        $this->db->from('payment_card');
        $this->db->join('users', 'payment_card.id_user = users.id_user', 'inner');
        $this->db->where('payment_card.id_user', $_SESSION['id']);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_current_rental()
    {
        $this->db->select('start_date, end_date, car_park.model, car_park.car_id');
        $this->db->from('rental');
        $this->db->join('car_park', 'rental.car_id = car_park.car_id', 'inner');
        $this->db->where('id_user', $_SESSION['id']);
        $this->db->where('end_date >' , date('Y-m-d'));
        $this->db->order_by('end_date');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_past_rental()
    {
        $this->db->select('start_date, end_date, car_park.model');
        $this->db->from('rental');
        $this->db->join('car_park', 'rental.car_id = car_park.car_id', 'inner');
        $this->db->where('id_user', $_SESSION['id']);
        $this->db->where('end_date <=', date('Y-m-d'));
        $this->db->order_by('end_date');
        $query = $this->db->get();
        return $query->result_array();
    }

    function cancel_rental($id)
    {
        $this->db->where('car_id', $id);
        $this->db->delete('rental');
    }

    function return_rental($id)
    {
        $this->db->where('car_id', $id);
        $this->db->set('end_date', date('Y-m-d'));
        $this->db->update('rental');
        $this->db->where('car_id', $id);
        $this->db->set('disponibility', 1);
        $this->db->update('car_park');

    }
}
