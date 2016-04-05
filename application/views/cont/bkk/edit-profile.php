<div class="ui grid fluid computer large monitor desktop tablet only padded divided">
	<?php $this->load->view('nav/nav-bkk'); ?>
	<div class="eleven wide column">
		<div class="ui tall stacked segment">
			<div class="ui top attached tabular menu">
				<a class="active item" data-tab="profile">Profile</a>
				<a class="item" data-tab="kompetensi">Data Kompetensi Keahlian (Akreditasi)</a>
			</div>
			<div class="ui bottom attached active tab segment" data-tab="profile">
				<div class="ui form">
					<div class="inline fields">
						<div class="four wide field">
							<img src="{base_url}public/image/image.png" class="ui image" alt="">
						</div>
						<div class="ten wide field">
							<label>
								<a class="ui primary button"><i class="photo icon"></i> Ganti Logo Sekolah</a>
								<input type="file" style="display: none">
							</label>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Nama Sekolah</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="nama" placeholder="Nama Sekolah">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>NPSN</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="npsn" placeholder="NPSN">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>NSS</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="nss" placeholder="NSS">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="jkel">Jenis</label>
						</div>
						<div class="field">
							<div class="ui radio checkbox">
								<input class="hidden" tabindex="0" name="jkel" checked="" type="radio">
								<label>Swasta</label>
							</div>
						</div>
						<div class="field">
							<div class="ui radio checkbox">
								<input class="hidden" tabindex="0" name="jkel" type="radio">
								<label>Negri</label>
							</div>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Nama BKK</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="nama" placeholder="Nama BKK">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>No. Ijin BKK</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="no_ijin" placeholder="No. Ijin BKK">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Nama KA. BKK</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="leader" placeholder="Nama Kepala BKK">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Alamat</label>
						</div>
						<div class="ten wide field">
							<textarea rows="2"></textarea>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>No. Telp</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="" placeholder="Nomor Telephone">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>No. FAX</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="" placeholder="Nomor FAX">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Kode Pos</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="kd_pos" placeholder="Kode Pos">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Email</label>
						</div>
						<div class="ten wide field">
							<input type="email" name="email" placeholder="Email">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Website</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="web" placeholder="Alamat Website">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Provinsi</label>
						</div>
						<div class="ten wide field">
							<select class="ui dropdown fluid">
								<option value="">-- Pilih Provinsi --</option>
								<option value="0">Aceh</option>
								<option value="1">Sumatra Utara</option>
								<option value="2">Sumatra Barat</option>
								<option value="2">Sumatra Selatan</option>
								<option value="2">Riau</option>
								<option value="2">Kep. Riau</option>
							</select>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Kabupaten / Kota</label>
						</div>
						<div class="ten wide field">
							<select class="ui dropdown fluid">
								<option value="">-- Pilih Kabupaten / Kota --</option>
								<option value="0">Aceh</option>
								<option value="1">Medan</option>
								<option value="2">Padang</option>
								<option value="2">Palembang</option>
								<option value="2">Ujung Pandang</option>
								<option value="2">Riau</option>
							</select>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Kecamatan</label>
						</div>
						<div class="ten wide field">
							<select class="ui dropdown fluid">
								<option value="">-- Pilih Kecamatan --</option>
								<option value="0">Aceh</option>
								<option value="1">Medan</option>
								<option value="2">Padang</option>
								<option value="2">Palembang</option>
								<option value="2">Ujung Pandang</option>
								<option value="2">Riau</option>
							</select>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Keluruhan</label>
						</div>
						<div class="ten wide field">
							<select class="ui dropdown fluid">
								<option value="">-- Pilih Kelurahan --</option>
								<option value="0">Aceh</option>
								<option value="1">Medan</option>
								<option value="2">Padang</option>
								<option value="2">Palembang</option>
								<option value="2">Ujung Pandang</option>
								<option value="2">Riau</option>
							</select>
						</div>
					</div>
					<div class="buttons">
						<a href="#" class="ui button primary"><i class="save icon"></i>Submit</a>
						<a href="#" class="ui button red"><i class="close icon"></i>Batal</a>
					</div>
				</div>
			</div>
			<div class="ui bottom attached tab segment" data-tab="kompetensi">
				<table class="ui celled striped table">
					<thead>
						<tr>
							<th>No.</th>
							<th>Kompetensi Keahlian</th>
							<th class="collapsing">Akreditasi</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="collapsing">1</td>
							<td>Rekayasa Perangkat Lunak</td>
							<td class="center aligned">A</td>
							<td class="collapsing">
								<a href="#" class="ui green button"><i class="edit icon"></i>Ubah</a>
								<a href="#" class="ui red button"><i class="trash outline icon"></i>Hapus</a>
							</td>
						</tr>
						<tr>
							<td class="collapsing">2</td>
							<td>Teknik Komputer dan Jaringan</td>
							<td class="center aligned">A</td>
							<td class="collapsing">
								<a href="#" class="ui green button"><i class="edit icon"></i>Ubah</a>
								<a href="#" class="ui red button"><i class="trash outline icon"></i>Hapus</a>
							</td>
						</tr>
						<tr>
							<td class="collapsing">3</td>
							<td>Multimedia</td>
							<td class="center aligned">A</td>
							<td class="collapsing">
								<a href="#" class="ui green button"><i class="edit icon"></i>Ubah</a>
								<a href="#" class="ui red button"><i class="trash outline icon"></i>Hapus</a>
							</td>
						</tr>
						<tr>
							<td class="collapsing">4</td>
							<td>Axioo Class Program</td>
							<td class="center aligned">A</td>
							<td class="collapsing">
								<a href="#" class="ui green button"><i class="edit icon"></i>Ubah</a>
								<a href="#" class="ui red button"><i class="trash outline icon"></i>Hapus</a>
							</td>
						</tr>
						<tr>
							<td class="collapsing">5</td>
							<td>Broadcasting</td>
							<td class="center aligned">A</td>
							<td class="collapsing">
								<a href="#" class="ui green button"><i class="edit icon"></i>Ubah</a>
								<a href="#" class="ui red button"><i class="trash outline icon"></i>Hapus</a>
							</td>
						</tr>
						<tr>
							<td class="collapsing">6</td>
							<td>Teknik Elektronika Industri</td>
							<td class="center aligned">A</td>
							<td class="collapsing">
								<a href="#" class="ui green button"><i class="edit icon"></i>Ubah</a>
								<a href="#" class="ui red button"><i class="trash outline icon"></i>Hapus</a>
							</td>
						</tr>
					</tbody>
				</table>
				<button type="button" class="ui primary button" id="tambah"><i class="plus icon"></i>Tambah Kompetensi</button>
				<button type="button" class="ui primary button" id="submit" style="display: none"><i class="save icon"></i>Submit</button>
				<button type="button" class="ui red button" style="display: none" id="batal"><i class="close icon"></i>Batal</button>
				<script type="text/javascript">
					$('#tambah').click(function() {
						$(this).hide('fast')
						$('#submit').show('fast')
						$('#batal').show('fast')
						$('#form').show('slow')
					});
					$('#batal').click(function() {
						$(this).hide('fast')
						$('#submit').hide('fast')
						$('#tambah').show('fast')
						$('#form').hide('slow')
					});
				</script>
				<div class="ui segment" id="form" style="display: none">
					<div class="ui form">
						<div class="inline fields">
							<div class="four wide field">
								<label>Kompetensi Keahlian</label>
							</div>
							<div class="twelve wide field">
								<select class="ui dropdown fluid">
									<option value="">-- Pilih Kompetensi Keahlian --</option>
									<option value="0">Akutansi</option>
									<option value="1">bla</option>
									<option value="1">bla</option>
									<option value="1">bla</option>
									<option value="1">bla</option>
								</select>
							</div>
						</div>
						<div class="inline fields">
							<div class="four wide field">
								<label>Aktreditasi</label>
							</div>
							<div class="twelve wide field">
								<select class="ui dropdown fluid">
									<option value="">-- Akreditasi --</option>
									<option value="0">A</option>
									<option value="0">B</option>
									<option value="0">C</option>
									<option value="0">D</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{base_url}public/js/main.js"></script>