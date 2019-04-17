<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-language" content="en" />

    <title>{{ config('app.name', 'Car Dealer') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet"
    property="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/styles.css?v=2">


    <style>
        .show_car_S {
            padding: 50px 0;
        }
    </style>



</head>

</head>
<body>
    <noscript>
        <div id="noscript-top">
            <div class="container">
                Warning: For full functionality of this site it is necessary to enable JavaScript. Here are the <a
                    href="http://www.enable-javascript.com/" target="_blank">instructions how to enable JavaScript in your
                web browser</a>.
            </div>
        </div>
    </noscript>

    <main class="py-4">

        <div id="app">

            @yield('content')

        </div>
    </main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script async src="js/megamenu-min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script>
    var megamenu_options = {
        breakpoint: 740
    };
</script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })
</script>
<script>
    $('#owl-carousel1').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>
<script>
    $('#owl-carousel2').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })
</script>
</body>
</html>
