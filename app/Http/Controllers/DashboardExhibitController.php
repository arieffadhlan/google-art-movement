<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Exibit;

class DashboardExhibitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exhibits = DB::table('exibits')
            ->join('entities', 'entities.id', '=', 'exibits.entites_id')
            ->join('partners', 'partners.id', '=', 'exibits.partner_id')
            ->select(
                'exibits.id as exhibit_id',
                'exibits.title as exhibit_title',
                'exibits.detail as exhibit_detail',
                'exibits.date as exhibit_date',
                'entities.name as kategori',
                'partners.name as partner'
            )
            ->get();

            return view('dashboard.exhibit.index', compact('exhibits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        
        return view('dashboard.exhibit.create', compact('entities', 'partners'));
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
            'date' => 'required',
            'detail' => 'required',
            'image' => 'required',
            'entites_id' => 'required',
            'partner_id' => 'required',
        ], $messages);

        Exibit::create([
            'title' => $request->title,
            'date' => $request->date,
            'detail' => $request->detail,
            'image' => $request->image,
            'entites_id' => $request->entites_id,
            'partner_id' => $request->partner_id,
        ]);

        return redirect('/dashboard/exhibit');
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
        $exhibits = Exibit::find($id);

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
        
        return view('dashboard.exhibit.edit', compact('exhibits', 'entities', 'partners'));
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
        $exhibits = Exibit::whereId($id)->first();

        $messages = [
            'required' => 'Harap masukkan :attribute!'
        ];

        $this->validate($request, [
            'title' => 'required',
            'date' => 'required',
            'detail' => 'required',
            'image' => 'required',
            'entites_id' => 'required',
            'partner_id' => 'required',
        ], $messages);

        $exhibits->update([
            'title' => $request->title,
            'date' => $request->date,
            'detail' => $request->detail,
            'image' => $request->image,
            'entites_id' => $request->entites_id,
            'partner_id' => $request->partner_id,
        ]);

        return redirect('/dashboard/exhibit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exhibit = Exibit::find($id);
        $exhibit->delete();

        return redirect('/dashboard/exhibit');
    }
}
