<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_m extends MY_Model {

	protected $_table_name = 'articles';
	protected $_order_by = 'pubdate desc, id desc';
	protected $_timestamps = TRUE;

	public function __construct()
	{
		parent::__construct();	
	}

	public $rules = array(
		'pubdate' => array(
			'field' => 'pubdate', 
			'label' => 'Publication date', 
			'rules' => 'trim|required|xss_clean'
		), 
		'title' => array(
			'field' => 'title', 
			'label' => 'Title', 
			'rules' => 'trim|required|max_length[100]|xss_clean'
		), 
		'body' => array(
			'field' => 'body', 
			'label' => 'Body', 
			'rules' => 'trim|required'
		),
		'parent_page' => array(
			'field' => 'parent_page', 
			'label' => 'Strona artykułu', 
			'rules' => 'trim|max_length[100]|xss_clean'
		),
		'event_year' => array(
			'field' => 'event_year', 
			'label' => 'Rok wydarzenia', 
			'rules' => 'trim|exact_length[4]|xss_clean|integer'
		),
	);

	public function get_news()
	{
		$query = $this->db->query("SELECT * FROM articles ORDER BY pubdate DESC LIMIT 5");
		return $query->result();
	}

	public function get_new ()
	{
		$article = new stdClass();
		$article->id = '';
		$article->created = date('Y-m-d H:i:s');
		$article->modified = '0000-00-00 00:00:00';
		$article->created_by = $this->session->userdata('login');
		$article->modified_by = '';
		$article->title = '';
		$article->body = '<img alt="" src="http://localhost/tesla/public_html/assets/images/biografia/dead.jpg" style="margin-right: 10px; float: left; width: 300px; height: 294px;" />
							Nikola Tesla zmarł 7 stycznia 1943 r. o 22:30 w prawosławne Boże Narodzenie<br />
							w apartamencie nr 3327 hotelu New Yorker w Nowym Jorku. Przyczyną śmierci był<br />
							zakrzep tętnicy wieńcowej. Jego zwłoki zostały znalezione przez służącą Alice Monaghan,<br />
							kt&oacute;ra weszła do pokoju naukowca, ignorując wywieszkę na drzwiach m&oacute;wiącą &quot;proszę nie przeszkadzać&quot;,<br />
							powieszoną przez Teslę dwa dni przed śmiercią.
							';
		$article->views = '';
		$article->logo = "0";
		$article->event_year = '0000';
		$article->pubdate = date('Y-m-d H:i:s');
		return $article;
	}

	public function update_article($data, $id)
	{
		$dataAr = array(
			'title' => $data['title'],
			'body' => $data['body'],
			'pubdate' => $data['pubdate'],
			'parent_page' => $data['parent_page'],
			'event_year' => $data['event_year'],
			'logo' => $data['logo'],
			'modified_by' => $this->session->userdata('login'),
			'modified' => date('Y-m-d H:i:s'),
		);

		$this->db->where('id', $id);
		$this->db->update('articles', $dataAr);
	}

	public function add_article($data)
	{
		$dataAr = array(
			'title' => $data['title'],
			'body' => $data['body'],
			'pubdate' => $data['pubdate'],
			'parent_page' => $data['parent_page'],
			'event_year' => $data['event_year'],
			'logo' => $data['logo'],
			'created_by' => $this->session->userdata('login'),	
			'created' => date('Y-m-d H:i:s'),
		);

		$this->db->insert('articles', $dataAr);
	}

	public function set_published(){
		$this->db->where('pubdate <=', date('Y-m-d H:i:s'));
	}
	
	public function get_recent($limit = 3){
		
		// Fetch a limited number of recent articles
		$limit = (int) $limit;
		$this->set_published();
		$this->db->limit($limit);
		return parent::get();
	}

	public function add_views($id)
	{
		$this->db->query("UPDATE articles SET views=views+1 WHERE id='$id'");
		if($this->db->affected_rows() === 1)
		{
			return true;
		}
		else
			return false;
	}

	public function get_new_news_id($title)
	{
		$query = $this->db->query("SELECT id FROM articles WHERE title='$title'");
		return $query->row('id');
	}

	public function get_logo_url($id)
	{
		$query = $this->db->query("SELECT logo FROM articles WHERE id='$id'");
		return $query->row('logo');
	}

	public function delete_logo($id)
	{
		$query = $this->db->query("UPDATE articles SET logo = '0' WHERE id = '$id'");
	}

	public function get_to_home_biog()
	{
		$query = $this->db->query("SELECT * FROM articles WHERE parent_page = 'biografia' ORDER BY event_year ASC");
		return $query->result();
	}

	public function get_to_home_wyn()
	{
		$query = $this->db->query("SELECT * FROM articles WHERE parent_page = 'wynalazki' ORDER BY event_year ASC");
		return $query->result();
	}

	public function get_news_to_page($page)
	{
		$query = $this->db->query("SELECT * FROM articles WHERE parent_page = '$page'");
		return $query->result();
	}

}

/* End of file news_m.php */
/* Location: ./application/models/news_m.php */