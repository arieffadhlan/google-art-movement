<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = DB::table('stories')
        ->join('entities', 'entities.id', '=', 'stories.entites_id')
        ->join('partners', 'partners.id', '=', 'stories.partner_id')
        ->select(
            'stories.id as story_id',
            'stories.title as story_title',
            'stories.detail as story_detail',
            'entities.name as kategori',
            'partners.name as partner',
        )
        ->get();

        return view('dashboard.story.index', compact('stories'));
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

        $artists = DB::table('artists')
            ->select(
                'artists.id as id',
                'artists.name as name',
            )
            ->get();

        return view('dashboard.story.create', compact('partners', 'entities', 'artists'));
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
            'detail' => 'required',
            'image' => 'required',
            'entites_id' => 'required',
            'partner_id' => 'required',
        ], $messages);

        Story::create([
            'title' => $request->title,
            'detail' => $request->detail,
            'image' => $request->image,
            'entites_id' => $request->entites_id,
            'partner_id' => $request->partner_id,
        ]);

        return redirect('/dashboard/story');
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
        $stories = Story::find($id);

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

        return view('dashboard.story.edit', compact('stories','partners', 'entities', 'artists'));
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
        $stories = Story::whereId($id)->first();

        $messages = [
            'required' => 'Harap masukkan :attribute!'
        ];

        $this->validate($request, [
            'title' => 'required',
            'detail' => 'required',
            'image' => 'required',
            'entites_id' => 'required',
            'partner_id' => 'required',
        ], $messages);

        $stories->update([
            'title' => $request->title,
            'detail' => $request->detail,
            'image' => $request->image,
            'entites_id' => $request->entites_id,
            'partner_id' => $request->partner_id,
        ]);

        return redirect('/dashboard/story');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $story = Story::find($id);
        $story->delete();

        return redirect('/dashboard/story');
    }
}
