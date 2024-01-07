<?php

namespace App\Models;

use App\Models\Cabangshelf as ModelsTokoshelf;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\tokoshelf;

class Toko extends Model
{
    use HasFactory;
    protected $table = 'Toko';
    public function tokoshelf(): BelongsTo
    {
        return $this->belongsTo(ModelsTokoshelf::class);
    }
    protected $fillable =[
        "Alamat",
        "Telepon",
        "NamaBarang",
        "Stokbarang",
        "Transaksi",
    ];
}
