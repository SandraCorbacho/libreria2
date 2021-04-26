<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use database\seeders\RoleTableSeeder;
use App\Models\User;
use App\Models\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        

       
        $user = new User();
        $user->name = 'User';
        $user->email = 'user@example.com';
        $user->email_verified_at = null;
        $user->password = bcrypt('secret');
        $user->save();
        
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->email_verified_at = null;
        $user->password = bcrypt('secret');
        $user->save();
       
    }
}
