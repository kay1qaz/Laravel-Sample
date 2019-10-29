<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laravel CRUD Sample</title>
{{--    TODO --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
{{--    <link href="https://asa.auckland.ac.nz/laravel/css/app.css" rel="stylesheet" type="text/css" />--}}

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
        .btn {
            min-width:100px;
        }
        .center-block {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .search{
            border: 1px solid #e0e0e0;
            padding: 15px;
            margin-bottom: 15px;
        }
        .nav-link{
            padding: 0;
        }
        [data-letters][data-type="profile"]:before {
            background:	#55C1E7;
        }
        .navbar-expand-md .navbar-nav .dropdown-menu {
            position: absolute !important;
        }
    </style>

</head>
<body>

<div class="jumbotron-fluid text-Left mb-0 p-4">
    <h1>Laravel CRUD Sample</h1>
    <p>Laravel is the most popular PHP Framework. With Lavarel, you can get to work on your projects rapidly. You’ll also be able to skip a lot of groundwork since you get access to functions such as user authentication, session management, and caching. Overall, Laravel packs all the functionality you’ll need to build a modern PHP application, which is saying a lot.</p>
</div>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-lg-4">
    <div class="navbar-collapse order-3 dual-collapse2">
        <ul class="navbar-nav flex-row ml-auto mr-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-3 mr-lg-0" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="http://placehold.it/50/55C1E7/fff&text=KS" alt="Kay Shoji" class="rounded-circle" />
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="">Kay Shoji</a>
                    <a class="dropdown-item" href="">kay.shoji@auckland.ac.nz</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>


<div class="container">
    @yield('content')
</div>

<!-- JavaScripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>

</body>
</html>