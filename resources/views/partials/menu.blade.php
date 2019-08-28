<div class="sidebar" style="overflow-y: hidden !important;">
    <nav class="sidebar-nav "><!-- ps ps--active-y -->
        <!-- Menu Option Start -->
        <ul class="nav">
            <!-- Dashboard Start -->
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            <!-- Dashboard End -->
            <!-- Profile Start -->
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle">
                    <i class="fas fa-users nav-icon">

                    </i>
                    Profile
                </a>
                <ul class="nav-dropdown-items">
                    <!-- Pro-Profile Start -->
                    <li class="nav-item">
                        <a href="{{ route("admin.products.index") }}" class="nav-link  request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' ">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            Profile
                        </a>
                    </li>
                    <!-- Pro-Profile End -->
                    <!-- Pro-Update Start -->
                    <li class="nav-item">
                        <a href="{{ route("admin.products.index") }}" class="nav-link  request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' ">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            Update
                        </a>
                    </li>
                    <!-- Pro-Update End -->
                    <!-- Pro-Password Start -->
                    <li class="nav-item">
                        <a href="{{ route("admin.products.index") }}" class="nav-link  request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' ">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            Change Password
                        </a>
                    </li>
                    <!-- Pro-Password End -->
                </ul>
            </li>
            <!-- Profile End -->
            <!-- Employe Start -->
            <li class="nav-item">
                <a href="{{ url('employe') }}" class="nav-link  request()->is('employe') || request()->is('employe/*') ? 'active' : '' ">
                    <i class="fas fa-cogs nav-icon">

                    </i>
                    {{ trans('global.employe.title') }}
                </a>
            </li>
            <!-- Employe End -->
            <!-- News Start -->
            <li class="nav-item">
                <a href="{{ url('news') }}" class="nav-link  request()->is('news') || request()->is('news/*') ? 'active' : '' ">
                    <i class="fas fa-cogs nav-icon">

                    </i>
                    {{ trans('global.news.title') }}
                </a>
            </li>
            <!-- News End -->
            <!-- Notice Start -->
            <li class="nav-item">
                <a href="{{ route("admin.products.index") }}" class="nav-link  request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' ">
                    <i class="fas fa-cogs nav-icon">

                    </i>
                    {{ trans('global.notice.title') }}
                </a>
            </li>
            <!-- Notice End -->
            <!-- Photo Gallery Start -->
            <li class="nav-item">
                <a href="{{ route("admin.products.index") }}" class="nav-link  request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' ">
                    <i class="fas fa-cogs nav-icon">

                    </i>
                    Photo Gallery
                </a>
            </li>
            <!-- Photo Gallery End -->
            <!-- Pages Start -->
            <li class="nav-item">
                <a href="{{ route("admin.products.index") }}" class="nav-link  request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' ">
                    <i class="fas fa-cogs nav-icon">

                    </i>
                    Pages
                </a>
            </li>
            <!-- Pages End -->
            <!-- Academic Start -->
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle">
                    <i class="fas fa-users nav-icon">

                    </i>
                    Academic
                </a>
                <ul class="nav-dropdown-items">
                    <!-- Aca-Catagories Start -->
                    <li class="nav-item">
                        <a href="{{ route("admin.products.index") }}" class="nav-link  request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' ">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            Catagories
                        </a>
                    </li>
                    <!-- Aca-Catagories End -->
                    <!-- Aca-All Post Start -->
                    <li class="nav-item">
                        <a href="{{ route("admin.products.index") }}" class="nav-link  request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' ">
                            <i class="fas fa-cogs nav-icon">

                            </i>
                            All Post
                        </a>
                    </li>
                    <!-- Aca-All Post End -->
                </ul>
            </li>
            <!-- Academic End -->
            <!-- Administration Start -->
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle">
                    <i class="fas fa-users nav-icon">

                    </i>
                    {{ trans('global.administration') }}
                </a>
                <ul class="nav-dropdown-items">
                    <!-- Adm-System Start -->
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link  nav-dropdown-toggle">
                            <i class="fas fa-users nav-icon"></i>
                             System Settings 
                        </a>
                        <ul class="nav-dropdown-items">
                            <!-- Adm-Sys-Visitors Start -->
                            <li class="nav-item nav-dropdown">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link  request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' ">
                                    <i class="fas fa-unlock-alt nav-icon">

                                    </i>
                                    Visitors 
                                </a>
                            </li>
                            <!-- Adm-Sys-Visitors End -->
                            <!-- Adm-Sys-Important Links Start -->
                            <li class="nav-item nav-dropdown">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link  request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' ">
                                    <i class="fas fa-unlock-alt nav-icon">

                                    </i>
                                    Important Links 
                                </a>
                            </li>
                            <!-- Adm-Sys-Important Links End -->
                            <!-- Adm-Sys-Social Links Start -->
                            <li class="nav-item nav-dropdown">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link  request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' ">
                                    <i class="fas fa-unlock-alt nav-icon">

                                    </i>
                                    Social Links 
                                </a>
                            </li>
                            <!-- Adm-Sys-Social Links End -->
                        </ul>
                    </li>
                    <!-- Adm-System End -->
                    <!-- Adm-Home Setings Start -->
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link  nav-dropdown-toggle">
                            <i class="fas fa-users nav-icon"></i>
                            Home Setings 
                        </a>
                        <ul class="nav-dropdown-items">
                            <!-- Adm-Home-Speech Start-->
                            <li class="nav-item nav-dropdown">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link  request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' ">
                                    <i class="fas fa-unlock-alt nav-icon">

                                    </i>
                                    Speech 
                                </a>
                            </li>
                            <!-- Adm-Home-Speech End-->
                            <!-- Adm-Home-General Start-->
                            <li class="nav-item nav-dropdown">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link  request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' ">
                                    <i class="fas fa-unlock-alt nav-icon">

                                    </i>
                                    General 
                                </a>
                            </li>
                            <!-- Adm-Home-General End-->
                            <!-- Adm-Home-Home Slider Start-->
                            <li class="nav-item nav-dropdown">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link  request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' ">
                                    <i class="fas fa-unlock-alt nav-icon">

                                    </i>
                                    Home Slider 
                                </a>
                            </li>
                            <!-- Adm-Home-Home Slider End-->
                        </ul>
                    </li>
                    <!-- Adm-Home Setings End -->
                    <!-- Adm-Permission Start -->
                    <li class="nav-item">
                        <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <i class="fas fa-unlock-alt nav-icon">

                            </i>
                            {{ trans('global.permission.title') }}
                        </a>
                    </li>
                    <!-- Adm-Permission End -->
                    <!-- Adm-Role Start -->
                    <li class="nav-item">
                        <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <i class="fas fa-briefcase nav-icon">

                            </i>
                            {{ trans('global.role.title') }}
                        </a>
                    </li>
                    <!-- Adm-Role End -->
                    <!-- Adm-User Start -->
                    <li class="nav-item">
                        <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                            <i class="fas fa-user nav-icon">

                            </i>
                            {{ trans('global.user.title') }}
                        </a>
                    </li>
                    <!-- Adm-User End -->
                </ul>
            </li>
            <!-- Administration End -->
            <!-- Product Start -->
            <li class="nav-item">
                <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                    <i class="fas fa-cogs nav-icon">

                    </i>
                    {{ trans('global.product.title') }}
                </a>
            </li>
            <!-- Product End -->
            <!-- Logout Start -->
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
            <!-- Logout End -->
        </ul>
        <!-- Menu Option End -->
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 869px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 415px;"></div>
        </div>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>