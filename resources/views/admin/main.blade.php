<!DOCTYPE html>
<html>
<head>
    <meta charaset="utf-8"/>
    <title>Admin</title>

    <link rel="shortcut icon" href="{{asset('images/frontsite/icon_logo_16.png')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/bar.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap-filestyle.min.js')}}"></script>
    <script src="{{asset('js/tale.js')}}"></script>

    <script src="{{asset('tinymce/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            plugins: "image",
            selector: '#editor',
            selector: 'textarea',  // Ширина textarea
            /*width : 800,*/
            mode: "textareas",
            force_br_newlines: true,
            /*force_br_newlines : false,*/
            force_p_newlines: false,

            toolbar: 'fontsizeselect | forecolor backcolor',
            fontsize_formats: '8pt 9pt 10pt 11pt 12pt 14pt 16pt 18pt 24pt 36pt',
            plugins: 'textcolor',


        });
    </script>

</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Админпанель
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Сайт</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <span class="border-right">

            <ul class="nav line">
                <li><a href="#">Статья</a></li>
                <li><a href="#">Обратная связь</a></li>
                <li><a href="{{action('GroupsController@index')}}"><span style="font-size: 19px; color: #2b669a;"><i class="fa fa-object-group"  aria-hidden="true"> Группа </i></span></a></li>
                <li><a href="#">Наши филиалы</a></li>
                <li><a href="#">Календарь мероприятий</a></li>

            </ul>
                </span>
        </div>

        <div class="col-md-9">
            <div id="content">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<br><br><br>

<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 widget">© 2018 | Created YourWebSite <span
                        class="pull-right">Minimize your browser »</span>
            </div>
        </div>
    </div>
</div>

</body>
</html>