<?php

/**
 * 
 */
class Postmodel extends CI_Model
{
	
	function __construct()
	{
		# code...
		$this->load->database();
		
	}
	#login for all
	public function login($email,$pass)
	{
		$passenc=md5($pass);
			$this->db->where('email',$email);
			$this->db->where('password',$passenc);

			$result = $this->db->get('users');

			if ($result->num_rows()==1) {
				# code...
				return $result->row(0)->id;
			}
			else{
				return false;
			}
		}

	#Sign up an employee
	public function create_post()
	{
		$slug=url_title($this->input->post('full_names'));
		$pass=md5($this->input->post('pass'));
		

		# code...
		$data = array('full_names' =>$this->input->post('fullnames') ,
						'date_of_birth'=>$this->input->post('dob'),
						'id_number'=>$this->input->post('idnum'),
						'email_address'=>$this->input->post('email'),
						'password'=>$pass,
						'category'=>$this->input->post('typeofemployee'),
						'photo'=>"noimage.jpg"
						 );
		$datab = array('full_names' =>$this->input->post('fullnames') ,
			'password'=>$pass,
			'email'=>$this->input->post('email'),
			'role'=>'employee' );

				$this->db->insert('users', $datab);
		return $this->db->insert('employee_details', $data);
				
	}
	#employer sign up
	public function create_postemployer()
	{
		$slug=url_title($this->input->post('full_names'));
		$pass=md5($this->input->post('pass'));
		

		# code...
		$data = array('full_names' =>$this->input->post('fullnames') ,
						'id_number'=>$this->input->post('idnum'),
						'email_address'=>$this->input->post('email'),
						'password'=>$pass,
						'phone_number'=>$this->input->post('pnum'),
						'location'=>$this->input->post('location'),
						'category'=>$this->input->post('typeofemployer'),
						'photo'=>"noimage.jpg"
						 );
		$datab = array('full_names' =>$this->input->post('fullnames') ,
			'password'=>$pass,
			'email'=>$this->input->post('email'),
			'role'=>'employer' );

				$this->db->insert('users', $datab);
		return $this->db->insert('employer_details', $data);
				
	}
	public function getemployees()
	{
		# code...
		$query=$this->db->get('employee_details');
		return $query->result_array();
	}

	public function getemployers()
	{
		# code...
		$query=$this->db->get('employer_details');
		return $query->result_array();
	}
	public function viewupdate($id)
	{
		# code...
		$this->db->where('employee_id',$id);
		$query=$this->db->get('employee_details');			
		return $query->result_array();
	}
	public function viewupdatelee($id)
	{
		# code...
		$this->db->where('employer_id',$id);
		$query=$this->db->get('employer_details');			
		return $query->result_array();
	}
	public function viewlee($id)
	{
		# code...
		$this->db->where('employee_id',$id);
		$query=$this->db->get('employee_details');			
		return $query->result_array();
	}
	public function deletelee($id)
	{
		# code...
		$this->db->where('employee_id',$id);
		$this->db->delete('employee_details'); 
		
	}
	public function deleteyer($id)
	{
		# code...
		$this->db->where('employer_id',$id);
		$this->db->delete('employer_details'); 
		
	}
	public function updatelee($post_image)
	{
		# code...
		$data = array('full_names' =>$this->input->post('name') ,
						'date_of_birth'=>$this->input->post('dob'),
						'id_number'=>$this->input->post('idnum'),
						'email_address'=>$this->input->post('email'),
						'location'=>$this->input->post('location'),
						'license'=>$this->input->post('licence'),
						'photo'=>$post_image,
						'skill'=>$this->input->post('skill'),
						'portfolio'=>$this->input->post('portfolio'),
						'phone_number'=>$this->input->post('pnum'),
						'rate'=>$this->input->post('rate'),
						'category'=>$this->input->post('category')
						
						 );		
		$this->db->set($data);
		$this->db->where('employee_id',$this->input->post('id'));
		$this->db->update('employee_details'); 
		

		
	}
	public function updateyer($post_image)
	{
		# code...
		$data = array('full_names' =>$this->input->post('name') ,
						'id_number'=>$this->input->post('idnum'),
						'email_address'=>$this->input->post('email'),						
						'phone_number'=>$this->input->post('pnum'),
						'photo'=>$postimage,
						'location'=>$this->input->post('location'),
						'category'=>$this->input->post('category'),						
						'rating'=>$this->input->post('rate')
						 );
		$this->db->set($data);
		$this->db->where('employer_id',$this->input->post('id'));
		$this->db->update('employer_details'); 
		
	}
	public function viewupdateyee()
	{
		# code...
		$email=$this->session->userdata('useremail');
		$this->db->where('email_address',$email);
		$query=$this->db->get('employee_details');			
		return $query->result_array();
	}
	public function viewupdateler()
	{
		# code...
		$email=$this->session->userdata('useremail');
		$this->db->where('email_address',$email);
		$query=$this->db->get('employer_details');			
		return $query->result_array();
	}
	public function updateyee($post_image)
	{
		# code...
		$data = array('full_names' =>$this->input->post('name') ,
						'date_of_birth'=>$this->input->post('dob'),
						'id_number'=>$this->input->post('idnum'),
						'email_address'=>$this->input->post('email'),
						'location'=>$this->input->post('location'),
						'license'=>$this->input->post('licence'),
						'photo'=>$post_image,
						'skill'=>$this->input->post('skill'),
						'portfolio'=>$this->input->post('portfolio'),
						'phone_number'=>$this->input->post('pnum'),
						'rate'=>$this->input->post('rate'),
						'category'=>$this->input->post('category')
						
						 );		
		$this->db->set($data);
		$this->db->where('employee_id',$this->input->post('id'));
		$this->db->update('employee_details'); 
		

		
	}
	public function updateler($post_image)
	{
		# code...
		$data = array('full_names' =>$this->input->post('name') ,
						'id_number'=>$this->input->post('idnum'),
						'email_address'=>$this->input->post('email'),						
						'phone_number'=>$this->input->post('pnum'),
						'photo'=>$postimage,
						'location'=>$this->input->post('location'),
						'category'=>$this->input->post('category'),						
						'rating'=>$this->input->post('rate')
						 );
		$this->db->set($data);
		$this->db->where('employer_id',$this->input->post('id'));
		$this->db->update('employer_details'); 
		
	}
	public function search()
	{
		# code...
		$location=$this->input->post('location');
		$skill=$this->input->post('skill');
		$keyword = array('portfolio' =>$skill ,
						  'portfolio' =>$location ,
						  'location' =>$location ,
						  'skill' =>$skill 
						 );
		$this->db->or_like($keyword);
		$query=$this->db->get('employee_details');
		return $query->result_array();
	}
}