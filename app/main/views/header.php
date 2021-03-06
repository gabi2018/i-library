<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta http-equiv="X-UA-Compatible" content="id=edge">
		<title><?php echo SITENAME; ?></title>
		<link rel="icon" href="<?php echo URL_ROUTE ?>/media/images/system/favicon.png" type="image/png">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo URL_ROUTE ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo URL_ROUTE ?>/css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="<?php echo URL_ROUTE ?>/css/bootstrap-reboot.min.css">
		<link rel="stylesheet" href="<?php echo URL_ROUTE ?>/css/style.css">
		<script type="text/javascript" src="<?php echo URL_ROUTE;?>js/jquery-3.3.1.min.js"></script>
	</head>
	<body style="background-color: #f2f7ff;">
		<?php require_once APP_ROUTE . '/main/views/nav.php'; ?> 
		<div class="container-fluid">
			<div class="row" bgcoluor="#E2EEF8">
				<div class="col-2">
					<?php require_once APP_ROUTE . '/main/views/nav-lateral.php'; ?>
				</div>
				<div class="col-10 mt-5">