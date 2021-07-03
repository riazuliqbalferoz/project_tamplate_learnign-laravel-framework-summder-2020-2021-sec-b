@extends('master')
@section('content')
    <div class="custom-product">
        <div class="row">
            <div class="col-sm-10">
                <div class="trending-wrapper ">
                    <h4>My orders</h4>
                    @foreach ($myorders as $item)
                        <div class="row searched-item cart-list-divider">
                            <div class="col-sm-3">
                                <a href="detail/{{$item->id}}">
                                    <img class="trending-img" src="{{$item->gallery}}" class="d-block w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-sm-5">
                                <a href="detail/{{$item->id}}">
                                    <div>
                                        <h2>Name : {{$item->name}}</h2>
                                        <h5>Description : {{$item->description}}</h5>
                                        <h5>Address : {{$item->address}}</h5>
                                        <h5>Payment Method : {{$item->payment_method}}</h5>
                                        <h5>Payment Status : {{$item->payment_status}}</h5>

                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
