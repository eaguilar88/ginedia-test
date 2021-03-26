<aside class="grid" id="grid">
    <ul>
        @foreach($categories as $category)
            <li>
                <h2>
                    <a href="javascript:void(0);">{{ $category->name }}</a>
                </h2>
                <ul>
                    @foreach($category->subcategories as $subcategory)
                        <li class="box">
                            <a href="{{ route('subcategories.show',['category' => $category, 'subcategory'=> $subcategory, 'slug' => $subcategory->slug]) }}">{{ $subcategory->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</aside>

<!-- {{ route('categories.show',['category'=> $category, 'slug' => $category->slug]) }} -->