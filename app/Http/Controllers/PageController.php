<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class PageController extends Controller {
    public function index() {
        $trains = Train::all();


        return view('trainsList', compact('trains'));
    }
}
