<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\cabangshelf;

class Cabang extends Model
{
    use HasFactory;
    
    public function cabangshelf(): BelongsTo
    {
        return $this->belongsTo(Cabangshelf::class);
    }
    protected $fillable =[
        "Kota",
        "NamaTokoCabang",
        "Alamat",
        "Telepon",
        "NamaBarang",
        "Stokbarang",
        "Transaksi",
    ];
}
