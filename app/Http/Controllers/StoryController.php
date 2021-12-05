<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoryController extends Controller
{
    public function index($storyId)
    {
        $story = DB::table('stories')
            ->join('partners', 'partners.id', '=', 'stories.partner_id')
            ->where('stories.id', '=', $storyId)
            ->select(
                'stories.id as story_id',
                'stories.title as story_title',
                'stories.detail as story_detail',
                'stories.image as story_image',
                'partners.id as partner_id',
                'partners.name as partner_name',
                'partners.logo as partner_logo'
            )
            ->get();

        return view('google-art.story', compact('story'));
    }
}
