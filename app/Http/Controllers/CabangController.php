<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cabang;
use App\Http\CabangControllers;

class CabangController extends Controller
{
    public function index()
    {
        $data['cabang'] = Cabang::with('CabangController')->get();
        return view('cabang.index', $data);
    }
}

