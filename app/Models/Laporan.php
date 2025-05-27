<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'barang_id', 'tanggal', 'jumlah_terjual',
        'total_harga', 'modal', 'keuntungan', 'simpanan'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
