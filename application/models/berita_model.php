<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class berita_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
	function tampil_berita()
	{
		$q = $this->db->query("select * from berita");
		return $q;
	}
	function detail_berita($id)
	{
		$q = $this->db->query("select * from berita where id_berita=$id");
		return $q;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
