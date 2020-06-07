
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
        <form action="<?php echo e((isset($karyawan))?route('karyawan.update',$karyawan-> id):route('karyawan.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php if(isset($karyawan)): ?>?<?php echo method_field('PUT'); ?><?php endif; ?>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-lg-4">ID </label>
                    <div class="col-lg-6">
                        <input type="text" value="<?php echo e((isset($karyawan))?$karyawan->id:old('id')); ?>" name="id" class="form-control">
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
                    <label class="control-label col-lg-4">Nama Karyawan</label>
                    <div class="col-lg-6">
                        <input type="text" value="<?php echo e((isset($karyawan))?$karyawan->nama_karyawan:old('nama_karyawan')); ?>" name="nama_karyawan" class="form-control">
                        <?php $__errorArgs = ['nama_karyawan'];
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
                    <label class="control-label col-lg-4">Alamat</label>
                    <div class="col-lg-6">
                        <input type="text" value="<?php echo e((isset($karyawan))?$karyawan->alamat:old('alamat')); ?>" name="alamat" class="form-control">
                        <?php $__errorArgs = ['alamat'];
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
                    <label class="control-label col-lg-4">No.Hp</label>
                    <div class="col-lg-6">
                        <input type="text" value="<?php echo e((isset($karyawan))?$karyawan->no_hp:old('no_hp')); ?>"  name="no_hp" class="form-control">
                        <?php $__errorArgs = ['no_hp'];
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
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sewa_kamera\resources\views/admin/inputkaryawan.blade.php ENDPATH**/ ?>