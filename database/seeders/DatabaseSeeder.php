<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Item;
use App\Models\Review;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Shop::create([
            'name' => 'Erin Shop',
            'username' => 'user',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Erin',
            'email' => 'erin@gmail.com',
            'password' => bcrypt('password'),
            'address' => 'Jl. Raya Kb. Jeruk No.27, Kemanggisan'
        ]);

        DB::table('items')->insert([
            [
                'image_path' => 'lily_of_the_valley.jpg',
                'name' => 'Lily of the Valley Bunnie Figurine',
                'type' => 'Plushies',
                'price' => 30.0,
                'stock' => 150,
                'shop_id' => 1,
            ],
            [
                'image_path' => 'camelia_bag.jpg',
                'name' => 'Camelia Bag',
                'type' => 'Bags',
                'price' => 40.0,
                'stock' => 150,
                'shop_id' => 1
            ],
            [
                'image_path' => 'miffy_jam.jpg',
                'name' => 'Miffy Jam Cookies Keychain',
                'type' => 'Keychains',
                'price' => 45.0,
                'stock' => 150,
                'shop_id' => 1
            ],
            [
                'image_path' => 'kitty_muffin.jpg',
                'name' => 'Kitty Cupcake Keychain',
                'type' => 'Keychains',
                'price' => 25.0,
                'stock' => 150,
                'shop_id' => 1
            ],
            [
                'image_path' => 'snorlax_plushie.jpg',
                'name' => 'Snorlax Plushie',
                'type' => 'Plushies',
                'price' => 40.0,
                'stock' => 150,
                'shop_id' => 1
            ],
            [
                'image_path' => 'bunny.jpg',
                'name' => 'Bunny in Overall',
                'type' => 'Plushies',
                'price' => 40.0,
                'stock' => 150,
                'shop_id' => 1
            ],
        ]);

        DB::table('reviews')->insert([
            [
                'rating' => 5,
                'user_id' => 1,
                'item_id' => 1,
            ],
            [
                'rating' => 5,
                'user_id' => 1,
                'item_id' => 2,
            ],
            [
                'rating' => 5,
                'user_id' => 1,
                'item_id' => 3,
            ],
            [
                'rating' => 5,
                'user_id' => 1,
                'item_id' => 4,
            ],
            [
                'rating' => 5,
                'user_id' => 1,
                'item_id' => 5,
            ],
            [
                'rating' => 5,
                'user_id' => 1,
                'item_id' => 6,
            ]
        ]);
    }
}
