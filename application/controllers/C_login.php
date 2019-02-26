<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data = NULL;
		$this->load->view('v_login', $data);
	}

}

/* End of file C_login.php */
/* Location: ./application/controllers/C_login.php */
?>