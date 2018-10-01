@extends('layout.home')
@section('content')
   <a href="../list" class="btn btn-success">Back</a><h2> Product Detail</h2>
   <div class="row">
    <div class="form-group">
        <label for="inputEmail">Name:</label>
        {{$product['product_name']}}
    </div>

    <div class="form-group">
        <label for="inputEmail">Price:</label>
         ${{number_format($product['product_price'], 2)}}
    </div>
    <div class="form-group">
        <label for="inputEmail">Photo:</label>
        <img src="../../{{$product['product_image']}}" height="252">
    </div>
    <div class="form-group">
        <label for="inputEmail">Sku:</label>
        {{$product['product_sku']}}
    </div>
    <div class="form-group">
        <label for="inputEmail">Description:</label>
        {{$product['product_description']}}
    </div>
   </div>
@endsection