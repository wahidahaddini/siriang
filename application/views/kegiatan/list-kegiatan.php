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
						<th>Id Kegiatan</th>
						<th>Id Bidang</th>
						<th>Nama Kegiatan</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
						foreach ($ref_kegiatan as $k): ?>
					<?php 
						$bidang = $this->db->get_where('ref_bidang',array('bidang_id' => $k->bidang_id))->result();
					 ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $k->kegiatan_id ?></td>
							<td><?php echo $bidang[0]->bidang_id; ?></td>
							<td><?php echo $k->nama_kegiatan; ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
						
			</table>
		</div>
	</div>
</div>
