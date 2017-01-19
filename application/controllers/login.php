<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if($this->user_m->loggedin() == TRUE)
		{
			redirect(site_url('admin/dashboard'));
		}

		$rules = $this->user_m->rules;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run())
		{
			if($this->user_m->login() === true)
			{
				redirect(site_url('admin/dashboard'));
			}
			else
			{
				$this->data['message'] = 'Logowanie niepomyślne';
				$this->load->view('login', $this->data);
			}
		}
		else
		{
			$this->load->view('login', $this->data);
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */