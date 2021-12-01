<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntityController extends Controller
{
    public function index($entityId)
    {
        $entity = DB::table('entities')
            ->select('entities.name', 'entities.desc', 'entities.image', 'entities.year')
            ->where('entities.id', '=', $entityId)
            ->get();

        $assets = DB::table('assets')
            ->join('entities', 'assets.entites_id', '=', 'entities.id')
            ->where('entities.id', '=', $entityId)
            ->select('assets.title', 'assets.image')
            ->get();

        return view('google-art.entity', compact('entity', 'assets'));
    }
}
