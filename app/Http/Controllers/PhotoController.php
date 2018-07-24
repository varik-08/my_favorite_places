<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filesplace;
use App\Place;

class PhotoController extends Controller
{
    public function selectPhotosId($id)
    {
        $photos = Filesplace::where('idPlace',$id)->orderBy('created_at','desc')->get();
        return view('addPhoto', compact(['id','photos']));
    }

    public function addPhotoId(Request $request, $id)
    {
        $place = Place::find($id);
        Filesplace::create([
            'idPlace'=>$id,
            'fileName'=>$request->file('image')->hashName(),
            'filePath'=>'/'.$place->name.'/'.$request->file('image')->hashName(),
        ]);
        $request->file('image')->store('/'.$place->name.'/', 'public');
        return redirect('/places/'.$id.'/photos/add');
    }
}
