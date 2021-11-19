<?php
defined('BASEPATH') Or exit('No direct script access allowed');

class admin extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Barang_model');
		$this->load->library('form_validation');
		//$this->load->helper('url');
		//$this->load->library('input');
			if($this->session->userdata('logged_in')){
			$session_data =$this->session->userdata('logged_in');
			$data['username']=$session_data['username'];
		}else{
			redirect('login','refresh');
		}
	}
	
	public function index(){
			$session_data =$this->session->userdata('logged_in');
				$nama['username']=$session_data['username'];
		$data['biodata_array']=$this->Barang_model->getinventory();

		$this->load->view('admin/inventory', $data, FALSE);}
		// $this->load->view('b/index', $data, FALSE);}
	public function toko(){
		// $this->load->helper('url','form');
		// $this->load->library('form_validation');
		// $this->load->model('Barang_model');
		$data['wisata_array']=$this->wisata->getWisataQueryArray();

		$this->load->view('barang/tampil_toko',$data);
	}
	public function Create(){
		//load model
		$this->load->model('Barang_model');

		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/tambah_inventory_view');
			// $this->load->view('b/tambahinventory');
		}
		else{
			$this->Barang_model->insertBarang();
			$this->load->view('admin/tambah_inventory_sukses');
		}
	}

	public function Buy($id){
		//load model
		$this->load->model('Barang_model');
		$data['barang']=$this->Barang_model->getinventorybyid($id);
			$this->load->view('admin/buy_inventory_view',$data);
		
	}

	public function Buyproses($id){
		$this->Barang_model->Buyinventory($id);
		$data['barang']=$this->Barang_model->getinventorybyid($id);
		$data['jumlah']=$this->input->post('beli');
		$this->load->view('admin/buy_inventory_sukses',$data);
	}

	public function Sell($id){
		//load model
		$this->load->model('Barang_model');
		$data['barang']=$this->Barang_model->getinventorybyid($id);
			$this->load->view('admin/sell_inventory_view',$data);
		
	}

	public function Sellproses($id){
		$this->Barang_model->Sellinventory($id);
		$data['barang']=$this->Barang_model->getinventorybyid($id);
		$data['jumlah']=$this->input->post('beli');
		$this->load->view('admin/sell_inventory_sukses',$data);
	}

	public function Update($id){
		
		$this->load->model('Barang_model');
		$data['barang']=$this->Barang_model->getinventorybyid($id);
			$this->load->view('admin/edit_inventory_view',$data);
		
	}
	public function Updateproses($id){
		
			$this->Barang_model->Updateinventory($id);
			$this->load->view('admin/edit_inventory_sukses');
	}
	public function delete($id){
		$this->Barang_model->delete($id);
		$this->load->view('admin/hapus_inventory_sukses');		

	}
	public function datatable(){
		$data['biodata_array']=$this->Barang_model->getBiodataQueryArray();

		$this->load->view('barang/barang_datatable',$data);
	}
	
	
	public function datatable_ajax(){
		$this->load->view('barang/barang_datatable_ajax');
	}
	public function data_server(){
		$this->load->library('Datatables');
		$this->datatables
		->select('id,Nama,Nip,Tanggal,Alamat,foto')
		->from('barang');
		echo $this->datatables->generate();
	}
}
