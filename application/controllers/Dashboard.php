<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{
		$this->load->view('includes/header');
	 	$this->load->view('includes/sidebar');
		$this->load->view('home');
		$this->load->view('includes/footer'); 
	}
		public function login()
		{
		/*	$this->load->view('login');*/
		}
}
