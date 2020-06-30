
<?php $__env->startSection('content'); ?>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">


  <h1 class="mt-5">Koper Sewa</h1>

  
  
  <table class="table mt-5" style="vertical-align:middle">
    <thead class="thead-dark">
      <tr>
        <th>Produk</th>
        <th></th>
        <th>Harga Sewa</th>
        <th>Kuantitas</th>
        <th>Lama Sewa</th>
        <th>Total Harga</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      
       <tr>
      	 <td></td>
         <td><h4>IT Rental Gear</h4></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>

      
      <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
      <tr>
      	 <td><img src="img_avatar1.png" alt="Card image" style="width:100px"></td>
        <td style="vertical-align:middle"><?php echo e($cart -> nama_alat); ?></td>
        <td style="vertical-align:middle">Rp.<?php echo e($cart -> harga_sewa); ?></td>
        <td style="vertical-align:middle"><?php echo e($cart -> banyak_sewa); ?> Buah</td>
        <td style="vertical-align:middle"><?php echo e($cart -> lama_sewa); ?> Hari</td>
        <td style="vertical-align:middle"><font color="red"><?php echo e($cart -> lama_sewa * $cart -> banyak_sewa * $cart -> harga_sewa); ?></font></td>
        <td style="vertical-align:middle"><a href="<?php echo e($cart->id); ?>/edit" class="btn btn-primary">Ubah</a></td>
        <td style="vertical-align:middle">
        
        <form action="<?php echo e($cart->id); ?>" method="post">
        <?php echo method_field('delete'); ?>
        <?php echo csrf_field(); ?>
          <button type="submit" class="btn btn-danger">delet</button>
        </form>
        </td>
        
      </tr>
      
      <tr>
        <td></td>
         <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>

  <table class="table mt-5">
    <thead class="thead-light">
      <tr>
        <th style="text-align: center">Sub Total Produk (<?php echo e($cart -> banyak_sewa); ?> Produk)</th>
      </tr>
    </thead>
    <tbody>
    <tr>
       <th style="text-align: center"><?php echo e($cart -> lama_sewa * $cart -> banyak_sewa * $cart -> harga_sewa); ?></th>
      </tr>
       <tr>
         <td style="text-align: center"><a href="<?php echo e(Url('/pembayaran')); ?>" class="btn btn-info">Cek Out</a></td>
      </tr>
      </tbody>
  </table>
</div>

</body>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sewa_kamera\resources\views/user/transaksi.blade.php ENDPATH**/ ?>