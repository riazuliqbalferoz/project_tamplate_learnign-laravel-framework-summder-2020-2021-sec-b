@extends('master')
@section('content')
    <div class="custom-product">
        <div class="row">
            <div class="col-sm-10">
                <div class="trending-wrapper ">
                    <h4>Cart List</h4>
                    <a class="btn btn-success" href="ordernow">Order Now</a> <br><br>
                    @foreach ($products as $item)
                        <div class="row searched-item cart-list-divider">
                            <div class="col-sm-3">
                                <a href="detail/{{$item->id}}">
                                    <img class="trending-img" src="{{$item->gallery}}" class="d-block w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-sm-5">
                                <a href="detail/{{$item->id}}">
                                    <div>
                                        <h2>{{$item->name}}</h2>
                                        <h5>{{$item->description}}</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
                            </div>
                        </div>
                    @endforeach
                    <a class="btn btn-success" href="ordernow">Order Now</a> <br><br>
                </div>
            </div>
        </div>
    </div>
@endsection
