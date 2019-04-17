<div class="row">
    <!-- Content -->
    <div class="main twelvecol">
        <div class="row-block html1">
            <div class="hero-unit">
                <div class="hero-unit__heading">Thousands of cars on this site SOLD every day!
                </div>
            </div>

            <basic-search></basic-search>

            <div class="reviews-overlay">
                <a href="#" title="Over 1150 Customer Experience Rating">Over 1100 Customer Experience Rating</a>
                <span class="review-rating">4.8 <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            </div>
        </div>
        <!-- Homepage HTML Panel 2 -->
        <div class="row-block row-block--vehicle-type">
            <div class="wrapper">
                <div class="container">
                    <div class="section-heading">
                        <h2 class="section-heading__heading">What are you looking for?</h2>
                        <div class="section-heading__subheading">Find your next car by selecting your body
                            style
                        </div>
                    </div>
                </div>
        <!-- Homepage Body Shape Search -->
                 <div class="container z1241">
                        <carousel :items=6 :autoplay="true" :nav=true :loop="true" :dots="true" :responsive="{0:{items:2,nav:false},600:{items:3,nav:false},900:{items:4,nav:false},1200:{items:5,nav:false}}" >
                            <div class="wrylf_carz">
                                <a href='/search?model_type=convertible'>
                                <div class="img_car__z">
                                    <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/convertible.png">
                                </div>
                                    <p>Convertible</p>
                                </a>
                            </div>

                            <div class="wrylf_carz">
                                <a href='/search?model_type=coupe'>
                                <div class="img_car__z">
                                    <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/coupe.png">
                                </div>
                                    <p>Coupe</p>
                                </a>
                            </div>
                            
                        <div class="wrylf_carz">
                            <a href='/search?model_type=estate'>
                                <div class="img_car__z">
                                    <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/estate.png">
                                </div>
                                <p>Estate</p>
                            </a>
                        </div>
                        <div class="wrylf_carz">                            
                            <a href='/search?model_type=hatchback'>
                                <div class="img_car__z">
                                    <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/hatchback.png">
                                </div>
                                <p>Hatchback</p>
                            </a>
                        </div>
                        <div class="wrylf_carz">                            
                            <a href='/search?model_type=mpv'>
                                <div class="img_car__z">
                                    <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/mpv.png">
                                </div>
                                <p>MPV</p>
                            </a>
                        </div>
                        <div class="wrylf_carz">                            
                            <a href='/search?model_type=pickup'>
                                <div class="img_car__z">
                                    <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/pickup.png">
                                </div>
                                <p>Pickup</p>
                            </a>
                        </div>
                        <div class="wrylf_carz">                            
                            <a href='/search?model_type=saloon'>
                                <div class="img_car__z">
                                    <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/saloon.png">
                                </div>
                                <p>Saloon</p>
                            </a>
                        </div>
                        <div class="wrylf_carz">                            
                            <a href='/search?model_type=suv'>
                                <div class="img_car__z">
                                    <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/suv.png">
                                </div>
                               <p>SUV</p>
                           </a>
                        </div>
                        <div class="wrylf_carz">                            
                            <a href='/search?model_type=panelvan'>
                                <div class="img_car__z">
                                    <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/panelvan.png">
                                </div>
                                <p>Panel Van</p>
                            </a>
                        </div>
                        <div class="wrylf_carz">                            
                            <a href='/search?model_type=4X4'>
                                <div class="img_car__z">
                                    <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/fourbyfour.png">
                                </div>
                                    <p>Four Wheel Drive</p>
                                </a>
                            </div>

                    </carousel>
                </div>
