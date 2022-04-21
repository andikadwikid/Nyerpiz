<?php

namespace Database\Factories;

use App\Models\ServisModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomor_antri' => $this->faker->nik(),
            'nama_barang' => $this->faker->sentence(),
            'merk_barang' => $this->faker->sentence(),
            'alamat' => $this->faker->address(),
            'no_telp' => $this->faker->numerify('08########'),
            'keluhan' => $this->faker->sentence(),
            'image' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['pending', 'proses', 'selesai']),
            'tanggal_servis' => $this->faker->date('Y-m-d H:i:s'),
            'tindakan_servis' => $this->faker->date('Y-m-d H:i:s'),
        ];
    }
}
