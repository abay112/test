<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_part extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->model('m_part');
		$this->load->database();
	}

	public function index()
	{
		$data['title']= 'Master Data';
		$data['sub_title'] = 'Rotable Part';
		$data['icon'] = 'fa fa-laptop';
		$data['data_parts'] = $this->m_part->getDataAll()->result();
		$this->template->display('v_part',$data);
	}



}

/* End of file C_part.php */
/* Location: ./application/controllers/C_part.php */
?>