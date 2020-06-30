
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="col-lg-12">
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-12">ID</label>
                <div class="col-lg-10">
                    <input type="text" name="id_kamera" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-12">Nama Kamera / Aksesoris</label>
                <div class="col-lg-10">
                    <input type="text" name="nama_kamera" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-12">Seri Kamera/ Aksesoris</label>
                <div class="col-lg-10">
                    <input type="text" name="seri_kamera" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-12">Harga Sewa</label>
                <div class="col-lg-10">
                    <input type="text" name="harga_sewa" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <button type="submit">SIMPAN</button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xmpp\htdocs\sewa_kamera\resources\views/admin/inputkamera.blade.php ENDPATH**/ ?>