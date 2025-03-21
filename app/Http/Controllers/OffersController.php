<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OffersController extends Controller
{
    public function get_offers(){

        return Offer::get();

    }

    public function show_form(){
        return view('offers.create');
    }

    public function store(OfferRequest $request){

        Offer::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'detels'=>$request->detels,
        ]);
        return Redirect()->back()->with('success','تم اضافة العرض بنجاح');  
    }

    public function index(){
     $offers = Offer::select('id','name','price','detels')->get();

        return view('offers.all',compact('offers'));

    }


}
