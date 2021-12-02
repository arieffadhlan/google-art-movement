<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssetController extends Controller
{
    public function index($assetId)
    {
        $assets = DB::table('assets')
            ->join('entities', 'assets.entites_id', '=', 'entities.id')
            ->select('assets.id as asset_id', 'assets.title as asset_title', 'assets.image as asset_image')
            ->limit(7)
            ->get();

        $asset = DB::table('assets')
            ->join('artists', 'artists.id', '=', 'assets.artist_id')
            ->where('assets.id', '=', $assetId)
            ->select(
                'assets.id as asset_id',
                'artists.name as artist_name',
                'assets.title as asset_title',
                'assets.detail as asset_detail',
                'assets.image as asset_image'
            )
            ->get();

        return view('google-art.asset', compact('assets', 'asset'));
    }
}
