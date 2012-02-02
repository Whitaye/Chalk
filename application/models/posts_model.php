<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_post_from_name($post_name)
	{
		$query = $this->db->query('SELECT title, clean_title, body, published
        						   FROM posts
        						   WHERE clean_title = ?
        						   LIMIT 1', array($post_name));
        if($query->num_rows() == 0)
	    	return false;
	    	
	    $row = $query->row();
	    $post = array('title' => $row->title,
	    			  'clean_title' => $row->clean_title,
	    			  'body' => $row->body,
	    			  'published' => $row->published);
	    
	    return $post;
	}
    
    public function get_latest_posts()
    {
        $query = $this->db->query('SELECT title, clean_title, body, published
        						   FROM posts
        						   ORDER BY published DESC');
        $posts = array();
        foreach ($query->result() as $row)
        {
            $posts[] = array('title' => $row->title,
                             'clean_title' => $row->clean_title,
                             'body' => $row->body,
                             'published' => $row->published);
        }
        
        return $posts;
    }
    
    public function get_post_tags($post_id)
    {
        $query = $this->db->query('SELECT name, slug
        						   FROM tags
        						   INNER JOIN post_tags on tags.t_id = post_tags.t_id
        						   WHERE post_tags.p_id = ' . $post_id);
        $tags = array();
        foreach ($query->result() as $row)
        {
            $tags[] = array('name' => $row->name,
                            'slug' => $row->slug);
        }
        
        return $tags;
    }
}

/* End of file posts_model.php */
/* Location: ./application/models/posts_model.php */