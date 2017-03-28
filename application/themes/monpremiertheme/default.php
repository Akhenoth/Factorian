<?php echo $this->getThemePath();?>
<!DOCTYPE html>
<html>

	<head>
		<title>Factorian</title>
    	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="type.css">
		<?php Loader::element('header_required'); ?>
		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
	
	<?php $a = new Area('Main'); $a->display($c); ?>

	</body>
	<?php Loader::element('footer_required');?>
</html>