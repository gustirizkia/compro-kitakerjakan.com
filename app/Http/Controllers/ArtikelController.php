<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $artikel = Artikel::orderBy("id", "desc")->get();

        return view("pages.artikel.index", [
            'artikel' => $artikel
        ]);
    }

    public function detail($slug)
    {
        $artikel = Artikel::where("slug", $slug)->firstOrFail();

        $artikelLain = Artikel::where("id", "!=", $artikel->id)->limit(4)->get();

        return view("pages.artikel.detail", [
            'item' => $artikel,
            'artikelLain' => $artikelLain
        ]);
    }
}
