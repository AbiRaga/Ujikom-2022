<?php

namespace Database\Seeders;

use App\Models\kategori;
use App\Models\produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'=>'Abi raga',
            'email'=>'abi123@gmail.com',
            'password'=>bcrypt('1'),
            'role'=>'admin'
        ]);

   
        $kategori=kategori::create([
        'name'=>'makanan'
    ]);
    $kategori=kategori::create([
        'name'=>'minuman'
    ]);
    $kategori=kategori::create([
        'name'=>'aksesoris'
    ]);

    produk::create([
        'kategori_id'=>1,
        'name'=>'Apple 1',
        'harga'=>100000,
        'foto'=>'images/apple 1.jpg'
    ]);
    produk::create([
        'kategori_id'=>1,
        'name'=>'custom casing hp',
        'harga'=>300000,
        'foto'=>'images/customcase1.jpg'
    ]);
    produk::create([
        'kategori_id'=>2,
        'name'=>'cd allbum skrillex',
        'harga'=>100000,
        'foto'=>'images/skrillexalbum.jpg'
    ]);
    }
}
