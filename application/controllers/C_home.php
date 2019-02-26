<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->database();
	}
	public function index()
	{
		$data['title']= 'Dashboard';
		$data['sub_title'] = 'Dimonim Air';
		$data['icon'] = 'fa fa-dashboard';
		$this->template->display('v_home',$data);	
	}
}

/* End of file C_home.php */
/* Location: ./application/controllers/C_home.php */

?>