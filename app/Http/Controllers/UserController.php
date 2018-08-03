<?php

namespace App\Http\Controllers;

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
        $type = Place::find($id)->type()->value('name');
        return view('place', compact(['id','photos','place','type']));
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
}
