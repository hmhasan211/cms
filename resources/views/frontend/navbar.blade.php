

<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': true, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none overflow-visible">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="#" class="goto-top"><img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="0" src="{{asset('assets/frontend')}}/img/logo-default-slim-dark.png"></a>
                        </div>
                    </div>
                </div>
                {{-- navbar start--}}
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-no-transform header-nav-bottom-line-active-text-light header-nav-bottom-line-effect-1 header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-text-capitalize header-nav-main-text-size-2 header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="index.html">
                                                Home
                                            </a>
                                        </li>
                                        @foreach($menus as $menu)
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{Request::is(strval($menu->name)) ? 'active':''}} " href="{{ $menu->link }}">
                                                {{ $menu->name }}
                                            </a>

                                        </li>
                                        @endforeach

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</header>
