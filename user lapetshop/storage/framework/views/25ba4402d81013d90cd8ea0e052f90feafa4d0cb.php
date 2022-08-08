<?php if (isset($component)) { $__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Layout::class, []); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <!---main--->
    <section class="section-details-header bg-white"></section>
    <section class="section-details-content bg-white">
        <main class="container">
            <div class="section-success d-flex align-items-center">
                <div class="col text-center">
                    <img src="/frontend/images/success.png" alt="">
                    <h1>Yay! Success</h1>
                    <p>We’ve sent you email for trip instruction <br>
                        please read it as well</p>
                    <a href="/status" class="btn btn-home-page mt-3 px-5">Pembelian Page</a>
                </div>
            </div>
        </main>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30)): ?>
<?php $component = $__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30; ?>
<?php unset($__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30); ?>
<?php endif; ?><?php /**PATH D:\KULIAH\TUGAS\paw\lapetshop\resources\views/TugasPaw/success.blade.php ENDPATH**/ ?>