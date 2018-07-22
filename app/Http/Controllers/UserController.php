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
        $myplase = Place::all();
        return view('index',compact(['myplase']));
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
        Place::insert(['name'=>$request->input('name'), 'type'=>$request->
        input('type'), 'about'=>$request->input('about')]);
        return view('index');
    }

    public function addPhotos(Request $request)
    {
        return redirect('/places/'.$request->input('id').'/photos/add');
    }

    public function addPhotosIdGet($id)
    {
        $photos = Filesplace::where('idPlace',$id)->orderBy('created_at','desc')->get();
        return view('addPhoto', compact(['id','photos']));
    }

    public function addPhotosIdPost(Request $request, $id)
    {
        $place = Place::find($id);
        Filesplace::insert([
            'idPlace'=>$id,
            'fileName'=>$request->file('image')->hashName(),
            'filePath'=>'/'.$place->name.'/'.$request->file('image')->hashName(),
            'created_at'=> Carbon::now()]);
        $request->file('image')->store('/'.$place->name.'/', 'public');
        return redirect('/places/'.$id.'/photos/add');
    }
}
