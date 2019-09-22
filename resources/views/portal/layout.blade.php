<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Bootstrap cursesis</title>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}" />
   <!--<link rel="stylesheet" href="{{URL::asset('css/bootstrap.rtl.css')}}" />-->
    <link rel="stylesheet" href="{{URL::asset('css/all.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/StyleSheet1.css?ver=9')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/media.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/default-theme.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/hover.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}" />
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" >

    <script src="">https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js</script>
    <script src="">https://oss.maxcdn.com/respond/1.4.2/respond.min.js</script>
</head>
<body>

    <section class="option-box">
        <div class="color-option">
            <h4>Color Option</h4>
            <ul class="list-unstyled">
                <li data-value="css/default-theme.css"></li>
                <li data-value="css/green-theme.css"></li>
                <li data-value="css/purple-theme.css"></li>
                <li data-value="css/blue-theme.css"></li>
            </ul>
        </div>
        <i class="fa fa-cog fa-3x cog-check"></i>
    </section>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand hvr-pop" href="{{url('/')}}">Osama <span>Inc</span></a>
            </div>
        <div class="collapse navbar-collapse navbar-right" id="ournavbar">
                <ul class="nav navbar-nav navbar">
                    <li class="active"><a href="Home.html">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="About.html">About</a></li>
                    <li><a href="FAQ.html">FAQ</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Programing</a></li>
                            <li><a href="#">Html</a></li>
                            <li><a href="#">CSS</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">mab</a></li>
                </ul>
            </div>
        </div>
    </nav>

@yield('content')

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <h3>Sitemap</h3>
                <ul class="list-unstyled three-columns">

                    <li>Home</li>
                    <li>company</li>
                    <li>About</li>
                    <li>Code</li>
                    <li>Design</li>
                    <li>Host</li>
                    <li>Solutions</li>
                    <li>Sitemap</li>
                    <li>Contact</li>
                </ul>
                    <ul class="list-unstyled social-list">
                        <li>
                        @php
                        $fb = $settings->where('key','facebook_link')->first();
                        $fb_link = $fb ? $fb->value : '#' ;
                        @endphp
                        <a href="{{$fb_link}}">
                            <img src="{{URL::asset('icons/1.png')}}" alt="FaceBook" width="50" height="50" />
                        </a>
                        </li>
                        <li>
                            <a href="{{$settings->where('key','twitter_link')->first()->value}}">
                                <img src="{{URL::asset('icons/2.png')}}" alt="FaceBook" width="50" height="50" />
                            </a>
                            </li>
                            <li>
                                <a href="{{$settings->where('key','youtube_link')->first()->value}}">
                                    <img src="{{URL::asset('icons/3.png')}}" alt="FaceBook" width="50" height="50" />
                                </a>
                                </li>
                                <li>
                                    <a href="{{$settings->where('key','viber_link')->first()->value}}">
                                        <img src="{{URL::asset('icons/4.png')}}" alt="FaceBook" width="50" height="50" />
                                    </a>
                                    </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">

                    <h3>Latest Articles</h3>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="{{URL::asset('articles/1.png')}}" alt="Page 01" width="64" height="64"/>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Programing</h4>
                            This is some text about programming and designing web
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="{{URL::asset('articles/2.png')}}" alt="Page 02" width="64" height="64" />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Coding</h4>
                            This is some text about programming and designing web
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="{{URL::asset('articles/3.png')}}" alt="Page 03" width="64" height="64" />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Web Design</h4>
                            This is some text about programming and designing web
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                <h3>Our Awesome Work</h3>
                    <img  src="{{URL::asset('work/1.png')}}" alt="Image 01" width="150" height="100" />
                    <img src="{{URL::asset('work/2.png')}}" alt="Image 02"width="150" height="100" />
                    <img src="{{URL::asset('work/3.png')}}" alt="Image 03"width="150" height="100" />
                    <img src="{{URL::asset('work/4.png')}}" alt="Image 04"width="150" height="100" />
                </div>

            </div>

        </div>
        <div class="copy-right text-center">
    Copy right &copy; 2019<span>   OSAMA  </span>  INC
</div>
    </section>
    <!--Loading -->
    <section class="loading-overlay text-center">

        <div class="loader text-center"></div>

    </section>


    <!--Scroll-Up -->
    <div id="scroll-top">
        <i class=" fa fa-chevron-up fa-3x">

        </i>
    </div>

    <script src="{{URL::asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/validator.min.js')}}"></script>
    <script src="{{URL::asset('js/plugins.js')}}"></script>
    <script src="{{URL::asset('js/wow.min.js')}}"></script>
    <script>
         new WOW().init();
    </script>

</body>
</html>
