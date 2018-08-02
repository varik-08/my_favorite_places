<html>
<head>
    <style>
        .mainIndex {
            margin-left: 20px;
            margin-top: 20px;
        }

        .field {
            clear: both;
            text-align: right;
            line-height: 25px;
        }

        label {
            float: left;
            padding-right: 10px;
        }

        .main {
            float: left;
        }
        .active{
            text-decoration: underline;
        }
    </style>

    <title>@yield('title')</title>

    <script data-require="jquery*" data-semver="2.0.3" src="https://code.jquery.com/jquery.min.js"></script>
    <script data-require="bootstrap@3.1.1" data-semver="3.1.1"
            src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link data-require="bootstrap-css@3.1.1" data-semver="3.1.1" rel="stylesheet"
          href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>

</head>
<body>
<div class="navbar">
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'places') active @endif" href="{{route('places')}}">Все места</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'createPlace') active @endif" href="{{route('createPlace')}}">Добавить новое место</a>
        </li>
    </ul>
</div>

@yield('content')
</body>
</html>
