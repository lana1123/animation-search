<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animation;

class AnimationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animation::create(['user_id' => '1','name' => 'Happy Emoji - Great Work','style' => 'Emoji','jsonURL' => 'https://assets9.lottiefiles.com/datafiles/iEklfbhJyn8rVb7/data.json','downloads' => '1068','created_at' => '2018-01-17 5:01:40']);
        Animation::create(['user_id' => '2','name' => 'Emojis - Like','style' => 'Emoji','jsonURL' => 'https://assets9.lottiefiles.com/packages/lf20_676mXq.json','downloads' => '74','created_at' => '2020-04-17 5:01:40']);
        Animation::create(['user_id' => '3','name' => 'Test Shield Colors','style' => 'Icons','jsonURL' => 'https://assets9.lottiefiles.com/packages/lf20_KWXaTR.json','downloads' => '76','created_at' => '2019-04-17 5:01:40']);
        Animation::create(['user_id' => '4','name' => 'Red Leaf Salad','style' => 'Icons','jsonURL' => 'https://assets9.lottiefiles.com/packages/lf20_8n9luyy8.json','downloads' => '2','created_at' => '2020-11-17 5:01:40']);
        Animation::create(['user_id' => '1','name' => 'Unhappy french fries','style' => 'Icons','jsonURL' => 'https://assets8.lottiefiles.com/datafiles/0qh5h3t0mZ98GNZ/data.json','downloads' => '460','created_at' => '2018-01-18 5:01:40']);
        Animation::create(['user_id' => '5','name' => 'Animated Contest #2 (@TgSticker) Sticker 17','style' => 'Illustrations','jsonURL' => 'https://assets9.lottiefiles.com/animated_stickers/lf_tgs_FmwiY0.json','downloads' => '15','created_at' => '2020-01-17 5:01:40']);
        Animation::create(['user_id' => '6','name' => 'Cook','style' => 'Illustrations','jsonURL' => 'https://assets9.lottiefiles.com/temp/lf20_i0YsMF.json','downloads' => '47','created_at' => '2019-01-17 5:01:40']);
        Animation::create(['user_id' => '5','name' => 'Animated Contest #2 (@TgSticker) Sticker 21','style' => 'Illustrations','jsonURL' => 'https://assets9.lottiefiles.com/animated_stickers/lf_tgs_4xyHHo.json','downloads' => '8','created_at' => '2020-01-16 5:01:40']);
    }
}
