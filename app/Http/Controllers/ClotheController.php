<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Clothe;

class ClotheController extends Controller
{
    public function index(){

        $clothes = Clothe::all();

        dd($clothes);
        // return view('clothes', compact('pagina-prodotti'));
       
       
    }
}