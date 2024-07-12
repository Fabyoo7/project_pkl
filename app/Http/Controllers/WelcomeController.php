<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Testimoni;

class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        $artikel = Artikel::orderBy('created_at', 'desc')->get();

        return view('welcome', compact('artikel', 'testimoni'));
    }
}
