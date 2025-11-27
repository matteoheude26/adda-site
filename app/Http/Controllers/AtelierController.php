<?php

namespace App\Http\Controllers;

use App\Models\Atelier;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AtelierController extends Controller
{
    public function index(): View{
        return view('atelier.index',[
            'ateliers' => Atelier::all()
        ]);
    }

    public function show(atelier $atelier): View{
        return view('atelier.detail',[
            'atelier' => $atelier
        ]);
    }
}
