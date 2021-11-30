<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['name' => 'Drama'],
            ['name' => 'Cartoon'],
            ['name' => 'Action']
        ]);
        DB::table('movies')->insert([
            [
                'genre_id'=>1,
                'title'=>'StartUp',
                'photo'=>'ImgAssets\startup.jpg',
                'desc'=>"Seo Dal Mi has dreams of becoming Korea's own Steve Jobs, and with her genius first love, an investor, and a business insider by her side, her dream may be closer than she thinks.",
                'rating'=>'4.5/5'
            ], 
            [
                'genre_id'=>1,
                'title'=>'Crash Landing on You',
                'photo'=>'ImgAssets\cloy.jpg',
                'desc'=>"A paragliding mishap drops a South Korean heiress in North Korea - and into the life of an army officer, who decides he will help her hide.",
                'rating'=>'4/5'
            ],
            [
                'genre_id'=>1,
                'title'=>'Dear Nathan',
                'photo'=>'ImgAssets\dearnathan.jpg',
                'desc'=>"Salma merupakan seorang murid pindahan di SMA Garuda.",
                'rating'=>'4/5'
            ],
            [
                'genre_id'=>1,
                'title'=>'LaLaLand',
                'photo'=>'ImgAssets\lalaland.jpg',
                'desc'=>"Sebastian and Mia are drawn together by their common desire to do what they love. ",
                'rating'=>'4/5'
            ],
            [
                'genre_id'=>2,
                'title'=>'SpongeBob SquarePants',
                'photo'=>'ImgAssets\spongebob.jpg',
                'desc'=>"A yellow sea sponge named SpongeBob SquarePants, who enjoys being a cook at Krusty Krab, lives in the ventures with his friends at Bikini Bottom.",
                'rating'=>'4/5'
            ],
            [
                'genre_id'=>2,
                'title'=>'Godzilla: Planet of the Monsters',
                'photo'=>'ImgAssets\godzilla1.jpg',
                'desc'=>"The human race takes to the stars and abandons Earth after Godzilla wreaks havoc upon the planet. Thousands of years laterace to destroy the giant monster and reclaim their home.",
                'rating'=>'4/5'
            ],
            [
                'genre_id'=>2,
                'title'=>'Godzilla: City on the Edge of Battle',
                'photo'=>'ImgAssets\godzilla2.jpg',
                'desc'=>"The human race takes to the stars and abandons Earth after Godzilla wreaks havoc upon the planet. Thousands of years later, they retutroy the giant monster and reclaim their home.",
                'rating'=>'4/5'
            ],
            [
                'genre_id'=>2,
                'title'=>'Godzilla: Planet Eater',
                'photo'=>'ImgAssets\godzilla3.jpg',
                'desc'=>"The human race takes to the stars and abandons Earth after Godzilla wreaks havoc upon the planet. Thousands of years la space to destroy the giant monster and reclaim their home.",
                'rating'=>'4/5'
            ],
            [
                'genre_id'=>3,
                'title'=>'Fast & Furious',
                'photo'=>'ImgAssets\ff1.jpg',
                'desc'=>"A spate of high-speed robberies ins st his crew under the r. FBI agent Brian goes undercover and befriends Toretto in a bid to investigate the matter.",
                'rating'=>'4/5'
            ],
            [
                'genre_id'=>3,
                'title'=>'Fast & Furious 2',
                'photo'=>'ImgAssets\ff2.jpg',
                'desc'=>"A spate of high-speed  and his crew under the LAPD scanner. FBI agent Brian goes undercover and befriends Toretto in a bid to investigate the matter.",
                'rating'=>'4/5'
            ],
            [
                'genre_id'=>3,
                'title'=>'Fast & Furious 4',
                'photo'=>'ImgAssets\ff4.jpg',
                'desc'=>"A spate of high-speed roband his crew under the LAPD scanner. FBI agent Brian goes undercover and befriends Toretto in a bid to investigate the matter.",
                'rating'=>'4/5'
            ],
            [
                'genre_id'=>3,
                'title'=>'Fast & Furious 5',
                'photo'=>'ImgAssets\ff5.jpg',
                'desc'=>"A spate of high-speed retto and his crew under the LAPD scanner. FBI agent Brian goes undercover and befriends Toretto in a bid to investigate the matter.",
                'rating'=>'4/5'
            ]
        ]);
        DB::table('episodes')->insert([
            [
                'movie_id' => '1',
                'episode' => 'Episode 1',
                'title' => '1'
            ],
            [
                'movie_id' => '1',
                'episode' => 'Episode 2',
                'title' => '2'
            ],
            [
                'movie_id' => '1',
                'episode' => 'Episode 3',
                'title' => '3'
            ],
            [
                'movie_id' => '1',
                'episode' => 'Episode 4',
                'title' => '4'
            ],
            [
                'movie_id' => '1',
                'episode' => 'Episode 5',
                'title' => '5'
            ],
            [
                'movie_id' => '1',
                'episode' => 'Episode 6',
                'title' => '6'
            ],
            [
                'movie_id' => '2',
                'episode' => 'Episode 1',
                'title' => '1'
            ],
            [
                'movie_id' => '2',
                'episode' => 'Episode 2',
                'title' => '2'
            ],
            [
                'movie_id' => '2',
                'episode' => 'Episode 3',
                'title' => '3'
            ],
            [
                'movie_id' => '2',
                'episode' => 'Episode 4',
                'title' => '4'
            ],
            [
                'movie_id' => '2',
                'episode' => 'Episode 5',
                'title' => '5'
            ],
            [
                'movie_id' => '2',
                'episode' => 'Episode 6',
                'title' => '6'
            ],
            [
                'movie_id' => '3',
                'episode' => 'none',
                'title' => 'none'
            ],
            [
                'movie_id' => '4',
                'episode' => 'none',
                'title' => 'none'
            ],
            [
                'movie_id' => '5',
                'episode' => 'Episode 1',
                'title' => '1'
            ],
            [
                'movie_id' => '5',
                'episode' => 'Episode 2',
                'title' => '2'
            ],
            [
                'movie_id' => '5',
                'episode' => 'Episode 3',
                'title' => '3'
            ],
            [
                'movie_id' => '5',
                'episode' => 'Episode 4',
                'title' => '4'
            ],
            [
                'movie_id' => '5',
                'episode' => 'Episode 5',
                'title' => '5'
            ],
            [
                'movie_id' => '5',
                'episode' => 'Episode 6',
                'title' => '6'
            ],
            [
                'movie_id' => '6',
                'episode' => 'none',
                'title' => 'none'
            ],
            [
                'movie_id' => '7',
                'episode' => 'none',
                'title' => 'none'
            ],
            [
                'movie_id' => '8',
                'episode' => 'none',
                'title' => 'none'
            ],
            [
                'movie_id' => '9',
                'episode' => 'none',
                'title' => 'none'
            ],
            [
                'movie_id' => '10',
                'episode' => 'none',
                'title' => 'none'
            ],
            [
                'movie_id' => '11',
                'episode' => 'none',
                'title' => 'none'
            ],
            [
                'movie_id' => '12',
                'episode' => 'none',
                'title' => 'none'
            ],
        ]);
    }
}
