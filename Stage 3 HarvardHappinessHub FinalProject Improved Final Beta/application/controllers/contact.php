<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{

		$data = array(
 
		    'title' => 'Contact',
		    'css' => ['/assets/stylesheets/contact.css'],
		    'js' => [],
 			'tab' => 'related'
		     
		);
		 
		$this->load->library('template');
		$this->template->load('default', 'contact', $data);
	}

	public function submit()
	{
		$this->load->helper('url');
		if(!empty($_POST))
		{
			$this->load->library('email');

			$this->email->from($_POST["email"], $_POST["name"]);
			$this->email->to('srkiranraj@gmail.com');
			$this->email->cc('srkiranraj@gmail.com');

			$this->email->subject('HHH - Contact Form');
			$this->email->message($_POST["message"]);

			$this->email->send();

			echo $this->email->print_debugger();

			$data = array(
 				'title' => 'Contact Successful',
 				'css' => ['/assets/stylesheets/subscribe.css'],
 				'js' => [],
 				'tab' => 'subscribe'
			);

			$this->load->library('template');
			$this->template->load('default', 'contact_success', $data);
		}
		else
			redirect("/welcome");
	}
}