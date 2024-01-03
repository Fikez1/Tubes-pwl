<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cabang;
use App\Http\CabangControllers;

class CabangController extends Controller
{
    public function index()
    {
        // Anggap Anda ingin mengambil semua data Cabang dari database
        $cabangs = Cabang::all();

        // Melewatkan $cabangs ke tampilan
        return view('cabang.index', compact('cabangs'));
    }
}
