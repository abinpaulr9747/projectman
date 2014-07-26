<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login | Project Manager</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ Asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Custom CSS -->
    <link href="{{ Asset('/css/sb-admin.css') }}" rel="stylesheet">

    <!-- Main custom CSS -->
    <link href="{{ Asset('/css/style.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ Asset('font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<style>

    body
    {
        background:#272727 url("{{ Asset('/images/wallpaper.jpg') }}") top left no-repeat;
    }

</style>

<div id="login-wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Project Manager</a>
        </div>

        <!-- /.navbar-collapse -->
    </nav>

    <div>

        <div class="container-fluid">

            @yield('content')

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="{{ Asset('/js/jquery-1.11.0.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ Asset('/js/bootstrap.min.js') }}"></script>

</body>

</html>
