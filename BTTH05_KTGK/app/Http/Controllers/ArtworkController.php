<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artworks = Artwork::orderBy('created_at', 'desc')->paginate(10); // Sắp xếp theo created_at giảm dần (ngày gần nhất trước)
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
        return redirect()->route('artworks.index')->with('success', 'Thêm mới thành công !');
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
        return view('artwork.edit', compact('artwork'));
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
        $request->validate([
            'artist_name' => 'required',
            'description' => 'required',
            'art_type' => 'required|in:art,music,literature', // Kiểm tra art_type có giá trị hợp lệ
            'media_link' => 'required|url', // Kiểm tra media_link là URL hợp lệ
            'cover_image' => 'image|mimes:jpeg,png,jpg,gif', // Kiểm tra cover_image là tệp hình ảnh hợp lệ
        ]);

        // Kiểm tra xem có tệp tin mới được tải lên hay không
        if ($request->hasFile('cover_image')) {
            // Xóa tệp tin cũ
            if ($artwork->cover_image) {
                Storage::delete($artwork->cover_image);
            }

            // Tải lên tệp tin mới
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->file('cover_image')->extension();
            $request->file('cover_image')->move(public_path('/assets/img/'), $filename);
        } else {
            $filename = $artwork->cover_image; // Giữ nguyên tên tệp tin cũ
        }

        // Cập nhật thông tin của artwork
        $artwork->update([
            'artist_name' => $request->input('artist_name'),
            'description' => $request->input('description'),
            'art_type' => $request->input('art_type'),
            'media_link' => $request->input('media_link'),
            'cover_image' => $filename,
        ]);

        return redirect()->route('artworks.index')->with('success', 'Sửa thành công !');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artwork $artwork)
    {
        //2
        $artwork->delete();
        return redirect()->with('success', 'Xóa thành công!');
    }
}
