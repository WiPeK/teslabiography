<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//count all articles
		$count = $this->db->count_all_results('articles');

		//pagination
		$perpage = 10;
		if($count > $perpage)
		{
			$this->load->library('pagination');
			$config['base_url'] = site_url($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/');
			$config['total_rows'] = $count;
			$config['per_page'] = $perpage;
			$config['uri_segment'] = 3;
			$this->pagination->initialize($config);
			$this->data['pagination'] = $this->pagination->create_links();
			$offset = $this->uri->segment(3);
		}
		else
		{
			$this->data['pagination'] = '';
			$offset = 0;
		}
		// Fetch all articles
		$this->db->limit($perpage, $offset);
		$this->data['articles'] = $this->news_m->get();

		$this->data['subview'] = 'admin/news/index';
		$this->load->view('admin/include/header', $this->data);
		$this->load->view('admin/admin_layout', $this->data);
		$this->load->view('admin/include/footer', $this->data);		
	}

	public function edit($id = NULL)
	{
		if ($id) {
			$this->data['article'] = $this->news_m->get($id);			
			count($this->data['article']) || $this->data['errors'][] = 'news could not be found';
		}
		else {
			$this->data['article'] = $this->news_m->get_new();
		}

		$rules = $this->news_m->rules;
		$this->form_validation->set_rules($rules);

		if($this->input->post('submit'))
		{
			$config = array(
				'upload_path' => realpath(APPPATH . '../public_html/assets/articles_logos/'),
				'allowed_types' => 'jpg|jpeg|gif|png',
				'max_size' => 3000,
				'remove_spaces' => true,
				'overwrite' => true,
				'quality' => '100',
				'file_name' => md5(str_replace(' ','',$this->input->post('title'))),
			);

			$this->load->library('upload', $config);

			if($this->form_validation->run() == FALSE)
			{
				$this->data['subview'] = 'admin/news/edit';
				$this->load->view('admin/include/header', $this->data);
				$this->load->view('admin/admin_layout', $this->data);
				$this->load->view('admin/include/footer', $this->data);	
			}
			else
			{
				$this->data['title'] = $this->input->post('title');
				$this->data['body'] = $this->input->post('body');
				$this->data['pubdate'] = $this->input->post('pubdate');
				$this->data['parent_page'] = $this->input->post('parent_page');
				$this->data['event_year'] = $this->input->post('event_year');

				if($this->data['article']->logo == "0")
				{
					$this->upload->do_upload('article_logo');
					$data = array('upload_data' => $this->upload->data());
					$imgtitle = md5(str_replace(' ','',$this->input->post('title')));
					$this->data['logo'] = 'assets/articles_logos/' . $imgtitle . $data['upload_data']['file_ext'];
				}
				else
				{
					$this->data['logo'] = $this->data['article']->logo;
				}

				if ($id) {			
					$this->data['modified_by'] = $this->session->userdata('login');
					$this->data['modified'] = date('Y-m-d H:i:s');
				}
				else {
					$this->data['created_by'] = $this->session->userdata('login');	
					$this->data['modified'] = '';	
					$this->data['modified_by'] = '';
				}

				if($id)
				{
					$this->news_m->update_article($this->data, $id);
				}
				else
				{
					$this->news_m->add_article($this->data);
				}

				$this->cache->clean();
				if($id)
				{
					redirect('admin/news/edit/' . $id);
				}
				else
				{
					$idu = $this->news_m->get_new_news_id($this->data['title']);
					redirect('admin/news/edit/' . $idu);
				}
			}
		}
		else
		{
			$this->data['subview'] = 'admin/news/edit';
			$this->load->view('admin/include/header', $this->data);
			$this->load->view('admin/admin_layout', $this->data);
			$this->load->view('admin/include/footer', $this->data);	
		}

		
	}

	public function delete($id)
	{
		$logo = $this->news_m->get_logo_url($id);
		
		unlink(realpath(APPPATH . '../public_html/' . $logo));
		$this->news_m->delete($id);

		$this->cache->clean();
		redirect('admin/news');
	}

	public function deletelogo($id)
	{
		$logo = $this->news_m->get_logo_url($id);
		unlink(realpath(APPPATH . '../public_html/' . $logo));
		$this->news_m->delete_logo($id);
		redirect('admin/news/edit/' . $id);
	}

}

/* End of file news.php */
/* Location: ./application/controllers/news.php */