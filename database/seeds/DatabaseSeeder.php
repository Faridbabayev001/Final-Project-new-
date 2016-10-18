<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('admins')->insert([
          'name' => 'alfagen',
          'email' => 'alfagen4@gmail.com',
          'password' =>Hash::make('destekol'),
        ]);

        DB::table('elantypes')->insert([
           'name' => 'destek',
        ]);

        DB::table('elantypes')->insert([
           'name' => 'istek',
        ]);
    }
}
