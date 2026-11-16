@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    @foreach($product as $item)
      <div class="card" style="width: 18rem; margin: 10px">
        <img src="{{$item->img}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$item->name}}</h5>
          <p class="card-text">{{$item->price}} рублей</p>
          <p class="card-text">{{$item->description}}</p>
          <a href="{{route('product', $item->id_product)}}" class="btn btn-primary">Перейти куда-нибудь</a>
        </div>
      </div>
    @endforeach
</div>


@endsection
