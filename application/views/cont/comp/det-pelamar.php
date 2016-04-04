<div class="ui grid fluid computer large monitor desktop tablet only padded divided" style="padding-top:3rem;">
	<?php $this->load->view('nav/nav-comp'); ?>
	<div class="nine wide column">
		<div class="ui tall stacked segment">
			<div class="ui grid fluid computer large monitor desktop tablet only">
				<div class="fourteen wide column">
					<div class="ui items">
						<div class="item">
							<div class="image">
								<img src="{base_url}public/image/image.png">
							</div>
							<div class="content">
								<a class="header">{Nama Tamatan}</a>
								<div class="meta">
									<span>{Kompetensi Keahlian}</span>
								</div>
								<div class="description">
									<!-- <span>{Kompetensi Keahlian}</span> -->
									<p><i class="university icon"></i> {Asal Sekolah}</p>
								</div>
								<div class="extra">
									<i class="marker icon"></i>{Alamat Sekolah}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <h2 class="ui header">Statistik Tamatan</h2> -->
			<div class="ui grid fluid computer large monitor desktop tablet only">
				<div class="sixteen wide column" style="min-height: 500px">
					<div class="ui top attached tabular menu">
						<a class="active item" data-tab="first">Data Pelamar</a>
						<a class="item" data-tab="second">Biodata</a>
						<a class="item" data-tab="third">Data Tamatan</a>
					</div>
					<div class="ui bottom attached active tab segment" data-tab="first">
						First
					</div>
					<div class="ui bottom attached tab segment" data-tab="second">
						Second
					</div>
					<div class="ui bottom attached tab segment" data-tab="third">
						Third
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="two wide column">
		<div class="ui vertical fluid labeled icon menu" style="top: 4rem;">
			<a href="#" class="item"><i class="check icon"></i>Terima</a>
			<a href="#" class="item"><i class="minus circle icon"></i>Tolak</a>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.menu .item').tab();
</script>
<script type="text/javascript" src="{base_url}public/js/main.js"></script>