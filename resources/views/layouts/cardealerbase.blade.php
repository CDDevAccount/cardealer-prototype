<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-language" content="en" />

    <title>{{ config('app.name', 'Car Dealer') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
     <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet"
          property="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="/css/styles.css?v=2">
    <link rel="stylesheet" href="/css/style.css?v=2">
    <style type="text/css">
      /* The side navigation menu */
    .sidenav {
      height: 100%; /* 100% Full-height */
      width: 0; /* 0 width - change this with JavaScript */
      position: fixed; /* Stay in place */
      z-index: 10; /* Stay on top */
      top: 0; /* Stay at the top */
      left: 0;
      background-color: #2e3192; /* Black*/
      overflow-x: hidden; /* Disable horizontal scroll */
      padding-top: 60px; /* Place content 60px from the top */
      transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
    }

    /* The navigation menu links */
    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    /* When you mouse over the navigation links, change their color */
    .sidenav a:hover {
      color: #f1f1f1;
    }

    /* Position and style the close button (top right corner) */
    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
    #main {
      transition: margin-left .5s;
      padding: 20px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    </style>
</head>

<body id="index" class="index loc-0 ">


<noscript>
    <div id="noscript-top">
        <div class="container">
            Warning: For full functionality of this site it is necessary to enable JavaScript. Here are the <a
                href="http://www.enable-javascript.com/" target="_blank">instructions how to enable JavaScript in your
            web browser</a>.
        </div>
    </div>
</noscript>
<div itemscope itemtype="http://schema.org/AutoDealer" id="wrapper">
    <a id="top" title="Navigate to the top of the site"></a>
    <!-- Header -->
    <header id="header" class="clear-fix" data-spy="affix" data-offset-top="197">

        <!-- Header Main -->
        <div class="header-main">
            <div class="wrapper">
                <div class="container clear-fix">
                    <!-- Header Main Logo -->
                    <div class="header-main__logo">
                        <a href="/" title="Cardealer UK">
                            <!-- Hilton Car Supermarket -->
                            <img src="/images/new_logo.png" alt="Used cars for sale "
                                 class="responsive-img">
                        </a>
                        <!-- <img src="/img-src/_themev2-website-2109/theme/hdr-promo.png" class="responsive-img hdr-promo" alt="Established over 25 years"> -->
                    </div>
                    <!-- // Header Main Logo -->
                    <!-- Header Main Nav -->
                    <div class="header-main__nav clear-fix">
                        <nav id="primary-navigation">
                            <div class="wrapper">
                                <div class="container">
                                    <div class="toggles">
                                        <a class="toggle" id="megamenu__trigger" data-menu-toggle="main">
                                            <i class="fa fa-bars"></i>
                                            Menu
                                        </a>
                                        <a class="toggle" id="usedcars__trigger" data-menu-toggle="dropdown-search">
                                            <i class="fa fa-search"></i>
                                            Browse
                                        </a>
                                    </div>
                                    <ul class="megamenu" data-menu="main" role="menu" itemscope
                                        itemtype="http://www.schema.org/SiteNavigationElement">
                                        <li class="megamenu__listitem" id="listitem__home--parent" itemprop="name">
                                            <a href="/" itemprop="url"
                                               class="megamenu__listitem__link megamenu__listitem__link--current"
                                               title="Home" role="menuitem">
                                                Home
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <!-- Display normal dropdowns -->
                                        </li>
                                        <li class="megamenu__listitem" id="listitem__used-cars--parent" itemprop="name"
                                            data-menu-dropdown="cars">
                                            <a href="javascript:void(0);" itemprop="url"
                                               class="megamenu__listitem__link megamenu__listitem__link--parent"
                                               title="Used Cars" role="menuitem" data-menu-close>
                                                Used Cars
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <!-- Display normal dropdowns -->
                                            <div class="megasubmenu" itemscope
                                                 itemtype="http://www.schema.org/SiteNavigationElement">
                                                <div class="l-megamenu">
                                                    <div class="wrapper">
                                                        <div class="container">
                                                            <div class="o-megamenu">
                                                                <div class="column-1">
                                                                    <!-- Megamenu Group -->
                                                                    <div class="megamenu-group megamenu-group--used-cars">
                                                                        <div class="megamenu-group__title">Used Cars
                                                                        </div>
                                                                        <ul class="megamenu-group__list">
                                                                            <li><a href="#" title="View all cars">View
                                                                                all cars</a></li>
                                                                            <li><a href="#" title="All Stock">All
                                                                                Stock</a></li>
                                                                            <li><a href="#" title="Milton Keynes Stock">Milton
                                                                                Keynes Stock</a></li>
                                                                            <li><a href="#" title="London Stock">London
                                                                                Stock</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- // Megamenu Group -->
                                                                </div>
                                                                <div class="column-2">
                                                                    <!-- Megamenu Group -->
                                                                    <div class="megamenu-group megamenu-group--price">
                                                                        <div class="megamenu-group__title">Price</div>
                                                                        <ul class="megamenu-group__list">
                                                                            <li><a href="#" title="" rel="nofollow">Under &pound;5,000</a>
                                                                            </li>
                                                                            <li><a href="#" title="" rel="nofollow">Under &pound;10,000</a>
                                                                            </li>
                                                                            <li><a href="#" title="" rel="nofollow">Under &pound;25,000</a>
                                                                            </li>
                                                                            <li><a href="#" title="" rel="nofollow">Under &pound;50,000</a>
                                                                            </li>
                                                                            <!-- <li><a href="/search_page.php?price=999999" title="" rel="nofollow">Over &pound;50,000</a></li> -->
                                                                        </ul>
                                                                    </div>
                                                                    <!-- // Megamenu Group -->
                                                                    <!-- Megamenu Group -->
                                                                    <div class="megamenu-group megamenu-group--finance">
                                                                        <div class="megamenu-group__title">Finance</div>
                                                                        <ul class="megamenu-group__list">
                                                                            <li><a href="#" title=""
                                                                                   rel="nofollow">Upto &pound;100
                                                                                p/m</a></li>
                                                                            <li><a href="#" title=""
                                                                                   rel="nofollow">Upto &pound;150
                                                                                p/m</a></li>
                                                                            <li><a href="#" title=""
                                                                                   rel="nofollow">Over &pound;200
                                                                                p/m</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- // Megamenu Group -->
                                                                </div>
                                                                <div class="column-3">
                                                                    <!-- Megamenu Group -->
                                                                    <div class="megamenu-group megamenu-group--brands">
                                                                        <div class="megamenu-group__title">Brands</div>
                                                                        <ul class="megamenu-group__list">
                                                                            <li><a href="/search?make=Alfa Romeo" title="Used Alfa Romeo">Used <span>Alfa Romeo</span></a></li>
                                                                            <li><a href="/search?make=Audi" title="Used Audi">Used <span>Audi</span></a></li>
                                                                            <li><a href="/search?make=BMW" title="Used BMW">Used <span>BMW</span></a></li>
                                                                            <li><a href="/search?make=Chevrolet" title="Used Chevrolet">Used <span>Chevrolet</span></a></li>
                                                                            <li><a href="/search?make=Chrysler" title="Used Chrysler">Used <span>Chrysler</span></a></li>
                                                                            <li><a href="/search?make=Citroen" title="Used Citroen">Used <span>Citroen</span></a></li>
                                                                            <li><a href="/search?make=Ford" title="Used Ford">Used <span>Ford</span></a></li>
                                                                            <li><a href="/search?make=Honda" title="Used Honda">Used <span>Honda</span></a></li>
                                                                            <li><a href="/search?make=jaguar" title="Used Jaguar">Used <span>Jaguar</span></a></li>
                                                                            <li><a href="/search?make=Land Rover" title="Used Land Rover">Used <span>Land Rover</span></a></li>
                                                                            <li><a href="/search?make=Mercendes-Benz" title="Used Mercedes-Benz">Used <span>Mercedes-Benz</span></a></li>
                                                                            <li><a href="/search?make=Mini" title="Used MINI">Used <span>MINI</span></a></li>
                                                                            <li><a href="/search?make=Mitsubishi" title="Used Mitsubishi">Used <span>Mitsubishi</span></a></li>
                                                                            <li><a href="/search?make=Nissan" title="Used Nissan">Used <span>Nissan</span></a></li>
                                                                            <li><a href="/search?make=Porche" title="Used Porsche">Used <span>Porsche</span></a></li>
                                                                            <li><a href="/search?make=Renault" title="Used Renault">Used <span>Renault</span></a></li>
                                                                            <li><a href="/search?make=Toyota" title="Used Toyota">Used <span>Toyota</span></a></li>
                                                                            <li><a href="/search?make=Vauxhall" title="Used Vauxhall">Used <span>Vauxhall</span></a></li>
                                                                            <li><a href="/search?make=Volkswagen" title="Used Volkswagen">Used <span>Volkswagen</span></a></li>
                                                                            <li><a href="/search?make=Volvo" title="Used Volvo">Used <span>Volvo</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- // Megamenu Group -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="megamenu__listitem" id="listitem__finance--parent" itemprop="name"
                                            data-menu-dropdown="finance">
                                            <a href="javascript:void(0);" itemprop="url"
                                               class="megamenu__listitem__link megamenu__listitem__link--parent"
                                               title="Finance" role="menuitem" data-menu-close>
                                                Finance
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <!-- Display normal dropdowns -->
                                            <div class="megasubmenu" itemscope
                                                 itemtype="http://www.schema.org/SiteNavigationElement">
                                                <div class="container">
                                                    <ul class="megasubmenu__list">
                                                        <li class="megasubmenu__listitem"
                                                            id="listitem__free-finance-check">
                                                            <a href="#" class="megasubmenu__listitem__link"
                                                               title="Free Finance Check" role="menuitem">
                                                                <i class="fas fa-caret-right"></i> Free Finance Check
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="megamenu__listitem" id="listitem__valuation--parent" itemprop="name"
                                            data-menu-dropdown="valuation">
                                            <a href="javascript:void(0);" itemprop="url"
                                               class="megamenu__listitem__link megamenu__listitem__link--parent"
                                               title="Valuation" role="menuitem" data-menu-close>
                                                Valuation
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <!-- Display normal dropdowns -->
                                            <div class="megasubmenu" itemscope
                                                 itemtype="http://www.schema.org/SiteNavigationElement">
                                                <div class="container">
                                                    <ul class="megasubmenu__list">
                                                        <li class="megasubmenu__listitem" id="listitem__part-exchange">
                                                            <a href="#" class="megasubmenu__listitem__link"
                                                               title="Part Exchange" role="menuitem">
                                                                <i class="fas fa-caret-right"></i> Part Exchange
                                                            </a>
                                                        </li>
                                                        <li class="megasubmenu__listitem" id="listitem__we-buy-cars">
                                                            <a href="#" class="megasubmenu__listitem__link"
                                                               title="We Buy Cars" role="menuitem">
                                                                <i class="fas fa-caret-right"></i> We Buy Cars
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="megamenu__listitem" id="listitem__warranty--parent" itemprop="name">
                                            <a href="#" itemprop="url" class="megamenu__listitem__link" title="Warranty"
                                               role="menuitem">
                                                Warranty
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <!-- Display normal dropdowns -->
                                        </li>
                                        <li class="megamenu__listitem" id="listitem__reviews--parent" itemprop="name">
                                            <a href="#" itemprop="url" class="megamenu__listitem__link" title="Reviews"
                                               role="menuitem">
                                                Reviews
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <!-- Display normal dropdowns -->
                                        </li>
                                        <li class="megamenu__listitem" id="listitem__locations--parent" itemprop="name"
                                            data-menu-dropdown="locations">
                                            <a href="javascript:void(0);" itemprop="url"
                                               class="megamenu__listitem__link megamenu__listitem__link--parent"
                                               title="Locations" role="menuitem" data-menu-close>
                                                Locations
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <!-- Display normal dropdowns -->
                                            <div class="megasubmenu" itemscope
                                                 itemtype="http://www.schema.org/SiteNavigationElement">
                                                <div class="container">
                                                    <ul class="megasubmenu__list">
                                                        <li class="megasubmenu__listitem" id="listitem__milton-keynes">
                                                            <a href="#" class="megasubmenu__listitem__link"
                                                               title="Milton Keynes" role="menuitem">
                                                                <i class="fas fa-caret-right"></i> Milton Keynes
                                                            </a>
                                                        </li>
                                                        <li class="megasubmenu__listitem" id="listitem__london">
                                                            <a href="#" class="megasubmenu__listitem__link"
                                                               title="London" role="menuitem">
                                                                <i class="fas fa-caret-right"></i> London
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- // Header Main Nav -->
                </div>
            </div>
        </div>
        <!-- // Header Main -->
    </header>
    <!-- Main Content -->
    <div id="main-wrap">
        <div id="hometext" class="hideme">
            <h1>Hilton Car Supermarket - Used cars in Bedfordshire and Middlesex</h1>
            <h2>Quality used cars by Hilton Car Supermarket in Bedfordshire and Middlesex...</h2>
            <p>If you are looking for great savings on quality used cars in Bedfordshire and Middlesex area, then you
                have reached the right place. Hilton Car Supermarket are a specialist used car dealer with branches in
                Bedfordshire and Middlesex. We are proud to offer you a first-class customer service and very
                competitive pricing, so please browse our stock list. We stock a range of used cars to suit all budgets
                and lifestyles, so we are sure to have the right car for you.</p>
            <p>If you are looking for a second hand car in Bedfordshire or Middlesex, then don't delay, call us today to
                book a test drive. In order to offer cars to suit everyone we make sure that we update our stock list
                regularly. It is therefore always worth giving us a call, even if you don't see what you are looking for
                on our website.</p>
            <p>We realise that buying a car can be a daunting experience, but don't worry, we are well established
                within both Bedfordshire and Middlesex and come with a great reputation. Furthermore, we offer excellent
                advice and experience on vehicles and vehicle maintenance. Our friendly staff will go the extra mile to
                guarantee that you receive the advice you need. This is the reason why many of our customers keep coming
                back to us.</p>
            <p>At Hilton Car Supermarket we don't just sell cars, we do everything possible to get you driving your
                perfect car. Why not come along to our dealership in Bedfordshire or Middlesex? We look forward to
                meeting you!</p>
            <p><strong>We Are Open 7 Days A Week From 9am - 9pm</strong></p>
        </div>
        <div id="mySidenav" class="sidenav">
            <div id='demo'></div>
           
            @include('vehiclefilter')
            
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      
         </div>
            <div id="app">

                @yield('content')

            </div>
        <div class="row">
            <!-- Content -->


    </div>
    </div>

<footer class="footer footer--seo-footer">
    <!-- Used Vehicles -->
    <div class="footer__top">
        <div class="wrapper">
            <div class="container">
                <div class="footer__used-vehicles footer__used-vehicles--cars">
                    <div class="footer__title">Used Cars</div>
                    <ul class="footer__used-list">
                        <li><a href="#" title="Used Alfa Romeo">Used <span>Alfa Romeo</span></a></li>
                        <li><a href="#" title="Used Audi">Used <span>Audi</span></a></li>
                        <li><a href="#" title="Used BMW">Used <span>BMW</span></a></li>
                        <li><a href="#" title="Used Chevrolet">Used <span>Chevrolet</span></a></li>
                        <li><a href="#" title="Used Chrysler">Used <span>Chrysler</span></a></li>
                        <li><a href="#" title="Used Citroen">Used <span>Citroen</span></a></li>
                        <li><a href="#" title="Used Ford">Used <span>Ford</span></a></li>
                        <li><a href="#" title="Used Honda">Used <span>Honda</span></a></li>
                        <li><a href="#" title="Used Jaguar">Used <span>Jaguar</span></a></li>
                        <li><a href="#" title="Used Land Rover">Used <span>Land Rover</span></a></li>
                        <li><a href="#" title="Used Mercedes-Benz">Used <span>Mercedes-Benz</span></a></li>
                        <li><a href="#" title="Used MINI">Used <span>MINI</span></a></li>
                        <li><a href="#" title="Used Mitsubishi">Used <span>Mitsubishi</span></a></li>
                        <li><a href="#" title="Used Nissan">Used <span>Nissan</span></a></li>
                        <li><a href="#" title="Used Porsche">Used <span>Porsche</span></a></li>
                        <li><a href="#" title="Used Renault">Used <span>Renault</span></a></li>
                        <li><a href="#" title="Used Toyota">Used <span>Toyota</span></a></li>
                        <li><a href="#" title="Used Vauxhall">Used <span>Vauxhall</span></a></li>
                        <li><a href="#" title="Used Volkswagen">Used <span>Volkswagen</span></a></li>
                        <li><a href="#" title="Used Volvo">Used <span>Volvosss</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- // Used Vehicles -->
    <!-- Footer Main -->
    <!-- Footer Main -->
    <div class="footer__main">
        <div class="wrapper">
            <div class="container">
                <!-- Footer Contacts -->
                <div class="footer__widget footer__widget--contacts">
                    <div class="footer-locations">
                        <!-- location address -->
                        <div class="location-address location-address--loc-20">
                            <div class="location-address__icon"><img src="images/mini.jpg" style="    max-width: 35px;"
                                                                     alt="Milton Keynes"></div>
                            <div class="location-address__name">Milton Keynes Branch</div>
                            <div class="location-address__address">Watling Street,<br>Hockliffe,<br>Bedfordshire,<br>LU7
                                9LJ
                            </div>
                            <div class="location-address__telephone"><i class="fa fa-phone" aria-hidden="true"></i>
                                01908 888 140
                            </div>
                            <div class="location-address__location"><i class="fas fa-map-marker-alt"></i><a href="#">
                                Find us</a></div>
                        </div>
                        <!-- // location address -->
                        <!-- location address -->
                        <div class="location-address location-address--loc-18">
                            <div class="location-address__icon"><img src="images/mini.jpg" style="    max-width: 35px;"
                                                                     alt="London"></div>
                            <div class="location-address__name">London Branch</div>
                            <div class="location-address__address">1-3 Uxbridge Road,<br>Hayes,<br>Middlesex,<br>UB4 0JN
                            </div>
                            <div class="location-address__telephone"><i class="fa fa-phone" aria-hidden="true"></i> 0208
                                1680 777
                            </div>
                            <div class="location-address__location"><i class="fas fa-map-marker-alt"></i><a href="#">
                                Find us</a></div>
                        </div>
                        <!-- // location address -->
                    </div>
                </div>
                <!-- // Footer Contacts --><!-- Footer Stock Updates -->
                <div class="footer__widget footer__widget--stock-updates">
                    <div class="footer__title">Stock Updates</div>
                    <div id="stock-updates">
                        <p>Enter your details to receive new notifications</p>
                        <form method="post" data-action="/ajax/stock_updates.php">
                            <div class="form-group half">
                  <span>
                    <input type="text" class="form-control" name="first_name" placeholder="First Name"
                           data-pattern="^[A-Za-z][A-Za-z-_\s]{2,}"
                           data-pattern-message="First name must be more than 3 characters!">
                  </span>
                  <span>
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                           data-pattern="^[A-Za-z][A-Za-z-_\s]{2,}"
                           data-pattern-message="Last name must be more than 3 characters!">
                  </span>
                            </div>
                            <div class="form-group">
                  <span>
                    <input type="text" class="form-control" name="email" placeholder="Email"
                           data-pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                           data-pattern-message="Please enter a valid email address.">
                  </span>
                            </div>
                            <div class="form-group">
                                <button id="email-sign-up" type="submit">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- // Footer Stock Updates --><!-- Footer Legal -->
                <div class="footer__widget footer__widget--legal">
                    <div class="footer__title">Company Info</div>
                    <ul class="footer__legal-list">
                        <li>FCA No. 728748</li>
                    </ul>
                    <div class="footer__fca-para">
                        <div id="fca-disclaimer">
                            Elite Automotive Ltd trading as Hilton Car Supermarket is authorised and regulated by the
                            Financial Conduct Authority, FRN: 728748. All finance is subject to status and income.
                            Written Quotation on request. We act as a credit broker not a lender. We work with a number
                            of carefully selected credit providers who may be able to offer you finance for your
                            purchase. We are only able to offer finance products from these providers.
                        </div>
                    </div>
                </div>
                <!-- // Footer Legal -->
            </div>
        </div>
    </div>
    <!-- // Footer Main -->
    <!-- Footer Bottom -->
    <div class="footer__bottom">
        <div class="wrapper">
            <div class="container">
                <div class="footer__bottom-bar">
                    <!-- Footer Links -->
                    <ul class="footer__list-links">
                        <li><a rel="nofollow" href="#" title="Terms of Use">Terms of Use</a></li>
                        <li><a rel="nofollow" href="#" title="Privacy Policy">Privacy</a></li>
                        <li><a rel="nofollow" href="#" title="Cookie Policy">Cookies</a></li>
                        <li><a href="#" title="Sitemap">Sitemap</a></li>
                    </ul>
                    <!-- // Footer Links -->
                    <!-- Powered by Click -->
                    <div class="footer__powered-by">
                        <div class="footer__powered-text">
                            &copy; 2019 - <a rel="external nofollow" href="http://www.clickdealer.co.uk/"
                                             title="Click Dealer">Website powered by passion</a>
                        </div>
                        <div class="footer__click-logo">
                            <a rel="external nofollow" href="" title="Click Dealer">
                                <img src="images/new_logo.png" alt="Powered by Passion"
                                     class="footer__click-logo lazy">
                            </a>
                        </div>
                    </div>
                    <!-- // Powered by Click -->
                </div>
            </div>
        </div>
    </div>
    <!-- // Footer Bottom -->
</footer>


<div id="tab-bar" itemscope itemtype="http://schema.org/AutomotiveBusiness">
    <ul class="tab-bar">
        <li class="tab-bar__listitem">
            <a href="tel:02036032737" class="tab-bar__link" title="Call Hilton Car Supermarket" itemprop="telephone"
               content="+44 0203 6032 737">
                <i class="fa fa-phone"></i>
                Call us
            </a>
        </li>
        <li class="tab-bar__listitem">
            <a href="#" class="tab-bar__link" title="Find us">
                <i class="fa fa-map-marker"></i>
                Find us
            </a>
        </li>
        <li class="tab-bar__listitem">
            <a href="mailto:customer.service@website.co.uk" class="tab-bar__link" title="Email us" itemprop="email"
               content="customer.service@website.co.uk">
                <i class="fas fa-envelope"></i>
                Message us
            </a>
        </li>
        <li class="tab-bar__listitem">
            <a onclick="javascript:VisitorChat_Open();" class="tab-bar__link" title="Live Chat" itemprop="Live Chat"
               content="Live Chat">
                <i class="far fa-comment"></i>
                Live chat
            </a>
        </li>
    </ul>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>       
<script type="text/javascript">
        function toggleNav(){
            var x = document.getElementById("mySidenav");
            if (x.style.width === "250px"){
              x.style.width="0px";
            }else{
              x.style.width="250px";
            };
        }
        /* Set the width of the side navigation to 250px */
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }

      /* Set the width of the side navigation to 0 */
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }

  var app = angular.module('carapp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });

    app.controller("carcontroller", function($scope, $http){  

      $scope.loadMake = function(){  
         var url="{{url('get-make-list')}}";
         $http.get(url)  
         .success(function(data){  
              $scope.makes = data;  
          //    console.log($scope.makes);
          //    console.log('test_');
         })  
      }  

      $scope.loadModel = function(){ 
           var url="{{url('get-model-list')}}?make="+$scope.make; 
           $http.get(url)  
           .success(function(data){  
                $scope.models = data;  
           })  
      }
      $scope.loadBodies=function(){
           var url="{{url('get-body-list')}}?make="+$scope.make+"&model_family="+$scope.model; 
           $http.get(url)  
           .success(function(data){  
                $scope.types = data;  
           })  
      }  

 });  

 </script>
</body>

</html>
