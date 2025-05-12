<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">Srikandi</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Home</a></li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" style="background-color: transparent; border: none;"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="left: auto;">
                        @foreach ($category_widget as $result)
                            <li>
                                <a class="dropdown-item" href="{{ route('blog.category', $result->slug) }}">
                                    {{ $result->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blog.list') }}">Post</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
            </ul>
        </div>
    </div>
</nav>
