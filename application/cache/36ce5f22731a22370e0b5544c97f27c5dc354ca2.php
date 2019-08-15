<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $__env->startSection('header'); ?>
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="container">
	<h1><?php echo e($blog_heading); ?></h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
		
		<p>If you would like to edit base part of this page you'll find it located at:</p>
		<code>application/views/index.blade.php and <br/>application/views/partials/header.blade.php<br/></code>

		<p>If you would like to edit this page content you'll find it located at:</p>
		<code>application/views/welcome/message.blade.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/modules/welcome/controllers/Welcome.php</code>
		
		<p>And base controller for this application is found at:</p>
		<code>application/core/MY_Controller.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../partials/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('../index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\cihmvcblade\application\views/welcome/message.blade.php ENDPATH**/ ?>