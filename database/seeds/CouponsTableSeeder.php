<?php
use App\Coupon;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code' => 'ABC123',
            'type' => 'fixed',
            'value' => 100000,
        ]);

        Coupon::create([
            'code' => 'DEFG123',
            'type' => 'percent',
            'percent_off' => 500000,
        ]);
    }
}
