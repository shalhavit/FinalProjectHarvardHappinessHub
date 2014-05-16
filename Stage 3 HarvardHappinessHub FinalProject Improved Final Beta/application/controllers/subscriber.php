<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subscriber extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('url');
		$this->load->database();

		if(!empty($_POST))
		{

			$this->db->like('email', $_POST["email"]);
			$this->db->from('subscribers');
			if($this->db->count_all_results() <= 0)
			{
				$today = date('Y-m-d H:m:s');
				$data = array(
	               'email' => $_POST["email"],
	               'subscribedon' => $today,
	               'count' => 1,
	               'status' => 1
	            );

				$this->db->insert('subscribers', $data); 	
			}
			else
			{
				$this->db->select('count');
				$this->db->like('email', $_POST["email"]);
				$query = $this->db->get('subscribers');
				$row = $query->row(0);

				$data = array(
					'count' => ($row->count)+1
				);

				$this->db->where('email', $_POST["email"]);
				$this->db->update('subscribers', $data); 
			}

			

			$data = array(
 				'title' => 'Subscription Successful',
 				'css' => ['/assets/stylesheets/subscribe.css'],
 				'js' => [],
 				'tab' => 'subscribe'
			);

			$this->load->library('template');
			$this->template->load('default', 'subscribe', $data);
			
		}
		else
			redirect("/welcome");

	}
}