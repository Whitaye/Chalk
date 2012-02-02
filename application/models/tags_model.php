<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tags_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_post_tags_from_name($post_name)
	{
	    return;
	}
    
    public function get_all_tags()
    {
        $query = $this->db->query('SELECT name, slug
        						   FROM tags
        						   ORDER BY name ASC');
        $tags = array();
        foreach ($query->result() as $row)
        {
            $tags[] = array('name' => $row->name,
                            'slug' => $row->slug);
        }
        
        return $tags;
    }
}

/* End of file tags_model.php */
/* Location: ./application/models/tags_model.php */