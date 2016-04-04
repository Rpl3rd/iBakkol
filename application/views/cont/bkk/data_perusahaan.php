<div class="ui grid fluid computer large monitor desktop tablet only padded divided">
	<?php $this->load->view('nav/nav-bkk'); ?>
	<div class="eleven wide column">
		<div class="ui tall stacked segment">
			<h2 class="ui header">Data Perusahaan</h2>
			<div class="ui grid fluid">
				<div class="sixteen wide column">
					<a href="{base_url}/index.php/home/tbh_perusahaan" class="ui button">
						<i class="icons">
							<i class="building icon"></i>
							<i class="corner plus icon"></i>
						</i>
						Tambah Perusahaan
					</a>
					<table class="ui blue celled striped table">
						<thead>
							<tr>
								<th>No.</th>
								<th>NPWP</th>
								<th>Nama Perusahaan</th>
								<th>Nama Pimpinan</th>
								<th>Kategori Usaha</th>
								<th>CP</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = array('1', '1', '1', '1', '1', '1', '1', '1', '1', '1'); $n = 0;
							foreach ($no as $key): ?>
							<tr>
								<td class="collapsing"><?php echo ++$n ?>.</td>
								<td class="collapsing">18164387162</td>
								<td>PT. Angin Sejahtera</td>
								<td>Mr. Jhon Doe</td>
								<td>Industri Pengolahan blabla</td>
								<td>081211092312</td>
								<td class="collapsing">
									<a href="#" class="ui green button"><i class="edit icon"></i>Ubah</a>
									<a href="#" class="ui red button"><i class="trash outline icon"></i>Hapus</a>
								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
						<tfoot>
							<tr>
								<th colspan="7">
									<div class="ui right floated pagination menu">
										<a class="icon item">
											<i class="left chevron icon"></i>
										</a>
										<a class="item">1</a>
										<a class="item">2</a>
										<a class="item">3</a>
										<a class="item">4</a>
										<a class="icon item">
											<i class="right chevron icon"></i>
										</a>
									</div>
								</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{base_url}public/js/main.js"></script>