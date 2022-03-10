<html>

<head>
    <title>Alle Produkte</title>
</head>


<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Preis</th>
            <th>Beschreibung</th>

        </tr>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->price); ?></td>
            <td><a href="/product/<?php echo e($product->id); ?>">Link</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>

</html><?php /**PATH /home/vmadmin/M151/laravel/resources/views/products.blade.php ENDPATH**/ ?>