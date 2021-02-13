<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('assets/backend')}}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{Request::is('admin/dashboard*') ? 'active':''}}  ">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{Request::is('admin/menu*') ? 'active':''}}  ">
                <a class="nav-link" href="{{route('menu.index')}}">
                    <i class="material-icons">library_books</i>
                    <p>Main Menu</p>
                </a>
            </li>

            <li class="nav-item {{Request::is('admin/service*') ? 'active':''}} ">
                <a class="nav-link" href="{{route('service.index')}}">
                    <i class="material-icons">slideshow</i>
                    <p>Services</p>
                </a>
            </li>

            <li class="nav-item {{Request::is('admin/team*') ? 'active':''}}  ">
                <a class="nav-link" href="{{route('team.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Team</p>
                </a>
            </li>

            <li class="nav-item {{Request::is('admin/portfolio*') ? 'active':''}}  ">
                <a class="nav-link" href="{{ route('portfolio.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>Portfolio</p>
                </a>
            </li>
        </ul>
    </div>
</div>
