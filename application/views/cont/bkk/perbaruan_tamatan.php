<div class="ui grid fluid computer large monitor desktop tablet only padded divided" style="padding-top:3rem;">
	<?php $this->load->view('nav/nav-bkk'); ?>
	<div class="eleven wide column">
	<?php $bla = array('a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'); 
	foreach ($bla as $key): ?>
		<div class="ui tall stacked segment">
			<div class="ui items">
				<div class="item">
					<div class="image">
						<img src="{base_url}public/image/image.png">
					</div>
					<div class="content">
						<a class="header">{Nama Tamatan}</a>
						<div class="meta">
							<span><i class="wait icon"></i>{diperbarui pada}</span>
						</div>
						<div class="extra">
							<a href="#"><i class="unhide grey icon huge"></i></a>
							<a href="#"><i class="check grey icon huge"></i></a>
							<a href="#"><i class="minus grey circle icon huge"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach ?>
	</div>
</div>
<script type="text/javascript" src="{base_url}public/js/main.js"></script>