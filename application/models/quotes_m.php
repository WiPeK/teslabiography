<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quotes_m extends MY_Model {

	public $rules = array(
		'quote' => array(
			'field' => 'quote', 
			'label' => 'Cytat', 
			'rules' => 'trim|required|xss_clean'
		), 
	);

	public function __construct()
	{
		parent::__construct();	
	}

	public function save_citat()
	{
		$data = array(
			'quote' => $this->input->post('quote')
		);
		$this->db->insert('quotes',$data);
	}

	public function get_quotes()
	{
		$query = $this->db->query("SELECT * FROM quotes");
		return $query->result();
	}

	public function delete_quote($id)
	{
		$query = $this->db->query("DELETE FROM quotes WHERE id= '$id' ");
	}

}

/* End of file quotes_m.php */
/* Location: ./application/models/quotes_m.php */