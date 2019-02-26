<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_part extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getDataAll()
	{
		$qw = "SELECT * FROM rotable_parts";
		$hasil = $this->db->query($qw);
		return $hasil;
	}

}

/* End of file m_part.php */
/* Location: ./application/models/m_part.php */
?>