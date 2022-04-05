@extends('layout')
@section('content')
<form action="{{ route('products.update', $product->id) }}" method="post">
    @csrf
    @method('put')
  <input type="text" name="name" class="form-control mb-3" placeholder="Product name" value="{{ $product->name }}"/>
  <input type="text" name="price" class="form-control mb-3"  placeholder="Product price" value="{{ $product->price}}"/>
  <input type="text" name="description" class="form-control mb-3" placeholder="Product description" value="{{ $product->description }}"/>
  <button class="btn btn-primary" type="submit">Submit</button>
  </form>
  @endsection