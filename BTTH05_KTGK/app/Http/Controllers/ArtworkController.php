<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artworks = Artwork::paginate(10); // Lấy 10 bản ghi trên mỗi trang
        return view('artwork.index', compact('artworks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('artwork.create');
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
        $filename = '';
        if ($request->hasFile('cover_image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' .$request->file('cover_image')->extension();
            $request->file('cover_image')->move(public_path('/assets/img/'), $filename);
        }
        $artworks = Artwork::create([
            'artist_name' => $request->artist_name,
            'description' => $request->description,
            'art_type' => $request->art_type,
            'media_link' => $request->media_link,
            'cover_image'=> $filename,
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function show(Artwork $artwork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function edit(Artwork $artwork)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artwork $artwork)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artwork $artwork)
    {
        //
        $artwork->delete();
        return redirect()->route('artworks.index');
    }
}
