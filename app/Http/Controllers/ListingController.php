<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(){
        $listing = Listing::all();
        return view('listings', ['listings' => $listing]);
    }

    public function show(Listing $listing){
        return view('view-listing', ['listing' => $listing]);
    }
}
