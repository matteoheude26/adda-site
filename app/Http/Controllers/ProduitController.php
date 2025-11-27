<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\View\View;

class ProduitController extends Controller
{
    public function index(): View{
        return view('produit.index', [
            'produits' => Produit::all()
        ]);
    }
}