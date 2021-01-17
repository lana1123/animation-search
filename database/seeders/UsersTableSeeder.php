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
        User::create(['name' => 'Xin Hu','email' => 'xinhu@gmail.com','password' => 'IO67']);
        User::create(['name' => 'Jon Ward','email' => 'jonward@gmail.com','password' => 'JT99']);
        User::create(['name' => 'Cepren Macnob','email' => 'creprenmacnob@gmail.com','password' => 'TF37']);
        User::create(['name' => 'Sjon Kilbourn','email' => 'sjonkilbourn@gmail.com','password' => 'GE63']);
        User::create(['name' => 'Sticker ProMan','email' => 'stickerproman@gmail.com','password' => 'PO74']);
        User::create(['name' => 'Whatsappvideo status','email' => 'whatsappvideostatus@gmail.com','password' => 'CM27']);
    }
}
