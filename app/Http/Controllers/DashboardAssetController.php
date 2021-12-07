<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets = DB::table('assets')
            ->select(
                'assets.id', 
                'assets.title', 
                'assets.desc', 
                'assets.detail',
                'assets.year'
                )
            ->get();
        
        return view('dashboard.asset.index', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assets = DB::table('assets')
            ->join('entities', 'entities.id', '=', 'assets.entites_id')
            ->join('partners', 'partners.id', '=', 'assets.partner_id')
            ->join('artists', 'artists.id', '=', 'assets.artist_id')
            ->select(
                'assets.id as asset_id', 
                'assets.title as asset_title', 
                'assets.desc as asset title', 
                'assets.detail as asset_detail',
                'assets.year as asset_year',
                'entities.name as kategori',
                'partners.name as partner',
                'artists.name as artist'
                )
            ->get();

        $entities = DB::table('entities')
            ->select(
                'entities.id as id',
                'entities.name as name',
            )
            ->get();
        
        $partners = DB::table('partners')
            ->select(
                'partners.id as id',
                'partners.name as name',
            )
            ->get();

        $artists = DB::table('artists')
            ->select(
                'artists.id as id',
                'artists.name as name',
            )
            ->get();

        return view('dashboard.asset.create', compact('assets', 'partners', 'entities', 'artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Harap masukkan :attribute!'
        ];

        $this->validate($request, [
            'title' => 'required',
            'year' => 'required',
            'detail' => 'required',
            'image' => 'required',
            'entites_id' => 'required',
            'partner_id' => 'required',
            'artist_id' => 'required',
        ], $messages);

        Asset::create([
            'title' => $request->title,
            'year' => $request->year,
            'detail' => $request->detail,
            'image' => $request->image,
            'entites_id' => $request->entites_id,
            'partner_id' => $request->partner_id,
            'artist_id' => $request->artist_id,
        ]);

        return redirect('/dashboard/asset');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assets = Asset::find($id);
        
        $entities = DB::table('entities')
            ->select(
                'entities.id as id',
                'entities.name as name',
            )
            ->get();
        
        $partners = DB::table('partners')
            ->select(
                'partners.id as id',
                'partners.name as name',
            )
            ->get();

        $artists = DB::table('artists')
            ->select(
                'artists.id as id',
                'artists.name as name',
            )
            ->get();

        return view('dashboard.asset.edit', compact('assets', 'partners', 'entities', 'artists'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $assets = Asset::whereId($id)->first();

        $messages = [
            'required' => 'Harap masukkan :attribute!'
        ];

        $this->validate($request, [
            'title' => 'required',
            'year' => 'required',
            'detail' => 'required',
            'image' => 'required',
            'entites_id' => 'required',
            'partner_id' => 'required',
            'artist_id' => 'required',
        ], $messages);

        $assets->update([
            'title' => $request->title,
            'year' => $request->year,
            'detail' => $request->detail,
            'image' => $request->image,
            'entites_id' => $request->entites_id,
            'partner_id' => $request->partner_id,
            'artist_id' => $request->artist_id,
        ]);

        return redirect('/dashboard/asset');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset = Asset::find($id);
        $asset->delete();

        return redirect('/dashboard/asset');
    }
}
