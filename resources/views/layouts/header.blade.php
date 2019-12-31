<body class="seo_version">
<!--@section('loader')-->
<!-- LOADER -->
<div id="preloader">
    <div id="cupcake" class="box">
        <span class="letter">L</span>
        <div class="cupcakeCircle box">
            <div class="cupcakeInner box">
                <div class="cupcakeCore box"></div>
            </div>
        </div>
        <span class="letter box">A</span>
        <span class="letter box">D</span>
        <span class="letter box">I</span>
        <span class="letter box">N</span>
        <span class="letter box">G</span>
    </div>
</div>
<!-- END LOADER -->



@section('header')
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href={!! asset('home') !!}><img src={!! asset('images/logos/logo-seo.png') !!} alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right hidden-md hidden-sm hidden-xs">
                        <li><a class="btn-light btn-radius btn-brd top-btn" href={!! asset('/') !!}><i class="fa fa-angle-double-right"></i>E-mail templates</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right menu-top">
                        <li><a class="{{ Request::is('/' ) ? 'active' : '' }}" href={!!asset ('/') !!}>Home</a></li>
                        <li ><a class="{{ Request::is('about') ? 'active' : '' }}" href={!! asset('about') !!}>About Us </a></li>
                        <li><a class="{{ Request::is('service') ? 'active' : '' }}" href={!! asset('service') !!}>Services</a></li>

                        <li><a class="{{ Request::is('pricing') ? 'active' : '' }}" href={!!asset ('pricing') !!}>Pricing</a></li>
                        <li><a class="{{ Request::is('contact') ? 'active' : '' }}" href={!!asset ('contact') !!}>Contact</a></li>
                        <li><a class="{{ Request::is('auth.register') ? 'active' : '' }}" href={!!asset ('register') !!}>Register</a></li>
                        <li><a class="{{ Request::is('auth.login') ? 'active' : '' }}" href={!!asset ('login') !!}>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


