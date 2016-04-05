<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <!--<![endif]-->
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{title}</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{base_url}public/semantic.min.css">
	<link rel="stylesheet" href="{base_url}public/css/main.css">
	<script type="text/javascript" src="{base_url}public/js/jquery.min.js"></script>
	<script type="text/javascript" src="{base_url}public/semantic.min.js"></script>
</head>
<body>
	<header class="ui menu top fixed large horizontal inverted teal">
		<div class="ui container">
			<a href="{base_url}" class="header item">{ iBakkol }</a>
			<div class="item right">
				<div class="ui inverted transparent left icon input full width">
					<input placeholder="Cari Sesuatu ..." type="text">
					<i class="icon link search"></i>
				</div>
			</div>
			<div class="right menu">
				<a href="{base_url}" class="item"><i class="icon home"></i></a>
				<a href="{base_url}messages" class="item">
					<i class="icon mail"></i>
					<i class="ui label floating red circular tiny">25</i>
				</a>
				<div class="ui inline dropdown item">
					<i class="icon world"></i><i class="ui label floating red circular tiny">50+</i>
					<div class="menu">
						<div class="item">
							<label for="">Hello</label>
						</div>
					</div>
				</div>
				<div class="ui dropdown item">{User}
					<i class="dropdown icon"></i>
					<div class="menu transition hidden">
						<div class="item"><i class="edit icon"></i> Perbarui Profile</div>
						<div class="item"><i class="sign out icon"></i> Keluar</div>
					</div>
				</div>
			</div>
		</div>
	</header>