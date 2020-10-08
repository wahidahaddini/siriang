<div class="row">

<div class="col-lg-6">
		</div>
	</div>
</form>

<br>
<div class="row">
	<div class="col-lg-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Id Bidang</th>
						<th>Nama Bidang</th>
					</tr>
				</thead>
				<tbody>

					<?php $no = 1;
						foreach ($ref_bidang as $rb): ?>

						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $rb->bidang_id; ?></td>
							<td><?php echo $rb->nama_bidang; ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
						
			</table>
		</div>
	</div>
</div>
