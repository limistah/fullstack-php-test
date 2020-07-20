<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Coupon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 50)->make()->each(function ($product) {
            // Seed the relation with one coupon
            $coupon = Coupon::all()->random();
            $product->coupon_id = $coupon->id;
            $product->save();
        });
    }
}
