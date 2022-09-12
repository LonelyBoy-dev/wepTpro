

    <li class="has-submenu parent-menu-item">
        <a @if(count($menu->childrenmenus)) href="javascript:void(0)" @else href="{{$menu->link}}"  @endif>{{ $menu->title }} </a>
        @if(count($menu->childrenmenus))

            <span class="menu-arrow"></span>
            <ul class="submenu">
                @foreach($menu->childrenmenus as $childMenu)
                    <li><a href="{{$childMenu->link}} " class="sub-menu-item">{{$childMenu->title}} </a></li>
                @endforeach

            </ul>
        @endif
    </li>
