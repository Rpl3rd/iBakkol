<div class="ui grid fluid computer large monitor desktop tablet only padded divided" style="padding-top:3rem;">
	<?php $this->load->view('nav/nav-comp'); ?>
	<div class="eleven wide column">
		<div class="ui tall stacked segment">
			<h2 class="ui header">Data Pelamar</h2>
			<div class="ui grid fluid">
				<div class="sixteen wide column">
					<!-- <a href="{base_url}/index.php/home/tbh_tamatan" class="ui button">
						<i class="icons">
							<i class="student icon"></i>
							<i class="corner plus icon"></i>
						</i>
						Tambah Tamatan
					</a> -->
					<table class="ui blue celled striped table">
						<thead>
							<tr>
								<th>No.</th>
								<th>NISN</th>
								<th>Nama</th>
								<th>Kompetensi Keahlian</th>
								<th>Asal Sekolah</th>
								<th class="collapsing">Tahun Lulus</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = array('1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'); $n = 0;
							foreach ($no as $key): ?>
							<tr>
								<td class="collapsing"><?php echo ++$n ?></td>
								<td class="collapsing">999123109</td>
								<td>Dimas Ferianto</td>
								<td>Rekayasa Perangkat Lunak</td>
								<td>SMK Taruna Bhakti</td>
								<td>2017</td>
								<td class="collapsing">
									<a href="{base_url}index.php/home/detail_pelamar" class="ui blue button"><i class="unhide icon"></i> Lihat</a>
									<!-- <a href="#" class="ui green button"><i class="edit icon"></i>Ubah</a>
									<a href="#" class="ui red button"><i class="trash outline icon"></i>Hapus</a> -->
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