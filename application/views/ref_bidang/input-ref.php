<form method="post" action="<?php echo base_url()."RefBidang/input_ref" ?>">
<div class="row">
    <h3 class="col-lg-12">Ref Bidang</h3>

		<div class="col-lg-6">
		<br>
			<label>ID Bidang</label>
            <input type="text" class="form-control" name="bidang_id">
            <?= form_error('bidang_id', '<small class="text-danger pl-3">', '</small>') ?>
		</div>

		<div class="col-lg-6">
			<br>
			<label>Nama Bidang</label>
            <input type="text" class="form-control" name="nama_bidang" value="">
            <?= form_error('nama_bidang', '<small class="text-danger pl-3">', '</small>') ?>
		</div>

		<div class="col-lg-6">
			<br>
			<br>
			<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
		</div>
</div>
</form>