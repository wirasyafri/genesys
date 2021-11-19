<?php $this->load->view('admin/header'); ?>
<div class="container">
<div class="row">
	
	<?php echo form_open_multipart('admin/Sellproses/'.$this->uri->segment(3));?>
	<legend>Jual Barang</legend>
<?php 
//var_dump($barang);
?>
	<?php 
	echo validation_errors();  ?>	
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" class="form-control" id="nama" value="<?php echo $barang[0]->nama?>" placeholder="Nama" disabled>
		<?php //echo validation_errors();  ?>						
	</div>

	<div class="form-group">
		<label for="">jumlah item</label>
		<input type="text" name="beli" class="form-control" id="beli" placeholder="jumlah jual">
		<?php //echo validation_errors();  ?>						
	</div>

	<div class="form-group" hidden>
		<label for="">jumlah item</label>
		<input type="text" name="stok" class="form-control" id="stok" value="<?php echo $barang[0]->stok?>" placeholder="jumlah beli">
		<?php //echo validation_errors();  ?>						
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close(); ?>
</div>
<?php $this->load->view('admin/footer');?>