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
            ->where('assets.id', '!=', $assetId)
            ->limit(7)
            ->get();

        $asset = DB::table('assets')
            ->join('artists', 'artists.id', '=', 'assets.artist_id')
            ->join('partners', 'partners.id', '=', 'assets.partner_id')
            ->where('assets.id', '=', $assetId)
            ->select(
                'assets.id as asset_id',
                'assets.title as asset_title',
                'assets.desc as asset_desc',
                'assets.detail as asset_detail',
                'assets.image as asset_image',
                'artists.id as artist_id',
                'artists.name as artist_name',
                'partners.id as partner_id',
                'partners.name as partner_name',
                'partners.logo as partner_logo',
                'partners.location as partner_location',
            )
            ->get();

        return view('google-art.asset', compact('assets', 'asset'));
    }
}
