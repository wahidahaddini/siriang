<div class="row">
	<?php echo $this->session->flashdata('msg'); ?>
	<form method="post" action="<?php echo base_url("Pengajuan/tambah"); ?>" method="post">

		<div class="col-lg-12">
		<br>
			<label>Bidang</label>
			<input type="text" class="form-control" name="bidang_id" value="" readonly>
		</div>

		<div class="col-lg-12">
			<label>Kegiatan</label>
			<select required class="form-control" id="kegiatan" name="kegiatan_id">
			<option value="">pilih kegiatan</option>
				<?php 
					$b = $this->db->get('ref_bidang')->result();
					foreach ($b as $bid) {
						echo "<option value='".$bid->bidang_id."'>".$bid->nama_bidang."</option>";
					}
				 ?>
			</select>
		</div>

		<div class="col-lg-12">
			<br>
			<label>Kegiatan</label>
			<select required="" class="form-control" id="kegiatan" name="kegiatan_id">
			<option value="">Pilih Kegiatan</option>
			</select>
		</div>
		<div class="col-lg-12">
		<br>
			<label>Nominal</label>
			<input type="text" class="form-control" name="nominal" value="<?= set_value('nominal')?>">
		</div>

		<div class="col-lg-8">
			<br>
			<br>
			<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
		</div>
	</form>
  </div>