<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    public function index($partnerId)
    {
        $partners = DB::table('partners')
            ->select('partners.id', 'partners.name', 'partners.image')
            ->where('partners.id', '!=', $partnerId)
            ->limit(7)
            ->get();

        $partner = DB::table('partners')
            ->select('partners.name', 'partners.image', 'partners.logo', 'partners.location', 'partners.detail')
            ->where('partners.id', '=', $partnerId)
            ->get();

        return view('google-art.partner', compact('partners', 'partner'));
    }
}
