<html>

<head>
    <title>Alle Produkte</title>
</head>

<body>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php echo e($product->name); ?>

    <?php echo e($product->price); ?>

    <a href="/product/<?php echo e($product->id); ?>">Details</a>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>

</html><?php /**PATH /home/vmadmin/M151/laravel/resources/views/products.blade.php ENDPATH**/ ?>