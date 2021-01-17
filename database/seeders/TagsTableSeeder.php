<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['type' => 'color','description' => 'yellow']);
        Tag::create(['type' => 'color','description' => 'green']);
        Tag::create(['type' => 'color','description' => 'black']);
        Tag::create(['type' => 'color','description' => 'red']);
        Tag::create(['type' => 'color','description' => 'blue']);
        Tag::create(['type' => 'color','description' => 'white']);
        Tag::create(['type' => 'color','description' => 'orange']);
        Tag::create(['type' => 'color','description' => 'pink']);
    }
}
