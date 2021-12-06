<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Http\Request;

class DashboardEntityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entities = Entity::get();
        
        return view('dashboard.entity.index', compact('entities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.entity.create');
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
            'year'  => 'required',
            'desc' => 'required',
            'image' => 'required',
        ], $messages);

        Entity::create([
            'name' => $request->name,
            'year'  => $request->year,
            'desc' => $request->desc,
            'image' => $request->image,
        ]);

        return redirect('/dashboard/entity');
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
        $entities = Entity::find($id);
        return view('dashboard.entity.edit', compact('entities'));
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
        $entities = Entity::whereId($id)->first();
        
        $messages = [
            'required' => 'Harap masukkan :attribute!'
        ];

        $this->validate($request, [
            'name' => 'required',
            'year'  => 'required',
            'desc' => 'required',
            'image' => 'required',
        ], $messages);

        $entities->update([
            'name' => $request->name,
            'year'  => $request->year,
            'desc' => $request->desc,
            'image' => $request->image,
        ]);

        return redirect('/dashboard/entity');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entities = Entity::find($id);
        $entities->delete();

        return redirect('/dashboard/entity');
    }
}
