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
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Home
                            </li>
                            <li class="breadcrumb-item">
                                Keranjang
                            </li>
                            <li class="breadcrumb-item active ">
                                Pembayaran
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col pl-lg-0">
                    <div class="card card-details">
                        <div class="container">
                            <?php $__errorArgs = ['buktimessage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div class="d-flex justify-content-evenly align-items-center">
                                <div class="card box-shadow border" style="width: 18rem;">
                                    <img src="<?php echo e(asset('img/bni.png')); ?>" class="card-img-center" alt="">
                                    <div class="card-body">
                                        <p class="text-dark text-center" style="font-size:14px">PT BANK NEGARA INDONESIA</p>
                                        <h5 class="card-title" style="font-size: 16px; text-align: center;">823487872472347</h5>
                                        <p style="font-size: 12px; text-align: center;" class="text-danger">A.N Harum Namanya</p>
                                    </div>
                                </div>
                                <div class="card box-shadow border" style="width: 18rem;">
                                    <img src="<?php echo e(asset('img/bri.png')); ?>" class="card-img-center" alt="">
                                    <div class="card-body">
                                        <p class="text-dark text-center" style="font-size:14px">PT BANK NEGARA INDONESIA</p>
                                        <h5 class="card-title" style="font-size: 16px; text-align: center;">823487872472347</h5>
                                        <p style="font-size: 12px; text-align: center;" class="text-danger">A.N Harum Namanya</p>
                                    </div>
                                </div>
                                <div class="card box-shadow border" style="width: 18rem;">
                                    <img src="<?php echo e(asset('img/ovo.png')); ?>" class="card-img-center" alt="">
                                    <div class="card-body">
                                        <p class="text-dark text-center" style="font-size:14px">PT BANK NEGARA INDONESIA</p>
                                        <h5 class="card-title" style="font-size: 16px; text-align: center;">823487872472347</h5>
                                        <p style="font-size: 12px; text-align: center;" class="text-danger">A.N Harum Namanya</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-column mt-4">
                                <div>
                                    <h2>
                                        No Id: <?php echo e(session('pembayaran')); ?>

                                    </h2>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center flex-column mt-2">
                                <form action="/pembayaran" method="post"  enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <h2>Uploud Bukti</h2>
                                    <input type="hidden" name="pembayaran" value="<?php echo e(session('pembayaran')); ?>">
                                    <div class="mb-3">
                                        
                                        <input class="form-control" type="file" id="formFile" name="bukti">
                                    </div>
                                    <?php $__errorArgs = ['bukti'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="text-danger mt-2"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <div class="">
                                        <button type="submit" style="background-color:#EF5B00; color:white" class="btn px-4 box-shadow ">Konfirmasi Pembayaran</button>
                                    </div>
                                </form>
                            </div>


                        </div>

                    </div>
                </div>
            </div>

    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30)): ?>
<?php $component = $__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30; ?>
<?php unset($__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30); ?>
<?php endif; ?><?php /**PATH D:\KULIAH\TUGAS\paw\lapetshop\resources\views/TugasPaw/pembayaran.blade.php ENDPATH**/ ?>