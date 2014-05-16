<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Related extends CI_Controller {

	public function index()
	{

		$data = array(
 
		    'title' => 'Related Links',
		    'css' => ['/assets/stylesheets/related.css'],
		    'js' => [],
 			'tab' => 'related'
		     
		);
		 
		$this->load->library('template');
		$this->template->load('default', 'related', $data);
	}
}