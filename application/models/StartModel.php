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
	}
?>