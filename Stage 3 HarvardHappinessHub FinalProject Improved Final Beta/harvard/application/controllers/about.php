<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{

		$data = array(
 
		    'title' => 'About',
		    'css' => ['/assets/stylesheets/about.css'],
		    'js' => [],
 			'tab' => 'about'
		     
		);
		 
		$this->load->library('template');
		$this->template->load('default', 'about', $data);
	}
}