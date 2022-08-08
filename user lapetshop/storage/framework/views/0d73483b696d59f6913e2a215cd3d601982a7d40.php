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
                            <li class="breadcrumb-item active ">
                                Keranjang
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col pl-lg-0">
                    <div class="card card-details">
                        <div class="container">
                            <div class="text-left">
                                <a href="/category" style="background-color:#EF5B00; color:white" class="btn px-4 box-shadow ">Tambah Barang</a>
                            </div>

                            <form action="/keranjang" method="post">
                                <?php echo csrf_field(); ?>
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td></td>
                                            <td>Gambar</td>
                                            <td>Nama barang</td>
                                            <td>Harga Barang</td>
                                            <td>Jumlah</td>
                                            <td>Total</td>
                                            <td>Hapus</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td> <input class="form-check-input mt-3 ms-4" type="checkbox" value="<?php echo e($item->IdProduct); ?>" id="flexCheckDefault" name="daftar[]"></td>
                                                <input type="hidden" name="idproduct[]" value="<?php echo e($item->IdProduct); ?>">
                                                <td>
                                                    <img src="/img/<?php echo e($item->products->Icon); ?>" height="60">
                                                </td>
                                                <td class="align-middle"><?php echo e($item->products->ProductName); ?></td>
                                                <td class="align-middle">Rp.<?php echo e($item->products->Price); ?>/pcs</td>
                                                <td class="align-middle">
                                                    <input class="form-control text-center" type="number" value="1" min="1" name="jumlah[]">
                                                </td>
                                                <td class="align-middle">Rp.<?php echo e($item->products->Price); ?></td>
                                                <td class="align-middle">
                                                    <a href="/keranjang/<?php echo e($item->IdProduct); ?>/destroy">
                                                        <img style="width:32px;" src="/img/delete.png" alt="">
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </tbody>
                                </table>
                                <hr class="mt-4">
                                <div class="d-flex justify-content-end ">
                                    <p class="text-dark">Total (<span>4</span> Produk): <span class="text-danger">Rp.696.000</span></p>
                                </div>
                                <div class="d-flex justify-content-end ">
                                    <div class="">
                                        <button type="submit" style="background-color:#EF5B00; color:white" class="btn px-4 box-shadow ">Checkot</button>
                                    </div>
                                </div>
                            </form>
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
<?php endif; ?><?php /**PATH D:\KULIAH\TUGAS\paw\lapetshop\resources\views/TugasPaw/keranjang.blade.php ENDPATH**/ ?>