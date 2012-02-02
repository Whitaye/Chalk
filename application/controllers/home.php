<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        
        // Load models
        $this->load->model('Posts_model');
        $this->load->model('Tags_model');
    }

	public function index()
	{
		$data['posts'] = $this->Posts_model->get_latest_posts();
		$data['tags'] = $this->Tags_model->get_all_tags();
		$data['page_title'] = 'Chris White Blog';
		
		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('footer');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */