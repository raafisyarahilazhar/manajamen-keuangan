<?php

namespace Database\Factories;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarangFactory extends Factory
{
    protected $model = Barang::class;

    public function definition()
    {
        return [
            'nama_produk' => $this->faker->word(),
            'modal' => $this->faker->numberBetween(1000, 10000),
            'harga_jual' => $this->faker->numberBetween(11000, 20000),
            'jumlah' => $this->faker->numberBetween(1, 100),
        ];
    }
}
