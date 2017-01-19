<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['menu_view'] = 'inc/menu_wyn';
		$this->data['menu_top_view'] = 'inc/menu_top_wyn';
		$this->load->view('about_layout', $this->data);
	}

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */