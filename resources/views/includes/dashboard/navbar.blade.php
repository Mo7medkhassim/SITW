      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-dark navbar-light ">
            <!-- left nav linke -->
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav m_dir">
                <!-- store web site -->
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">
                        <i class="fas fa-globe"></i>
                        <span>
                            @lang('site.site')
                        </span>
                    </a>
                </li>
                <!-- language control -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <span class="lang"><i class="far fa-flag"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                        <ul>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>

                    </div>
                </li>
                <!-- User Control -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-user"></i>
                        <span> @lang('site.admin')</span>
                        <!-- <i class="fas fa-angle-down"></i> -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                        <!-- <div class="dropdown-divider"></div> -->
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user"></i>
                            <span> @lang('site.profile')</span>
                        </a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a href="{{ route('dashboard.logout')}}" class="dropdown-item">
                            <i class="fas fa-sign-out-alt"></i> <span>  @lang('site.logout')</span>
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
