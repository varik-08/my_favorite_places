<?php

namespace App\Http\Controllers;

use App\Opinion;
use App\Place;
use Illuminate\Http\Request;
use App\Filesplace;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Type;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\App;


class UserController extends Controller
{
    public function setLang($locale)
    {
        if (in_array($locale, config('app.locales'))) {
            Session::put('locale', $locale);
        }
        return redirect()->back();
    }
}
