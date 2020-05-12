@extends('layouts.app')

@section('title')
    Catálogo de productos
@endsection

@section('content')
    <section class="container wrapper" id="categoria">
        @livewire('sidebar')
        <article class="display">
            <ul class="calabaza v-flex">
                @foreach($subcategories as $subcategory)
                    <li class="box">
                        <a href="{{ route('subcategories.show',['category' => $subcategory->category, 'subcategory'=> $subcategory, 'slug' => $subcategory->slug]) }}">
                        </a>
                        <img src="{{ asset("storage/images/". $subcategory->category->slug ."/$subcategory->slug.jpg")}}" alt="{{ $subcategory->slug }}">
                        <h3>{{ $subcategory->name }}</h3>
                    </li>
                @endforeach
            </ul>
        </article>
    </section>
@endsection
