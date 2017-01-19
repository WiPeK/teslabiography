<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_m extends MY_Model {

	public $rules = array(
		'login' => array(
			'field' => 'login',
			'label' => 'Login',
			'rules' => 'trim|xss_clean|required|min_length[4]|max_length[20]|alpha_numeric'
		),
		'password' => array(
			'field' => 'password',
			'label' => 'Hasło',
			'rules' => 'trim|xss_clean|required|min_length[4]|max_length[20]|alpha_numeric'
		),
	);

	public function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
		$login = $this->input->post('login');
		$password = md5($this->input->post('password'));

		$query = $this->db->query("SELECT * FROM admin WHERE login = '$login' AND password = '$password'");

		if($query->num_rows() == 1)
		{
			$data = array(
				'login' => $query->row('login'),
				'loggedin' => TRUE,
			);

			$this->session->set_userdata($data);
			return true;
		}
		else
		{
			return false;
		}
	}

	public function loggedin()
	{
		return (bool) $this->session->userdata('loggedin');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url());
	}

	public function get_user_data()
	{
		$login = $this->session->userdata('login');
		$query = $this->db->query("SELECT * FROM admin WHERE login='$login'");
		return $query->result();
	}

}

/* End of file user_m.php */
/* Location: ./application/models/user_m.php */