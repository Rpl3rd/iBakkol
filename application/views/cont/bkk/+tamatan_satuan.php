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
				<div class="ui form">
					<div class="inline fields">
						<div class="four wide field">
							<label>Kompetensi Keahlian</label>
						</div>
						<div class="eight wide field">
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
							<label>NISN</label>
						</div>
						<div class="eight wide field">
							<input placeholder="NISN" type="text">
						</div>
					</div>
				</div>
			</div>
			<div class="ui bottom attached tab segment" data-tab="biodata">
				Second
			</div>
			<div class="ui bottom attached tab segment" data-tab="kompetensi">
				Third
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{base_url}public/js/main.js"></script>