<?php
use Faker\Factory;
use Illuminate\Database\Seeder;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $album = [];
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $item = [
                'title' => $faker->name,
                'description' => $faker->realText($maxNbChars = 40, $indexSize = 2),
                'cover_image' => 'client/images/hot-song/hot-'. $faker->numberBetween($min = 1, $max = 15) .'.jpg',
                'release_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'artist_id' => 0,
                'views' => $faker->numberBetween($min = 1000, $max = 9000),
                'like' => $faker->numberBetween($min = 1000, $max = 9000),
                'status' => 1,
            ];
            $album[] = $item;
        }
        DB::table('albums')->insert($album);
    }
}
