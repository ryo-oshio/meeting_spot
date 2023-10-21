<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spot;

class SpotController extends Controller
{
    public function index(Spot $spot)
    {
        return view('spots.index')->with(['spots' => $spot->getByLimit()]);  
    }
    
    public function show(Spot $spot)
    {
        return view('spots.show')->with(['spot' => $spot]);
    }
}
