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
		
		$pageObject=$this->PageModel->getPage($page);
		$data['cboTheme']=$this->StartModel->getListOfThemes();
		$data['content']=$pageObject->content;
		$data['title']=$pageObject->title;
		$this->session->set_userdata('active_page',$page);// I think I am gonna need what is the current active page
		$this->load->vars($data);
		$viewPath = $layout->theme.'/start/index';
		$this->load->view($viewPath);
	}
	
	public function changeTheme($theme)
	{
		$this->StartModel->changeTheme($theme);
		//redirect('start/page/'.$this->session->userdata('active_page'));
		$this->index();
	}
	
	
}