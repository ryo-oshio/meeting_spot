<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spot;

class SpotController extends Controller
{
    public function index(Spot $spot)
    {
        return $spot->get();
    }
}
