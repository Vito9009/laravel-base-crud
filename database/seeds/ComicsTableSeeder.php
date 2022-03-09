<?php

use App\Comic;
use Illuminate\Database\Seeder;


class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config("comics");

        foreach($comics as $info){
            $newInfo = new Comic();
            $newInfo->title = $info["title"];
            $newInfo->description = $info["description"];
            $newInfo->thumb = $info["thumb"];
            $newInfo->price = $info["price"];
            $newInfo->series = $info["series"];
            $newInfo->sale_date = $info["sale_date"];
            $newInfo->type = $info["type"];
            $newInfo->save();
        }
    }
}
