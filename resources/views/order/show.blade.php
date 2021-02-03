@extends('layouts.app')
@section('content')
<div>
    @if (session('status'))
    <div>
        <p></p>{{ session('status') }}
    </div>
    @endif

    <div class="container m-auto">
        <h1>{{ __('Order Number') . ':' . $order->id }}</h1>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                
                <img src="{{ $product->image }}" class="card-img-top" alt="{{ __($product->name) }}">
                <div class="card-body">
                    <h2 class="card-title">{{ __($product->name) }}</h2>
                    <p class="card-text">{{ $product->price }}<span class="pl-2 bold">Quantity: {{$product->pivot->quantity}}</span></p>
                    
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
</div>
@endsection