<div class="row">
<div class="col-lg-6">
		</div>
	</div>
</form>

<br>
<div class="row">
	<div class="col-lg-12">
		<?php echo $this->session->flashdata('msg'); ?>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Kode Rekening</th>
						<th>Nama Rekening</th>
						<th>aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
						foreach ($rekening as $r): ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $r->kode_rekening; ?></td>
							<td><?php echo $r->nama_rekening; ?></td>
							<td>
								<a href="<?php echo base_url("Rekening/edit/". $r->kode_rekening)?>"class="btn btn-primary btn-sm">
									<i class="fas fa-edit"></i> Edit</a><br>
							<!-- <form action = "<?=site_url("Rekening/hapus/". $r->kode_rekening)?>" method="post">
									<input type="hidden" value="<?php $r->kode_rekening ?>"> 
									<button  class="btn btn-primary btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data?')">
									<i class="fas fa-delete"></i>Hapus</a> -->
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
						
			</table>
		</div>
	</div>
</div>
