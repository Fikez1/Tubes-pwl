<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cabang extends Model
{
    use HasFactory;
    protected $table = 'Cabang';
    public function cabangshelf(): BelongsTo
    {
        return $this->belongsTo(Cabangshelf::class);
    }
}
