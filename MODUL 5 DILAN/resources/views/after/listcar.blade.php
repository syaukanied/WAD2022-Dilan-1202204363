@extends('after.header')
@section('content')
 @auth

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>List Car | Dilan_1202204363</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

</head>

<body>

  <!-- List Start -->
  <section style="margin: 40px; margin-top: -40px" id="list">
  <h1>My Car</h1>
    <div class="card">
      <div>
        <div class="d-flex gap-5">
        <div class="row">
        <h4><a href=""></a></h4>
          @foreach($products as $product)
          <tr>
							<td><img src="/image/{{$product->image}}" /></td>
							<td class="cart_description">
								<h4><a href="">{{$product->name}}</a></h4>
							</td>
							<td class="cart_price">
								<p>{{$product->description}}</p>
							</td>
                            <td>
                       		<form action="/product/{{ $product-> id }}" method ="POST" style="display: inline-block">
                              @csrf
                                    @method('DELETE')
                                    <form action="/product/{{ $product-> id }}" method ="POST" style="display: inline-block">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
						</tr>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- List End -->


@endauth
@endsection