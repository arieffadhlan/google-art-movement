<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Partner;

class DashboardPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = DB::table('partners')
            ->select('partners.id', 'partners.name', 'partners.location', 'partners.detail')
            ->get();
        
        return view('dashboard.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.partner.create');
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
            'location'  => 'required',
            'detail' => 'required',
            'logo' => 'required',
            'image' => 'required',
        ], $messages);

        Partner::create([
            'name' => $request->name,
            'location'  => $request->location,
            'detail' => $request->detail,
            'logo' => $request->logo,
            'image' => $request->image,
        ]);

        return redirect('/dashboard/partner');
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
        $partners = Partner::find($id);
        return view('dashboard.partner.edit', compact('partners'));
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
        $partners = Partner::whereId($id)->first();

        $messages = [
            'required' => 'Harap masukkan :attribute!'
        ];

        $this->validate($request, [
            'name' => 'required',
            'location'  => 'required',
            'detail' => 'required',
            'logo' => 'required',
            'image' => 'required',
        ], $messages);

        $partners->update([
            'name' => $request->name,
            'location'  => $request->location,
            'detail' => $request->detail,
            'logo' => $request->logo,
            'image' => $request->image,
        ]);

        return redirect('/dashboard/partner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partners = Partner::find($id);
        $partners->delete();

        return redirect('/dashboard/partner');
    }
}
