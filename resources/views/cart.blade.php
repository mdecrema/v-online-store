@extends('layouts.app')

@section('content')
<?php $total = 0 ?>
    <div class="container">
        <h2>Cart</h2>
        <div class="row">
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (Cart::count() > 0)
                <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>

                @foreach( Cart::content() as $item )

                    <div class="col-lg-12">
                        <h4>{{$item->model->nome}}</h4>
                        <span>{{$item->model->amount}}</span>
                        <span>{{$item->model->quantity}}</span>
                    </div>
                <?php $total += $item->model->amount * $item->model->quantity ?>

                @endforeach
                
                <div class="total">
                    <h3>Total: € {{$total}}</h3>
                </div>

            @else

                <h3>No items in Cart!</h3>
            
            @endif
            
    </div>
@endsection