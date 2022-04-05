@extends('layout')
@section('content')
<h1>Products Creation</h1>
<hr/>
<form action="{{ route('products.store') }}" method="post">
  @csrf
  <label>Product Name:</label>
    <input type="text" name="name" class="form-control mb-3" placeholder="input Product name" />
    <label>Product Price:</label>
  <input type="text" name="price" class="form-control mb-3"  placeholder="input Product price" "/>
  <label>Product Description:</label>
  <textarea class="form-control mb-3" name="description" rows="5" placeholder="input Product description" "/>
</textarea>
  <button class="btn btn-primary" type="submit">Submit</button>
  </form>

  <div id="map" style="width:500px;height:400px;"></div>
	<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=23d9976f5adc913493c6ddad233ed417"></script>
	<script>
		var container = document.getElementById('map');
		var options = {
			center: new kakao.maps.LatLng(33.450701, 126.570667),
			level: 3
		};

		var map = new kakao.maps.Map(container, options);
	</script>
  @endsection