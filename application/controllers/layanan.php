<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layanan extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('StartModel','',TRUE);
		$this->load->model('PageModel','',TRUE);
		
	}
		
	public function index()
	{
				$page='layanan';
		$layout = $this->StartModel->getLayout();
		$data['top_nav']=$this->StartModel->getTopNav();
		$data['layout']=$layout;
		
		$data['cboTheme']=$this->StartModel->getListOfThemes();
		$data['galleryList']=$this->StartModel->getGalleryList();
		$this->load->vars($data);
		$data['content']=$this->load->view('layanan/layanan','',true);
		$data['title']='Layanan perancangan, pembuatan dan perawatan taman dan kolam ikan';
		$this->load->vars($data);
		$this->session->set_userdata('active_page',$page);// I think I am gonna need what is the current active page
		$viewPath = $layout->theme.'/start/index';
		$this->load->view($viewPath);
	}


}