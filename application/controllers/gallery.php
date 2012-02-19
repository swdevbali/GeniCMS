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
		$data['galleryList']=$this->StartModel->getGalleryList();
		$this->load->vars($data);
		$data['content']=$this->load->view('gallery/gallery','',true);
		$data['title']='Gallery';
		$this->load->vars($data);
		$this->session->set_userdata('active_page',$page);// I think I am gonna need what is the current active page
		$viewPath = $layout->theme.'/start/index';
		$this->load->view($viewPath);
	}
	
	function openUploadForm($idgallery)
	{
		$galleryCat="";
		if($idgallery!=-1)
		{
		}
		$data['galleryCatList']=$this->StartModel->getGalleryCatList();
		$data['galleryCat']=$galleryCat;
		$this->load->view('gallery/upload_form',$data);
	}
	
	public function doUpload()
	{
		$this->load->library('image_lib');
		$config['upload_path'] = './upload_img/gallery';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
		
		}
		else
		{
			$upload = array('upload_data' => $this->upload->data());
			$data=array('idgallery_cat'=>$this->input->post('cboGalleryCat'),
						'filename'=>$upload['upload_data']['file_name'],
						'title'=>$this->input->post('title'),
						'description'=>$this->input->post('description')
						);
						$config['image_library'] = 'gd2';

						$config['source_image']	= './upload_img/gallery/'.$upload['upload_data']['file_name'];
						$config['create_thumb'] = TRUE;
						$config['maintain_ratio'] = TRUE;
						$config['width']	 = 75;
						$config['height']	= 50;
						
						$this->load->library('image_lib', $config); 
						$this->image_lib->resize();
			$this->StartModel->saveGallery($data);
		}
	
		redirect('gallery');
	}
	
	public function pop($idgallery)
	{
		$gallery = $this->StartModel->getGallery($idgallery);
		$data['gallery']=$gallery;
		$this->load->view('gallery\pop',$data);
		
	}
}