<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nama_produk', 'modal', 'harga_jual', 'jumlah',
    ];
    
    public function laporan() {
        return $this->hasMany(Laporan::class);
    }
}
