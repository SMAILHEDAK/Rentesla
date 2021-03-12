<?php

class Add_card_model extends CI_Model
{
function add_card($carddata){
    $this->db->insert("payment_card", $carddata);  
}
}