<footer class="footer footer--seo-footer">
    <!-- Used Vehicles -->
    <div class="footer__top">
        <div class="wrapper">
            <div class="container">
                <div class="footer__used-vehicles footer__used-vehicles--cars">
                    <div class="footer__title">Used Cars</div>
                    <ul class="footer__used-list">
                    @foreach ($makes as $make)
                        <li><a href="/search?make={{ $make->make }}" title="Used "{{$make->make}}>Used <span> {{ $make->make }}</span></a></li>
                    @endforeach 
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
                            <div class="location-address__name">Car Dealer Media Head Office</div>
                            <div class="location-address__address">69-75 Yarmouth Road<br>Nowich,<br>Norfolk,<br>NR1 1AU
                            </div>
                            <div class="location-address__telephone"><i class="fa fa-phone" aria-hidden="true"></i>
                                01603 959666
                            </div>
                            <div class="location-address__location"><i class="fas fa-map-marker-alt"></i><a href="#">
                                Find us</a></div>
                        </div>
                        <!-- // location address -->
                        <!-- location address 
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
                        <li>FCA No. </li>
                    </ul>
                    <div class="footer__fca-para">
                        <div id="fca-disclaimer">
                            Car Dealer Media Limited are here to help you decide on your next big deal - the purchase of your new vehicle.
                        </div>
                    </div>
                </div>
                <!-- // Footer Legal -->
            </div>
        </div>
    </div>
    <!-- // Footer Main -->
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
                            &copy; 2019 - <a rel="external nofollow" href="https://www.cardealer.co.uk/"
                                             title="Click Dealer">Website powered By Car Dealer Media</a>
                        </div>
                        <div class="footer__click-logo">
                            <a rel="external nofollow" href="" title="Car Dealer">
                                <img src="images/new_logo.png" alt="Powered by Car Dealer"
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