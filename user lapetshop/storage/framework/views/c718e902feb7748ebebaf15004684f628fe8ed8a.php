<?php if (isset($component)) { $__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Layout::class, []); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <!---main--->
    <section class="section-details-header"></section>
    <section class="section-details-content">

        <div class="container">
            

            <div class="container mt-1 mb-4">
                <div class="container mb-4">
                    <h4>Hasil pencarian "<?php echo e($filter); ?>"</h4>
                </div>
                <?php if(session('producteror')): ?>
                    <div class="alert alert-danger"><?php echo e(session('producteror')); ?></div>
                <?php endif; ?>
                <div class="d-flex justify-content-start align-content-center flex-wrap">
                    
                    <?php if($products->count()==0): ?>
                        <div>
                            <h2>No search results found</h2>
                        </div>
                    <?php else: ?>
                        <?php $__errorArgs = ['producteror'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-auto mb-3 me-4">
                                <div class="card box-shadow border" style="width: 14rem;">
                                    <img src="/img/<?php echo e($product->Icon); ?>" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 16px; text-align: center;"><?php echo e($product->ProductName); ?></h5>
                                        <p style="font-size: 10px; text-align: center;">Rp.<?php echo e($product->Price); ?>/pcs</p>
                                        <div class="text-center">
                                            <a href="/category/<?php echo e($product->IdProduct); ?>/add" class="btn btn-primary px-4 box-shadow ">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>

            
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30)): ?>
<?php $component = $__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30; ?>
<?php unset($__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30); ?>
<?php endif; ?><?php /**PATH D:\KULIAH\TUGAS\paw\lapetshop\resources\views/TugasPaw/search.blade.php ENDPATH**/ ?>