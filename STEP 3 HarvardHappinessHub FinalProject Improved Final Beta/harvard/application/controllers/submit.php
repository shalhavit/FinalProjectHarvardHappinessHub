<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Submit extends CI_Controller {

	public function index()
	{

		$data = array(
 
		    'title' => 'Video Submit',
		    'css' => ['/assets/stylesheets/subscribe.css'],
		    'js' => [],
 			'tab' => 'submit'
		     
		);
		 
		$this->load->library('template');
		$this->template->load('default', 'underconstruction', $data);
	}
}