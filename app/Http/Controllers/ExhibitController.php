<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExhibitController extends Controller
{
    public function index($exhibitId)
    {
        $exhibit = DB::table('exibits')
            ->join('partners', 'partners.id', '=', 'exibits.partner_id')
            ->where('exibits.id', '=', $exhibitId)
            ->select(
                'exibits.id as exhibit_id',
                'exibits.title as exhibit_title',
                'exibits.detail as exhibit_detail',
                'exibits.image as exhibit_image',
                'exibits.date as exhibit_date',
                'partners.id as partner_id',
                'partners.name as partner_name',
                'partners.logo as partner_logo'
            )
            ->get();

        return view('google-art.exhibit', compact('exhibit'));
    }
}
