<?php
defined('BASEPATH') Or exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('input');
	}
	public function index(){
		$this->load->view('home');
	}
	public function about(){
		$this->load->view('about');
	}
	public function contact(){
		$this->load->view('contact');
	}
}
