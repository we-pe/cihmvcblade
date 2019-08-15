<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	
	<?php echo $__env->yieldContent('header'); ?>
</head>
<body>
	<?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php echo $__env->make('partials/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\cihmvcblade\application\views/index.blade.php ENDPATH**/ ?>