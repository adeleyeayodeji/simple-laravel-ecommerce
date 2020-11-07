<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce Project</title>
    <link rel="stylesheet" href="css/all.css?ver={{md5(rand(0,000000).time())}}">
    <link rel="stylesheet" href="css/app.css?ver={{md5(rand(0,000000).time())}}">
    <script src="js/all.js?ver={{md5(rand(0,000000).time())}}"></script>
    <script src="js/app.js?ver={{md5(rand(0,000000).time())}}"></script>
</head>
<body>
@include('header')
@yield('content')
@include('footer')
</body>
</html>
