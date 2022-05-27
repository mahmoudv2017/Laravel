<?php

namespace App\Http\Controllers;

use App\Models\listings;
use Illuminate\Http\Request;

class listingController extends Controller
{
    //
    public static function index(){
      //  dd(request('phone'));
       $res = listings::filter([request('car')])->get();

       if( count($res) != 0){
        return view('listings',[ 'Listings' => $res]);
       }else{
           abort(404);
       }

    }

    public static function show(listings $listing){
        return view('listings',[ 'Listings' => [$listing]]);
    }
}
