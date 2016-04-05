<div class="ui grid fluid computer large monitor desktop tablet only padded divided">
	<?php $this->load->view('nav/nav-bkk'); ?>
	<div class="eleven wide column">
		<div class="ui tall stacked segment">
			<div class="ui form">
				<div class="inline fields">
					<div class="four wide field">
						<label>No. Pendaftaran</label>
					</div>
					<div class="ten wide field">
						<input type="text" name="no_reg" placeholder="No. Pendaftaran">
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
						<label>Nama Perusahaan</label>
					</div>
					<div class="ten wide field">
						<input type="text" name="nama" placeholder="Nama Perusahaan">
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Nama Pimpinan Perusahaan</label>
					</div>
					<div class="ten wide field">
						<input type="text" name="leader" placeholder="Nama Pimpinan Perusahaan">
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
						<label>Kode Pos</label>
					</div>
					<div class="ten wide field">
						<input type="text" name="kd_pos" placeholder="Kode Pos">
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>No. Telp</label>
					</div>
					<div class="ten wide field">
						<input type="text" name="telp" placeholder="No. Telphone">
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
						<label>Kontak Person</label>
					</div>
					<div class="ten wide field">
						<input type="text" name="kntk_pers" placeholder="Kontak Person">
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Kategori Usaha</label>
					</div>
					<div class="ten wide field">
						<select class="ui dropdown fluid">
							<option value="">-- Kategori Usaha --</option>
							<option value="0">a</option>
							<option value="1">b</option>
						</select>
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Gol. Pokok Usaha</label>
					</div>
					<div class="ten wide field">
						<select class="ui dropdown fluid">
							<option value="">-- Gol. Pokok Usaha --</option>
							<option value="a">a</option>
							<option value="b">b</option>
							<option value="c">c</option>
						</select>
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Gol. Usaha</label>
					</div>
					<div class="ten wide field">
						<select class="ui dropdown fluid">
							<option value="">-- Gol. Usaha --</option>
							<option value="a">a</option>
							<option value="b">b</option>
							<option value="c">c</option>
						</select>
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Sub Gol. Usaha</label>
					</div>
					<div class="ten wide field">
						<select class="ui dropdown fluid">
							<option value="">-- Sub Gol. Usaha --</option>
							<option value="a">a</option>
							<option value="b">b</option>
							<option value="c">c</option>
						</select>
					</div>
				</div>
				<div class="inline fields">
					<div class="four wide field">
						<label>Kelompok Usaha</label>
					</div>
					<div class="ten wide field">
						<select class="ui dropdown fluid">
							<option value="">-- Kelompok Usaha --</option>
							<option value="a">a</option>
							<option value="b">b</option>
							<option value="c">c</option>
						</select>
					</div>
				</div>
				<div class="buttons">
					<a href="#" class="ui button primary"><i class="save icon"></i>Submit</a>
					<a href="#" class="ui button red"><i class="close icon"></i>Batal</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{base_url}public/js/main.js"></script>