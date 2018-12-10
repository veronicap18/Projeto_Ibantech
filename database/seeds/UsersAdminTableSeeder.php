<?php

use Illuminate\Database\Seeder;

class UsersAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new App\User;
      $user->name = 'Admin';
      $user->email = 'admin@admin.com';
      $user->password = Hash::make('admin1');
      $user->tipo = 1;
      $user->save();
    }
}
