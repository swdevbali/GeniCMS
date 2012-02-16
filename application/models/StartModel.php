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
	}
?>