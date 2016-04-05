<div class="ui grid fluid computer large monitor desktop tablet only padded divided">
	<?php $this->load->view('nav/nav-bkk'); ?>
	<div class="eleven wide column">
		<div class="ui tall stacked segment">
			<div class="ui top attached tabular menu">
				<a class="active item" data-tab="tamatan">Data Tamatan</a>
				<a class="item" data-tab="biodata">Biodata</a>
				<a class="item" data-tab="kompetensi">Data Kompetensi</a>
			</div>
			<div class="ui bottom attached active tab segment" data-tab="tamatan">
				<div class="ui form dt-tamatan">
					<div class="inline fields">
						<div class="four wide field">
							<label>Nama Lengkap</label>
						</div>
						<div class="five wide field">
							<input placeholder="Nama Depan" type="text" name="fname">
						</div>
						<div class="five wide field">
							<input placeholder="Nama Belakang" type="text" name="lname">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>NISN</label>
						</div>
						<div class="ten wide field">
							<input placeholder="NISN" type="text" name="nisn">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Kompetensi Keahlian</label>
						</div>
						<div class="ten wide field">
							<select class="ui dropdown fluid">
								<option value="">-- Kompetensi Keahlian --</option>
								<option value="0">Rekayasa Perangkat Lunak</option>
								<option value="1">Teknik Komputer Jaringan</option>
								<option value="2">Multimedia</option>
							</select>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>NIS</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="nis" placeholder="Nis">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Kelas</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="kelas" placeholder="Kelas">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="jkel">Jenis Kelamin</label>
						</div>
						<div class="field">
							<div class="ui radio checkbox">
								<input class="hidden" tabindex="0" name="jkel" checked="" type="radio">
								<label>Laki - laki</label>
							</div>
						</div>
						<div class="field">
							<div class="ui radio checkbox">
								<input class="hidden" tabindex="0" name="jkel" type="radio">
								<label>Perempuan</label>
							</div>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Tempat Lahir</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="tmpt_lahir" placeholder="Tempat Lahir">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Tanggal Lahir</label>
						</div>
						<div class="ten wide field">
							<input type="date" name="tgl_lahir" placeholder="Tanggal Lahir">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Agama</label>
						</div>
						<div class="ten wide field">
							<select class="ui dropdown fluid">
								<option value="">-- Agama --</option>
								<option value="0">Islam</option>
								<option value="1">Kristen</option>
								<option value="2">Protestan</option>
								<option value="2">Budha</option>
								<option value="2">Hindu</option>
								<option value="2">Konghucu</option>
							</select>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Tanggal Lahir</label>
						</div>
						<div class="ten wide field">
							<input type="date" name="tgl_lahir" placeholder="Tanggal Lahir">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Alamat</label>
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
							<label for="">Kode Pos</label>
						</div>
						<div class="ten wide field">
							<input type="date" name="kd_pos" placeholder="Kode Pos">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">No. Ijazah</label>
						</div>
						<div class="ten wide field">
							<input type="date" name="no_ijzh" placeholder="No. Ijazah">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Tahun Lulus</label>
						</div>
						<div class="ten wide field">
							<input type="date" name="thn_lulus" placeholder="Tahun Lulus">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Nama Orang Tua</label>
						</div>
						<div class="ten wide field">
							<input type="date" name="parent" placeholder="Nama Orang Tua">
						</div>
					</div>
				</div>
			</div>
			<div class="ui bottom attached tab segment" data-tab="biodata">
				<div class="ui form bio">
					<div class="inline fields">
						<div class="four wide field">
							<label for="">No. Identitas</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="no_idntts" placeholder="No. Identitas (KTP/SIM/PASPOR/lain-lain)">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Ket. Identitas</label>
						</div>
						<div class="ten wide field">
							<select class="ui dropdown fluid">
								<option value="">-- Keterangan Identitas --</option>
								<option value="0">KTP</option>
								<option value="1">SIM</option>
								<option value="2">PASSPOR</option>
								<option value="2">Lain - lain</option>
							</select>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Status Perkawinan</label>
						</div>
						<div class="ten wide field">
							<select class="ui dropdown fluid">
								<option value="">-- Status Perkawinan --</option>
								<option value="0">Kawin</option>
								<option value="1">Belum Kawin</option>
								<option value="2">Cerai</option>
							</select>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">No. Telp Rumah</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="telp_rmh" placeholder="No. Telp Rumah">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">No. Handphone</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="no_hp" placeholder="No. Handphone">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Email</label>
						</div>
						<div class="ten wide field">
							<input type="email" name="email" placeholder="Email">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Tinggi Badan</label>
						</div>
						<div class="nine wide field">
							<input type="text" name="tb" placeholder="Tinggi Badan (CM)">
						</div>
						<div class="field">
							<label>CM</label>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Berat Badan</label>
						</div>
						<div class="nine wide field">
							<input type="text" name="bb" placeholder="Berat Badan (KG)">
						</div>
						<div class="field">
							<label>CM</label>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label>Status Tamatan</label>
						</div>
						<div class="ten wide field">
							<select class="ui dropdown fluid">
								<option value="">-- Status Tamatan --</option>
								<option value="0">Pencaker</option>
								<option value="1">Melanjutkan Sekolah</option>
								<option value="2">Bekerja</option>
								<option value="2">Menunggu</option>
								<option value="2">Bekerja Non Formal</option>
							</select>
						</div>
					</div>
					<div class="inline fields">
						<div class="sixteen wide field">
							<label for=""><h3>[Jika Melanjutkan/Bekerja/Bekerja Non Formal]</h3></label>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Nama Lembaga</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="nm_lmbg" placeholder="Nama Lembaga">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Alamat Lembaga</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="almt_lmbg" placeholder="Alamat Lembaga">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Jabatan Dalam Lembaga</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="jbtn_lmbg" placeholder="Jabatan Dalam Lembaga">
						</div>
					</div>
					<div class="inline fields">
						<div class="sixteen wide field">
							<label for=""><h3>[Jika Menyandang Cacat]</h3></label>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Keterangan Cacat</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="ket_cacat" placeholder="Keterangan Cacat">
						</div>
					</div>
				</div>
			</div>
			<div class="ui bottom attached tab segment" data-tab="kompetensi">
				<div class="ui form kompetens">
					<div class="inline fields">
						<div class="four wide field">
							<label for="jkel">Bersedia Ditempatkan diluar Negri</label>
						</div>
						<div class="field">
							<div class="ui radio checkbox">
								<input class="hidden" tabindex="0" name="jkel" checked="" type="radio">
								<label>Ya</label>
							</div>
						</div>
						<div class="field">
							<div class="ui radio checkbox">
								<input class="hidden" tabindex="0" name="jkel" type="radio">
								<label>Tidak</label>
							</div>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="jkel">Bahasa Asing yang dikuasai</label>
						</div>
						<div class="grouped fields">
							<div class="field">
								<div class="ui checkbox">
									<input class="hidden" tabindex="0" name="lang" checked="" type="checkbox">
									<label>Inggris</label>
								</div>
							</div>
							<div class="field">
								<div class="ui checkbox">
									<input class="hidden" tabindex="0" name="lang" type="checkbox">
									<label>Mandarin</label>
								</div>
							</div>
							<div class="field">
								<div class="ui checkbox">
									<input class="hidden" tabindex="0" name="lang" type="checkbox">
									<label>Jepang</label>
								</div>
							</div>
							<div class="field">
								<div class="ui checkbox">
									<input class="hidden" tabindex="0" name="lang" type="checkbox">
									<label>Jerman</label>
								</div>
							</div>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Bahasa Asing Lain</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="oth_lang" placeholder="Bahasa Asing Lain">
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="jkel">Kemampuan Komputer Dasar (Office)</label>
						</div>
						<div class="field">
							<div class="ui radio checkbox">
								<input class="hidden" tabindex="0" name="skl_com" checked="" type="radio">
								<label>Ya</label>
							</div>
						</div>
						<div class="field">
							<div class="ui radio checkbox">
								<input class="hidden" tabindex="0" name="skl_com" type="radio">
								<label>Tidak</label>
							</div>
						</div>
					</div>
					<div class="inline fields">
						<div class="four wide field">
							<label for="">Kemampuan Komputer Lain</label>
						</div>
						<div class="ten wide field">
							<input type="text" name="oth_skl_com" placeholder="Kemampuan Komputer Lain">
						</div>
					</div>
					<div class="inline fields">
						<div class="sixteen field">
							<label><h3>[Pendidikan Non Formal yang pernah diikuti]</h3></label>
						</div>
					</div>
					<div class="two fields">
						<div class="field">
							<label>Nama</label>
						</div>
						<div class="field">
							<label>Tahun</label>
						</div>
						<div class="field">
							<label>Lama (Bulan)</label>
						</div>
					</div>
					<div class="two fields">
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
					</div>
					<div class="two fields">
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
					</div>
					<div class="two fields">
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
					</div>
					<div class="inline fields">
						<div class="sixteen field">
							<label><h3>[Sertifikasi Kompetensi]</h3></label>
						</div>
					</div>
					<div class="two fields">
						<div class="field">
							<label>Bidang Keahlian</label>
						</div>
						<div class="field">
							<label>Level / Tingkatan</label>
						</div>
						<div class="field">
							<label>No. Sertifikat</label>
						</div>
						<div class="field">
							<label>Nama Lembaga Sertifikasi</label>
						</div>
					</div>
					<div class="two fields">
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
					</div>
					<div class="two fields">
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
					</div>
					<div class="two fields">
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
					</div>
					<div class="inline fields">
						<div class="sixteen field">
							<label><h3>[Pengalaman Kerja]</h3></label>
						</div>
					</div>
					<div class="two fields">
						<div class="field">
							<label>Nama Perusahaan</label>
						</div>
						<div class="field">
							<label>Jabatan</label>
						</div>
						<div class="field">
							<label>Tahun</label>
						</div>
						<div class="field">
							<label>Lama (Bulan)</label>
						</div>
					</div>
					<div class="two fields">
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
					</div>
					<div class="two fields">
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
					</div>
					<div class="two fields">
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
						<div class="field">
							<input type="text" name="" value="" placeholder="">
						</div>
					</div>
				</div>
			</div>
			<div class="floated right">
				<a href="#" class="ui primary button"><i class="save icon"></i>Submit</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.ui.radio.checkbox').checkbox();
	$('.ui.checkbox').checkbox();
</script>
<script type="text/javascript" src="{base_url}public/js/main.js"></script>