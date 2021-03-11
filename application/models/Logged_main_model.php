<?php  


 class Logged_main_model extends CI_Model  
 {  
      function test_main()  
      {  
           echo "This is model function";  
      }  
      //insertion données users
      function get_all_cars()  
      {  
        $cars = $this->db->get_where('car_park', array('disponibility' => 1));
        return $cars->result_array();
      } 

      function get_autopilot($autopilot){
          $cars = $this->db->get_where('car_park', array('autopilot' => $autopilot));
        return $cars->result_array();
      }
 }  
