<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo e(asset('style/assets/scss/main.css')); ?>" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/stylelogin.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/detail.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/node_modules/@fortawesome/css/all.min.css')); ?>">

    <title>Halaman <?php echo e($title); ?></title>
</head>

<body class="bg-white">
    <!-- nav -->
    <?php if($layout == 'main' ): ?>
        <?php if (isset($component)) { $__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navbar::class, []); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c)): ?>
<?php $component = $__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c; ?>
<?php unset($__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c); ?>
<?php endif; ?>
    <?php endif; ?>

    <!---main--->
        <?php echo e($slot); ?>

    
    <!-- footer -->
    <?php if($layout == 'main'): ?>
        <?php if (isset($component)) { $__componentOriginalb06bfffc9c9df85c0c8c3f3bb46792471cac3062 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Footbar::class, []); ?>
<?php $component->withName('footbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb06bfffc9c9df85c0c8c3f3bb46792471cac3062)): ?>
<?php $component = $__componentOriginalb06bfffc9c9df85c0c8c3f3bb46792471cac3062; ?>
<?php unset($__componentOriginalb06bfffc9c9df85c0c8c3f3bb46792471cac3062); ?>
<?php endif; ?>
    <?php endif; ?>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('style/node_modules/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    
</body>

</html><?php /**PATH D:\KULIAH\TUGAS\paw\lapetshop\resources\views/components/layout.blade.php ENDPATH**/ ?>