<!--
                <div class="container z1241">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="wrylf_carz">
                                <a href="#">
                                    <div class="img_car__z">
                                        <img src="images/hatchback.png" alt="">
                                    </div>
                                    <p>Hatchback</p>
                            </div>
                            </a>
                        </div>
                        <div class="item">

                            <div class="wrylf_carz">
                                <a href="#">
                                    <div class="img_car__z">
                                        <img src="images/hatchback.png" alt="">
                                    </div>
                                    <p>Hatchback</p>
                            </div>
                            </a>

                        </div>
                        <div class="item">

                            <div class="wrylf_carz">
                                <a href="#">
                                    <div class="img_car__z">
                                        <img src="images/hatchback.png" alt="">
                                    </div>
                                    <p>Hatchback</p>
                            </div>
                            </a>

                        </div>
                        <div class="item">

                            <div class="wrylf_carz">
                                <a href="#">
                                    <div class="img_car__z">
                                        <img src="images/hatchback.png" alt="">
                                    </div>
                                    <p>Hatchback</p>
                            </div>
                            </a>

                        </div>
                        <div class="item">

                            <div class="wrylf_carz">
                                <a href="#">
                                    <div class="img_car__z">
                                        <img src="images/hatchback.png" alt="">
                                    </div>
                                    <p>Hatchback</p>
                            </div>
                            </a>

                        </div>
                        <div class="item">

                            <div class="wrylf_carz">
                                <a href="#">
                                    <div class="img_car__z">
                                        <img src="images/hatchback.png" alt="">
                                    </div>
                                    <p>Hatchback</p>
                            </div>
                            </a>

                        </div>
                    </div>
                </div>
