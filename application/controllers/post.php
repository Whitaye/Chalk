<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        
        // Load models
        $this->load->model('Posts_model');
        $this->load->model('Tags_model');
    }
	
	public function index($post_name)
	{
		$data['page_title'] = 'blog post';
		$data['tags'] = $this->Tags_model->get_all_tags();
		
		$data['post'] = $this->Posts_model->get_post_from_name($post_name);
		if(!$data['post'])
			die('404');
		
		$this->load->view('header', $data);
		$this->load->view('post', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('footer');
	}
}

/* End of file post.php */
/* Location: ./application/controllers/post.php */