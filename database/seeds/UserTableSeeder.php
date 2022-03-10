<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Maria',
            'lastname' => 'Sarazúa',
            'age' => '20',
            'email' => 'sarazuamaria@gmail.com',
            'password' => bcrypt('15042001masc'),
        ]);
    }
}
