<?php  


 class Main_model extends CI_Model  
 {  
      function test_main()  
      {  
           echo "This is model function";  
      }  
      //insertion données users
      function insert_data($data)  
      {  
           $this->db->insert("users", $data);  
      }  


 }  
