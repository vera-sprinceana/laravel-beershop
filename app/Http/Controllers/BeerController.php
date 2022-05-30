<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beer;
class BeerController extends Controller
{
    public function index() {
        $beers= Beer::all();
        return view('pages.index', compact('beers'));
    }
}
