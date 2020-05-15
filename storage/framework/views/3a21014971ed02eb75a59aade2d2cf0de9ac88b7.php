
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
        <form action="<?php echo e((isset($kamera))?route('kamera.update',$kamera-> id):route('kamera.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php if(isset($kamera)): ?>?<?php echo method_field('PUT'); ?><?php endif; ?>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-lg-4">ID </label>
                    <div class="col-lg-6">
                        <input type="text" value="<?php echo e((isset($kamera))?$kamera->id:old('id')); ?>" name="id" class="form-control">
                        <?php $__errorArgs = ['id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:red"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-4">Nama Kamera / Aksesoris</label>
                    <div class="col-lg-6">
                        <input type="text" value="<?php echo e((isset($kamera))?$kamera->nama_kamera:old('nama_kamera')); ?>" name="nama_kamera" class="form-control">
                        <?php $__errorArgs = ['nama_kamera'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:red"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-4">Seri Kamera</label>
                    <div class="col-lg-6">
                        <input type="text" value="<?php echo e((isset($kamera))?$kamera->seri_kamera:old('seri_kamera')); ?>" name="seri_kamera" class="form-control">
                        <?php $__errorArgs = ['seri kamera'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:red"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-4">Harga Sewa</label>
                    <div class="col-lg-6">
                        <input type="text" value="<?php echo e((isset($kamera))?$kamera->harga_sewa:old('harga_sewa')); ?>"  name="harga_sewa" class="form-control">
                        <?php $__errorArgs = ['harga_sewa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:red"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
            </div>
        </form>
        

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sewa_kamera\resources\views/admin/inputkamera.blade.php ENDPATH**/ ?>