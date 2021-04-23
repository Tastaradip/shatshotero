<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create admin user
        $admin = User::create([
            'name' => 'Admin', 
            'email' => 'nazneenhaque111@gmail.com', 
            'password' => bcrypt('shimonto'),  
        ]);
        $admin->save();
    }
}
