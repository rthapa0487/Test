@extends('layout.home')
@section('content')
<form method="post" action="{{url('create')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
   <a href="{{url('list')}}" class="btn btn-success">Back</a><h2> Product Detail</h2>
   <div class="row">
    <div class="form-group">
        <label>Name:</label>
        <input type="text" name="product_name"  required >
    </div>

    <div class="form-group">
        <label>Price:</label>
         <input name="product_price" type="number" required >
    </div>
    <div class="form-group">
        <label>Photo:</label>
        <input type="file" name="product_image"  accept="image/gif, image/jpeg, image/png, image/jpg" />
    </div>
    <div class="form-group">
        <label>Sku:</label>
         <input type="text"  name="product_sku" >
    </div>
    <div class="form-group">
        <label>Description:</label>
        <textarea name="product_description"> 
        </textarea>
    </div>

    <div class="form-group">
        <input type="submit" value="Save" class="btn btn-success">
    </div>
   </div>
</form>

<script>
    function 

</script>
@endsection