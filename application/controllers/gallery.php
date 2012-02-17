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
		$data['content']=$this->load->view('gallery\gallery','',true);
		$data['title']='Gallery';
		$this->session->set_userdata('active_page',$page);// I think I am gonna need what is the current active page
		$this->load->vars($data);
		$viewPath = $layout->theme.'/start/index';
		$this->load->view($viewPath);
	}
	
	function openUploadForm()
	{
		$this->load->view('gallery\upload_form');
	}
	
}