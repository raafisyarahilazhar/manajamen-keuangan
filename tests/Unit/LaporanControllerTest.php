<?php
use Tests\TestCase;
use App\Models\Barang;
use App\Models\Laporan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;

class LaporanControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_stores_laporan_successfully()
    {
        $barang = Barang::create([
            'nama_produk' => 'Produk A',
            'harga_jual' => 20000,
            'modal' => 10000,
        ]);

        $response = $this->post('/create-laporan', [
            'barang_id' => $barang->id,
            'jumlah_terjual' => 5,
        ]);

        $this->assertDatabaseHas('laporan', [
            'barang_id' => $barang->id,
            'jumlah_terjual' => 5,
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success', 'Laporan ditambahkan!');
    }

    /** @test */
    public function it_throws_404_if_barang_not_found()
    {
        $response = $this->post('/create-laporan', [
            'barang_id' => 999,
            'jumlah_terjual' => 5,
        ]);

        $response->assertNotFound(); // atau 404
    }

    /** @test */
    public function it_deletes_laporan_successfully()
    {
        $laporan = Laporan::factory()->create();

        $response = $this->delete("/laporan/{$laporan->id}");

        $this->assertDatabaseMissing('laporan', ['id' => $laporan->id]);
        $response->assertRedirect('/laporan');
        $response->assertSessionHas('delete', 'Barang berhasil dihapus!');
    }
}
