<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntityController extends Controller
{
    public function index($entityId)
    {
        $entities = DB::table('entities')
            ->select('entities.id as entity_id', 'entities.name as entity_name', 'entities.image as entity_image')
            ->limit(7)
            ->where('entities.id', '!=', $entityId)
            ->get();

        $entity = DB::table('entities')
            ->select('entities.name', 'entities.desc', 'entities.image', 'entities.year')
            ->where('entities.id', '=', $entityId)
            ->get();

        $stories = DB::table('entities')
            ->join('stories', 'stories.entites_id', '=', 'entities.id')
            ->where('entities.id', '=', $entityId)
            ->select(
                'stories.id as story_id',
                'stories.title as story_title',
                'stories.image as story_image',
            )
            ->limit(7)
            ->get();

        $exhibits = DB::table('entities')
            ->join('exibits', 'exibits.entites_id', '=', 'entities.id')
            ->join('partners', 'exibits.partner_id', '=', 'partners.id')
            ->where('entities.id', '=', $entityId)
            ->select(
                'exibits.id as exhibit_id',
                'exibits.title as exhibit_title',
                'exibits.image as exhibit_image',
                'partners.name as partner_name'
            )
            ->limit(7)
            ->get();

        $assets = DB::table('assets')
            ->join('entities', 'assets.entites_id', '=', 'entities.id')
            ->where('entities.id', '=', $entityId)
            ->select('assets.id', 'assets.title', 'assets.image')
            ->get();
        
        $artists = DB::table('assets')
            ->join('artists', 'artists.id', '=', 'assets.artist_id')
            ->select(
                'artists.id',
                'artists.name',
                'assets.image'
            )
            ->limit(7)
            ->get();

        return view('google-art.entity', compact('entities', 'entity', 'stories', 'exhibits', 'assets', 'artists'));
    }
}
