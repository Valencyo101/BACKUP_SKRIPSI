<!-- HEADER -->
<header id="header">
    <!-- NAV -->
    <div id="nav">
        <!-- Top Nav -->
        <div id="nav-top">
            <div class="container">


                <!-- logo -->
                <div class="nav-logo">
                    <a href="#" class="logo"><img src="{{ asset('public/frontend/img/test-logo.png') }}"
                            alt=""></a>
                </div>
                <!-- /logo -->

                <!-- search & aside toggle -->
                <div class="nav-btns">
                    {{-- <button class="aside-btn"><i class="fa fa-bars"></i></button> --}}
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                    <div id="nav-search">
                        <form action="{{ route('blog.cari') }}" method="get">
                            <input class="input" name="cari" placeholder="Enter your search...">
                        </form>
                        <button class="nav-close search-close">
                            <span></span>
                        </button>
                    </div>
                </div>
                <!-- /search & aside toggle -->
            </div>
        </div>
        <!-- /Top Nav -->

        <!-- Main Nav -->
        <div id="nav-bottom">
            <div class="container">
                <!-- nav -->
                <ul class="nav-menu">
                    <li><a href="{{ url('') }}">HOME</a></li>
                    <li class="has-dropdown">
                        <a span="#">Kategori</a>
                        <div class="dropdown">
                            <div class="dropdown-body">
                                <ul class="dropdown-list">
                                    @foreach ($category_widget as $result)
                                        <li><a
                                                href="{{ route('blog.category', $result->slug) }}">{{ $result->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li><a href="{{ route('blog.list') }}">Daftar Post</a></li>
                    {{-- <li><a href="#">Achievement</a></li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                </ul>
                <!-- /nav -->
            </div>
        </div>
        <!-- /Main Nav -->

    </div>
    <!-- /NAV -->
</header>
<!-- /HEADER -->
