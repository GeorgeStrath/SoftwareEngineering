<?php

 /**
  * 
  */
 class Homecnt extends CI_Controller
 {
 		function __construct()
		{
			# code...
			parent::__construct();

		}
 		
 		public function index()
 		{
 			# code...
 				$this->load->view('linkstyles');
 				$this->load->view('home');

 							
 		}

 		public function employee()
 		{
 			# code...
 			$this->load->view('linkstyles');
 			$this->load->view('back');
 			$this->load->view('signup');
 		}

 		public function employer()
 		{
 			# code...
 			$this->load->view('linkstyles');
 			$this->load->view('back');
 			$this->load->view('signupemployer');
 		}
 		#Employee signup below

 		public function employeedash()
 		{     
 			$this->form_validation->set_rules('fullnames', 'Fullnames', 'required');
 			$this->form_validation->set_rules('dob', 'Date of birth', 'required');
 			$this->form_validation->set_rules('idnum', 'Identity number', 'required');
 			$this->form_validation->set_rules('email', 'Email', 'required');
 			$this->form_validation->set_rules('pass', 'Password', 'required');
 			$this->form_validation->set_rules('vpass', 'Re-type password', 'matches[pass]');
 			$this->form_validation->set_rules('typeofemployee', 'Type of Employee', 'required');
                
 			if ($this->form_validation->run()===FALSE) {
 				# code...
 				$this->session->set_flashdata('user_signup_failed', 'Sign up failed');
 				redirect('homecnt/employee','refresh');
 			} else {
 				$this->load->model('postmodel');
 				$this->postmodel->create_post();
 				$this->session->set_flashdata('user_registered', 'You are now registered as a user, you may log in');
 				redirect('homecnt/index');
 				} 				
 				
 				
 			}

 			public function employerdash()
 		{     
 			$this->form_validation->set_rules('fullnames', 'Fullnames', 'required');
 			$this->form_validation->set_rules('pnum', 'Phone Number', 'required');
 			$this->form_validation->set_rules('idnum', 'Identity number', 'required');
 			$this->form_validation->set_rules('email', 'Email', 'required');
 			$this->form_validation->set_rules('pass', 'Password', 'required');
 			$this->form_validation->set_rules('vpass', 'Re-type password', 'matches[pass]');
 			$this->form_validation->set_rules('typeofemployer', 'Type of Employer', 'required');
 			$this->form_validation->set_rules('location', 'Location', 'required');
                
 			if ($this->form_validation->run()===FALSE) {
 				# code...
 				$this->session->set_flashdata('user_signup_failed', 'Sign up failed');
 				redirect('homecnt/employer','refresh');	
 			} else {
 				$this->load->model('postmodel');
 				$this->postmodel->create_postemployer();
 				$this->session->set_flashdata('user_registered', 'You are now registered as a user, you may log in');
 				redirect('homecnt/index');
 				} 				
 				
 				
 			}



 }

 	 