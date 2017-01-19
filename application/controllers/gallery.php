<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('gallery_m');
	}

	public function index()
	{
		$cacheGIMAGES = 'cacheGIMAGES';
		if(!$this->data['images'] = $this->cache->get($cacheGIMAGES))
		{
			//fetch images to gallery
			$this->data['images'] = $this->gallery_m->get_images_url();
			$this->cache->save($cacheGIMAGES, $this->data['images'],3600);
		}

		$this->data['gallery_page'] = true;
		$this->load->view('gallery_layout', $this->data);
	}

}

/* End of file gallery.php */
/* Location: ./application/controllers/gallery.php */