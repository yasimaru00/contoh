<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
            $user = new User;
            $user->firstname = 'admina';
            $user->name = 'admin';
            $user->lastname = 'admini';
            $user->email = 'admin@gmail.com';
            $user->password = Hash::make('password123');
            $user->save();
            
            $user = new User;
            $user->firstname = 'recrutera';
            $user->name = 'recruter';
            $user->lastname = 'recruteri';
            $user->email = 'recruter@gmail.com';
            $user->password = Hash::make('password123');
            $user->save();

            $user = new User;
            $user->firstname = 'job seekera';
            $user->name = 'job seeker';
            $user->lastname = 'job seekeri';
            $user->email = 'jobseeker@gmail.com';
            $user->password = Hash::make('password123');
            $user->save();
        
    }
}
