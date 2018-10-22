<?php 
	/**
	 * 
	 */
	class Action extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model('postmodel');
		}
		public function searchresult()
		{
			# code...

		}
		public function view($id= NULL)
		{
				if (!$this->session->userdata('logged_in')) {
					# code...
					redirect('homecnt','refresh');
				}
			$data['emyeedata']=$this->postmodel->viewupdate($id);
			$this->load->view('backadm');
			$this->load->view('linkstyles');
			$this->load->view('employeedata', $data);
			
		}
		public function viewlee($id= NULL)
		{
			if (!$this->session->userdata('logged_in')) {
					# code...
					redirect('homecnt','refresh');
				}
			$data['emyerdata']=$this->postmodel->viewupdatelee($id);
			$this->load->view('backadm');
			$this->load->view('linkstyles');
			$this->load->view('employerdata', $data);
			
		}
			public function viewyerdata($id= NULL)
		{
			if (!$this->session->userdata('logged_in')) {
					# code...
					redirect('homecnt','refresh');
				}
			$data['emyerdata']=$this->postmodel->viewupdatelee($id);
			$this->load->view('backwithsearch');
			$this->load->view('linkstyles');
			$this->load->view('employer', $data);
			
		}
		public function viewyee($id= NULL)
		{
			if (!$this->session->userdata('logged_in')) {
					# code...
					redirect('homecnt','refresh');
				}
			$data['emyeedata']=$this->postmodel->viewlee($id);
			$this->load->view('backwithsearch');
			$this->load->view('linkstyles');
			$this->load->view('profile.php', $data);
			
		}
		public function createemployee()
		{
			# code...
			if (!$this->session->userdata('logged_in')) {
					# code...
					redirect('homecnt','refresh');
				}
			$this->load->view('linkstyles');
			$this->load->view('backadm');
			$this->load->view('signup');
		}
		public function createemployer()
		{
			# code...
			if (!$this->session->userdata('logged_in')) {
					# code...
					redirect('homecnt','refresh');
				}
			$this->load->view('linkstyles');
			$this->load->view('backadm');
			$this->load->view('signupemployer');
		}

		public function search()
		{
			# code...
			$this->form_validation->set_rules('location', 'Location', 'required');
			$this->form_validation->set_rules('skill', 'Skill', 'required');

			if ($this->form_validation->run() ==FALSE) {
				# code...
				redirect('enter/employerhome','refresh');
			} else {
				# code...
				$result['search']=$this->postmodel->search();
				if (!$result['search']) {
				$this->load->view('linkstyles');
				$this->load->view('backwithsearch');
				show_404();
				}else{
				
				$this->load->view('linkstyles');
				$this->load->view('backwithsearch');
				$this->load->view('searchresults', $result);
				}

			}
		}
		
	}

 ?>