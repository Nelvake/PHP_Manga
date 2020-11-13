<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Manga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
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
        $userId = Auth::id();
        $favoritesIds = Favorite::where('user_id',$userId)->get();
        $favorites = array();
        foreach($favoritesIds as $fav){
            array_push($favorites, Manga::where('id',$fav->manga_id)->first());
        }
        return view('favorite/index', compact('favorites'));
    }
}
