@extends('layouts.app')

@section('title')
    Catálogo de productos
@endsection

@section('content')
    <section class="container wrapper categoria">
        @livewire('sidebar')
        <article class="display">
            <ul class="calabaza">
                @foreach($products as $product)
                    <li class="box">
                        <a src="{{ asset($product->image_path) }}"></a>
                        <img src="{{ asset($product->image_path) }}" alt="{{ $product->slug }}"/>
                        <h4>{{ $product->code }}</h4>
                        <h3>{{ $product->name }}</h3>
                        @if($product->description != "")
                            <p>{{ $product->description }}</p>
                        @endif
                        <p>Acabado {{ $product->finish }}</p>
                    </li>
                @endforeach
            </ul>
        </article>
    </section>
@endsection
