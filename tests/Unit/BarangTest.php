<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Barang;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BarangTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_barang()
    {
        $barang = Barang::create([
            'nama_produk' => 'Produk A',
            'modal' => 5000,
            'harga_jual' => 10000,
            'jumlah' => 50,
        ]);

        $this->assertDatabaseHas('barangs', [
            'nama_produk' => 'Produk A',
            'modal' => 5000,
            'harga_jual' => 10000,
            'jumlah' => 50,
        ]);
    }
}
