<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    @include('layouts.partials.head')
    <style type="text/css">
        .wrap-login100 {
            width: 500px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;

            box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
        }

        .wrap-login100mobile {
            width: 100%;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;

            box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
        }
    </style>
    @yield('head')

</head>
<body class="animsition">

<!-- Header -->
@include('layouts.partials.header')

<section class="p-t-66 p-b-60" style="background-color: white">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('account.accountsidebar')
            </div>
            <div class="col-md-9">
                <div class="wrap-login100 p-b-50" style="width: auto!important; min-height: 500px!important;padding: 20px">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('layouts.partials.footer')
<!--===============================================================================================-->
<script type="text/javascript" src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/vendor/select2/select2.min.js"></script>
<script src="/js/main.js"></script>
@yield('footerjs')
</body>
</html>
