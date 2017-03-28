<!DOCTYPE html>
<html lang="fr">

	<head>
		<title>Factorian</title>

		
		<script type="text/javascript" src="<?php echo $view->getThemePath();?>/js/jquery-3.1.1.min.js"></script>
	    <link href="<?php echo $view->getThemePath();?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <script src="<?php echo $view->getThemePath();?>/bootstrap/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath();?>/type.css">
	    <?php Loader::element('header_required');?>
	</head>
	<div class="container">

	<body id="padtop">
		
		<div class="row">
			<nav class="navbar navbar-default" id="fondBlanc">
				<div class="col-md-2 menu-inline" id="decal-img">
					<img src="<?php echo $view->getThemePath();?>/img/logo.png">
				</div>
				<div class="col-md-10 menu-inline" id="decal-menu">

				<?php 
					$Menu = new Area('Menu');
					$Menu->display($c); 
				?>
				</div>
			</nav>
		</div>