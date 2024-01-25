<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics_array=config("comics");
        foreach($comics_array as $comic_item){
            $new_comic= new comic();
            $new_comic->title = $comic_item["title"];
            $new_comic->description = $comic_item["description"];
            $new_comic->thumb = $comic_item["thumb"];
            $new_comic->price = $comic_item["price"];
            $new_comic->series = $comic_item["series"];
            $new_comic->sale_date = $comic_item["sale_date"];
            $new_comic->type = $comic_item["type"];
            $new_comic->save();

        }
    }
}
