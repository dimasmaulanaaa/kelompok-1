<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'lokasi'];

    // Relasi dengan Stock
    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
