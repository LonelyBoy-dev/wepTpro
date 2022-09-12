
@if($category->categories->isEmpty())

    <li class="list-item">
        <a class="nav-link" href="{{ $category->link }}">{{ $category->title }}</a>
    </li>
@else

    <li class="list-item list-item-has-children menu-col-1">
        <a class="nav-link" href="{{ $category->link }}">{{ $category->title }}</a>
        <ul class="sub-menu nav">
            @foreach ($category->categories as $childCategory)
                @include('front::partials.menu.child-category', ['category' => $childCategory])
            @endforeach
        </ul>
    </li>
@endif
