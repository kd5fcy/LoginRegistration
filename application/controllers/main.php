<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		date_default_timezone_set('America/Los_Angeles');
		parent::__construct();
		//$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		//if registration:

		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');		
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('confirm', 'Password Confirmation', 'required|matches[password]');
		//if login:

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('index');
		}
		else
		{
			$data = array(
		   'first_name' => $this->input->post('first_name') ,
		   'last_name' => $this->input->post('last_name') ,
		   'email' => $this->input->post('email') ,
		   'password' => $this->input->post('password') ,
		   'created_at' => date('Y-m-d h:i:s')
			);
			$this->db->insert('users', $data);
			//add success message and redirect to index... then login to display data.
		}
	}
	public function login()
	{
		$query = "SELECT * FROM users WHERE email = '" . $this->input->post('email') . "'";
			$user = $this->db->query($query);
			foreach ($user->result() as $row)
			{
			   $first_name = $row->first_name;
			   $last_name = $row->last_name;
			   $email = $row->email;
			   $password = $this->input->post('password');
			   $created_at = $row->created_at;
			}
			//echo $query;
			//var_dump($user->result());
			$this->load->view('welcome', array('first_name' => $first_name, 'last_name' => $last_name, 'email' => $email, 'password' => $password, 'created_at' => $created_at));
	}
	public function register()
	{

	}
	public function logoff()
	{
		//var_dump($this->session->all_userdata());
		$this->session->unset_userdata('session_id');
		$this->load->view('index');
	}
	public function reset()
	{
		// $this->session->unset_userdata('counter','');
		// $this->session->unset_userdata('data','');
		redirect('/');
	}
}


//Use flashdata to send errors back to login page
