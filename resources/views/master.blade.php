<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>E-commerce Website</title>
</head>
<body>
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}
</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px;
    }

    img.slider-img {
        height: 500px;
    !important
    }

    .slider-text {
        background-color: #35443585 !important;
    }

    .trending-img {
        height: 90px;
    }

    .trending-item {
        float: left;
        width: 15%;
    }

    .trending-wrapper {
        margin: 1%;
    }

    .detail-img {
        height: 200px;
    }

    .search-box {
        width: 500px !important;
    }

    .cart-list-divider {
        border-bottom: 1px solid #cccccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>
</html>
