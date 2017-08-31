<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Juan Portfolio - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('plugins/bootstrap/css/bootstrap.min.css') !!}

    <!-- Custom CSS -->
    {!! Html::style('plugins/my_theme/css/stylish-portfolio.css') !!}

    <!-- Custom Fonts -->
    {!! Html::style('plugins/my_theme/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic') !!}
</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#">Start Bootstrap</a>
            </li>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Start Bootstrap</h1>
            <h3>Free Bootstrap Themes &amp; Templates</h3>
            <br>
            <a href="#" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>

    <!-- jQuery -->
    <script src="{{ asset('plugins/my_theme/js/jquery.js') }}"></script> 

    <!-- Bootstrap Core JavaScript -->
    <script src=" {{ asset('plugins/my_theme/js/bootstrap.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>

</body>

</html>
