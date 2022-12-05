<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Author: HiBootstrap, Category: Tourism, Multipurpose, HTML, SASS, Bootstrap" />

    <title>West Bengal Tourism {{@$title ?('| '.@$title):''}} </title>
    <link rel="icon" href="{{asset('assets/img/logo/favicon.ico')}}" type="image/png" />

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" />

    <!-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.min.css')}}"> -->

    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" />

    <!-- <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}" /> -->

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/mystyle.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
   <link rel="stylesheet" href="{{asset('assets/css/sunstyle.css')}}" />


    <link rel="stylesheet" href="{{asset('assets/css/myresponsive.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/theme-dark.css')}}" />
    @yield('css')
   



</head>
{{-- <style>
    .box {
        background: #FFFFFF;
        box-shadow: -4px -5px 14px rgb(0 0 0 / 8%), 5px 8px 16px rgb(0 0 0 / 8%);
        border-radius: 10px;
        padding: 20px 20px;
        margin-top: 30px;
    }

    .map_area {
        width: 100%;
    }
</style> --}}

<body>
<!--preloader start-->
   <div id="loading">
      <div class="loader"></div>
   </div>
   <!--preloader end--> 