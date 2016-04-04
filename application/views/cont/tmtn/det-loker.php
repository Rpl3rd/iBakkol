<div class="ui grid fluid computer large monitor desktop tablet only padded divided" style="padding-top:3rem;">
	<?php $this->load->view('nav/nav-tmtn'); ?>
	<div class="nine wide column">
		<div class="ui tall stacked segment">
			<div class="ui grid fluid">
				<div class="sixteen wide column">
					<header class="ui secondary pointing menu top large horizontal">
						<a href="{base_url}" class="header item"><i class="arrow left icon"></i></a>
						<div class="floated right header item">
							{Judul Loker}
						</div>
					</header>
				</div>
			</div>
			<div class="ui grid fluid computer large monitor desktop tablet only">
				<div class="fourteen wide column">
					<div class="ui items">
						<div class="item">
							<div class="image">
								<img src="{base_url}public/image/image.png">
							</div>
							<div class="content">
								<a class="header">{Nama Perusahaan}</a>
								<div class="meta">
									<span>{Kategori Usaha}</span>
								</div>
								<!-- <div class="description">
									<p><i class="university icon"></i> {Asal Sekolah}</p>
								</div> -->
								<div class="extra">
									<i class="marker icon"></i>{Alamat Loker}
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
			<a href="#" class="item"><i class="send icon"></i>Kirim Lamaran</a>
			<a href="#" class="item"><i class="empty star circle icon"></i>Jadikan Favorite</a>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.menu .item').tab();
</script>
<script type="text/javascript" src="{base_url}public/js/main.js"></script>