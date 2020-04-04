@extends('layouts.app')

@section('title')
    Expertos en Herrajes para Vidrio
@endsection

@php
    $current_page = "home";
@endphp

@section('content')
    <section class="container wrapper {{ $current_page }}>">
        <article class="grid">
            @foreach($categories as $category)
                <figure>
                    <img src="{{ asset("images/home/$category->slug.jpg") }}" alt="{{ $category->name }}"/>
                    <figcaption>
                        <h2>{{ $category->name }}</h2>
                        <a href="{{ route('categories.show',['category'=> $category, 'slug' => $category->slug]) }}"></a>
                    </figcaption>
                </figure>
            @endforeach
        </article>
    </section>

    <section class="container categorias">
        <ul>
            @foreach($categories as $category)
                <li>
                    <h2>
                        <a href="{{ route('categories.show',['category'=> $category, 'slug' => $category->slug]) }}"></a>{{ $category->name }}
                    </h2>
                    <ul>
                        @foreach($category->subcategories as $subcategory)
                            <li class="box">
                                <a href="{{ route('subcategories.show',['category' => $category,'subcategory'=> $subcategory, 'slug' => $subcategory->slug]) }}">
                                </a>
                                {{ $subcategory->name }}
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
