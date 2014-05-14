<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Explore extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$this->db->select('title, link, status, week');
		$this->db->from('videos');
		$this->db->where('week', 4); 
		$this->db->order_by("status", "desc"); 
		$week4 = $this->db->get();
		

		$this->load->database();
		$this->db->select('title, link, status, week');
		$this->db->from('videos');
		$this->db->where('week', 3); 
		$this->db->order_by("status", "desc"); 
		$week3 = $this->db->get();

		$this->load->database();
		$this->db->select('title, link, status, week');
		$this->db->from('videos');
		$this->db->where('week', 2); 
		$this->db->order_by("status", "desc"); 
		$week2 = $this->db->get();

		$this->load->database();
		$this->db->select('title, link, status, week');
		$this->db->from('videos');
		$this->db->where('week', 1); 
		$this->db->order_by("status", "desc"); 
		$week1 = $this->db->get();


		$data = array(
 
		    'title' => 'Explore',
		    'css' => ['/assets/stylesheets/explore.css'],
		    'js' => [],
 			'tab' => 'explore',
 			'week' => [$week4, $week3, $week2, $week1]
		     
		);
		 
		$this->load->library('template');
		$this->template->load('default', 'explore', $data);
	}
}