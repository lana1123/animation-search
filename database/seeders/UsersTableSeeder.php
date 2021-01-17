<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Xin Hu','email' => 'xinhu@gmail.com','password' => bcrypt('GQ71')]);
        User::create(['name' => 'Jon Ward','email' => 'jonward@gmail.com','password' => bcrypt('AE86')]);
        User::create(['name' => 'Cepren Macnob','email' => 'creprenmacnob@gmail.com','password' => bcrypt('UT39')]);
        User::create(['name' => 'Sjon Kilbourn','email' => 'sjonkilbourn@gmail.com','password' => bcrypt('NK42')]);
        User::create(['name' => 'Sticker ProMan','email' => 'stickerproman@gmail.com','password' => bcrypt('FB29')]);
        User::create(['name' => 'Whatsappvideo status','email' => 'whatsappvideostatus@gmail.com','password' => bcrypt('MG22')]);
    }
}
