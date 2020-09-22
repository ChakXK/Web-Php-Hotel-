
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Royal Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

    <link rel="stylesheet" href="<?=asset('css/bootstrap.min.css')?>"/>
    
    <link rel="stylesheet" href="<?=asset('css/animate.css')?>"/>
    <link rel="stylesheet" href="<?=asset('css/owl.carousel.min.css')?>"/>
    <link rel="stylesheet" href="<?=asset('css/aos.css')?>"/>
    <link rel="stylesheet" href="<?=asset('css/bootstrap-datepicker.css')?>"/>
    <link rel="stylesheet" href="<?=asset('css/jquery.timepicker.css')?>"/>
    <link rel="stylesheet" href="<?=asset('css/fancybox.min.css')?>"/>
    
    <link rel="stylesheet" href="<?=asset('fonts/ionicons/css/ionicons.min.css')?>"/>
    <link rel="stylesheet" href="<?=asset('fonts/fontawesome/css/font-awesome.min.css')?>"/>

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?=asset('css/style.css')?>"/>
  </head>
  <body>
    
   @include('layouts.header')

    

   @yield('content')

   

    @include('layouts.footer')
    
    <script src="<?=asset('js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?=asset('js/jquery-migrate-3.0.1.min.js')?>"></script>
    <script src="<?=asset('js/popper.min.js')?>"></script>
    <script src="<?=asset('js/bootstrap.min.js')?>"></script>
    <script src="<?=asset('js/owl.carousel.min.js')?>"></script>
    <script src="<?=asset('js/jquery.stellar.min.js')?>"></script>
    <script src="<?=asset('js/jquery.fancybox.min.js')?>"></script>
    
    
    <script src="<?=asset('js/aos.js')?>"></script>
    
    <script src="<?=asset('js/bootstrap-datepicker.js')?>"></script> 
    <script src="<?=asset('js/jquery.timepicker.min.js')?>"></script> 

    

    <script src="<?=asset('js/main.js')?>"></script>
  </body>
</html>