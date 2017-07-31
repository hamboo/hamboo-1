<html class="no-js" lang="en" dir="ltr">
<head>
<?php echo $__env->make('template.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<?php echo $__env->make('template.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
    
<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('template.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('template.jsfooter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>