<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\comics_model;

class comics_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics_array=config("comic");
        foreach($comics_array as $comic_item){
            $new_comic= new comic();

        }
    }
}
