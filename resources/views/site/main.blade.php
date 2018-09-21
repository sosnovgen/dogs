<!DOCTYPE html>
<html>
<head>
    <meta charaset="utf-8"/>
    @section('title')
        <title>Мой Друг Ньюф</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta name="description" content="Собака породы Ньюфаундленд. Внешний вид и уход. Описание и характер породы Ньюфаундленд.">
        <meta name="keywords" content= "Одна из крупнейших собак в мире и самый идеальный семейный питомец! Ньюфаундленд прекрасно ладит с детьми и другими домашними животными, он – лучший друг и лучший компаньон. Врожденно в каждого ньюфаундленда вложено стремление помогать человеку и уберегать его от беды. Сложно найти более добрую и преданную собаку, чем этот исполин с медвежьей мордочкой.">
        <meta name="revisit" content="3 days" />
        <meta name="revisit-after" content="3 days" />
        <meta name="robots" content="noindex,follow" />
    @show

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">

    <link rel="shortcut icon" href="{{asset('images/frontsite/icon_logo_16.png')}}" type="image/png">

    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/shop-homepage.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/responsiveslides.min.js')}}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- header -->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="{{asset('/')}}"><img src="{{asset('images/site/logo.png')}}" class="img-responsive" alt=""></a>
        </div>

        <div class="head-nav">
            <span class="menu"> </span>
            <ul class="cl-effect-1">
                <li class="active"><a href="{{asset('/')}}">Home</a></li>
                <li><a href="{{asset('/about')}}">О нас</a></li>
                <li><a href="{{asset('/gallery')}}">Галлерея</a></li>
                <li><a href="{{asset('/ccb')}}">ССВ</a></li>
                <li><a href="{{asset('/puppies')}}">Щенки</a></li>
                <li><a href="{{asset('/video')}}">Видео</a></li>
                <li><a href="{{asset('/diplom')}}">Дипломы</a></li>
                <li><a href="{{asset('/contact')}}">Контакты</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <!-- script-for-nav -->
        <script>
            $( "span.menu" ).click(function() {
                $( ".head-nav ul" ).slideToggle(300, function() {
                    // Animation complete.
                });
            });
        </script>
        <!-- script-for-nav -->



        <div class="clearfix"> </div>
    </div>
</div>
<!-- header -->


<div class="container">
<div id="content">
    @yield('content')
</div>


<div class="footer">
    <div class="col-md-3 foot-1">
        <h4>Ссылки</h4>
        <ul>
            <li><a href="https://newfs.info/magazin/">||   Журнал Наш Ньюфауленд</a></li>
            <li><a href="https://newfs.info/exhibition/">||   Выставки</a></li>
            <li><a href="https://newfs.info/forum/">||   Форумы</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>Полезные ресурсы</h4>
        <ul>
            <li><a href="http://doggi.ru/publ/1/v_dome_pojavilsja_shhenok/1/34-1-0-1024">||   Выбор щенка</a></li>
            <li><a href="http://doggi.ru/publ/1/v_dome_pojavilsja_shhenok/34">||   Первые дни дома</a></li>
            <li><a href="http://doggi.ru/publ/1/43">||   Выставки собак</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>О нас</h4>
        <ul>
            <li><a href="{{asset('/about')}}">||  Кто я?</a></li>
            <li><a href="{{asset('/contact')}}">||  Где мы?</a></li>
            <li><a href="{{asset('/puppies')}}">||  Мои щенки</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>Контакты</h4>
        <ul>
            <li><a href="#">||  email: malleka@mail.ru</a></li>
            <li><a href="#">||  phone: +7(916) 089-20-45</a></li>
            <li><a href="#">||  Малыхина Оля, Россия, Москва</a></li>
        </ul>
    </div>

    <div class="clearfix"> </div>
    <div class="copyright">
        <p>Copyrights © 2018 Malleka. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
</div>
</div>

</body>
</html>