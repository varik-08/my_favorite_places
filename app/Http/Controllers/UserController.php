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
    public function index()
    {
        $myplaces = Place::all();
        return view('index', compact(['myplaces']));
    }

    public function place($id)
    {
        $photos = Place::find($id)->files()->orderBy('created_at', 'desc')->get();
        $place = Place::find($id);
        return view('place', compact(['photos', 'place']));
    }

    public function createPlace()
    {
        $types = Type::all();
        return view('create', compact(['types']));
    }

    public function getCreateForm(UserRequest $request)
    {
        Place::create($request->all());
        $myplaces = Place::all();
        return view('index', compact(['myplaces']));
    }

    public function redir()
    {
        return redirect(route('places'));
    }

    public function setLang($locale)
    {
        if (in_array($locale, config('app.locales'))) {
            Session::put('locale', $locale);
        }
        return redirect()->back();
    }
}
