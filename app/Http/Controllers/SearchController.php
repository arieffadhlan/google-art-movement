<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if ($request->cari == null) {
            return back();
        }
        
        // Entity
        $entities = DB::table('entities')
            ->where('entities.name', 'like', '%' . $request->cari . '%')
            ->select('entities.id', 'entities.name', 'entities.image')
            ->get();
        
        // Story
        $story = DB::table('stories')
            ->where('stories.title', 'like', '%' . $request->cari . '%')
            ->select(
                'stories.id',
                'stories.title',
                'stories.image'
            )
            ->get();

        // Story
        $exhibit = DB::table('exibits')
            ->join('partners', 'partners.id', '=', 'exibits.partner_id')
            ->where('exibits.title', 'like', '%' . $request->cari . '%')
            ->select(
                'exibits.id',
                'exibits.title',
                'exibits.image',
                'partners.name as partner_name'
            )
            ->get();
            
        // Asset
        $asset = DB::table('assets')
            ->where('assets.title', 'like', '%' . $request->cari . '%')
            ->select('assets.id', 'assets.title', 'assets.image')
            ->get();

        // Artist
        $artist = DB::table('assets')
            ->join('artists', 'artists.id', '=', 'assets.artist_id')
            ->where('artists.name', 'like', '%' . $request->cari . '%')
            ->select(
                'artists.id',
                'artists.name',
                'assets.image'
            )
            ->limit(1)
            ->get();

        // Partner
        $partner = DB::table('partners')
            ->select('partners.id', 'partners.name', 'partners.image')
            ->where('partners.name', 'like', '%' . $request->cari . '%')
            ->get();

        if ($entities->isNotEmpty()) {
            $entity_stories = DB::table('entities')
                ->join('stories', 'stories.entites_id', '=', 'entities.id')
                ->where('entities.name', 'like', '%' . $request->cari . '%')
                ->select(
                    'stories.id as story_id',
                    'stories.title as story_title',
                    'stories.image as story_image',
                )
                ->get();

            $entity_exhibits = DB::table('entities')
                ->join('exibits', 'exibits.entites_id', '=', 'entities.id')
                ->join('partners', 'exibits.partner_id', '=', 'partners.id')
                ->where('entities.name', 'like', '%' . $request->cari . '%')
                ->select(
                    'exibits.id as exhibit_id',
                    'exibits.title as exhibit_title',
                    'exibits.image as exhibit_image',
                    'partners.name as partner_name'
                )
                ->get();

            $entity_assets = DB::table('assets')
                ->join('entities', 'assets.entites_id', '=', 'entities.id')
                ->where('entities.name', 'like', '%' . $request->cari . '%')
                ->select('assets.id', 'assets.title', 'assets.image')
                ->get();
            
            return view('google-art.search', compact(
                'entities',
                'entity_stories',
                'entity_exhibits',
                'entity_assets',
                // 'story',
                // 'exhibit',
                // 'asset',
                // 'artist',
                // 'partner',
            ));
        } 

        return view('google-art.search', compact(
            'entities',
            'story',
            'exhibit',
            'asset',
            'artist',
            'partner',
        ));
    }
}
