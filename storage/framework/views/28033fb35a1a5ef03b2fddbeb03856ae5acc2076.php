
<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="col-lg-12">
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-1 mt-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Nama</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Gede Budi Setiawan
                                </div>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    NIM</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">1815051083</div>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Program Studi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Pendidikan Teknik
                                    Informatika</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-person-booth fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-1 mt-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Judul Studi Kasus</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Sistem Penyewaan
                                    Kamera Online</div>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Deskripsi Singkat</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Sistem ini
                                    memungkinkan pengguna untuk menyewa kamera secara online</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-business-time fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card-shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Karyawan</h6>
            </div>
        </div>
        <div class="card-body">
            <a href="<?php echo e(route('karyawan.create')); ?>">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Karyawan</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php $__currentLoopData = $karyawan ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in=> $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($val->id); ?></td>
                            <td><?php echo e($val->nama_karyawan); ?></td>
                            <td><?php echo e($val->alamat); ?></td>
                            <td><?php echo e($val->no_hp); ?></td>
                            <td>
                                <a href="<?php echo e(route('karyawan.edit',$val->id)); ?>">
                                    <button type="submit" class="btn btn-outline-info"> Update</button></a>
                                <form action="<?php echo e(route('karyawan.destroy',$val->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($karyawan ?? ''->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sewa_kamera\resources\views/admin/karyawan.blade.php ENDPATH**/ ?>