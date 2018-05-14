<body>


<nav class="navbar has-shadow" >
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item is-paddingless brand-item" href="{{route('home')}}">
                <img src="{{asset('images/lihthanked-logo.png')}}" alt="Lihthangete logo">
            </a>

            @if (Request::segment(1) == "manage")
                <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
          <span class="icon">
            <i class="fa fa-arrow-circle-right"></i>
          </span>
                </a>
            @endif

            <button class="button navbar-burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <div class="navbar-menu"  id="navMenu">
            <div class="navbar-start">
                <a href="about" class="{{request::is('')? "active":""}} navbar-item is-tab">Meist</a>
                <a href="contact" class="navbar-item is-tab">Kontakt</a>
                <a href="posts" class="navbar-item is-tab">Hanked</a>
                <a href="create" class="navbar-item is-tab">Lisa uus</a>
            </div> <!-- end of .navbar-start -->


            <div class="navbar-end nav-menu" style="overflow: visible">
                @guest
                    <a href="{{route('login')}}" class="navbar-item is-tab">Logi sisse</a>
                    <a href="{{route('register')}}" class="navbar-item is-tab is-active">Registeeru</a>
                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link"><i class="fa fa-fw fa-user-circle-o m-r-5"></i> {{Auth::user()->name}}</a>
                        <div class="navbar-dropdown is-right" >
                            <a href="#" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                </span>Profile
                            </a>

                            <a href="#" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-bell m-r-5"></i>
                </span>Notifications
                            </a>
                            <a href="{{route('manage.dashboard')}}" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-cog m-r-5"></i>
                </span>Manage
                            </a>
                            <hr class="navbar-divider">
                            <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <span class="icon">
                  <i class="fa fa-fw fa-sign-out m-r-5"></i>
                </span>
                                Logout
                            </a>
                            @include('_includes.logout')
                        </div>
                    </div>
                @endguest
            </div>
        </div>

    </div>
</nav>
<script>
    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach(function($el) {
            $el.addEventListener('click', function() {

                // Get the target from the "data-target" attribute
                var target = $el.dataset.target;
                var $target = document.getElementById(target);

                // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                $el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

            });
        });
    }
</script>