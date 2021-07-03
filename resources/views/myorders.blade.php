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
                                <img class="trending-img" src="{{$item->gallery}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="col-sm-5">
                                <div>
                                    <h2>Name : {{$item->name}}</h2>
                                    <h5>Description : {{$item->description}}</h5>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <a href="/cancelorder/{{$item->order_id}}" class="btn btn-warning">Cancel order</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
