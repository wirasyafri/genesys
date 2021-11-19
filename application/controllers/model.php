<?php
defined('BASEPATH') Or exit('No direct script access allowed');

class model extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->helper('url');
		//$this->load->library('input');
	}
	public function index(){
		$this->load->model('Biodata');
		$data['biodata_array']=$this->Biodata->getBiodataQueryArray();
		$data['biodata_object']=$this->Biodata->getBiodataQueryObject();
		//query builder
		$data['biodata_builder_array']=$this->Biodata->getBiodataBuilderArray();
		$data['biodata_builder_object']=$this->Biodata->getBiodataBuilderObject();
		$this->load->view('latihanmodel/home', $data);
	}
	public function ktm(){
		$this->load->model('ktm');
		$data['ktm_array']=$this->ktm->getktmQueryArray();
		$this->load->view('latihanmodel/homektm', $data);
	}
	// public function contact(){
	// 	$this->load->view('contact');
	// }
}

