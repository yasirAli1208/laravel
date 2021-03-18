<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="icon" type="image/png" href="images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: { families: ['Open+Sans:400,600,700', 'Poppins:400,600,700', 'Oswald:400,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>



    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.min.css')}}">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/owl-carousel/owl.carousel.min.css') }}">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo10.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.min.css') }}">

</head>
<body class="home">
    @include('commons/header')
    @yield('content')
    <script src=" {{asset('assets/vendor/jquery/jquery.min.js')}} "></script>
    <script src=" {{asset('assets/vendor/parallax/parallax.min.js')}} "></script>
    <script src=" {{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}} "></script>
    <script src=" {{asset('assets/vendor/elevatezoom/jquery.elevatezoom.min.js')}} "></script>

    <script src=" {{asset('assets/vendor/owl-carousel/owl.carousel.min.js')}} "></script>
    <!-- Main JS File -->
    <script src=" {{asset('assets/js/main.js')}} "></script>
    @include('commons/footer')
</body>
</html>
