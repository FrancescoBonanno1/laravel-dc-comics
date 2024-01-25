<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics_array=config("comic");
        foreach($comics_array as $comic_item){
            $new_comic= new comic();
            $new_comic->titolo = $comic_item["title"];
            $new_comic->descrizione = $comic_item["description"];
            $new_comic->img = $comic_item["thumb"];
            $new_comic->prezzo = $comic_item["price"];
            $new_comic->serie = $comic_item["series"];
            $new_comic->data_vendita = $comic_item["sale_date"];
            $new_comic->tipo = $comic_item["type"];
            $new_comic->save();

        }
    }
}
