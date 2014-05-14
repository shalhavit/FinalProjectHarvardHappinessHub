<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{

		$data = array(
 
		    'title' => 'Search Results',
		    'css' => ['/assets/stylesheets/subscribe.css'],
		    'js' => [],
 			'tab' => 'search'
		     
		);
		 
		$this->load->library('template');
		$this->template->load('default', 'underconstruction', $data);
	}
}