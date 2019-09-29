<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Anything</title>
    
    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--Font Awesome5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!--自作CSS -->
    <style type="text/css">
        .nav-c {
            background-color: #FABA5F;
        }
        header{
            position: relative;
            width: 100%;
            z-index: 99;
        }
        .fixed{
            position: fixed;
            top: 0;
            left: 0;
        }
    </style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script>
            // ニョキっと出るメニュー
            jQuery(function() {
                  var headNav = jQuery("header");
                  //scrollだけだと読み込み時困るのでloadも追加
                  $(window).on('load scroll', function () {
                      //現在の位置が500px以上かつ、クラスfixedが付与されていない時
                      if($(this).scrollTop() > 300 && headNav.hasClass('fixed') == false) {
                          //headerの高さ分上に設定
                          headNav.css({"top": '-100px'});
                          headNav.addClass('fixed');
                          //位置を0に設定し、アニメーションのスピードを指定
                          headNav.animate({"top": 0}, 700);
                      }
                      //現在の位置が300px以下かつ、クラスfixedが付与されている時にfixedを外す
                      else if($(this).scrollTop() < 300 && headNav.hasClass('fixed') == true){
                          headNav.removeClass('fixed');
                      }
                  });
              });
    </script>
      
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-light nav-c">
                <!-- Branding Image -->
                <div class="container">
                    <a class="navbar-brand text-white" href="{{ url('/') }}">Anything</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="ナビゲーションの切替">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ml-2" id="navbarNavDropdown">
                        {{-- light side --}}
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link active text-white mr-2" href="#"><i class="fas fa-home mr-1"></i>HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white mr-2" href="https://tsubasa-microposts.herokuapp.com/"><i class="fab fa-github mr-1"></i>Microposts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white mr-2" href="#"><i class="fab fa-twitter mr-1"></i>Twitter</a>
                            </li>
                        </ul>
                        {{-- right side --}}
                        <ul class="navbar-nav">
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">登録</a>
                                </li>
                            @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('food.create')}}">CREATE</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        ログアウト
                                    </a>
                                </div>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</body>
</html>