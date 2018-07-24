<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;
use App\Filesplace;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Type;
use App\Http\Requests\UserRequest;
use App\Http\Requests\AddPhotoRequest;


class UserController extends Controller
{
    public function index()
    {
        $myplaces = Place::all();
        return view('index',compact(['myplaces']));
    }

    public function place($id = null)
    {
        $photos = Filesplace::where('idPlace',$id)->orderBy('created_at','desc')->get();
        $place = Place::where('id','=',$id)->first();
        $type = Type::where('id', '=', $place->type)->value('name');
        return view('place', compact(['id','photos','place','type']));
    }

    public function createPlace()
    {
        $types = Type::all();
        return view('create',compact(['types']));
    }

    public function getCreateForm(UserRequest $request)
    {
        //Place::insert(['name'=>$request->input('name'), 'type'=>$request->
        //input('type'), 'about'=>$request->input('about')]);
        Place::create($request->all());
        $myplaces = Place::all();
        return view('index',compact(['myplaces']));
    }

    public function addPhotos(AddPhotoRequest $request)
    {
        return redirect('/places/'.$request->input('id').'/photos/add');
    }
}
