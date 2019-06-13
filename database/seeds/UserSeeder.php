<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jimmy',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'level' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Roland',
            'username' => 'user',
            'password' => bcrypt('user'),
            'level' => 'user'
        ]);
    }
}
