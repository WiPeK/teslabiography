<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Frontend Controller
*
* @package		WiPeK TeslaCMS
* @author 		Krzysztof Adamczyk - WiPeK wipekxxx@gmail.com
* @copyright	Krzysztof Adamczyk 2015
* @version 		Version 1.0
*/

class Frontend_Controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		//load libraries
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->library('user_agent');
		$this->load->driver('cache', array('adapter' => 'file'));
		
		//load helpers
		$this->load->helper('cms_helper');
		$this->load->helper('text');
		$this->load->helper('form');

		//load models
		$this->load->model('page_config_m');
		$this->load->model('user_statistic_m');
		$this->load->model('user_m');
		$this->load->model('news_m');

		// get all cms configuration
		$cacheCMSCFG = 'cacheCMSCFG';
		if (!$this->data['cmscfg'] = $this->cache->get($cacheCMSCFG)) {
			$this->data['cmscfg'] = $this->page_config_m->get_cmsconfig();
			$this->cache->save($cacheCMSCFG, $this->data['cmscfg'],3600);
		}

		$cacheQUOTES = 'cacheQUOTES';
		if (!$this->data['quotes_rand'] = $this->cache->get($cacheQUOTES)) {
			$this->data['quotes_rand'] = $this->page_config_m->get_quotes();
			$this->cache->save($cacheQUOTES, $this->data['quotes_rand'],3600);
		}

		//set 
		$this->data['site_name'] = $this->data['cmscfg']->name;

		//save user browser and operating system
		$this->get_user_agent();
	}

	public function index()
	{
		
	}

	public function get_user_agent()
	{
		//if user use mobile platform
		if($this->agent->is_mobile())
		{
			$data_platform = $this->agent->platform();
			$data_browser = 'Mobile Browser';
			$this->user_statistic_m->user_platform($data_platform);
			$this->user_statistic_m->user_browser($data_browser);
		}
		//if user is robot
		elseif($this->agent->is_robot())
		{
			$data_robot = $this->agent->robot();
			$this->user_statistic_m->robot_visit($data_robot);
		}
		//if user use normal browser and system
		elseif($this->agent->is_browser())
		{
			$data_browser = $this->agent->browser();
			$data_platform = $this->agent->platform();
			$this->user_statistic_m->user_platform($data_platform);
			$this->user_statistic_m->user_browser($data_browser);
		}
	}

}

/* End of file Frontend_Controller.php */
/* Location: ./application/controllers/Frontend_Controller.php */