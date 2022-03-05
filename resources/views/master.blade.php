<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    {{ View::make('header') }}
    @yield('content')
    {{ view::make('footer') }}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px
    }

    .dd {
        display: flex;
        justify-content: center;
        align-items: center
    }
    .slider{
        height: 400px !important;
        width: 600px !important;
    }
    .custom_product{
        height: 600px;
    }
    .m{
        margin: 0px 10px 0px 10px !important;
    }
    .slider_text{
        background-color: #35443585;
        text-align: center
    }
    .trending_image{
        width: auto;
        height: auto;
    }
    .trending_item{
        float: left;
        width: 20%;
    }
    .trending_wrapper{
        margin: 30px;
    }
    .name{
        /* margin-top: auto */
    }
    .custom_product{
        margin: 30px;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }

</style>

</html>
