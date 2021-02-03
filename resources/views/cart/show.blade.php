@extends('layouts.app')
@section('content')
<div>
    @if (session('status'))
    <div>
        <p></p>{{ session('status') }}
    </div>

    @endif
    <div class="container m-auto">
        <h1>{{ __('Products') }}</h1>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                <img src="{{ $product["product"]->image }}" class="card-img-top" alt="{{ __($product["product"]->name) }}">
                <div class="card-body">
                    <h2 class="card-title">{{ __($product["product"]->name) }}</h2>
                    <p class="card-text">{{ $product["product"]->price }}<span class="pl-2 bold">Quantity: {{$product['quantity']}}</span></p>
                    
                </div>
            </div>

            {{-- {{$product->name}} --}}
            @endforeach
        </div>
    </div>

    <form action="{{route('orders.store')}}" method="post">
        @csrf
        <button class="btn btn-primary" type="submit">{{__('afrekenen') }} </button>
    </form>
</div>
@endsection