<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('StartModel','',TRUE);
		$this->load->model('PageModel','',TRUE);
	}
		
	public function index()
	{
		$layout = $this->StartModel->getLayout();
		$this->page($layout->firstpage);
	}
	public function page($page)
	{
		
		$layout = $this->StartModel->getLayout();
		$data['top_nav']=$this->StartModel->getTopNav();
		$data['layout']=$layout;
		$data['page']=$this->PageModel->getPage($page);
		$this->session->set_userdata('active_page',$page);// I think I am gonna need what is the current active page
		$this->load->vars($data);
		$this->load->view('start/index');
	}
}