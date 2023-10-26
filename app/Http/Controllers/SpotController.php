<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spot;
use App\Http\Requests\SpotRequest;
use Auth;

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
    
    public function create()
    {
        return view('spots.create');
    }
    
    public function store(Spot $spot, SpotRequest $request)
    {
        $input = $request['spot'];
        $input["user_id"] = Auth::id();
        $spot->fill($input)->save();
        return redirect('/spots/' . $spot->id);
    }
}
