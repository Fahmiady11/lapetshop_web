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
                            <li class="breadcrumb-item active">
                                Profile
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col pl-lg-0">
                    <div class="card card-details">
                        <div class="container">
                            <div class="col">

                                <form method="post" action="/profil" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php if(session('updatemessage')): ?>
                                        <div class="alert alert-success"><?php echo e(session('updatemessage')); ?></div>
                                    <?php endif; ?>
                                    <input type="hidden" name="id" value="<?php echo e($user->IdUser); ?>">
                                    <input type="hidden" name="gambarLama" value="">
                                    <div class="brand " style="text-align: center;">
                                        <img src="/img/<?php echo e($user->Icon); ?>" style="width: 250px;" alt="logo">
                                    </div>

                                    <div class="mb-3 row align-self-center">
                                        <label for="formFileMultiple" class="form-label">Edit Foto</label>
                                        <input class="form-control" type="file" id="inputGroupFile04" name="gambar">
                                    </div>
                                    <div class="form-group row align-self-center mb-3">
                                        <label for="nama">Username</label>
                                        <input value="<?php echo e(old('nama', $user->UserName)); ?>" id="nama" type="text" class="form-control" name="nama" placeholder="Masukkan username baru" required autofocus>
                                    </div>
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
                                    <div class="form-group row align-self-center mb-3">
                                        <label for="email">email</label>
                                        <input value="<?php echo e(old('email', $user->Email)); ?>" id="email" type="text" class="form-control" name="email" placeholder="Masukkan email baru" required autofocus>
                                    </div>
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
                                    <div class="form-group row align-self-center mb-3">
                                        <label for="password">Password</label>
                                        <input id="password" value="<?php echo e(old('password')); ?>" type="password" class="form-control" name="password" placeholder="Masukkan password baru" required autofocus>
                                    </div>
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
                                    <div class="form-group row align-self-center mb-3">
                                        <label for="password2">Konfirmasi Password</label>
                                        <input id="password2" value="<?php echo e(old('password2')); ?>" type="password" class="form-control" name="password2" placeholder="Masukkan konfirmasi password baru" required autofocus>
                                    </div>
                                    <?php $__errorArgs = ['password2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="text-danger mt-2"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <div class="form-group align-self-center pt-4">
                                        <button type="submit" name="submit" class="btn btn-block btn-join-now mt-4 px-4 rounded">Edit Profile</submit>
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
<?php endif; ?><?php /**PATH D:\KULIAH\TUGAS\paw\lapetshop\resources\views/TugasPaw/profil.blade.php ENDPATH**/ ?>