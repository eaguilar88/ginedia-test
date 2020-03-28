<aside class="grid">
    <ul>
        @foreach($categories as $category)
            <li>
                <h2>
                    <a href="{{ route('categories.show',['category'=> $category, 'slug' => $category->slug]) }}"></a>{{ $category->name }}
                </h2>
                <ul>
                    @foreach($category->subcategories as $subcategory)
                        <li class="box">
                            <a href="{{ route('subcategories.show',['category' => $category, 'subcategory'=> $subcategory, 'slug' => $subcategory->slug]) }}">
                            </a>
                            {{ $subcategory->name }}
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</aside>
