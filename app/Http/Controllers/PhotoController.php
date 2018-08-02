<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filesplace;
use App\Place;

class PhotoController extends Controller
{
    public function selectPhotosId($id)
    {
        $photos = Place::find($id)->files()->orderBy('created_at','desc')->get();
        return view('addPhoto', compact(['id','photos']));
    }

    public function addPhotoId(Request $request, $id)
    {
        $place = Place::find($id);
        Filesplace::create([
            'place_id'=>$id,
            'fileName'=>$request->file('image')->hashName(),
            'filePath'=>'/'.$place->name.'/'.$request->file('image')->hashName(),
        ]);
        $request->file('image')->store('/'.$place->name.'/', 'public');
        return redirect()->route('selectPhotoById', $id);
    }
}
