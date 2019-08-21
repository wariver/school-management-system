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
            'name' => "wariver",
            'email' => 'waruindungu1@gmail.com',
            'password' => bcrypt('asdfasdf'),
            'role' => 'master',
            'active' => 1,
            'verified' => 1,
        ]);
//        factory(App\User::class, 200)->create();
    }
}
