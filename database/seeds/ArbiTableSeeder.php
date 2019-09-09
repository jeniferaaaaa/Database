<?php

use Illuminate\Database\Seeder;

class ArbiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('arbi')->insert([
            'name' => 'jenifer',
            'email' => 'jeni@example.com',
            'password' => bcrypt('4545'),
        ]);
    }
}
