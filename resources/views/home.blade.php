<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shope management and e-commerce</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    @include('header')

    @yield('content')

    @include('footer')

</body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px
    }
    img.slider-img
    {
        height: 400px !important;
    }
    .custom-product{
        height: 600px
    }
    .slider-text{
        background-color: #24465454 !important;
    }
    .trending-img{
        height: 100px;
    }
    .tredning-item{
        float: left;
        width: 50%;
    }
    .trending-wrapper{
        margin: 20px;
    }
    .detail-img{
        height: 200px;
    }
    .search-form{
        width: 500px !important;
    }
    .cart-list-devider {
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
    }



</style>
</html>
