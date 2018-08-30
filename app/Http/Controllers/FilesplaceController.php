<?php

namespace App\Http\Controllers;

use App\Filesplace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilesplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filesplace  $filesplace
     * @return \Illuminate\Http\Response
     */
    public function show(Filesplace $filesplace)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filesplace  $filesplace
     * @return \Illuminate\Http\Response
     */
    public function edit(Filesplace $filesplace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filesplace  $filesplace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filesplace $filesplace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filesplace  $filesplace
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filesplace = Filesplace::find($id);
        $filesplace->opinion()->delete();
        Storage::delete($filesplace->filePath);
        $filesplace->delete();
        return redirect()->route('aboutAsPlace',$filesplace->place_id);
    }

    public function download($id)
    {
        $filesplace = Filesplace::find($id);
        $path = str_replace('/', '\\', storage_path($filesplace->filePath));
        $path = str_replace('\\storage', '\\storage\\app\\public', $path);
        return response()->download($path);
    }
}
