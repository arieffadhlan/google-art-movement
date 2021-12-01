<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $entities = DB::table('entities')
            ->select('entities.id', 'entities.name', 'entities.image')
            ->get();

        $contemporaryArts = DB::table('assets')
            ->join('entities', 'assets.entites_id', '=', 'entities.id')
            ->select('entities.name', 'assets.entites_id', 'assets.title')
            ->where('assets.entites_id', '=', 1)
            ->get();

        $modernArts = DB::table('assets')
            ->join('entities', 'assets.entites_id', '=', 'entities.id')
            ->select('entities.name', 'assets.entites_id', 'assets.title')
            ->where('assets.entites_id', '=', 2)
            ->get();

        $modernisms = DB::table('assets')
            ->join('entities', 'assets.entites_id', '=', 'entities.id')
            ->select('entities.name', 'assets.entites_id', 'assets.title')
            ->where('assets.entites_id', '=', 3)
            ->get();

        $renaissances = DB::table('assets')
            ->join('entities', 'assets.entites_id', '=', 'entities.id')
            ->select('entities.name', 'assets.entites_id', 'assets.title')
            ->where('assets.entites_id', '=', 4)
            ->get();

        $romanticisms = DB::table('assets')
            ->join('entities', 'assets.entites_id', '=', 'entities.id')
            ->select('entities.name', 'assets.entites_id', 'assets.title')
            ->where('assets.entites_id', '=', 5)
            ->get();

        return view('home', compact(
            'entities',
            'contemporaryArts',
            'modernArts',
            'modernisms',
            'renaissances',
            'romanticisms'
        ));
    }
}
