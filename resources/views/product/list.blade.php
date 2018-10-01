@extends('layout.home')
@section('content')
     <a href="create" class="btn btn-success">Add New Product</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Picture</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>  
         @foreach($products as $product) 
          <tr>
              <td><a href="{{url('view/'.$product['product_id'])}}">{{$product['product_name']}}</a></td>
              <td>
                <a href="{{url('view/'.$product['product_id'])}}"><img src="../{{$product['product_image']}}" height="70"></a>
             </td>
              <td>${{number_format($product['product_price'], 2)}}</td>
              <td>
                <a href="{{url('update/'.$product['product_id'])}}">Edit</a>
                <a href="{{url('delete/'.$product['product_id'])}}">Delete</a>
              </td>
          </tr>
         @endforeach             
        </tbody>        
    </table> 

    <p class="pull-right">
    {{ $products->links() }}
    </p>  
@endsection