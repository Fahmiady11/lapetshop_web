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
                </div>
            </div>
            <div class="row">
                <div class="col pl-lg-0">
                    <div class="card card-details">
                        <div class="container">
                            <div class="text-left">
                                <h2>Status Pembelian</h2>
                            </div>
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>No Id</td>
                                        <td>Jumlah barang</td>
                                        <td>Harga Barang</td>
                                        <td>Total Harga</td>
                                        <td>Tanggal Pembayaran</td>
                                        <td>Tanggal Sampai</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $cart->cartitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="align-middle"><?php echo e($cart->IdPurchase); ?></td>
                                            <td class="align-middle"><?php echo e($item->Amount); ?></td>
                                            <td class="align-middle">Rp. <?php echo e($item->Price); ?></td>
                                            <td class="align-middle">Rp. <?php echo e($item->Price*$item->Amount); ?></td>
                                            <td class="align-middle"><?php echo e($cart->DatePurchase); ?></td>
                                            <td class="align-middle">
                                                <?php if($cart->DeliveryStatus=='terkirim'): ?>
                                                    <?php echo e($cart->EstimateDelivery); ?>

                                                <?php else: ?>
                                                    -
                                                <?php endif; ?>
                                            </td>
                                            <?php if($cart->DeliveryStatus=='terkirim'): ?>
                                                <td class="align-middle">
                                                    <a class="btn btn-success">Terkirim</a>
                                                </td>
                                            <?php elseif($cart->DeliveryStatus=='kemas'): ?>
                                                <td class="align-middle">
                                                    <a class="btn btn-warning">Kemas</a>
                                                </td>
                                            <?php elseif($cart->DeliveryStatus=='proses'): ?>
                                                <td class="align-middle">
                                                    <a class="btn btn-danger">Proses</a>
                                                </td>
                                            <?php endif; ?>
                                            
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </tbody>
                            </table>
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
<?php endif; ?><?php /**PATH D:\KULIAH\TUGAS\paw\lapetshop\resources\views/TugasPaw/status.blade.php ENDPATH**/ ?>