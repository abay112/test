<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_pr extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->database();
	}

	public function index()
	{
		$data['title']= 'Purchasing';
		$data['sub_title'] = 'Purchase Request';
		$data['icon'] = 'fa fa-dashboard';
		$this->template->display('v_pr',$data);	
	}

}

/* End of file C_pr.php */
/* Location: ./application/controllers/C_pr.php */
?>