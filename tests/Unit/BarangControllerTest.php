<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Barang;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BarangControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_method_saves_barang_to_database()
    {
        $response = $this->post('/create-barang', [
            'nama_produk' => 'Produk Test',
            'modal' => 10000,
            'harga_jual' => 15000,
            'jumlah' => 20,
        ]);

        $response->assertRedirect(); // store() mengembalikan redirect
        $this->assertDatabaseHas('barang', [
            'nama_produk' => 'Produk Test',
            'modal' => 10000,
            'harga_jual' => 15000,
            'jumlah' => 20,
        ]);
    }
}
