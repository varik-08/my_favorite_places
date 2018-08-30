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
            <a class="nav-link @if(Route::currentRouteName() == 'places') active @endif" href="{{route('places')}}">@lang('lan.navBar.allPlace')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'createPlace') active @endif" href="{{route('createPlace')}}">@lang('lan.navBar.addNewPlace')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'addPhotos') active @endif" href="{{route('addPhotos')}}">@lang('lan.navBar.addPhotoToThePlace')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'allRating') active @endif" href="{{route('allRating')}}">@lang('lan.navBar.ratingForAllPlace')</a>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">@lang('lan.navBar.selectLanguages')<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="{{route('setLang','ru')}}">@lang('lan.navBar.ru')</a></li>
                <li><a href="{{route('setLang','en')}}">@lang('lan.navBar.en')</a></li>
            </ul>
        </li>
    </ul>
</div>

@yield('content')
</body>
</html>
