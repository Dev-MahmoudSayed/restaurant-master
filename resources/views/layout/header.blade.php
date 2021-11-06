

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Touché</title>
    <meta name="description" content="">
    <meta name="author" content="">
  

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('asset/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('asset/img/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('asset/img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('asset/img/apple-touch-icon-114x114.png')}}">

    <!-- Bootstrap -->
   
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.css')}}">
  
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/fonts/font-awesome/css/font-awesome.css')}}">

    <!-- Stylesheet
    ================================================== -->
   
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/nivo-lightbox/nivo-lightbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/nivo-lightbox/default.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation
    ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand page-scroll" href="#page-top">Touché</a> </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('')}}" class="page-scroll">Home</a></li>
                    <li><a href="{{url('')}}" class="page-scroll">Menu</a></li>
                    <li><a href="{{url('')}}" class="page-scroll">Chefs</a></li>
                    <li><a href="{{url('')}}" class="page-scroll">Contact</a></li>
                    <li><a href="{{url('')}}" class="page-scroll">
                        @auth
                        Cart[{{$count}}]
                        @endauth
                        @guest
                            cart[0]
                        @endguest
                        
                    
                    </a></li>
                    <li><a href="{{url('')}}" class="page-scroll"></a></li>
                    <li>
                     
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            </li>
                            <x-app-layout>
                            </x-app-layout>
                            </li>
                            @else
                               <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a><li>
        
                                @if (Route::has('register'))
                                <li>    <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a><li>
                                @endif
                            @endauth
                        </div>
                    @endif
                    </li>    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

