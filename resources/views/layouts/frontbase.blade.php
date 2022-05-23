<!DOCTYPE html>
<html lang="en">

<--HEAD>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>@yield("title")</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="assets/style.css">

    <!--[if lt IE 9]>
    <script src="js/ie-support/html5.js"></script>
    <script src="js/ie-support/respond.js"></script>
    <![endif]-->

    @yield("head")

</head>

<body>
@include("home.header")


@section('sidebar')
    @include("home.sidebar")
@show

<div class="container">
    @yield('content')
</div>

@include("home.footer")


@yield('foot')
</body>
</html>
