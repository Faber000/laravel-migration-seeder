<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainsController extends Controller
{
    public function index()
    {
        $trains = Train::where('d_partenza','<=', date('2022-07-12'))->get();
        return view('welcome', compact('trains'));
    }
}
