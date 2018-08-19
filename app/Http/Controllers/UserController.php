<?php

namespace App\Http\Controllers;

use App\Opinion;
use App\Place;
use Illuminate\Http\Request;
use App\Filesplace;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Type;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    public function index()
    {
        $myplaces = Place::all();
        return view('index',compact(['myplaces']));
    }

    public function place($id)
    {
        $photos = Place::find($id)->files()->orderBy('created_at','desc')->get();
        $place = Place::find($id);
        return view('place', compact(['photos','place']));
    }

    public function createPlace()
    {
        $types = Type::all();
        return view('create',compact(['types']));
    }

    public function getCreateForm(UserRequest $request)
    {
        Place::create($request->all());
        $myplaces = Place::all();
        return view('index',compact(['myplaces']));
    }

    public function test()
    {
        //$opinion = Opinion::find(3)->opinionable;
        $countLike = Place::find(1)->rating;
        dd($countLike);
    }
}
