<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artwork;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class ArtworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('artworks')->delete();
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('artworks')->insert([
                'artist_name' => $faker->name,
                'description' => $faker->text(200),
                'art_type' => $faker->randomElement(['art', 'music', 'literature']),
                'media_link' => $faker->url,
                'cover_image' => $faker->imageUrl(200, 200, 'peoples', true),
            ]);
        }
    }
}
