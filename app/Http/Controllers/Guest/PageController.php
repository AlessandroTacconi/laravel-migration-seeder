<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        // $trains = Train::all();
        $trains = Train::where('departure_date', '2024-01-30')->get();


        return view('welcome',compact('trains'));
    }
    
}
