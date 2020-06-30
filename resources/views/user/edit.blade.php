@extends('layout.beda')
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

  <h1 class="mt-5">Detail Sewa</h1>
  <form method="post" action="/{{$cart->id}}">
  @method('patch')
  @csrf
  
  <table class="table mt-5" style="vertical-align:middle">
    <thead class="thead-dark">
      <tr>
        <th>Produk</th>
        <th></th>
        <th>Harga Sewa</th>
        <th>Kuantitas</th>
        <th>Lama Sewa</th>
        
        
      </tr>
    </thead>
    <tbody>
    
    <tr>
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
        
         
      </tr>

      
      
      
      <tr>
      	 <td><img src="img_avatar1.png" alt="Card image" style="width:100px"></td>
        <td style="vertical-align:middle">{{ $cart -> nama_alat}}</td>
        <td style="vertical-align:middle">Rp.{{ $cart -> harga_sewa}}</td>
        <td style="vertical-align:middle">
            <div class="form-group">
                <label for="banyak_sewa"></label>
                <input type="text" class="form-control" id="banyak_sewa" placeholder="{{ $cart -> banyak_sewa}} Buah" name="banyak_sewa" value="{{$cart->banyak_sewa}}">
            </div>
        </td>
        <td style="vertical-align:middle">
            <div class="form-group">
                <label for="lama_sewa"></label>
                <input type="text" class="form-control" id="lama_sewa" placeholder="{{ $cart -> lama_sewa}} Hari" name="lama_sewa" value="{{$cart->lama_sewa}}">
            </div>
        </td>
        

       
        
      </tr>
      
      <tr>
        <td></td>
         <td></td>
        <td></td>
        <td></td>
        <td></td>
        
        
      </tr>
      
    </tbody>
  </table>

  <table class="table mt-5">
    <thead class="thead-light">
      <tr>
        <th style="text-align: center">Sub Total Produk ({{ $cart -> banyak_sewa}} Produk)</th>
      </tr>
    </thead>
    <tbody>
    <tr>
       <th style="text-align: center">Rp.{{ $cart -> lama_sewa * $cart -> banyak_sewa * $cart -> harga_sewa }},-</th>
      </tr>
       <tr>
         <td style="text-align: center"><button type="submit" class="btn btn-info">Submit</button></td>
      </tr>
      </tbody>
  </table>
  </form>
</div>

</body>


@endsection