-->

            </div>
        </div>
        <!-- // END --><!-- Homepage HTML Panel 3 -->
        <div class="row-block row-block--panels">
            <div class="quick-panels">
                <!-- quick panel -->
                <a href="#" title="" class="quick-panel quick-panel--showroom">
                    <div class="quick-panel__wrapper">
                        <div class="quick-panel__icon"><img src="images/icon-car.svg" alt=""></div>
                        <div class="quick-panel__heading">Our Showroom</div>
                        <div class="quick-panel__text">Over 400 quality used vehicles in stock. Specialists in
                            Audi, BMW, Mercedes-Benz &amp; VW
                        </div>
                    </div>
                </a>
                <!-- // quick panel -->
                <!-- quick panel -->
                <a href="#" title="" class="quick-panel quick-panel--finance">
                    <div class="quick-panel__wrapper">
                        <div class="quick-panel__icon"><img src="images/icon-calculator.svg" alt=""></div>
                        <div class="quick-panel__heading">Apply for Finance</div>
                        <div class="quick-panel__text">
                            - No obligation to purchase anything<br>
                            - It's a safe and secure process<br>
                            - Our form is quick and simple
                        </div>
                    </div>
                </a>
                <!-- // quick panel -->
                <!-- quick panel -->
                <a href="#" title="" class="quick-panel quick-panel--warranty">
                    <div class="quick-panel__wrapper">
                        <div class="quick-panel__icon"><img src="images/icon-engine.svg" alt=""></div>
                        <div class="quick-panel__heading">Peace of Mind</div>
                        <div class="quick-panel__text">Peace of mind guarantee with leading warranty products
                            from AutoProtect
                        </div>
                    </div>
                </a>
                <!-- // quick panel -->
                <!-- quick panel -->
                <a href="#" title="" class="quick-panel quick-panel--reviews">
                    <div class="quick-panel__wrapper">
                        <div class="quick-panel__icon"><img src="images/icon-chat.svg" alt=""></div>
                        <div class="quick-panel__heading">Customer Reviews</div>
                        <div class="quick-panel__text">Over 800 excellent customer reviews.<br>
                            AutoTrader - CarDealerReviews - CarBuyingAdvisor - Google - CarCurus
                        </div>
                    </div>
                </a>
                <!-- // quick panel -->
            </div>
        </div>
        <!-- // END --><!-- Homepage HTML Panel 3 -->
        <div class="row-block row-block--finance">
            <div class="wrapper">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-6">
                            <div class="finance-panels">
                                <div class="text-panel">
                                    <div class="text-panel__heading">Finance packages tailored to you</div>
                                    <div class="text-panel__text">
                                        <p>Calculate your monthly repayments and adjust your deposit.</p>
                                    </div>
                                    <div class="text-panel__link">
                                        <a href="#" title="Finance packages tailored to you"
                                           class="btn btn--feature-4">Calculate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="finance-panels">
                                <div class="text-panel">
                                    <div class="text-panel__heading">Calculate your finances</div>
                                    <div class="text-panel__text">
                                        <p>Our Soft Search is not visible to other lenders. There is no cost
                                            involved and you are not committing to anything.</p>
                                    </div>
                                    <div class="text-panel__link">
                                        <a href="#" title="Calculate your finances"
                                           class="btn btn--feature-1"><i class="far fa-check-circle"></i> Free
                                            Finance Check</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="finance-panels">
                                <div class="text-panel">
                                    <div class="text-panel__heading">Apply for finance</div>
                                    <div class="text-panel__text">
                                        <p>You can be assured that<br>
                                            - No obligation to purchase anything<br>
                                            - Its a safe and secure to process<br>
                                            - Our form is quick and simple
                                        </p>
                                    </div>
                                    <div class="text-panel__link">
                                        <a href="#" title="Apply for finance" class="btn btn--feature-2">Apply
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="finance-panels">
                        <!-- Text Panel -->

                        <!-- // Text Panel -->
                        <!-- Text Panel -->

                        <!-- // Text Panel -->
                        <!-- Text Panel -->

                        <!-- // Text Panel -->
                    </div>
                </div>
            </div>
        </div>
        <!-- // END --><!-- Homepage HTML Panel 3 -->
        <div class="row-block row-block--finance-partners">
            <div class="wrapper">

                <div class="container z1241 z12412">
                    <div class="owl-carousel owl-theme" id="owl-carousel1">
                        <div class="item">
                            <div class="wrylf_carz">
                                <a href="#">
                                    <div class="img_car__z1 z632">
                                        <img src="images/partner-carfinancegiant.png" alt="">
                                    </div>

                            </div>
                            </a>
                        </div>
                        <div class="item">

                            <div class="wrylf_carz">
                                <a href="#">
                                    <div class="img_car__z1 z4211">
                                        <img src="images/partner-bluemotor.png" alt="">
                                    </div>

                            </div>
                            </a>

                        </div>
                        <div class="item">

                            <div class="wrylf_carz">
                                <a href="#">
                                    <div class="img_car__z1 z4211">
                                        <img src="images/partner-carmoney.png" alt="">
                                    </div>

                            </div>
                            </a>

                        </div>
                        <div class="item">

                            <div class="wrylf_carz">
                                <a href="#">
                                    <div class="img_car__z1">
                                        <img src="images/partner-carfinance-247.png" alt="">
                                    </div>

                            </div>
                            </a>

                        </div>
                        <div class="item">

                            <div class="wrylf_carz">
                                <a href="#">
                                    <div class="img_car__z1 z632">
                                        <img src="images/partner-carfinancegiant.png" alt="">
                                    </div>

                            </div>
                            </a>

                        </div>
                        <div class="item">

                            <div class="wrylf_carz">
                                <a href="#">
                                    <div class="img_car__z1 z4211">
                                        <img src="images/partner-bluemotor.png" alt="">
                                    </div>

                            </div>
                            </a>

                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- // END --><!-- Homepage HTML Panel 3 -->
        <div class="row-block row-block--finance-budget">
            <div class="wrapper">
                <div class="container">
                    <div class="finance-cards">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div>
                                    <a href="search_pagefe48.html?budget=150" title="View cars"
                                       class="finance-card">
                                        <div class="finance-card__image finance-card__image4">
                                            <img src="images/budget-car-1.png"
                                                 alt="Used car Finance up to &pound;150 p/m"
                                                 class="responsive-img">
                                        </div>
                                        <div class="finance-card__content">
                                            <span class="finance-card__text">Finance up to</span>
                                            <span class="finance-card__price">&pound;150 p/m</span>
                                        </div>
                                        <div class="finance-card__link">
                                            <span class="btn">View cars</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div>
                                    <a href="#" title="View cars" class="finance-card">
                                        <div class="finance-card__image finance-card__image4">
                                            <img src="images/budget-car-2.png"
                                                 alt="Used car Finance up to &pound;200 p/m"
                                                 class="responsive-img">
                                        </div>
                                        <div class="finance-card__content">
                                            <span class="finance-card__text">Finance up to</span>
                                            <span class="finance-card__price">&pound;200 p/m</span>
                                        </div>
                                        <div class="finance-card__link">
                                            <span class="btn">View cars</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div>
                                    <a href="#" title="View cars" class="finance-card">
                                        <div class="finance-card__image finance-card__image4">
                                            <img src="images/budget-car-3.png"
                                                 alt="Used car Finance up to &pound;250 p/m"
                                                 class="responsive-img">
                                        </div>
                                        <div class="finance-card__content">
                                            <span class="finance-card__text">Finance up to</span>
                                            <span class="finance-card__price">&pound;250+ p/m</span>
                                        </div>
                                        <div class="finance-card__link">
                                            <span class="btn">View cars</span>
                                        </div>
                                    </a>
                                </div>
                            </div>


                        </div>
                        <!-- Finance Cards -->

                        <!-- // Finance Cards -->
                        <!-- Finance Cards -->

                        <!-- // Finance Cards -->
                        <!-- Finance Cards -->

                        <!-- // Finance Cards -->
                    </div>
                </div>
            </div>
        </div>
        <!-- // END --><!-- Homepage Warranty -->
        <div class="row-block row-block--warranty">
            <div class="wrapper">
                <div class="container">
                    <div class="warranty-top">
                        <div class="warranty-top__heading">
                            <h2>Peace of mind guaranteed with leading warranty products from AutoProtect</h2>
                        </div>
                        <div class="warranty-top__logo"><img src="images/autoprotect-logo.png"
                                                             alt="AutoProtect Warranty"></div>
                    </div>
                    <div class="warranty-cards">
                        <!-- Text Panel -->
                        <div class="text-panel text-panel--intro-text">
                            <div class="text-panel__text">
                                <p>AutoProtect's extensive experience of over 35 years in this competitive
                                    sector of the Motor Industry, enable them to provide a bespoke product
                                    tailored to the individual customers requirements.</p>
                                <p>Choose from their 2 leading warranty products;</p>
                            </div>
                            <div class="text-panel__link">
                                <a href="#" title="AutoProtect Warranty" class="btn">Read more</a>
                            </div>
                        </div>
                        <!-- // Text Panel -->
                        <!-- Text Panel -->
                        <div class="text-panel">
                            <div class="text-panel__heading">Gold Warranty</div>
                            <div class="text-panel__text">
                                <p>Our most popular and comprehensive warranty, covering all mechanical and
                                    electrical parts that were originally fitted by the manufacturer.</p>
                            </div>
                        </div>
                        <!-- // Text Panel -->
                        <!-- Text Panel -->
                        <div class="text-panel">
                            <div class="text-panel__heading">Silver Warranty</div>
                            <div class="text-panel__text">
                                <p>An extensive listed component coverage for the breakdown of mechanical and
                                    electrical components.</p>
                            </div>
                        </div>
                        <!-- // Text Panel -->
                    </div>
                </div>
            </div>
        </div>
        <!-- // Homepage Warranty --><!-- Homepage Car Carousel -->
        <div class="{v2_34_MOBILE_ON_OFF} {v2_34_TABLET_ON_OFF} {v2_34_DESKTOP_ON_OFF}">
            <div class="row-block hmpg-text">
                <div class="wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="pad-10 overflow-hidden">
                                <div class="twelvecol">
                                    <div id="cloned-hometext" class="about-text"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Homepage Search Finance --><!-- Homepage Awards -->
        <div class="row-block row-block--awards">
            <div class="wrapper">
                <div class="container">
                    <div class="section-heading">
                        <h2 class="section-heading__heading">Multi-Award Winner &amp; Sponsor</h2>
                        <div class="section-heading__subheading">You're in safe hands. Buy with confidence</div>
                    </div>
                    <div class="awards-logos">
                        <ul class="awards-logos__list">
                            <li class="awards-logos__item"><img src="images/awards-fandi.png"
                                                                alt="Hilton Car Supermarket Awards"></li>
                            <li class="awards-logos__item"><img src="images/awards-fandi-2.png"
                                                                alt="Hilton Car Supermarket Awards"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Homepage Awards --><!-- Homepage Car Carousel -->
        <div class="row-block row-block--car-carousel">
            <div class="wrapper">
                <div class="container">
                    <div class="section-heading">
                        <h2 class="section-heading__heading">Managers Specials</h2>
                        <!-- <div class="section-heading__subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur scelerisque feugiat leo.</div> -->
                    </div>


                    <div class="owl-carousel owl-theme zz1156">
                        <div class="item">
                            <a href="#" title="Used VAUXHALL CORSA for sale in Leighton Buzzard"
                               class="a_cars_Sshow">
                                <div class="specials__ref">Ref: SN62EVK</div>
                                <div class="specials__image">
                                    <img alt="Used VAUXHALL CORSA for sale in Leighton Buzzard"
                                         src="images/34562880.jpg">
                                </div>
                                <div class="specials__content">
                                    <div class="specials__heading">VAUXHALL CORSA</div>
                                    <div class="specials__variant">1.2 S AC 5d 83 BHP</div>
                                    <div class="specials__info">Manual, Petrol, Black, 2013, 47,972 miles, Ref:
                                        SN62EVK
                                    </div>
                                </div>
                                <div class="specials__prices">
                                    <div class="specials__cash">&pound;3,850</div>
                                    <div class="specials__divider"><span>or</span></div>
                                    <div class="specials__finance">&pound;57 <span>p/m</span></div>
                                </div>
                            </a>


                        </div>
                        <div class="item">
                            <a href="#" title="Used BMW 3 SERIES for sale in Leighton Buzzard"
                               class="a_cars_Sshow">
                                <div class="specials__ref">Ref: MW12KKX</div>
                                <div class="specials__image">
                                    <img alt="Used BMW 3 SERIES for sale in Leighton Buzzard"
                                         src="images/34558483.jpg">
                                </div>
                                <div class="specials__content">
                                    <div class="specials__heading">BMW 3 SERIES</div>
                                    <div class="specials__variant">2.0 320D SPORT 4d AUTO 184 BHP</div>
                                    <div class="specials__info">Automatic, Diesel, Blue, 2012, 57,775 miles,
                                        Ref: MW12KKX
                                    </div>
                                </div>
                                <div class="specials__prices">
                                    <div class="specials__cash">&pound;10,750</div>
                                    <!--<div class="specials__divider"><span>or</span></div>-->
                                    <!--<div class="specials__finance">&pound;195 <span>p/m</span></div>-->
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" title="Used BMW 5 SERIES for sale in Leighton Buzzard"
                               class="a_cars_Sshow">
                                <div class="specials__ref">Ref: YC64HCK</div>
                                <div class="specials__image">
                                    <img alt="Used BMW 5 SERIES for sale in Leighton Buzzard"
                                         src="images/34557832.jpg">
                                </div>
                                <div class="specials__content">
                                    <div class="specials__heading">BMW 5 SERIES</div>
                                    <div class="specials__variant">2.0 520D M SPORT 4d AUTO 188 BHP</div>
                                    <div class="specials__info">Automatic, Diesel, White, 2014, 44,561 miles,
                                        Ref: YC64HCK
                                    </div>
                                </div>
                                <div class="specials__prices">
                                    <div class="specials__cash">&pound;15,750</div>
                                    <div class="specials__divider"><span>or</span></div>
                                    <div class="specials__finance">&pound;236 <span>p/m</span></div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" title="Used BMW 3 SERIES for sale in Leighton Buzzard"
                               class="a_cars_Sshow">
                                <div class="specials__ref">Ref: DV62NYY</div>
                                <div class="specials__image">
                                    <img alt="Used BMW 3 SERIES for sale in Leighton Buzzard"
                                         src="images/34557695.jpg">
                                </div>
                                <div class="specials__content">
                                    <div class="specials__heading">BMW 3 SERIES</div>
                                    <div class="specials__variant">2.0 320D SPORT PLUS EDITION 2d AUTO 181 BHP
                                    </div>
                                    <div class="specials__info">Automatic, Diesel, White, 2012, 74,344 miles,
                                        Ref: DV62NYY
                                    </div>
                                </div>
                                <div class="specials__prices">
                                    <div class="specials__cash">&pound;10,750</div>
                                    <div class="specials__divider"><span>or</span></div>
                                    <div class="specials__finance">&pound;195 <span>p/m</span></div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="used-bmw-5-series-bedfordshire-bedfordshire-2047754.html"
                               title="Used BMW 5 SERIES for sale in Leighton Buzzard" class="a_cars_Sshow">
                                <div class="specials__ref">Ref: VX14KWD</div>
                                <div class="specials__image">
                                    <img alt="Used BMW 5 SERIES for sale in Leighton Buzzard"
                                         src="images/34557200.jpg">
                                </div>
                                <div class="specials__content">
                                    <div class="specials__heading">BMW 5 SERIES</div>
                                    <div class="specials__variant">2.0 520D SE 4d AUTO 181 BHP</div>
                                    <div class="specials__info">Automatic, Diesel, Black, 2014, 57,148 miles,
                                        Ref: VX14KWD
                                    </div>
                                </div>
                                <div class="specials__prices">
                                    <div class="specials__cash">&pound;12,450</div>
                                    <div class="specials__divider"><span>or</span></div>
                                    <div class="specials__finance">&pound;187 <span>p/m</span></div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" title="Used MERCEDES-BENZ E CLASS for sale in Leighton Buzzard"
                               class="a_cars_Sshow">
                                <div class="specials__ref">Ref: YK63KJZ</div>
                                <div class="specials__image">
                                    <img alt="Used MERCEDES-BENZ E CLASS for sale in Leighton Buzzard"
                                         src="images/34556995.jpg">
                                </div>
                                <div class="specials__content">
                                    <div class="specials__heading">MERCEDES-BENZ E CLASS</div>
                                    <div class="specials__variant">2.1 E220 CDI SE 4d AUTO 168 BHP</div>
                                    <div class="specials__info">Automatic, Diesel, Black, 2013, 94,088 miles,
                                        Ref: YK63KJZ
                                    </div>
                                </div>
                                <div class="specials__prices">
                                    <div class="specials__cash">&pound;10,750</div>
                                    <div class="specials__divider"><span>or</span></div>
                                    <div class="specials__finance">&pound;195 <span>p/m</span></div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" title="Used FORD FIESTA for sale in Leighton Buzzard"
                               class="a_cars_Sshow">
                                <div class="specials__ref">Ref: RF59DSY</div>
                                <div class="specials__image">
                                    <img alt="Used FORD FIESTA for sale in Leighton Buzzard"
                                         src="images/34546296.jpg">
                                </div>
                                <div class="specials__content">
                                    <div class="specials__heading">FORD FIESTA</div>
                                    <div class="specials__variant">1.2 ZETEC 5d 81 BHP</div>
                                    <div class="specials__info">Manual, Petrol, Black, 2010, 78,000 miles, Ref:
                                        RF59DSY
                                    </div>
                                </div>
                                <div class="specials__prices">
                                    <div class="specials__cash">&pound;3,450</div>
                                    <div class="specials__divider"><span>or</span></div>
                                    <div class="specials__finance">&pound;49 <span>p/m</span></div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" title="Used CHRYSLER 300C for sale in Leighton Buzzard"
                               class="a_cars_Sshow">
                                <div class="specials__ref">Ref: KM06OAO</div>
                                <div class="specials__image">
                                    <img alt="Used CHRYSLER 300C for sale in Leighton Buzzard"
                                         src="images/34474660.jpg">
                                </div>
                                <div class="specials__content">
                                    <div class="specials__heading">CHRYSLER 300C</div>
                                    <div class="specials__variant">3.5 V6 RHD 4d 250 BHP</div>
                                    <div class="specials__info">Automatic, Petrol, Blue, 2006, 79,169 miles,
                                        Ref: KM06OAO
                                    </div>
                                </div>
                                <div class="specials__prices">
                                    <div class="specials__cash">&pound;3,999</div>
                                    <div class="specials__divider"><span>or</span></div>
                                    <div class="specials__finance">&pound;91 <span>p/m</span></div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" title="Used VAUXHALL INSIGNIA for sale in Leighton Buzzard"
                               class="a_cars_Sshow">
                                <div class="specials__ref">Ref: DX14LWR</div>
                                <div class="specials__image">
                                    <img alt="Used VAUXHALL INSIGNIA for sale in Leighton Buzzard"
                                         src="images/34545561.jpg">
                                </div>
                                <div class="specials__content">
                                    <div class="specials__heading">VAUXHALL INSIGNIA</div>
                                    <div class="specials__variant">2.0 CDTi [140] ecoFLEX Design 5dr [Start
                                        Stop]
                                    </div>
                                    <div class="specials__info">Manual, Diesel, Grey, 2014, 69,000 miles, Ref:
                                        DX14LWR
                                    </div>
                                </div>
                                <div class="specials__prices">
                                    <div class="specials__cash">&pound;5,950</div>
                                    <div class="specials__divider"><span>or</span></div>
                                    <div class="specials__finance">&pound;88 <span>p/m</span></div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" title="Used MERCEDES-BENZ A CLASS for sale in Leighton Buzzard"
                               class="a_cars_Sshow">
                                <div class="specials__ref">Ref: LP63MFU</div>
                                <div class="specials__image">
                                    <img alt="Used MERCEDES-BENZ A CLASS for sale in Leighton Buzzard"
                                         src="images/34546218.jpg">
                                </div>
                                <div class="specials__content">
                                    <div class="specials__heading">MERCEDES-BENZ A CLASS</div>
                                    <div class="specials__variant">1.5 A180 CDI BLUEEFFICIENCY AMG SPORT 5d 109
                                        BHP
                                    </div>
                                    <div class="specials__info">Manual, Diesel, Blue, 2014, 40,925 miles, Ref:
                                        LP63MFU
                                    </div>
                                </div>
                                <div class="specials__prices">
                                    <div class="specials__cash">&pound;12,799</div>
                                    <div class="specials__divider"><span>or</span></div>
                                    <div class="specials__finance">&pound;236 <span>p/m</span></div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" title="Used MERCEDES-BENZ E CLASS for sale in Leighton Buzzard"
                               class="a_cars_Sshow">
                                <div class="specials__ref">Ref: EU14JWG</div>
                                <div class="specials__image">
                                    <img alt="Used MERCEDES-BENZ E CLASS for sale in Leighton Buzzard"
                                         src="images/33976218.jpg">
                                </div>
                                <div class="specials__content">
                                    <div class="specials__heading">MERCEDES-BENZ E CLASS</div>
                                    <div class="specials__variant">2.1 E300 BLUETEC HYBRID SE 4d AUTO 202 BHP
                                    </div>
                                    <div class="specials__info">Automatic, Electric Diesel, Black, 2014, 83,453
                                        miles, Ref: EU14JWG
                                    </div>
                                </div>
                                <div class="specials__prices">
                                    <div class="specials__cash">&pound;12,999</div>
                                    <div class="specials__divider"><span>or</span></div>
                                    <div class="specials__finance">&pound;240 <span>p/m</span></div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" title="Used AUDI A6 for sale in Leighton Buzzard" class="a_cars_Sshow">
                                <div class="specials__ref">Ref: YL65XPR</div>
                                <div class="specials__image">
                                    <img alt="Used AUDI A6 for sale in Leighton Buzzard"
                                         src="images/33976033.jpg">
                                </div>
                                <div class="specials__content">
                                    <div class="specials__heading">AUDI A6</div>
                                    <div class="specials__variant">2.0 TDI ULTRA S LINE 4d AUTO 188 BHP - EURO 6
                                        + 1 OWNER FROM NEW +
                                    </div>
                                    <div class="specials__info">Semi Auto, Diesel, Black, 2016, 94,813 miles,
                                        Ref: YL65XPR
                                    </div>
                                </div>
                                <div class="specials__prices">
                                    <div class="specials__cash">&pound;15,499</div>
                                    <div class="specials__divider"><span>or</span></div>
                                    <div class="specials__finance">&pound;234 <span>p/m</span></div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" title="Used VAUXHALL INSIGNIA for sale in Leighton Buzzard"
                               class="a_cars_Sshow">
                                <div class="specials__ref">Ref: WN59AYF</div>
                                <div class="specials__image">
                                    <img alt="Used VAUXHALL INSIGNIA for sale in Leighton Buzzard"
                                         src="images/34082473.jpg">
                                </div>
                                <div class="specials__content">
                                    <div class="specials__heading">VAUXHALL INSIGNIA</div>
                                    <div class="specials__variant">2.0 SE CDTI 5d 160 BHP</div>
                                    <div class="specials__info">Manual, Diesel, Black, 2009, 104,000 miles, Ref:
                                        WN59AYF
                                    </div>
                                </div>
                                <div class="specials__prices">
                                    <div class="specials__cash">&pound;2,499</div>
                                    <div class="specials__divider"><span>or</span></div>
                                    <div class="specials__finance">&pound;40 <span>p/m</span></div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" title="Used MERCEDES-BENZ A CLASS for sale in Leighton Buzzard"
                               class="a_cars_Sshow">
                                <div class="specials__ref">Ref: LL63ZGG</div>
                                <div class="specials__image">
                                    <img alt="Used MERCEDES-BENZ A CLASS for sale in Leighton Buzzard"
                                         src="images/34545650.jpg">
                                </div>
                                <div class="specials__content">
                                    <div class="specials__heading">MERCEDES-BENZ A CLASS</div>
                                    <div class="specials__variant">1.5 A180 CDI BLUEEFFICIENCY SPORT 5d 109
                                        BHP
                                    </div>
                                    <div class="specials__info">Manual, Diesel, Black, 2014, 53,871 miles, Ref:
                                        LL63ZGG
                                    </div>
                                </div>
                                <div class="specials__prices">
                                    <div class="specials__cash">&pound;11,499</div>
                                    <div class="specials__divider"><span>or</span></div>
                                    <div class="specials__finance">&pound;210 <span>p/m</span></div>
                                </div>
                            </a>
                        </div>


                    </div>


                </div>
            </div>
        </div>
        <!-- // Homepage Car Carousel -->

        <br>
        <hr>
        <br>

        <!-- // Blog Section -->
        <div class="row-bloc" style="padding: 40px 0">
            <div class="wrapper">
                <div class="container">
                    <div class="section-heading">
                        <h2 class="section-heading__heading">LATEST NEWS</h2>
                        <div class="section-heading__subheading">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Curabitur scelerisque feugiat leo.
                        </div>
                    </div>

                    <div class="col-md-4">
                        <a href="#" title="Used BMW 3 SERIES for sale in Leighton Buzzard"
                           class="a_cars_Sshow blog_box" style="text-decoration: none;">
                            <div class="specials__image">
                                <img alt="Used BMW 3 SERIES for sale in Leighton Buzzard"
                                     src="images/34545650.jpg">
                            </div>
                            <div class="specials__content text-center">
                                <div class="specials__heading">BMW 3 SERIES</div>
                                <br>
                                <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                    scelerisque feugiat leo. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Curabitur scelerisque feugiat leo. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Curabitur scelerisque feugiat leo. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Curabitur scelerisque feugiat
                                    leo.
                                </div>
                                <br>
                            </div>
                            <div class="">
                                <div class="specials__cash">Read More</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#" title="Used BMW 3 SERIES for sale in Leighton Buzzard"
                           class="a_cars_Sshow blog_box" style="text-decoration: none;">
                            <div class="specials__image">
                                <img alt="Used BMW 3 SERIES for sale in Leighton Buzzard"
                                     src="images/34545650.jpg">
                            </div>
                            <div class="specials__content text-center">
                                <div class="specials__heading">BMW 3 SERIES</div>
                                <br>
                                <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                    scelerisque feugiat leo. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Curabitur scelerisque feugiat leo. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Curabitur scelerisque feugiat leo. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Curabitur scelerisque feugiat
                                    leo.
                                </div>
                                <br>
                            </div>
                            <div class="">
                                <div class="specials__cash">Read More</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#" title="Used BMW 3 SERIES for sale in Leighton Buzzard"
                           class="a_cars_Sshow blog_box" style="text-decoration: none;">
                            <div class="specials__image">
                                <img alt="Used BMW 3 SERIES for sale in Leighton Buzzard"
                                     src="images/34545650.jpg">
                            </div>
                            <div class="specials__content text-center">
                                <div class="specials__heading">BMW 3 SERIES</div>
                                <br>
                                <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                    scelerisque feugiat leo. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Curabitur scelerisque feugiat leo. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Curabitur scelerisque feugiat leo. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Curabitur scelerisque feugiat
                                    leo.
                                </div>
                                <br>
                            </div>
                            <div class="">
                                <div class="specials__cash">Read More</div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- //  Blog Section -->
    </div>
    <!-- // Content -->
</div>