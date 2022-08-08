<?php if (isset($component)) { $__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Layout::class, ['layout' => 'login']); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <main>
        <section class="section-details-header bg-white"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details mt-4 border-0">
                            <div class="m-2">
                                <h1 class="color-dark fw-bold fs-1 text-shadow ">LAPETSHOP</h1>
                                <p class="fw-normal fs-1 lh-sm text-dark text-shadow opacity-75" style="font-size: 44px;"> Toko Perlengkapan Hewan<br>Lamongan</p>
                            </div>
                            <div class="row">
                                <div class="container ">
                                    <div class="center">
                                        <img class="drop-shadow" src="<?php echo e(asset('img/Delievery.png')); ?>" style="max-width: 700px;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="card card-details border-0 card-right mt-4 mb-4">
                            <div class="container">
                                <div class="row justify-content-md-center h-100">
                                    <div class="card-wrapper bg-trasparant" style="width: 450px;">
                                        <div class="card-header bg-transparent mb-0">
                                        <h5 class="text-center text-shadow">LAPETSHOP <span class="font-weight-bold text-danger text-shadow">REGISTER</span></h5>
                                        </div>
                                        <form action="/register" method="post" class="my-login-validation" novalidate="">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input id="nama" type="text" class="form-control" name="nama" placeholder="Full name" required autofocus>
                                                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="text-danger mt-2"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">E-Mail</label>
                                                <input id="email" type="email" class="form-control" name="email" placeholder="email@example.com" required>
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="text-danger mt-2"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input id="password" type="password" class="form-control" name="password" placeholder="Your Password" required data-eye>
                                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="text-danger mt-2"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Confirm Password
                                                </label>
                                                <input id="password" type="password" class="form-control" name="passwordConfirm" placeholder="Confirm Password" required data-eye>
                                                <?php $__errorArgs = ['passwordConfirm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="text-danger mt-2"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="form-group m-0 text-center">
                                                <br><button type="submit" name="register" class="btn btn-primary btn-block box-shadow">Register</button>
                                            </div>
                                            <div class="mt-4 text-center">
                                                Already have an account? <a href="/login" class="text-danger">LOGIN</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
        </section>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30)): ?>
<?php $component = $__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30; ?>
<?php unset($__componentOriginalba35371caef1eeddf45260937599d5fd5fb5dd30); ?>
<?php endif; ?><?php /**PATH D:\KULIAH\TUGAS\paw\lapetshop\resources\views/TugasPaw/register.blade.php ENDPATH**/ ?>