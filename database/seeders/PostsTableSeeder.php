<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name'=>'News',
        ]);
        $category2 = Category::create([
            'name' => 'Marking',
        ]);
        $category3 = Category::create([
            'name' => 'PartnerShip',
        ]);

        $author1 = User::create([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => Hash::make('password'),
        ]);

        $author2 = User::create([
            'name' => 'Jana Doe',
            'email' => 'jana@doe.com',
            'password' => Hash::make('password'),
        ]);


        $post1 = Post::create([
            'title'=> 'We relocated our office to a new designed garage',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", 
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            'category_id' => $category1->id,
            'image' => 'image',
            'user_id' => $author1->id,
        ]);

        $post2 = $author2->posts()->create([
            'title' => 'Best practices for minimalist design with example',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            'category_id' => $category2->id,
            'image' => 'image'
        ]);

        $post3 = $author1->posts()->create([
            'title' => 'Top 5 brilliant content marketing strategies',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            'category_id' => $category3->id,
            'image' => 'image'
        ]);

        $tag1 = Tag::create([
            'name' => 'Job',
        ]);

        $tag2 = Tag::create([
            'name' => 'customers',
        ]);

        $tag3 = Tag::create([
            'name' => 'record',
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag1->id]);
        $post3->tags()->attach([$tag1->id, $tag3->id]);

    }
}
