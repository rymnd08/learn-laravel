<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function index(){
        $listings = Listing::latest()->filter(request(['tags', 'search']))->get();
        // $listings = Listing::all()->filter(function($listing){
        //     return $listing['tags'] == request('tags');
        // });
        return view('listings', ['listings' => $listings]);
    }

    public function store(Request $request){
        // dd($request->all());
        $formFields = $request
        ->validate([
            'title' => 'required', 
            'company' => ['required', Rule::unique('listings', 'company')],
            'tags' => 'required',
            'description' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email'=> ['required', 'email']
        ]);

        Listing::create($formFields);
        return redirect('/listings');
    }

    public function create(Listing $listing){
        return view('create');
    }

    public function show(Listing $listing){
        return view('view-listing', ['listing' => $listing]);
    }





}
