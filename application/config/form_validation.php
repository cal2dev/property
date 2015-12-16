<?php
$config = array(
        'challenge_submit' => array(
               			 array(
								'field' => 'home_location',
								'label' => 'Home Planned Location',
								'rules' => 'trim|required|min_length[3]',//|maxlength[15]
               			 		'errors'=>array('required' => 'Please provide where you are planning to buy property')
               			 		
               			 ),
               			 array(
								'field' => 'pincode',
								'label' => 'Pincode',
								'rules' => 'numeric|trim|min_length[6]',
               			 		'errors'=>array('min_length' => PINCODE_1,'numeric' => PINCODE_2)
               			 		
               			 ),
						array(
								'field' => 'email',
								'label' => 'Email Address',
								'rules' => 'trim|required|valid_email'
								
							)
       					 ),
        'login' => array(
               			 array(
								'field' => 'password',
								'label' => 'Password',
								'rules' => 'trim|required|min_length[5]',
               			 		'errors'=>array('min_length' => 'Error Message on rule2 for this field_name')
               			 		
               			 ),
						array(
								'field' => 'email',
								'label' => 'Email Address'
							)
       					 ),
        'email' => array(
                array(
                        'field' => 'emailaddress',
                        'label' => 'EmailAddress',
                        'rules' => 'required|valid_email'
                ),
                array(
                        'field' => 'name',
                        'label' => 'Name',
                        'rules' => 'required|alpha'
                ),
                array(
                        'field' => 'title',
                        'label' => 'Title',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'message',
                        'label' => 'MessageBody',
                        'rules' => 'required'
                )
        )
);