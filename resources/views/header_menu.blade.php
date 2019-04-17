   
    <header id="header" class="clear-fix" data-spy="affix" data-offset-top="197">
        <div class="header-main">
            <div class="wrapper">
                <div class="container clear-fix">
                    <!-- Header Main Logo -->
                    <div class="header-main__logo">
                        <a href="index.html" title="Used cars in Leighton Buzzard, Bedfordshire">
                            <!-- Hilton Car Supermarket -->
                            <img src="/images/new_logo.png" alt="Used cars for sale in Leighton Buzzard, Bedfordshire"
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
                                        class="megamenu__listitem__link"
                                        title="Home" role="menuitem">
                                        Home
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <!-- Display normal dropdowns -->
                                </li>
                                <li class="megamenu__listitem" id="listitem__used-cars--parent" itemprop="name"
                                data-menu-dropdown="cars">
                                <a href="/used-cars/" itemprop="url"
                                class="megamenu__listitem__link megamenu__listitem__link--parent  megamenu__listitem__link--current"
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
                                                        <li><a href="/used-cars/" title="View all cars">View
                                                            all cars</a></li>
                                                        <li><a href="/used-cars/" title="All Stock">All Stock</a></li>
                                                    </ul>
                                                </div>
                                <!-- // Megamenu Group -->
                                            </div>
                                            <div class="column-2">
                                                <!-- Megamenu Group -->
                                                <div class="megamenu-group megamenu-group--price">
                                                    <div class="megamenu-group__title">Price</div>
                                                    <ul class="megamenu-group__list">
                                                        <li><a href="/search?maxprice=5000" title="" rel="nofollow">Under &pound;5,000</a>
                                                        </li>
                                                        <li><a href="/search?maxprice=10000" title="" rel="nofollow">Under &pound;10,000</a>
                                                        </li>
                                                        <li><a href="/search?maxprice=25000" title="" rel="nofollow">Under &pound;25,000</a>
                                                        </li>
                                                        <li><a href="/search?maxprice=50000" title="" rel="nofollow">Under &pound;50,000</a>
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
                                        p/m</a>
                                    </li>
                                    <li><a href="#" title=""
                                        rel="nofollow">Upto &pound;150
                                    p/m</a>
                                            </li>
                                            <li><a href="#" title=""
                                                rel="nofollow">Over &pound;200
                                            p/m</a>
                                        </li>
                                    </ul>
                                </div>
                    <!-- // Megamenu Group -->
                            </div>
                            <div class="column-3">
                                <!-- Megamenu Group -->
                                <div class="megamenu-group megamenu-group--brands">
                                    <div class="megamenu-group__title">Brands</div>
                                    <ul class="megamenu-group__list">
                                @foreach ($makes as $make)
                                    <li><a href="/search?make={{ $make->make }}" title="Used "{{$make->make}}>Used <span> {{ $make->make }}</span></a></li>
                                @endforeach 
                
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
                </a></li>
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
                    <a href="#" class="megasubmenu__listitem__link" title="We Buy Cars" role="menuitem">
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
        <div class="megasubmenu" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
            <div class="container">
                <ul class="megasubmenu__list">
                    <li class="megasubmenu__listitem" id="listitem__milton-keynes">
                        <a href="#" class="megasubmenu__listitem__link"
                        title="England" role="menuitem">
                        <i class="fas fa-caret-right"></i> England
                    </a>
                    </li>
                    <li class="megasubmenu__listitem" id="listitem__london">
                    <a href="#" class="megasubmenu__listitem__link"
                    title="Scotland" role="menuitem">
                    <i class="fas fa-caret-right"></i> Scotland
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