<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('StartModel','',TRUE);
		$this->load->model('PageModel','',TRUE);
		
	}
		
	public function index()
	{
		$page='gallery';
		$layout = $this->StartModel->getLayout();
		$data['top_nav']=$this->StartModel->getTopNav();
		$data['layout']=$layout;
		
		$data['cboTheme']=$this->StartModel->getListOfThemes();
		$data['content']='<p align="center"><img src="'.base_url().'upload_img/under.png"/></p>';
		$data['title']='Gallery';
		$this->session->set_userdata('active_page',$page);// I think I am gonna need what is the current active page
		$this->load->vars($data);
		$viewPath = $layout->theme.'/start/index';
		$this->load->view($viewPath);
	}
	
}