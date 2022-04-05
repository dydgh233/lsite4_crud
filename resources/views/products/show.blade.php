@extends('layout')
@section('content')
<div>
    <h4>Product Name</h4>
    <p>{{ $product->name }}</p>

    <h4>Product Price</h4>
    <p>{{ $product->price }}</p>
    
    <h4>Product Description</h4>
    <p>{{ $product->description }}</p>
</div>

@endsection