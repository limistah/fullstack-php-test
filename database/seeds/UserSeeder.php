<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Coupon;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->make()->each(function ($user) {
            // Seed the relation with one coupon
            $coupon = Coupon::all()->random();
            $user->coupon_id = $coupon->id;
            $user->save();
        });
    }
}
