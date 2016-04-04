<div class="ui grid fluid computer large monitor desktop tablet only padded divided" style="padding-top:3rem;">
	<?php $this->load->view('nav/nav-tmtn'); ?>
	<div class="eleven wide column">
		<?php $bla = array('a', 'a', 'a', 'a', 'a', 'a', 'a', 'a');
		foreach ($bla as $key): ?>
		<div class="ui tall stacked segment">
			<div class="ui fluid grid">
				<div class="nine wide column">
					<div class="ui items">
						<div class="item">
							<a class="image" href="#">
								<img src="{base_url}public/image/image.png">
							</a>
							<div class="content">
								<a class="header" href="#">{Judul Loker}</a>
								<div class="description">
									<p><i class="building icon"></i>{Nama Perusahaan}</p>
								</div>
								<div class="meta">
									<span><i class="marker icon"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span>
									</div>
								<!-- <div class="extra">
										<a href="#"><i class="unhide grey icon huge"></i></a>
										<a href="#"><i class="check grey icon huge"></i></a>
										<a href="#"><i class="minus grey circle icon huge"></i></a>
									</div> -->
								</div>
							</div>
						</div>
					</div>
					<div class="six wide column">
						<div class="ui items">
							<div class="item">
								<div class="content">
									<div class="description">
										<div class="right floated">
											<p><i class="wait icon"></i>{dipost pada tanggal}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>
<script type="text/javascript" src="{base_url}public/js/main.js"></script>