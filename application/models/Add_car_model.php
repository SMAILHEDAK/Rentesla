<?php

class Add_car_model extends CI_Model
{
function add_car($cardata){
    $this->db->insert("car_park", $cardata);  
}
}