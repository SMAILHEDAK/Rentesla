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
 }  
