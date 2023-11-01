<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
                'username' => 'HRI太郎',
                'mail' => 'tarou@mail.com',
                'password' => Hash::make('tarou11'),
                'created_at' => '2023-10-29 18:35:00',
                'updated_at' => '2023-10-29 18:35:00',
            ],
            [
                'username' => 'HRI次郎',
                'mail' => 'jirou@mail.com',
                'password' => Hash::make('jirou22'),
                'created_at' => '2023-10-30 19:00:00',
                'updated_at' => '2023-10-30 19:00:00',
            ],
            [
                'username' => 'HRI花子',
                'mail' => 'hanako@mail.com',
                'password' => Hash::make('hanako33'),
                'created_at' => '2023-10-31 20:00:00',
                'updated_at' => '2023-10-31 20:00:00',
            ],
        ]);
    }
}
