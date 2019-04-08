<?php

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
        // $this->call(UsersTableSeeder::class);
        DB::table('todos')->insert([
          'description' => "Todo Item one",
          'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('todos')->insert([
          'description' => "Todo Item two",
          'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('todos')->insert([
          'description' => "Todo Item Three",
          'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
