<div class="side-menu" id="admin-side-menu">
    <aside class="menu m-t-30 m-l-10">
        <p class="menu-label">
            Üldine
        </p>
        <ul class="menu-list">
            <li><a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">Dashboard</a></li>
        </ul>

        <p class="menu-label">
            Hanked
        </p>
        <ul class="menu-list">
            <li><a href="{{route('posts.index')}}" class="{{Nav::isResource('posts', 2)}}">Kõik hanked</a></li>
            {{-- <li>
              <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
              <ul class="submenu">
                <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
                <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
              </ul>
            </li> --}}
        </ul>

        <p class="menu-label">
            Administratsioon
        </p>
        <ul class="menu-list">
            <li><a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">Halda kasutajaid</a></li>
            <li>
                <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Rolid &amp; Õigused</a>
                <ul class="submenu">
                    <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Rollid</a></li>
                    <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Õigused</a></li>
                </ul>
            </li>
            <li>
                <a class="has-submenu">Example Accordion</a>
                <ul class="submenu">
                    <li><a href="{{route('roles.index')}}">Rollid</a></li>
                    <li><a href="{{route('permissions.index')}}">Õigused</a></li>
                </ul>
            </li>
            <li>
                <a class="has-submenu">Another Example</a>
                <ul class="submenu">
                    <li><a href="{{route('roles.index')}}">Rollid</a></li>
                    <li><a href="{{route('permissions.index')}}">Õigused</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
