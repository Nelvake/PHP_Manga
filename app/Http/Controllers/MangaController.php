<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Manga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TJGazel\Toastr\Facades\Toastr;

class MangaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mangas = Manga::get();
        return view('manga/index', compact('mangas'));
    }

    public function addToFavorite($mangaId){
        $userId = Auth::id();
        $favorite = Favorite::where('manga_id', $mangaId)->where('user_id', $userId)->first();
        if($favorite == null){
            $favorite = new Favorite();
            $favorite->user_id = $userId;
            $favorite->manga_id = $mangaId;
            $favorite->save();
            
            Toastr::success('Added to favorites successfully');
            return redirect("/manga");
        }
        Toastr::error('This manga is already in favorites');
        return redirect("/manga");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manga/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manga = new Manga();
        $manga->name = request('name');
        $manga->image_url = request('image_url');
        $manga->author = request('author');
        $manga->painter = request('painter');
        $manga->publisher = request('publisher');
        $manga->genre = request('genre');
        $manga->description = request('description');

        $manga->save();

        Toastr::success('Manga added successfully');
        return redirect("/manga");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manga  $manga
     * @return \Illuminate\Http\Response
     */
    public function show(Manga $manga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manga  $manga
     * @return \Illuminate\Http\Response
     */
    public function edit(Manga $manga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manga  $manga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manga $manga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manga  $manga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manga $manga)
    {
        //
    }
}
