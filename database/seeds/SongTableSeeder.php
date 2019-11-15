<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class SongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $songs = [];
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $item = [
                'name' => $faker->name,
                'genres_id' => 3,
                'mp3_url' => 'client/mp3/' . $faker->numberBetween($min = 1, $max = 6) . '.mp3',
                'cover_image' => 'client/images/hot-song/hot-'. $faker->numberBetween($min = 1, $max = 15) .'.jpg',
                'description' => $faker->realText($maxNbChars = 40, $indexSize = 2),
                'lyric' => $faker->realText($maxNbChars = 400, $indexSize = 2),
                'view' => $faker->numberBetween($min = 1000, $max = 9000),
                'like' => $faker->numberBetween($min = 1000, $max = 9000),
                'release_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'album_id' => 3,
                'upload_by_user_id' => 3,
                'status' => 1,
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now'),
            ];
            $songs[] = $item;
        }
        DB::table('songs')->insert($songs);
    }
}
