<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Artist;

class DashboardArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = DB::table('artists')
            ->select('artists.id', 'artists.name', 'artists.detail', 'artists.riwayat')
            ->get();

        return view('dashboard.artist.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.artist.create');
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
            'name' => 'required',
            'detail'  => 'required',
            'riwayat' => 'required',
        ], $messages);

        Artist::create([
            'name' => $request->name,
            'detail'  => $request->detail,
            'riwayat' => $request->riwayat,
        ]);

        return redirect('/dashboard/artist');
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
        $artists = Artist::find($id);
        return view('dashboard.artist.edit', compact('artists'));
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
        $artists = Artist::whereId($id)->first();
        $messages = [
            'required' => 'Harap masukkan :attribute!'
        ];

        $this->validate($request, [
            'name' => 'required',
            'detail'  => 'required',
            'riwayat' => 'required',
        ], $messages);

        $artists->update([
            'name' => $request->name,
            'detail'  => $request->detail,
            'riwayat' => $request->riwayat,
        ]);

        return redirect('/dashboard/artist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artist = Artist::find($id);
        $artist->delete();

        return redirect('/dashboard/artist');
    }
}
