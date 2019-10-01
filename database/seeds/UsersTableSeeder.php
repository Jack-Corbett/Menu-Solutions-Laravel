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
            'name' => 'Joe Bloggs',
            'gender' => 'm',
            'group_id' => 1,
            'email' => 'test@test.com',
            'password' => bcrypt('12345678'),
            'experience' => 0,
            'is_admin' => true,
        ]);
    }
}
