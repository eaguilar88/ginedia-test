@extends('layouts.app')

@section('title')
Expertos en Herrajes para Vidrio
@endsection

@section('content')
<main role="main" class="container" id="home">
    <section class="wrapper">
        <article class="grid">
            @foreach($categories as $category)
            <figure class="flexbox">
                <img src="{{ asset("storage/images/home/$category->slug.jpg") }}" alt="{{ $category->name }}"/>
                <figcaption>
                    <h2>{{ $category->name }}</h2>
                    <a href="{{ route('categories.show',['category'=> $category, 'slug' => $category->slug]) }}"></a>
                </figcaption>
            </figure>
            @endforeach
        </article>
    </section>

    <section class="container" id="categorias">
        <ul>
            @foreach($categories as $category)
            <li>
                <h2>
                    <a href="{{ route('categories.show',['category'=> $category, 'slug' => $category->slug]) }}"></a>{{ $category->name }}
                </h2>
                <ul>
                    @foreach($category->subcategories as $subcategory)
                    <li class="box">
                        <a href="{{ route('subcategories.show',['category' => $category,'subcategory'=> $subcategory, 'slug' => $subcategory->slug]) }}">{{ $subcategory->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
    </section>
</main>
@endsection
