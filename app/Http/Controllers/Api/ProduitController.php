<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::all();

        return response()->json($produits);
    }
}
