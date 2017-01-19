<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$cacheTIMELINE = 'cacheTIMELINE';
		if(!$this->data['life_event'] = $this->cache->get($cacheTIMELINE))
		{
			$this->data['life_event'] = $this->news_m->get_to_home_biog();
			$this->cache->save($cacheTIMELINE, $this->data['life_event'],3600);
		}

		$cacheTIMELINEWYN = 'cacheTIMELINEWYN';
		if(!$this->data['life_event_wyn'] = $this->cache->get($cacheTIMELINEWYN))
		{
			$this->data['life_event_wyn'] = $this->news_m->get_to_home_wyn();
			$this->cache->save($cacheTIMELINEWYN, $this->data['life_event_wyn'],3600);
		}

		$this->load->view('home_layout', $this->data);
	}

	public function about()
	{

	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */