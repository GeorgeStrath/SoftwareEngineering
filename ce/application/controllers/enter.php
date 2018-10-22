<?php 

	class Enter extends CI_Controller
	{
		
		function __construct()
		{
			
			parent::__construct();
			$this->load->database();
			$this->load->model('postmodel');

		}

		public function index()
		{	
			#loads allexternal links and to bootstrap
			$this->load->view('linkstyles');
			$this->load->view('back');
			$this->load->view('login');
			
		}
		#to employeedash after login
		public function employeedash()
		{
			# code...
			$result['employees']=$this->postmodel->viewupdateyee();

			$this->load->view('linkstyles');
			$this->load->view('backyee');
			$this->load->view('employeedashboard',$result);
		}
		#to employer dashboard after login
		public function employerdash()
		{
			# code...
			$result['employers']=$this->postmodel->viewupdateyer();
			$this->load->view('linkstyles');
			$this->load->view('employerdash',$result);
		}
		#to admin dashboard after login
		public function admindash()
		{
			# code...
			
			$data['employees']=$this->postmodel->getemployees();
			$data['employers']=$this->postmodel->getemployers();
			

			$this->load->view('linkstyles');
			$this->load->view('admindash',$data);
		}
		#toemployee home
		public function employeehome()
		{
			# code...			
			$this->load->view('linkstyles');
			$this->load->view('employeehome');
		}
		public function employerhome()
		{
			# code...			
			$this->load->view('linkstyles');
			$this->load->view('employerhome');
		}
		//login user
		public function login()
		{
			# code...
				
 			$this->form_validation->set_rules('mail', 'Email', 'required');
 			$this->form_validation->set_rules('pass', 'Password', 'required');
 			
                
 			if ($this->form_validation->run() ===FALSE) {
 				# code...
 				$this->load->view('linkstyles');
 				$this->load->view('back');
				$this->load->view('login');	

 			} else {
 				$email=$this->input->post('mail');
 				$pass=$this->input->post('pass');

 				$this->load->model('postmodel');
 				$user_id=$this->postmodel->login($email,$pass);

 					if ($user_id) {
 						# code...
 						#Set session
 						$result = $this->db->get_where('users',array('id' =>$user_id));
 						
 						$user_data = array(
 											'useremail' =>$result->row(0)->email ,
 											'username'=>$result->row(0)->full_names,
 											'logged_in'=>true

 									      );
 									$this->session->set_userdata($user_data);

 						

 						if ($result->num_rows()>0) {

 							if($result->row(0)->role=="employee") 							{
 																	
 									
 								$this->session->set_flashdata('user_loggedin', 'You are now logged in');
 							redirect('enter/employeedash');
 							}
 							elseif ($result->row(0)->role=='employer') {
 								# code...
 								
 									
 							$this->session->set_flashdata('user_loggedin', 'You are now logged in');
 							redirect('enter/employerhome');
 							}
 							elseif ($result->row(0)->role=='admin') {
 								# code...
 								
 							$this->session->set_flashdata('user_loggedin', 'You are now logged in');
 							redirect('enter/admindash');
 							}
 							else{
 							$this->session->set_flashdata('login_failed', 'Login is invalid.Re-enter values');
 							redirect('enter/index');
 							}
 							
 						}
 						
 					}
 					else
 					{
 						$this->session->set_flashdata('login_failed', 'Login is invalid.Please Re-enter values');
 						redirect('enter/index');
 					}

 				
 				} 						
 				
 				
 				
		}
		#logout
		public function logout()
		{
			# code...
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('useremail');

			redirect('enter/index','refresh');
		}

		public function updatelee()
		{
			if (!$this->session->userdata('logged_in')) {
					# code...
					redirect('homecnt','refresh');
				}
			#upload image
			    $config['upload_path']          ='./uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = 1920;
                $config['max_height']           = 1080;

                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $image=$this->upload->data('file_name');
                        print_r($image);
                }
 
                $this->postmodel->updatelee($image);			
				redirect('enter/admindash');
			
			
		}


		public function updateyer()
		{
			if (!$this->session->userdata('logged_in')) {
					# code...
					redirect('homecnt','refresh');
				}
			#upload image
			    $config['upload_path']          ='./uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = 1920;
                $config['max_height']           = 1080;

                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $image=$this->upload->data('file_name');
                        
                }
 
			
			$this->postmodel->updateler($image);			
			redirect('enter/admindash');
		}
		public function delete($id)
		{
			if (!$this->session->userdata('logged_in')) {
					# code...
					redirect('homecnt','refresh');
				}

			$this->postmodel->deletelee($id);			
			redirect('enter/admindash');
		}
		public function deleteyer($id)
		{

			if (!$this->session->userdata('logged_in')) {
					# code...
					redirect('homecnt','refresh');
				}
			$answer=$this->postmodel->deleteyer($id);
			redirect('enter/admindash');
			
		}

		public function updateyee()
		{
			if (!$this->session->userdata('logged_in')) {
					# code...
					redirect('homecnt','refresh');
				}
			#upload image
			    $config['upload_path']          ='./uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = 1920;
                $config['max_height']           = 1080;

                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $image=$this->upload->data('file_name');
                        print_r($image);
                }
 
                $this->postmodel->updateyee($image);			
				redirect('enter/employeedash');
			
			
		}


		public function updateler()
		{
			if (!$this->session->userdata('logged_in')) {
					# code...
					redirect('homecnt','refresh');
				}
			#upload image
			    $config['upload_path']          ='./uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = 1920;
                $config['max_height']           = 1080;

                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $image=$this->upload->data('file_name');
                        
                }
 
			
			$this->postmodel->updateler($image);			
			redirect('enter/employerhome');
		}

	}
 ?>