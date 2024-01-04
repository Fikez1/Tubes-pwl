<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cabang;
use App\Http\CabangControllers;
use App\Models\Cabangshelf;


class CabangController extends Controller
{
    public function index()
    {
        // Anggap Anda ingin mengambil semua data Cabang dari database
        $cabangs = Cabang::all();

        // Melewatkan $cabangs ke tampilan
        return view('cabang.index', compact('cabangs'));
    }

    public function create(){
        $data['Cabangshelf'] = Cabangshelf::pluck('name', 'id');
        return view('cabang.create', $data);
    }

    public function store(request $request){
        $validated = $request->validate([
            'cabang' => 'required|max:255',
            'barang' => 'required|max:150',
            'alamat' => 'required|digits:4|integer|min:1900|max:'.(date('Y')),
            'required|digits:4|integer|min:1900|max:'.(date('Y')),
            'telepon' => 'required|max:100',
            'transaksi' => 'required|max:75',
            'cabangshelf_id' => 'required',
            'cover' => 'nullable|image',
        ]);
        
        if ($request->hasFile('cover')) {
            $path = $request->file('cover')->storeAs(
                'telepon/cover_cabang',
                'cover_cabang_'.time() . '.' . $request->file('cover')->extension()
            );
            $validated['cover'] = basename($path);
        }
         Cabang::create($validated);

         $notification = array(
            'mesage' => "Data Barang Keluar Berhasil Ditambahkan",
            'alert-type' => 'succes'
         );

         if($request->save == true ) {
            return redirect()->route('cabang')->with($notification);
         } else {
            return redirect()->route('cabang.create')->with($notification);
         }
    }
}


