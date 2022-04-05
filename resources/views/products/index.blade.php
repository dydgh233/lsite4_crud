 @extends('layout')
 @section('content')
 <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ( $products as $product)
          <tr>
            <th scope="row">{{ $product->id }}</th>
            <td><a href="{{ route('products.show', $product->id)}}"> {{$product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('products.show', $product->id)}}">View</a></li>
                <li><a class="dropdown-item" href="{{ route('products.edit', $product->id)}}">Edit</li>
                <li><hr class="dorpdown-divider"></li>
                <form action="{{ route('products.destroy',$product->id) }}" method="post">
                  @csrf
                  @method('delete')
                <li><button type="submit" class="dropdown-item">Delete</li>
                </form>
                </ul>
              </div>
            </td>
          </tr>
         
          @endforeach
        </tbody>
      </table>
      @stop

