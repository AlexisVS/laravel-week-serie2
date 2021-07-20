<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CouleurController extends Controller
{
    public function index () {
        return view("pages.couleur");
    }

}
