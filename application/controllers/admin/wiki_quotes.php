<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wiki_quotes extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$rules = $this->quotes_m->rules;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() === true)
		{
			$this->quotes_m->save_citat();
			redirect(site_url('admin/wiki_quotes'));
		}
		else
		{
			//pobierz cytaty
			$this->data['quotes'] = $this->quotes_m->get_quotes();

			$this->data['subview'] = 'admin/quotes/index';
			$this->load->view('admin/include/header', $this->data);
			$this->load->view('admin/admin_layout', $this->data);
			$this->load->view('admin/include/footer', $this->data);
		}	
	}

	public function delete_quote($id)
	{
		$this->quotes_m->delete_quote($id);
		redirect(site_url('admin/wiki_quotes'));
	}

}

/* End of file wiki_quotes.php */
/* Location: ./application/controllers/wiki_quotes.php */