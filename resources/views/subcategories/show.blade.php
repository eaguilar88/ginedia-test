@extends('layouts.app')

@section('title')
Catálogo de productos
@endsection

@section('content')
<section class="container wrapper" id="subcategoria">
    @livewire('sidebar')
    <article class="display">
        <h2>{{ $category->name }}</h2>
        <figure class="portrait">
            <img src="{{ asset("storage/images/" . $subcategory->category->slug . "/$subcategory->slug/$subcategory->slug.jpg") }}">
            <figcaption>{{ $subcategory->name }}</figcaption>
        </figure>
        <ul class="calabaza v-flex">
            @foreach($products as $product)
            <li class="box">
                <a href="{{ asset($product->zoom) }}" data-featherlight="image"></a>
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
