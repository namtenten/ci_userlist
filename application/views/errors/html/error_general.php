<?php
$title = 'Error page';
include(APPPATH.'views/layouts/header.php');
?>

<div class="body">
	<div class="card">
		<div class="card-header"><?php echo ($heading ?? 'Error page'); ?></div>
		<div class="card-body">
			<?php echo $message; ?>
		</div>
		<div class="card-footer text-center">
			<a href="javascript:history.back(1);" class="btn btn-secondary">Back to previous page</a>
			<a href="<?php echo base_url();?>" class="btn btn-primary"><i class="fas fa-home"></i> Home page</a>
		</div>
	</div>
</div>

<?php include(APPPATH.'views/layouts/footer.php'); ?>
