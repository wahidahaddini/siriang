<form method="post" action="<?php echo base_url()."Rekening/tambah_rek" ?>">
<div class="row">
		<div class="col-lg-6">
			<?php echo $this->session->flashdata('msg'); ?>
		<br>
			<label>Kode Rekening</label>
            <input type="text" class="form-control" id="rekening" name="kode_rekening">
            <?= form_error('kode_rekening', '<small class="text-danger pl-3">', '</small>') ?>
		</div>

		<div class="col-lg-6">
			<br>
			<label>Nama Rekening
			</label>
            <input type="text" class="form-control" id="nama_rekening" name="nama_rekening" value="">
            <?= form_error('nama_rekening', '<small class="text-danger pl-3">', '</small>') ?>
		</div>

		<div class="col-lg-6">
			<br>
			<br>
			<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
		</div>
</div>
</form>