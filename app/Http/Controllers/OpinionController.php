<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Filesplace;

class OpinionController extends Controller
{
    public function addOpinion($idPlace, $id, $typeEssence, $typeOpinion)
    {
        if ($typeEssence == 'Place') {
            $essence = Place::find($id);
        } else {
            $essence = Filesplace::find($id);
        }

        $essence->opinion()->create([
            'type' => $typeOpinion,
        ]);

        return redirect()->route('places.show', $idPlace);
    }

    public function rating()
    {
        $myplaces = Place::all();
        foreach ($myplaces as $place)
        {
           $place->setAttribute('rating',$place->overAllRating());
        }
        $myplaces = $myplaces->sortByDesc('rating');

        return view('rating', compact(['myplaces']));
    }
}
