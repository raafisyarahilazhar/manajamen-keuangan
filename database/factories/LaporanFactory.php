<?php

namespace Database\Factories;

use App\Models\Laporan;
use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

class LaporanFactory extends Factory
{
    protected $model = Laporan::class;

    public function definition(): array
    {
        $jumlah = $this->faker->numberBetween(1, 10);
        $barang = Barang::factory()->create();
        $total = $barang->harga_jual * $jumlah;
        $modal_total = $barang->modal * $jumlah;
        $simpanan = $total * 0.05;
        $keuntungan = $total - $modal_total - $simpanan;

        return [
            'barang_id' => Barang::factory(),
            'tanggal' => now(),
            'jumlah_terjual' => $jumlah,
            'total_harga' => $total,
            'modal' => $modal_total,
            'keuntungan' => $keuntungan,
            'simpanan' => $simpanan,
        ];
    }
}
