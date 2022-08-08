<?php if (isset($component)) { $__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Layout::class, []); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <main class="container mt-10">
        <h1 class="text-center text-shadow">Selamat Datang <?php echo e($user->UserName); ?></h1>
        <h1 class="text-center text-shadow">Di TOKO <span class="text-shadow" style="color:#1BAECE;">LA</span>PETSHOP</h1>
        <p class="text-center text-shadow">Toko ini Menyediakan beberapa perlengkapan <br> hewan seperti makanan,alat,mainan,accesoris dan perawatan hewan</p>
        <div class="form-group mt-4 text-center">
            <button type="submit" style="background-color:#1BAECE;" class="btn btn-block box-shadow">
                
                <a class="text-white text-shadow" style="text-decoration: none;" href="/category">Mulai Berbelanja</a>
            </button>
        </div>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30)): ?>
<?php $component = $__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30; ?>
<?php unset($__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30); ?>
<?php endif; ?><?php /**PATH D:\KULIAH\TUGAS\paw\lapetshop\resources\views/TugasPaw/home.blade.php ENDPATH**/ ?>