<?php

use Illuminate\Database\Seeder;

class user_first_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'dias',
            'email' => 'dias.fulvio@gmail.com',
            'password' => bcrypt('secret')
        ]);
    }
}
