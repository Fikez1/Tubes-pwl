<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Toko;
use App\Http\TokoControllers;
use App\Models\Tokoshelf;


class TokoController extends Controller
{
    public function index()
    {
        $tokos = Toko::all();

        // Melewatkan $tokos ke tampilan
        return view('toko.index', compact('tokos'));
    }

    public function create(){
        $data['Tokoshelf'] = Tokoshelf::pluck('name', 'id');
        return view('toko.create', $data);
    }

    public function store(request $request){
        $validated = $request->validate([
            'toko' => 'required|max:255',
            'barang' => 'required|max:150',
            'alamat' => 'required|digits:4|integer|min:1900|max:'.(date('Y')),
            'required|digits:4|integer|min:1900|max:'.(date('Y')),
            'telepon' => 'required|max:100',
            'transaksi' => 'required|max:75',
            'tokoshelf_id' => 'required',
            'cover' => 'nullable|image',
        ]);
        
        if ($request->hasFile('cover')) {
            $path = $request->file('cover')->storeAs(
                'telepon/cover_cabang',
                'cover_toko_'.time() . '.' . $request->file('cover')->extension()
            );
            $validated['cover'] = basename($path);
        }
         Toko::create($validated);

         $notification = array(
            'mesage' => "Data Barang Keluar Berhasil Ditambahkan",
            'alert-type' => 'succes'
         );

         if($request->save == true ) {
            return redirect()->route('toko')->with($notification);
         } else {
            return redirect()->route('toko.create')->with($notification);
         }
    }
}


