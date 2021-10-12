<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Review;
use App\Models\User;
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
//        User::truncate();
//        Review::truncate();
//        Category::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Review::factory(5)->create([
            'user_id' => $user->id
        ]);
//
//        $user = User::factory()->create();
//
//        $food = Category::create([
//            'name' => 'Food',
//            'slug' => 'food',
//        ]);
//
//        $movie = Category::create([
//            'name' => 'Movie',
//            'slug' => 'movie',
//        ]);
//
//        $music = Category::create([
//            'name' => 'Music',
//            'slug' => 'music',
//        ]);
//
//        Review::create([
//            'user_id' => $user->id,
//            'category_id' => $food->id,
//            'title' => 'My Food Review',
//            'slug' => 'my-food-review',
//            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat ante tempor nulla convallis tempor. Aenean non laoreet neque, a ultricies massa. Proin ultrices, neque vel tincidunt hendrerit, velit massa maximus dolor, id feugiat mi est vitae augue. Donec scelerisque non erat sit amet blandit. Nam nisi velit, viverra ac libero sit amet, condimentum finibus ex. Sed vel semper augue. Mauris viverra gravida ligula eget sodales. Sed eu erat eget urna blandit tempus at ut lacus. Fusce tellus ante, mollis in rhoncus a, hendrerit id felis. Cras eu lacus sapien. Pellentesque erat felis, blandit at mattis vel, vehicula nec ipsum. Integer non ante cursus diam eleifend scelerisque et sed enim. Praesent sit amet dignissim neque, a facilisis magna. Vivamus pretium lectus eget orci iaculis, sed feugiat mi rutrum. Nam vitae dapibus nisl.
//
//Duis suscipit vulputate nibh imperdiet blandit. Etiam neque erat, dapibus nec rutrum eget, auctor quis leo. Pellentesque consequat porta urna, at molestie magna sodales in. Maecenas placerat risus hendrerit quam fringilla, nec sollicitudin mauris lobortis. Sed et mauris placerat, ultricies urna a, fermentum mi. Morbi eu arcu ut nisl aliquet tincidunt. Sed nec neque quis lorem vestibulum ullamcorper a at felis. Pellentesque feugiat velit at elit volutpat, a mattis mauris malesuada. Vestibulum consequat ipsum ut leo auctor tincidunt. Phasellus egestas a mi in tincidunt. Integer viverra, leo eget ullamcorper imperdiet, sapien nunc scelerisque ipsum, ac condimentum massa ante non enim. Cras a volutpat mauris.</p>'
//        ]);
//
//        Review::create([
//            'user_id' => $user->id,
//            'category_id' => $movie->id,
//            'title' => 'My Movie Review',
//            'slug' => 'my-movie-review',
//            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat ante tempor nulla convallis tempor. Aenean non laoreet neque, a ultricies massa. Proin ultrices, neque vel tincidunt hendrerit, velit massa maximus dolor, id feugiat mi est vitae augue. Donec scelerisque non erat sit amet blandit. Nam nisi velit, viverra ac libero sit amet, condimentum finibus ex. Sed vel semper augue. Mauris viverra gravida ligula eget sodales. Sed eu erat eget urna blandit tempus at ut lacus. Fusce tellus ante, mollis in rhoncus a, hendrerit id felis. Cras eu lacus sapien. Pellentesque erat felis, blandit at mattis vel, vehicula nec ipsum. Integer non ante cursus diam eleifend scelerisque et sed enim. Praesent sit amet dignissim neque, a facilisis magna. Vivamus pretium lectus eget orci iaculis, sed feugiat mi rutrum. Nam vitae dapibus nisl.
//
//Duis suscipit vulputate nibh imperdiet blandit. Etiam neque erat, dapibus nec rutrum eget, auctor quis leo. Pellentesque consequat porta urna, at molestie magna sodales in. Maecenas placerat risus hendrerit quam fringilla, nec sollicitudin mauris lobortis. Sed et mauris placerat, ultricies urna a, fermentum mi. Morbi eu arcu ut nisl aliquet tincidunt. Sed nec neque quis lorem vestibulum ullamcorper a at felis. Pellentesque feugiat velit at elit volutpat, a mattis mauris malesuada. Vestibulum consequat ipsum ut leo auctor tincidunt. Phasellus egestas a mi in tincidunt. Integer viverra, leo eget ullamcorper imperdiet, sapien nunc scelerisque ipsum, ac condimentum massa ante non enim. Cras a volutpat mauris.</p>'
//        ]);
    }
}
