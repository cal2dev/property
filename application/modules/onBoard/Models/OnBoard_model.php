<?php 

class OnBoard_model extends CI_Model  {
	
	var $em;
	
	function __construct(){  
      parent::__construct();  
   }    
   
  
   public function test($tb){
       $query= $this->db->get($tb);
      $row=$query->result_array();
      return $row; 
   }
   
   
   
  
   
   
}
