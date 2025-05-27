<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Barang;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BarangFeatureTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_create_barang()
    {
        $response = $this->post('/create-barang', [
            'nama_produk' => 'Produk BB',
            'modal' => 10000,
            'harga_jual' => 15000,
            'jumlah' => 25,
        ]);

        $response->assertRedirect(); // Redirect = indikasi berhasil
        $this->assertDatabaseHas('barangs', [
            'nama_produk' => 'Produk BB',
        ]);
    }

    public function test_user_cannot_create_barang_with_invalid_data()
    {
        $response = $this->post('/create-barang', [
            'nama_produk' => '',
            'modal' => -100,
            'harga_jual' => null,
            'jumlah' => -5,
        ]);

        $response->assertSessionHasErrors(['nama_produk', 'modal', 'harga_jual', 'jumlah']);
    }

    public function test_user_can_see_barang_list()
    {
        Barang::factory()->create([
            'nama_produk' => 'Produk X',
        ]);

        $response = $this->get('/barang');
        $response->assertStatus(200);
        $response->assertSee('Produk X');
    }

    public function test_user_can_delete_barang()
    {
        $barang = Barang::factory()->create();

        $response = $this->delete("/barang/{$barang->id}");

        // 302 redirect expected if you redirect after deletion
        $response->assertStatus(302);
        $this->assertSoftDeleted('barangs', ['id' => $barang->id]);
    }
}
