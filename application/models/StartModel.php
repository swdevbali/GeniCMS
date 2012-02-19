<?
	class StartModel extends CI_Model {
		function __construct()
		{
			parent::__construct();
		}
		
		function getTopNav()
		{
			$this->db->order_by('ordernum');
			$query = $this->db->get("top_nav");
			return $query->result();			
		}
		
		function getLayout()
		{
			$query = $this->db->get("layout");
			return $query->row();
		}
		
		function getListOfThemes()
		{
			$this->db->select('name as id');
			$this->db->order_by('name');
			$result = $this->db->get('theme');
			
			$row_data=array();
			foreach($result->result_array() as $row)
			{
				  $row_data[$row['id']]=$row['id'];
			}
			return $row_data;
		}
		
		function changeTheme($theme)
		{
			if($theme=="images") return;
			$data = array("theme"=>$theme);
			$this->db->update('layout',$data);
		}
		
		function getGalleryCatList()
		{
			$this->db->select('idgallery_cat as id, category as title');
			$this->db->order_by('category');
			$result = $this->db->get('gallery_cat');
			
			$row_data=array();
			foreach($result->result_array() as $row)
			{
			  $row_data[$row['id']]=$row['title'];
			}
			return $row_data;
		}
		
		function saveGallery($data)
		{
			if(!isset($data['idgallery']))
			{
				$this->db->insert('gallery',$data);
			}else
			{
				$this->db->where('idgallery',$data['idgallery']);
				$this->db->update('gallery',$data);
			}	
		}

		function getGalleryList()
		{
			$this->db->select('*');
			$this->db->order_by('title');
			$result = $this->db->get('gallery');
			$row_data = $result->result();
			$result->free_result();
			return $row_data;
		}
		
		function getGallery($idgallery)
		{
			$this->db->select('*');
			$this->db->where('idgallery',$idgallery);
			$result = $this->db->get('gallery');
			return $result->row();
		}
	
	}
	
	?>