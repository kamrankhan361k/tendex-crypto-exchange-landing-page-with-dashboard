<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Tendex</title>
        <!-- Favicon icon -->
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="./images/favicon.png"
        />
        <!-- Custom Stylesheet -->
        @yield('extra-css')
        <link rel="stylesheet" href="./css/style.css" />
    </head>

    <body class="@@dashboard">
         
    <x-preloader />
        <div id="main-wrapper">
            

<x-landing.header  />
{{ $slot }}
<x-landing.footer />

            
        </div>

        <script src="./vendor/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <script src="./js/scripts.js"></script>
        @yield('extra-js')
    </body>
</html>
