<?php 
defined('BASEPATH') Or exit ('No direct script access allowed');

class Barang_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertBarang(){
		$object = array (
		'nama' =>$this->input->post('NAMA'),
		'harga' =>$this->input->post('HARGA'),
		'stok' =>$this->input->post('STOK'),
		);
	$this->db->insert('inventory',$object);
	}
	public function getinventory(){
		$query = $this->db->query("SELECT * from inventory ");
		return $query->result_array();
	}
	public function getBiodataQueryArray($nama){
		$query = $this->db->query("SELECT * from user where username ='$nama'");
		return $query->result_array();
	}
	public function getinventorybyid($id){
		$this->db->where('inventory_id',$id);
		$query = $this->db->get('inventory');
		return $query->result();

	}
	public function getharga($nama){
		$query = $this->db->query("SELECT * from inventory where gambar = '$nama'");
		return $query->result_array();
	}
	public function UpdateById($id,$nama,$uang,$hargaa){
	
		// $this->load->view('sasd');
			// echo $uang;
			// foreach ($hargaa as $key) {
			// 	$haha=$key['harga'];
			// }
			// echo $haha;

		$coba='(inventory1 != "")';
	if($this->db->where($coba)){
		$data = array
		(
		
		'inventory2'=>($id));
	}
	else{
		$data = array
		(
		
		'inventory1'=>($id));
		}
echo $nama;
// echo $id;
// echo $data;
		$this->db->where('username',$nama);
		$this->db->update('user',$data);
	}
	public function Updateinventory($id){
		$data = array
		(
		'nama' =>$this->input->post('nama'),
		'harga' =>$this->input->post('harga'),
		'stok' =>$this->input->post('stok'),
		);
		$this->db->where('inventory_id',$id);
		$this->db->update('inventory',$data);
	}

	public function Buyinventory($id){
		$awal=$this->input->post('stok');
		$beli=$this->input->post('beli');
		$total=$awal+$beli;
		$data = array
		(
		'stok' =>$total,
		);
		$this->db->where('inventory_id',$id);
		$this->db->update('inventory',$data);
	}
	public function Sellinventory($id){
		$awal=$this->input->post('stok');
		$beli=$this->input->post('beli');
		$total=$awal-$beli;
		$data = array
		(
		'stok' =>$total,
		);
		$this->db->where('inventory_id',$id);
		$this->db->update('inventory',$data);
	}

	public function delete($id){
		$this->db->where('inventory_id',$id);
		$this->db->delete('inventory');
		

	}
}
 ?>