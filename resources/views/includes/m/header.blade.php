<header id="header">
    <article id="mobile-menu">
        <div class="burger">
            <div class="x"></div>
            <div class="y"></div>
            <div class="z"></div>
        </div>

        <figure id="logo">
            <a href="{{route('home')}}"><img class="svg" src="{{ asset("storage/images/logo.svg") }}"/></a>
        </figure>

        <section id="main-links">
            <nav>
                <ul>
                    @foreach($categoriesMobile as $category)
                        <li>
                            <a href="{{ route('categories.show',['category'=> $category, 'slug' => $category->slug]) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </section>

        <section id="sublinks">
            <nav role="navigation">
                <ul class="inner_nav">
                    <li><a href="{{route('about-us')}}" class="bordered_section">¿Quiénes somos?</a></li>
                    @foreach($categoriesMobile as $category)
                        <li class="">
                            <a href="{{ route('categories.show',['category'=> $category, 'slug' => $category->slug]) }}">{{ $category->name }}</a>
                        </li>
                        @foreach($category->subcategories as $subcategory)
                            <li class="sub_cat">
                                <a href="{{ route('subcategories.show',['category' => $category,'subcategory'=> $subcategory,
                                    'slug' => $subcategory->slug]) }}"
                                   class="{{ $loop->last ? 'bordered_section' : ''}}">{{ $subcategory->name }}</a>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </nav>

            <nav>
                <ul class="contact_info">
                    <li><i class="fas fa-phone-alt"></i> +58 (212) 4929255</li>
                    <li><i class="fas fa-mobile-alt"></i> +58 (212) 9754217</li>
                    <li><i class="fas fa-envelope"></i> ginedia@hotmail.com</li>
                </ul>
            </nav>
        </section>
    </article>
</header>
