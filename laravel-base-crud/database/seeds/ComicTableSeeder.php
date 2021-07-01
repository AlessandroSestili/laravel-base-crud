<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicList = config("comics");

        foreach ($comicList as $comics) {
            $newComic= new Comic();

            // $newComic->title = $comics["title"];
            // $newComic->description = $comics["description"];
            // $newComic->type = $comics["title"];

            $newComic->fill($comics );

            $newComic->save();
        }
    }
}
