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
            'name' => 'test',
            'email' => 'test@email.com',
            'password' => bcrypt('test'),
        ]);

        factory(App\User::class, 5)->create();
    }
}
