<?php

use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->insert(
            [
                'user_id' => 1,
                'shop_id' => 1,
                'like' => 1,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now(),
            ]);
        DB::table('likes')->insert(
            [
                'user_id' => 1,
                'shop_id' => 2,
                'like' => 0,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now(),
            ]);
        DB::table('likes')->insert(
            [
                'user_id' => 1,
                'shop_id' => 3,
                'like' => 1,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now(),
            ]);
        DB::table('likes')->insert(
            [
                'user_id' => 1,
                'shop_id' => 4,
                'like' => 0,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now(),
            ]);
        DB::table('likes')->insert(
            [
                'user_id' => 1,
                'shop_id' => 5,
                'like' => 1,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now(),
            ]);
        DB::table('likes')->insert(
            [
                'user_id' => 1,
                'shop_id' => 6,
                'like' => 0,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now(),
            ]);
    }
}
