<html>
    <html long="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width,initial0scale=1.0"">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Ecomerce project</title>
            <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        </head>
        <body>
        {{View::make('header')}}
        @yield('content')
        {{View::make('Footer')}} 
        </body>
        <style>
            .custom-login{
                height: 500px;
                padding-top: 100px;
            }
            .form-group{
    background-color:  #56baed;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
            }
            
   


                img.slider-img{
                height: 400px !important
            }
            .custom-product{
                height: 600px;
            }
            .slider-text{
                background-color: #35443585 !important;
            }
            .trending-image{
                height: 100px;
            }
            .trening-item{
                float:left;
                width: 20%;
            }
            .trending-wrapper{
                margin: 30px;
            }
            .detail-img{
                height:200px;
            }
            .search-box{
                width: 500px !important
            }
            .cart-list-devider{
                border-bottom: 1px solid #ccc;
                margin-bottom: 20px;
                padding-bottom: 20px;
            }
        </style>
</html>