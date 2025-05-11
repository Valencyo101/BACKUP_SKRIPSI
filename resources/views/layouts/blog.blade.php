<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- META UNTUK GOOGLE MAX:100-140 -->
    <meta name="description" content="" />

    <!-- META UNTUK FACEBOOK -->
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">

    <!-- META UNTUK TWITTER -->
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:card" content="">


    <title>SRIKANDI</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    @if (!Request::is('/'))
        <link type="text/css" rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}" />
    @endif
    @if (Request::is('/'))
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @endif
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/font-awesome.min.css') }}">

    <!-- Custom stlylesheet -->
    @if (Route::is('blog'))
        <link type="text/css" rel="stylesheet" href="{{ asset('public/frontend/css/stylelanding.css') }}" />
    @else
        <link type="text/css" rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" />
    @endif
    @if (Route::is('about'))
        <link rel="stylesheet" href="{{ asset('public\frontend\css\customstyle.css') }}">
    @endif
    <link rel="icon" type="image/png" href="{{ asset('logo-kopi.png') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
    <!-- SECTION -->
    @if (Route::is('blog'))
        <div>
            @yield('isi')
        </div>
    @else
        @include('blog.components.header')
        <div class="section">
            <!-- container -->
            <div class="{{ Request::is('about') ? '' : 'container' }}">
                {{-- <div class="{{ route('about') ? '' : 'container' }}"> --}}
                <!-- row -->
                <div id="hot-post" class="row hot-post">
                    <div>
                        @yield('isi')
                    </div>
                </div>
            </div>
        </div>
    @endif

    @include('blog.components.footer')
</body>
<!-- jQuery Plugins -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/main.js') }}"></script>

</html>
