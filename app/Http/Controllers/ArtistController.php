<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistController extends Controller
{
    public function index($artistId)
    {
        $topImage = DB::table('assets')
            ->join('artists', 'artists.id', '=', 'assets.artist_id')
            ->where('assets.artist_id', '=', $artistId)
            ->select(
                'assets.id as asset_id',
                'assets.image as asset_image'
            )
            ->limit(1)
            ->get();

        $entities = DB::table('entities')
            ->select('entities.id as entity_id', 'entities.name as entity_name', 'entities.image as entity_image')
            ->limit(7)
            ->get();

        $assets = DB::table('assets')
            ->join('artists', 'artists.id', '=', 'assets.artist_id')
            ->where('assets.artist_id', '=', $artistId)
            ->select(
                'assets.id as asset_id',
                'assets.title as asset_title',
                'assets.image as asset_image'
            )
            ->get();

        $artist = DB::table('artists')
            ->select('artists.name', 'artists.detail', 'artists.riwayat')
            ->where('artists.id', '=', $artistId)
            ->get();

        return view('google-art.artist', compact('topImage', 'entities', 'assets', 'artist'));
    }
}
