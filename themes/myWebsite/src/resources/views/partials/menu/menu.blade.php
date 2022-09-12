    <ul class="navigation-menu">
        @foreach($menus as $menu)
            @include('front::partials.menu.child-menu')
        @endforeach
    </ul>
