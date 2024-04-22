<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Area;
use App\Models\Menu;
use App\Models\Restaurant;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Area::create([
            'area_name' => 'N24',
            'restaurant' => 'Restaurant A',
            'restaurant_pic' => 'restaurantA_pic.jpg'
        ]);

        Area::create([
            'area_name' => 'N24',
            'restaurant' => 'Restaurant C',
            'restaurant_pic' => 'restaurantC_pic.jpg'
        ]);

        Area::create([
            'area_name' => 'M01',
            'restaurant' => 'Restaurant B',
            'restaurant_pic' => 'restaurantB_pic.jpg'
        ]);

        Area::create([
            'area_name' => 'Cengal',
            'restaurant' => 'Restaurant D',
            'restaurant_pic' => 'restaurantD_pic.jpg'
        ]);

        Menu::create([
            'restaurant_id' => '1',
            'food_name' => 'Pizza',
            'food_price' => 15,
            'food_pic' => 'pizza.jpg',
            'description' => 'pizza',
            'category' => 'western'
        ]);
        
        Menu::create([
            'restaurant_id' => '1',
            'food_name' => 'Salad',
            'food_price' => 10,
            'food_pic' => 'salad.jpg',
            'description' => 'salad',
            'category' => 'side'
            
        ]);
        
        Menu::create([
            'restaurant_id' => '1',
            'food_name' => 'Steak',
            'food_price' => 20,
            'food_pic' => 'steak.jpg',
            'description' => 'steak',
            'category' => 'western'
        ]);
        
        Menu::create([
            'restaurant_id' => '2',
            'food_name' => 'Burger',
            'food_price' => 7,
            'food_pic' => 'burger.jpg',
            'description' => 'burger',
            'category' => 'western'
        ]);
        
        Menu::create([
            'restaurant_id' => '2',
            'food_name' => 'Sushi',
            'food_price' => 12,
            'food_pic' => 'sushi.jpg',
            'description' => 'sushi',
            'category' => 'japanese'
        ]);
        
        Menu::create([
            'restaurant_id' => '2',
            'food_name' => 'Tacos',
            'food_price' => 8,
            'food_pic' => 'tacos.jpg',
            'description' => 'tacos',
            'category' => 'western'
        ]);
        
        Menu::create([
            'restaurant_id' => '3',
            'food_name' => 'Salad',
            'food_price' => 10,
            'food_pic' => 'salad.jpg',
            'description' => 'salad',
            'category' => 'side'
        ]);
        
        Menu::create([
            'restaurant_id' => '3',
            'food_name' => 'Sandwich',
            'food_price' => 6,
            'food_pic' => 'sandwich.jpg',
            'description' => 'sandwich',
            'category' => 'western'
        ]);
        
        Menu::create([
            'restaurant_id' => '3',
            'food_name' => 'Soup',
            'food_price' => 5,
            'food_pic' => 'soup.jpg',
            'description' => 'soup',
            'category' => 'soup'
        ]);
        
        Menu::create([
            'restaurant_id' => '4',
            'food_name' => 'Pasta',
            'food_price' => 18,
            'food_pic' => 'pasta.jpeg',
            'description' => 'pasta',
            'category' => 'noodle'
        ]);
        
        Menu::create([
            'restaurant_id' => '4',
            'food_name' => 'Rice Bowl',
            'food_price' => 14,
            'food_pic' => 'ricebowl.jpeg',
            'description' => 'ricebowl',
            'category' => 'rice'
        ]);
        
        Menu::create([
            'restaurant_id' => '4',
            'food_name' => 'Pizza',
            'food_price' => 16,
            'food_pic' => 'pizza.jpg',
            'description' => 'pizza',
            'category' => 'western'
        ]);
    }
}
