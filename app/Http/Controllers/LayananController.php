<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function detail($slug)
    {
        $item = Layanan::where("slug", $slug)->firstOrFail();

        return view("pages.layanan", [
            'item' => $item
        ]);
    }
}
