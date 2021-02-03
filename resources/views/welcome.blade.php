@extends('layouts.app')
@section('content')
    <div class="container m-auto">
        <h1>{{ __('Products') }}</h1>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                <img src="{{ $product->image }}" class="card-img-top" alt="{{ __($product->name) }}">
                <div class="card-body">
                    <h2 class="card-title">{{ __($product->name) }}</h2>
                    <p class="card-text">{{ $product->price }}</p>
                    <form action="{{ route('addToCart') }}" method="post">
                        @csrf
                        <input type="hidden" name="productId" value="{{$product->id}}">
                        <button class="btn btn-primary" type="submit">{{__('Add To cart') }} </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        {{ $products->links() }}
    </div>
    @endsection