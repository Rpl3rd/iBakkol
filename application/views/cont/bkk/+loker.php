<div class="ui grid fluid computer large monitor desktop tablet only padded divided">
	<?php $this->load->view('nav/nav-bkk'); ?>
	<div class="eleven wide column">
		<div class="ui tall stacked segment">
			<div class="ui form">
				<div class="inline fields">
					<div class="four wide field">
						<label>No. Lowongan</label>
					</div>
					<div class="ten wide field">
						<input type="text" name="no_lwng" placeholder="No. Daftar Lowongan">
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Kompetensi Keahlian</label>
					</div>
					<div class="ten wide field">
						<select class="ui dropdown fluid">
							<option value="">-- Kompetensi Keahlian --</option>
							<option value="a">a</option>
							<option value="b">b</option>
							<option value="c">c</option>
							<option value="d">d</option>
						</select>
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Nama Perusahaan</label>
					</div>
					<div class="ten wide field">
						<select class="ui dropdown fluid">
							<option value="">-- Nama Perusahaan --</option>
							<option value="a">a</option>
							<option value="b">b</option>
							<option value="c">c</option>
							<option value="d">d</option>
						</select>
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>NPWP</label>
					</div>
					<div class="ten wide field">
						<input type="text" name="npwp" placeholder="NPWP">
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Gol. Pokok Jabatan</label>
					</div>
					<div class="ten wide field">
						<select class="ui dropdown fluid">
							<option value="">-- Gol. Pokok Jabatan --</option>
							<option value="a">a</option>
							<option value="b">b</option>
							<option value="c">c</option>
						</select>
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Golongan </label>
					</div>
					<div class="ten wide field">
						<select class="ui dropdown fluid">
							<option value="">-- Golongan --</option>
							<option value="a">a</option>
							<option value="b">b</option>
							<option value="c">c</option>
						</select>
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Sub Golongan </label>
					</div>
					<div class="ten wide field">
						<select class="ui dropdown fluid">
							<option value="">-- Sub Golongan  --</option>
							<option value="a">a</option>
							<option value="b">b</option>
							<option value="c">c</option>
						</select>
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Kelompok</label>
					</div>
					<div class="ten wide field">
						<select class="ui dropdown fluid">
							<option value="">-- Kelompok --</option>
							<option value="a">a</option>
							<option value="b">b</option>
							<option value="c">c</option>
						</select>
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Jumlah Dibutuhkan (orang)</label>
					</div>
					<div class="ten wide field">
						<input type="number" name="qty" placeholder="Jumlah Dibutuhkan (orang)" min="1">
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Alamat Penempatan</label>
					</div>
					<div class="ten wide field">
						<textarea rows="2"></textarea>
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Penempatan</label>
					</div>
					<div class="ten wide field">
						<select class="ui dropdown fluid">
							<option value="a">Dalam Negri</option>
							<option value="b">Luar Negri</option>
						</select>
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
				<div class="inline fields">
					<div class="four wide field">
						<label>syarat</label>
					</div>
					<div class="ten wide field">
						<textarea rows="2"></textarea>
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Tunjangan</label>
					</div>
					<div class="grouped fields">
						<div class="field">
							<div class="ui checkbox">
								<input class="hidden" tabindex="0" name="lang" type="checkbox">
								<label>Makan</label>
							</div>
						</div>
						<div class="field">
							<div class="ui checkbox">
								<input class="hidden" tabindex="0" name="lang" type="checkbox">
								<label>Transport</label>
							</div>
						</div>
						<div class="field">
							<div class="ui checkbox">
								<input class="hidden" tabindex="0" name="lang" type="checkbox">
								<label>Kesehatan</label>
							</div>
						</div>
						<div class="field">
							<div class="ui checkbox">
								<input class="hidden" tabindex="0" name="lang" type="checkbox">
								<label>Akomodasi</label>
							</div>
						</div>
						<div class="field">
							<div class="ui checkbox">
								<input class="hidden" tabindex="0" name="lang" type="checkbox">
								<label>Lembur</label>
							</div>
						</div>
						<div class="field">
							<div class="ui checkbox">
								<input class="hidden" tabindex="0" name="lang" type="checkbox">
								<label>Asrama</label>
							</div>
						</div>
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Tunjangan Lain</label>
					</div>
					<div class="ten wide field">
						<input type="text" name="tnjg_lain" placeholder="Tunjangan Lain">
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Status Pekerja</label>
					</div>
					<div class="ten wide field">
						<select class="ui dropdwon fluid">
							<option value="0">Tetap</option>
							<option value="1">Kontrak</option>
						</select>
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Lama Kontrak (Bulan)</label>
					</div>
					<div class="ten wide field">
						<input type="text" name="kontrak" placeholder="Lama Kontrak (Bulan)">
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Upah (Rp.)</label>
					</div>
					<div class="ten wide field">
						<input type="text" name="upah" placeholder="Upah">
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Tanggal Buka</label>
					</div>
					<div class="ten wide field">
						<input type="date" name="oped" placeholder="Tanggal buka">
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Tanggal tutup</label>
					</div>
					<div class="ten wide field">
						<input type="date" name="close" placeholder="Tanggal Tutup">
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Status Lowongan</label>
					</div>
					<div class="ten wide field">
						<select class="ui dropdown fluid">
							<option value="a">Buka</option>
							<option value="b">Tutup</option>
						</select>
					</div>
				</div>
				<div class="buttons">
					<a href="#" class="ui primary button"><i class="send icon"></i>Publish</a>
					<a href="#" class="ui primary button"><i class="close icon"></i>Batal</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	// $('.ui.radio.checkbox').checkbox();
	$('.ui.checkbox').checkbox();
</script>
<script type="text/javascript" src="{base_url}public/js/main.js"></script>