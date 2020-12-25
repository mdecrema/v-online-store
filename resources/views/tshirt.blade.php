@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="page-title col-lg-12">
                <h2>T - SHIRTS</h2>
            </div>
        </div>
        <div class="row">
        @foreach($products as $product)
            {{-- @if ($product->genere=='Dr.') {{-- Qua inserire la categoria del prodotto in modo da filtrare --}}  
            <div class="item col-lg-4">
            <a href="product/show/{{$product['id']}}" class="btn btn-warning btn-block text-center" role="button">
                <div class="item-picture">
                    <img src="#" alt="item picture" />
                </div>
                <div class="item-text">
                    <h4>{{$product->nome}}</h4>
                    <h6>€ {{$product->amount}}</h6>
                </div>
            </a>
            </div>
            {{-- @endif --}}
        @endforeach
        </div>
    </div>
@endsection