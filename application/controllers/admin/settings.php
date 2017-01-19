<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['cmsconfig'] = $this->page_config_m->get_new_cmsconfig();
		$data['name'] = $this->data['cmsconfig']->name;
		$this->data['subview'] = 'admin/settings/index';

		$this->load->view('admin/include/header', $this->data);
		$this->load->view('admin/admin_layout', $this->data);
		$this->load->view('admin/include/footer', $this->data);	
	}

	public function cmsname()
	{
		$rules = $this->page_config_m->rules_cmsconfig;
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE && $this->session->userdata('mods') === 'admin') {
			
			$cmsname = $this->input->post('name');
			$this->page_config_m->update_cms_name($cmsname);

			$this->cache->clean();
			redirect('admin/settings');
		}
	}

	public function upload_icon()
	{
		if($this->input->post('upload'))
		{	
			unlink(realpath(APPPATH . '../public_html/assets/images/favicon.ico'));
			$this->gallery_path = realpath(APPPATH . '../public_html/assets/images/');

			$config = array(
				'upload_path' => $this->gallery_path,
				'allowed_types' => 'ico',
				'remove_spaces' => true,
				'overwrite' => true,
				'quality' => '100',
				'max_width' => '16',
				'max_heigth' => '16',
			);
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload())
			{	
				$this->data['error'] = 'There was a problem with your upload!';
				$this->data['subview'] = 'admin/settings/index';

				$this->load->view('admin/include/header', $this->data);
				$this->load->view('admin/admin_layout', $this->data);
				$this->load->view('admin/include/footer', $this->data);	
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$file = $data['upload_data']['file_name'];

				rename($this->gallery_path . '/' . $file , $this->gallery_path. '/' .'favicon.ico');

				$this->data = array(
					'favicon_url' => $this->gallery_path . '/' . 'favicon.ico',
				);

				$this->cache->clean();
				redirect('admin/settings');
			}
		}
	}

	public function upload_logo()
	{
		if($this->input->post('upload'))
		{	
			//unlink(realpath(APPPATH . '../ci/images/') . '/favicon.ico');
			$this->logo_path = realpath(APPPATH . '../public_html/assets/logo/');

			$config = array(
				'upload_path' => $this->logo_path,
				'allowed_types' => 'jpg|jpeg|gif|png',
				'remove_spaces' => true,
				'overwrite' => true,
				'quality' => '100',
				'max_size' => 3000,
			);
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload())
			{	
				$this->data['error'] = 'There was a problem with your upload!';
				$this->data['subview'] = 'admin/settings/index';

				$this->load->view('admin/include/header', $this->data);
				$this->load->view('admin/admin_layout', $this->data);
				$this->load->view('admin/include/footer', $this->data);	
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$file = $data['upload_data']['file_name'];

				$this->data = array(
					'logo_url' => 'assets/logo/' . $file,
				);

				//save img data to db
				$this->page_config_m->save_logo($this->data);

				$this->cache->clean();
				redirect('admin/settings');
			}
		}
	}

	public function facebook_link()
	{
		$rules = $this->page_config_m->rules_fb;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() === true)
		{
			$this->page_config_m->update_fblink($this->input->post('fb_link'));
		
			$this->cache->clean();
			redirect('admin/settings');
		}
		else
		{
			redirect(site_url() . 'admin/settings');
		}
	}

	public function about_service()
	{
		$rules = $this->page_config_m->rules_about;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() === true)
		{
			$this->page_config_m->update_about($this->input->post('about_service'));

			$this->cache->clean();
			redirect(site_url('admin/settings'));
		}
		else
		{
			redirect(site_url() . 'admin/settings');
		}
	}

	public function description()
	{
		$rules = $this->page_config_m->rules_description;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() === true)
		{
			$this->page_config_m->update_description($this->input->post('description'));

			$this->cache->clean();
			redirect('admin/settings');
		}
		else
		{
			redirect(site_url() . 'admin/settings');
		}
	}

	public function keywords()
	{
		$rules = $this->page_config_m->rules_keywords;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() === true)
		{
			$this->page_config_m->update_keywords($this->input->post('keywords'));

			$this->cache->clean();
			redirect('admin/settings');
		}
		else
		{
			redirect(site_url() . 'admin/settings');
		}
	}

}

/* End of file settings.php */
/* Location: ./application/controllers/settings.php */