<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Biografia extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['menu_view'] = 'inc/menu_wyn';
		$this->data['menu_top_view'] = 'inc/menu_top_wyn';
		$this->data['page_data'] = $this->news_m->get_news_to_page('biografia');
		$this->load->view('biografia_layout', $this->data);
	}

}

/* End of file biografia.php */
/* Location: ./application/controllers/biografia.php */