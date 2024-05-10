<!DOCTYPE html>
<html lang="hu">
<head>
	<title><?= $this->fetch('title') ?></title>
	<?= $this->Html->charset() ?><!-- CharSet -->
	<?= $this->Html->meta('icon') ?><!-- Icon -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= $this->Html->css([
		'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css',	// Bootstrap icons
		'ValiAdmin./plugins/font-awesome/css/font-awesome.min',									// FontAwesome
		//'ValiAdmin./plugins/vali-admin-master/docs/css/main',							// https://github.com/pratikborsadiya/vali-admin 
		'ValiAdmin./css/main',															// https://github.com/pratikborsadiya/vali-admin 
		//'ValiAdmin./assets/simple-notify-master/dist/simple-notify',					// ToastMessage
		//'ValiAdmin./assets/sweetalert2/dist/sweetalert2.min',							// SeetAlert
		'ValiAdmin./css/header',														// This FrameWork Header
		'ValiAdmin./css/table',															// This FrameWork Table
		//'ValiAdmin./css/valiadmin',														// This FrameWork Main css
	]) ?><!-- Main CSS-->
	<?= $this->fetch('css') ?><!-- Specified CSS-->
</head>
<body class="app sidebar-mini">
	
	<?= $this->element('ValiAdmin.navbar') ?>
	
	<?= $this->element('ValiAdmin.sidebar_menu') ?>
	
	<main class="app-content">
	
		<?= $this->element('ValiAdmin.app_title') ?>

		<?= $this->fetch('content') ?>

<?php /*
		<div class="row">
			<div class="col-md-12">
				<div class="tile">
					<div class="tile-body">Create a beautiful dashboard</div>
				</div>

			</div>
		</div>
*/ ?>
	</main>

    <!-- Essential javascripts for application to work-->
	<?= $this->Html->script([
		'ValiAdmin./plugins/vali-admin-master/docs/js/jquery-3.7.0.min',	// jQuery
		'ValiAdmin./plugins/vali-admin-master/docs/js/bootstrap.min',		// Bootstrap
		'ValiAdmin./plugins/vali-admin-master/docs/js/main',				// https://github.com/pratikborsadiya/vali-admin
		//'ValiAdmin./assets/simple-notify-master/dist/simple-notify.min',	// ToastMessage
		//'ValiAdmin./assets/sweetalert2/dist/sweetalert2.all.min',			// SweetAlert
		'ValiAdmin./js/valiadmin',											// Main .js for this FrameWork
	]) ?>
	
	<?= $this->fetch('scriptBottom'); ?><!-- Page specific javascripts libs -->
	
    <!-- Page specific javascripts -->
	<?= $this->fetch('javaScriptBottom'); ?>

<?php /* if (!empty($this->getRequest()->getSession()->read('Flash'))) { ?>
	<script>
<?php //= $this->element('ValiCake.script_flash') ?>
<?php //= $this->Flash->render() ?>
	</script>
<?php } */ ?>

</body>
</html>