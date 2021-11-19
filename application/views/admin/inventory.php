<?php 
$this->load->view('admin/header'); 
?>
<!-- <table align="center">
	<tr>
		<td><div class="table-responsive"> -->
		<div class="container">
		<div class="panel panel-default">
		<div class="well well-sm">Daftar Barang</div>
	<div class="panel-body">
	<table class="table table-hover">
		<thead>
		<tr>
					<td><b>Nama</b>
					</td>
					<td><b>harga</b>
					</td>
					<td><b>stok</b>
					</td>
					<td><b>Beli</b>
					</td>
					<td><b>Jual</b>
					</td>
					<td><b>Edit</b>
					</td>
					<td><b>Delete</b>
					</td>
					
				</tr>
				</thead>
			<?php foreach ($biodata_array as $key) {
				?>
				<tbody>
				<tr>
					<td><?php echo $key['nama'] ?>
					</td>
					<td><?php echo $key['harga'] ?>
					</td>
					<td><?php echo $key['stok'] ?>
					</td>
					<td>
						<a href="<?=site_url();?>/admin/Buy/<?php echo $key['inventory_id'] ?>">
							<p data_placement="top" data_toogle="tooltip" title="Edit">
								<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit">
									<span class="glyphicon glyphicon-shopping-cart">
											</span>
								</button>
							</p>
						</a>
					</td>
					<td>
						<a href="<?=site_url();?>/admin/Sell/<?php echo $key['inventory_id'] ?>">
							<p data_placement="top" data_toogle="tooltip" title="Edit">
								<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit">
									<span class="glyphicon glyphicon-shopping-cart">
											</span>
								</button>
							</p>
						</a>
					</td>
					<td>
						<a href="<?=site_url();?>/admin/Update/<?php echo $key['inventory_id'] ?>">
							<p data_placement="top" data_toogle="tooltip" title="Edit">
								<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit">
									<span class="glyphicon glyphicon-pencil">
											</span>
								</button>
							</p>
						</a>
					</td>
					<td>
						<a href="<?=site_url();?>/admin/delete/<?php echo $key['inventory_id'] ?>">
							<p data_placement="top" data_toogle="tooltip" title="Delete">
								<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#edit">
									<span class="glyphicon glyphicon-trash">
											</span>
								</button>
							</p>
						</a>
					</td>
				</tr>
		</tbody>
		<?php } ?>
	</table>
</div>
</div>
</div>
<!-- /div>
</td> -->
<?php $this->load->view('admin/footer'); ?>