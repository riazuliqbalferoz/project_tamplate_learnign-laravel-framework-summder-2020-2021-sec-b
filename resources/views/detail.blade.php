@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$product['gallery']}}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/product">Go Back</a>
                <h3>Price : {{$product['price']}}</h3>
                <h4>Details : {{$product['description']}}</h4>
                <h4>Category : {{$product['category']}}</h4>
                <br><br>
                <button class="btn btn-primary">Add to cart</button>
                <button class="btn btn-success">Buy now</button>
            </div>
        </div>
    </div>
@endsection
