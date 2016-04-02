<div class="ui grid fluid computer large monitor desktop tablet only padded divided" style="padding-top:3rem;">
	<?php $this->load->view('nav/nav-bkk'); ?>
	<div class="eleven wide column">
		<div class="ui tall stacked segment">
			<div class="ui top attached tabular menu">
				<a class="active item" data-tab="tamatan">Data Tamatan</a>
				<a class="item" data-tab="biodata">Biodata</a>
				<a class="item" data-tab="kompetensi">Data Kompetensi</a>
			</div>
			<div class="ui bottom attached active tab segment" data-tab="tamatan">
				<div class="ui grid">
					<div class="four wide column">
						<label>Kompetensi Keahlian</label>
					</div>
					<div class="eight wide column">
						<!-- <div class="ui mini fluid selection dropdown"> -->
						<select class="ui fluid mini dropdown" id="select">
							<option value="">--kompetensi keahlian--</option>
							<option value="asd">Rekayasa Perangkat Lunak</option>
							<option value="asd">Teknik Kompiter Jaringan</option>
							<option value="asd">Multimedia</option>
						</select>
						<!-- </div> -->
					</div>
				</div>
				<div class="ui grid">
					<div class="four wide column">
						<label>Kelas</label>
					</div>
					<div class="eight wide column">
						<div class="ui fluid input">
							<input type="text" name="" value="" placeholder="">
						</div>
					</div>
				</div>
				<div class="ui grid">
					<div class="four wide column">
						<label>NIS</label>
					</div>
					<div class="eight wide column">
						<div class="ui fluid input">
							<input type="text" name="" value="" placeholder="">
						</div>
					</div>
				</div>
				<div class="ui grid">
					<div class="four wide column">
						<label>NISN</label>
					</div>
					<div class="eight wide column">
						<div class="ui fluid input">
							<input type="text" name="" value="" placeholder="">
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
<script type="text/javascript">
	$('.menu .item').tab();
</script>
<script type="text/javascript" src="{base_url}public/js/main.js"></script>