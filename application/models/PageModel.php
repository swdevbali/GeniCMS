<?
	class PageModel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function getPage($title)
		{
			$this->db->where('title',$title);
			$query = $this->db->get('page');
			return $query->row();
		}
	}
?>