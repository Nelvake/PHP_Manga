<?php

namespace Database\Seeders;

use App\Models\Manga;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\map;

class MangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manga = new Manga();
        $manga->name = "Jujutsu Kaisen";
        $manga->image_url = "https://mangalib.me/uploads/cover/jujutsu-kaisen/cover/WiNOcQAR0ScU_250x350.jpg?1605190865";
        $manga->description = "Юдзи - гений на поле! Вот только школьная активность его мало чем привлекает. Став частью клуба оккультных исследований, он решает зажить тихой жизнью, но все меняется, когда в школе объявляются духи.";
        $manga->author = "Akutami Gege";
        $manga->painter = "Akutami Gege";
        $manga->publisher = "Shueisha";
        $manga->genre = "Фантастика";
        $manga->save();
    }
}
