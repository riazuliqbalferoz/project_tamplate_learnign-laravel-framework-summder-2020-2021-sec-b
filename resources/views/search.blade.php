@extends('master')
@section('content')
    <div class="custom-product">
        <div class="row">
            <div class="col-sm-4">
                <a href="#">Filter</a>
            </div>
            <div class="col-sm-4">
                <div class="trending-wrapper ">
                    <h3>Searched products</h3>
                    @foreach ($products as $item)
                        <div class="searched-item">
                            <a href="detail/{{$item['id']}}">
                                <img class="trending-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
                                <div>
                                    <h2>{{$item['name']}}</h2>
                                    <h5>{{$item['description']}}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
