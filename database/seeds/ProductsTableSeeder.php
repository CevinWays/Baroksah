<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'HPAM Ultima Ekuitas 1',
            'slug'=>'hpam',
            'ytd' => '18.3',
            'kategori'=>'campuran',
            'price'=>1000000,
        ])->categories()->attach(3);

        // 1 produk bisa memiliki 2 kategori menggunakan code di bawah
        // $product = Product::find(1);
        // $product->categories()->attach(2);

        Product::create([
            'name'=>'BNI-AM Dana Berkembang',
            'slug'=>'bni',
            'ytd' => '7.2',
            'kategori'=>'syariah',
            'price'=>2000000,
        ])->categories()->attach(2);
        Product::create([
            'name'=>'Manulife Obligasi Unggulan',
            'slug'=>'manulife',
            'ytd' => '22.3',
            'kategori'=>'saham',
            'price'=>4000000,
        ])->categories()->attach(1);
        Product::create([
            'name'=>'Dana Pratama Ekuitas',
            'slug'=>'pratama',
            'ytd' => '29.4',
            'kategori'=>'saham',
            'price'=>5000000,
        ])->categories()->attach(1);
        Product::create([
            'name'=>'Mega Asset Maxima',
            'slug'=>'mega',
            'ytd' => '17.1',
            'kategori'=>'campuran',
            'price'=>3000000,
        ])->categories()->attach(3);
        Product::create([
            'name'=>'Manulife Dana Stabil Berimbang',
            'slug'=>'manulifes',
            'ytd' => '14.9',
            'kategori'=>'syariah',
            'price'=>1500000,
        ])->categories()->attach(2);
        Product::create([
            'name'=>'Sucorinvest Bond Fund',
            'slug'=>'bond',
            'ytd' => '6.8',
            'kategori'=>'syariah',
            'price'=>1100000,
        ])->categories()->attach(2);
        Product::create([
            'name'=>'Avrist Prime Bond Fund',
            'slug'=>'avrist',
            'ytd' => '5.5',
            'kategori'=>'saham',
            'price'=>2250000,
        ])->categories()->attach(1);
        Product::create([
            'name'=>'RHB SRI KEHATI Index Fund',
            'slug'=>'rhb',
            'ytd' => '9.3',
            'kategori'=>'campuran',
            'price'=>5500000,
        ])->categories()->attach(3);
        Product::create([
            'name'=>'BNP Paribas Omega',
            'slug'=>'bnp',
            'ytd' => '11.3',
            'kategori'=>'syariah',
            'price'=>6700000,
        ])->categories()->attach(2);
        Product::create([
            'name'=>'CIMB-Principal Balanced',
            'slug'=>'cimb',
            'ytd' => '12.2',
            'kategori'=>'campuran',
            'price'=>1160000,
        ])->categories()->attach(3);
        Product::create([
            'name'=>'BNP Paribas Prima II',
            'slug'=>'paribas',
            'ytd' => '20.5',
            'kategori'=>'saham',
            'price'=>1799000,
        ])->categories()->attach(1);
    }
}
