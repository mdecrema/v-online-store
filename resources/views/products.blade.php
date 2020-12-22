@extends('layouts.app')

@section('content')
    <div class="content">
        @foreach($products as $product)
            <h3>{{$product->nome}}</h3>
            <h5>{{$product->description}}</h5>
            <h6>€ {{$product->amount}}</h6>
        @endforeach
    </div>
@endsection