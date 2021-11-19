<?php $this->load->view('admin/header'); ?>
<div class="container">
<div class="row">
	
	<?php echo form_open_multipart('admin/Updateproses/'.$this->uri->segment(3));?>
	<legend>Edit Data Barang</legend>
<?php 
//var_dump($barang);
?>
	<?php 
	echo validation_errors();  ?>	
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" class="form-control" id="nama" value="<?php echo $barang[0]->nama?>" placeholder="Nama">
		<?php //echo validation_errors();  ?>						
	</div>
	<div class="form-group">
		<label for="">Harga</label>
		<input type="text" name="harga" class="form-control" id="harga" value="<?php echo $barang[0]->harga?>" placeholder="Harga">
		<?php //echo validation_errors();  ?>						
	</div>

	<div class="form-group">
		<label for="">jumlah item</label>
		<input type="text" name="stok" class="form-control" id="stok" value="<?php echo $barang[0]->stok?>" placeholder="stok">
		<?php //echo validation_errors();  ?>						
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close(); ?>
</div>
<?php $this->load->view('admin/footer');?>