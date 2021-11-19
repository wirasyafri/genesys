<?php $this->load->view('admin/header'); ?>
<div class="container">
<div class="row">

	
	<!--<?php echo form_open('admin/Create');?>-->
	<?php echo form_open_multipart('admin/Create');?>	
	<legend>Tambah Data Barang</legend>
	<?php 
//var_dump($pegawai);
	echo validation_errors();  ?>	
	<div class="form-group">
		<label for="">Nama Barang</label>
		<input type="text" name="NAMA" class="form-control" id="nama"  placeholder="Nama Barang">
		<?php //echo validation_errors();  ?>						
	</div>
	<div class="form-group">
		<label for="">HARGA</label>
		<input type="text" name="HARGA" class="form-control" id="harga" placeholder="HARGA">
		<?php //echo validation_errors();  ?>						
	</div>
	<div class="form-group">
		<label for="">STOK</label>
		<input type="text" name="STOK" class="form-control" id="stok" placeholder="STOK">
		<?php //echo validation_errors();  ?>						
	</div>
	<!-- <div class="form-group">
		<label for="">Tanggal</label>
		<input type="date" name="Tanggal" class="form-control" id="Tanggal"  placeholder="Tanggal">
		<?php //echo validation_errors();  ?>						
	</div>
	<div class="form-group">
		<label for="">Alamat</label>
		<input type="text" name="Alamat" class="form-control" id="Alamat"  placeholder="Alamat">
		<?php //echo validation_errors();  ?>						
	</div> -->
	<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close(); ?>
</div>
<?php $this->load->view('admin/footer');?>