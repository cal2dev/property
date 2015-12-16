<?php 

// Store Functions are doctrine functions

class Contact_model extends CI_Model  {
   
   var $em;
   
   function __construct(){  
      parent::__construct();  
   }    
   
  
   public function test($tb){
       $query= $this->db->get($tb);
      $row=$query->result_array();
      return $row; 
       
   }
   
   /****************************************************
    *  call to save challenge
    ****************************************************/
   public function challengeSubmit($details)
   {
   	$done=0;
  	 if($details){
					$this->saveChallenge($details);
   					$done=1;
  		 } 
   
   return $done;
   }
   public function saveChallenge($details)
   {
   	$data = array(
   			'lead_email_id' => $details['email'],
   			'data_source' => 'challenge',
   			'property_pincode' => $details['pincode'],
   			'property_city' => $details['city'],
   			'property_locality' => $details['locality'],
   			'property_planned_home_location' => $details['home_location']
   	);
   	
   	return $this->db->insert('app_leads', $data);
   }
   
   
   /****************************************************
    *  call to save connect form
    ****************************************************/
   public function connectSubmit($details)
   {
   	$done=0;
   	if($details){
   		$this->saveConnect($details);
   		$done=1;
   	}
   	 
   	return $done;
   }
    
   public function saveConnect($details)
   {
   	$data = array(
   			'lead_email_id' => $details['email'],
   			'data_source' => 'connect_form ',
   			'property_pincode' => $details['pincode'],
   			'property_city' => $details['city'],
   			'property_locality' => $details['locality'],
   			'property_planned_home_location' => $details['home_location'],
   			'lead_age' => $details['age'],
   			'property_type' => $details['property_type'],
   			'property_approval' => $details['property_approval'],
   			'lead_income' => $details['lead_income'],
   			'lead_job_experience' => $details['lead_job_experience'],
   			'lead_position' => $details['lead_position'],
   			'lead_type_of_company' => $details['lead_type_of_company']
   
   	);
   
   	return $this->db->insert('app_leads', $data);
   }
   public function getDirectory($details)
   {
   	$data = array(
   			'lead_email_id' => $details['email'],
   			'data_source' => 'connect_form ',
   			'property_pincode' => $details['pincode'],
   			'property_city' => $details['city'],
   			'property_locality' => $details['locality'],
   			'property_planned_home_location' => $details['home_location'],
   			'lead_age' => $details['age'],
   			'property_type' => $details['property_type'],
   			'property_approval' => $details['property_approval'],
   			'lead_income' => $details['lead_income'],
   			'lead_job_experience' => $details['lead_job_experience'],
   			'lead_position' => $details['lead_position'],
   			'lead_type_of_company' => $details['lead_type_of_company']
   			 
   	);
   	 
   	return $this->db->insert('app_leads', $data);
   }
}