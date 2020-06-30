@extends('layout.admin')
@section('content')
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
  <h2 class="mb-5 mt-3">Pembayaran</h2>           
  <table class="table table-borderless">
    <thead class="thead-dark">
      <tr>
        <th>Produk Dipesan</th>
        <th></th>
        <th>Harga sewa</th>
        <th>Lama Sewa</th>
        <th>Jumlah Sewa</th>
      </tr>
    </thead>
    <tbody>
     <tr>
        <td style="text-align:right"><h4><font color="orange">Tracert Camera |</font></h4></td>
        <td ><a href="#" class="btn btn-success">Whatsapp</a></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    
      <tr>
        <td><img src="img_avatar1.png" alt="Card image" style="width:70px"></td>
        <td style="vertical-align:middle">Sony a7III lensa kit + GM 85mm f1.8</td>
        <td style="vertical-align:middle">Rp300.000</td>
        <td style="vertical-align:middle">4hari</td>
        <td style="vertical-align:middle">2</td>
      </tr>
      
      
      <thead class="thead-light">
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th>Total Pesanan (2produk):</th>
        <th>Rp2.400.000</th>
      </tr>
    </thead>
    
    </tbody>
    
    
    <tbody class="mt-5">
      
     <tr>
        <td style="text-align:right"><h4><font color="orange">Tracert Camera |</font></h4></td>
        <td ><a href="#" class="btn btn-success">Whatsapp</a></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    
      <tr>
        <td><img src="img_avatar1.png" alt="Card image" style="width:70px"></td>
        <td style="vertical-align:middle">Sony a7III lensa kit + Zeis 35mm f1.8</td>
        <td style="vertical-align:middle">Rp2500.000</td>
        <td style="vertical-align:middle">2hari</td>
        <td style="vertical-align:middle">1</td>
      </tr>
      
      
      <thead class="thead-light">
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th>Total Pesanan (1produk):</th>
        <th>Rp500.000</th>
      </tr>
    </thead>
    
    </tbody>
  </table>
</div>

</body>


@endsection

