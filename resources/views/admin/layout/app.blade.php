<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Salon') }}</title>


    <!-- Bootstrap Core CSS -->
    <link href="{{url('css/admin.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">


</head>

<body>

@include('admin.layout._navbar')

<div class="container-fluid" id="app" >
    <div class="row">

        @include('admin.layout._sidebar')

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @yield('content')
        </div>

    </div>
</div>


@include('admin.layout.footer')

<!-- Include this after the sweet alert js file -->

@include('sweet::alert')

@yield('scripts')

</body>

</html>