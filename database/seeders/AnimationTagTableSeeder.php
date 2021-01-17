<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AnimationTag;

class AnimationTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnimationTag::create(['animation_id' => '1','tag_id' => '1']);
        AnimationTag::create(['animation_id' => '3','tag_id' => '1']);
        AnimationTag::create(['animation_id' => '5','tag_id' => '1']);
        AnimationTag::create(['animation_id' => '8','tag_id' => '1']);
        AnimationTag::create(['animation_id' => '1','tag_id' => '2']);
        AnimationTag::create(['animation_id' => '3','tag_id' => '2']);
        AnimationTag::create(['animation_id' => '4','tag_id' => '2']);
        AnimationTag::create(['animation_id' => '7','tag_id' => '2']);
        AnimationTag::create(['animation_id' => '1','tag_id' => '3']);
        AnimationTag::create(['animation_id' => '5','tag_id' => '3']);
        AnimationTag::create(['animation_id' => '8','tag_id' => '3']);
        AnimationTag::create(['animation_id' => '1','tag_id' => '4']);
        AnimationTag::create(['animation_id' => '3','tag_id' => '4']);
        AnimationTag::create(['animation_id' => '4','tag_id' => '4']);
        AnimationTag::create(['animation_id' => '5','tag_id' => '4']);
        AnimationTag::create(['animation_id' => '8','tag_id' => '4']);
        AnimationTag::create(['animation_id' => '2','tag_id' => '5']);
        AnimationTag::create(['animation_id' => '3','tag_id' => '5']);
        AnimationTag::create(['animation_id' => '4','tag_id' => '5']);
        AnimationTag::create(['animation_id' => '2','tag_id' => '6']);
        AnimationTag::create(['animation_id' => '6','tag_id' => '6']);
        AnimationTag::create(['animation_id' => '7','tag_id' => '6']);
        AnimationTag::create(['animation_id' => '8','tag_id' => '6']);
        AnimationTag::create(['animation_id' => '3','tag_id' => '7']);
        AnimationTag::create(['animation_id' => '6','tag_id' => '8']);
        AnimationTag::create(['animation_id' => '8','tag_id' => '8']);
    }
}
