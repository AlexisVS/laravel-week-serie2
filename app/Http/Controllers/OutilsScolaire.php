<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutilsScolaire extends Controller
{
    public function index () {
        $outilsScolaires = ["bic", "crayon", "gomme", "stylo", "ciseau"];
        return view('pages.outilsScolaire', compact('outilsScolaires'));
    }
}
