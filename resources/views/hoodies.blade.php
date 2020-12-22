@extends('layouts.app')

@section('content')
    @foreach($products as $product)
        @if ($product->genere=='Mr.') {{-- Qua inserire la categoria del prodotto in modo da filtrare --}}
        <h3>{{$product->nome}}</h3>
        @endif
    @endforeach
@endsection