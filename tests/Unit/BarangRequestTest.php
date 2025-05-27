<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Requests\BarangRequest;
use Illuminate\Support\Facades\Validator;

class BarangRequestTest extends TestCase
{
    public function test_barang_request_passes_with_valid_data()
    {
        $data = [
            'nama_produk' => 'Produk A',
            'modal' => 1000,
            'harga_jual' => 1500,
            'jumlah' => 10,
        ];

        $request = new BarangRequest();
        $rules = $request->rules();
        $validator = Validator::make($data, $rules);

        $this->assertFalse($validator->fails());
    }

    public function test_barang_request_fails_with_invalid_data()
    {
        $data = [
            'nama_produk' => '',
            'modal' => -100,
            'harga_jual' => null,
            'jumlah' => -1,
        ];

        $request = new BarangRequest();
        $rules = $request->rules();
        $validator = Validator::make($data, $rules);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('nama_produk', $validator->errors()->toArray());
        $this->assertArrayHasKey('modal', $validator->errors()->toArray());
        $this->assertArrayHasKey('harga_jual', $validator->errors()->toArray());
        $this->assertArrayHasKey('jumlah', $validator->errors()->toArray());
    }
}
