<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jack Corbett',
            'gender' => 'm',
            'group_id' => 1,
            'email' => 'test@test.com',
            'password' => bcrypt('12345678'),
            'experience' => 0,
            'is_admin' => true,
        ]);
        DB::table('users')->insert([
            'name' => 'Zoe Hunt',
            'gender' => 'f',
            'group_id' => 1,
            'password' => bcrypt('random'),
            'experience' => 0,
        ]);
        DB::table('users')->insert([
            'name' => 'Harry Corbett',
            'gender' => 'm',
            'group_id' => 1,
            'password' => bcrypt('random'),
            'experience' => 0,
        ]);
    }
}
