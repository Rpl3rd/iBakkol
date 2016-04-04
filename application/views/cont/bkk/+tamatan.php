<div class="ui grid fluid computer large monitor desktop tablet only padded divided">
	<?php $this->load->view('nav/nav-bkk'); ?>
	<div class="eleven wide column">
		<div class="ui tall stacked segment">
			<h2 class="ui header">Tambah Tamatan</h2>
			<div class="ui centered grid fluid">
				<div class="six wide column">
					<label>
						<a class="ui teal card">
							<div class="content">
								<i class="black left floated huge upload icon"></i>
								<div class="header">
									Import Data Tamatan
								</div>
								<div class="meta">
									File Format .csv
								</div>
							</div>
						</a>
						<input type="file" style="display: none">
					</label>
				</div>
				<div class="six wide column">
					<a class="ui teal card" href="{base_url}index.php/home/tamatan_satuan">
						<div class="content">
							<i class="black left floated huge user add icon"></i>
							<div class="header">
								Tambah Tamatan
							</div>
							<div class="meta">
								Tambah Data Perorangan
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{base_url}public/js/main.js"></script>