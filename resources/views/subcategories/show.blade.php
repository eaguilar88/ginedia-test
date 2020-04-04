@extends('layouts.app')

@section('title')
    Catálogo de productos
@endsection

@section('content')
    <section class="container wrapper categoria">
        @livewire('sidebar')
        <article class="display">
            <ul class="calabaza">
                @foreach($product as $product)
                    <li class="box">
                        <img src="{{ asset("images/category/$product->subcategory->category/subcategory/$product->subcategory/product/$product->code.jpg")}}" alt="{{ $product->slug }}">
                        <h3>{{ $product->name }}</h3>
                    </li>
                @endforeach
            </ul>
        </article>
    </section>
@endsection
