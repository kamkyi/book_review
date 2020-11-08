<?php

use Illuminate\Database\Seeder;
use App\Models\User\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,9)->create();
        
        User::create([
            'name' => 'Test User',
            'email' => 'test@email.com',
            'password' => bcrypt('secret')
        ]);
    }
}
