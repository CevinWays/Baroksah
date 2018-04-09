<?php
use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['kategori'=>'Saham','slug'=>'saham','created_at'=>$now,'updated_at'=>$now],
            ['kategori'=>'Syariah','slug'=>'syariah','created_at'=>$now,'updated_at'=>$now],
            ['kategori'=>'Campuran','slug'=>'campuran','created_at'=>$now,'updated_at'=>$now],
        ]);
    }
}
