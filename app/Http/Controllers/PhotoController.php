<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filesplace;
use App\Place;

class PhotoController extends Controller
{
    public function addPhotos()
    {
        $myplaces = Place::all();
        return view('addPhotoToPLace', compact('myplaces'));
    }

    public function selectPhotosId(Request $request, $id)
    {
        if ($id == 'place') {
            $id = $request->input('id');
        }
        $photos = Place::find($id)->files()->orderBy('created_at', 'desc')->get();
        return view('addPhoto', compact(['id', 'photos']));
    }

    public function addPhotoId(Request $request, $id)
    {
        $place = Place::find($id);
        Filesplace::create([
            'place_id' => $id,
            'fileName' => $request->file('image')->hashName(),
            'filePath' => $place->name . '/' . $request->file('image')->hashName(),
        ]);
        $request->file('image')->store('/' . $place->name . '/', 'public');
        return redirect()->route('selectPhotoById', $id);
    }
}
