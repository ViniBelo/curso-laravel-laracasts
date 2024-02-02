<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(5)->create();

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'Family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$family->id,
        //     'title'=>'My Family Post',
        //     'slug'=>'my-first-post',
        //     'excerpt'=>'<p>Lorem ipsum dolar sit amet.</p>',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ab omnis, optio fugit voluptates! Sunt neque doloribus provident nulla autem nihil ipsam iure animi magni sequi accusamus, vitae et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ab omnis, optio fugit voluptates! Sunt neque doloribus provident nulla autem nihil ipsam iure animi magni sequi accusamus, vitae et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ab omnis, optio fugit voluptates! Sunt neque doloribus provident nulla autem nihil ipsam iure animi magni sequi accusamus, vitae et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ab omnis, optio fugit voluptates! Sunt neque doloribus provident nulla autem nihil ipsam iure animi magni sequi accusamus, vitae et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ab omnis, optio fugit voluptates! Sunt neque doloribus provident nulla autem nihil ipsam iure animi magni sequi accusamus, vitae et.</p>'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$work->id,
        //     'title'=>'My Work Post',
        //     'slug'=>'my-work-post',
        //     'excerpt'=>'<p>Lorem ipsum dolar sit amet.</p>',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ab omnis, optio fugit voluptates! Sunt neque doloribus provident nulla autem nihil ipsam iure animi magni sequi accusamus, vitae et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ab omnis, optio fugit voluptates! Sunt neque doloribus provident nulla autem nihil ipsam iure animi magni sequi accusamus, vitae et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ab omnis, optio fugit voluptates! Sunt neque doloribus provident nulla autem nihil ipsam iure animi magni sequi accusamus, vitae et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ab omnis, optio fugit voluptates! Sunt neque doloribus provident nulla autem nihil ipsam iure animi magni sequi accusamus, vitae et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ab omnis, optio fugit voluptates! Sunt neque doloribus provident nulla autem nihil ipsam iure animi magni sequi accusamus, vitae et.</p>'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$personal->id,
        //     'title'=>'My Personal Post',
        //     'slug'=>'my-personal-post',
        //     'excerpt'=>'<p>Lorem ipsum dolar sit amet.</p>',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ab omnis, optio fugit voluptates! Sunt neque doloribus provident nulla autem nihil ipsam iure animi magni sequi accusamus, vitae et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ab omnis, optio fugit voluptates! Sunt neque doloribus provident nulla autem nihil ipsam iure animi magni sequi accusamus, vitae et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ab omnis, optio fugit voluptates! Sunt neque doloribus provident nulla autem nihil ipsam iure animi magni sequi accusamus, vitae et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ab omnis, optio fugit voluptates! Sunt neque doloribus provident nulla autem nihil ipsam iure animi magni sequi accusamus, vitae et.Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ab omnis, optio fugit voluptates! Sunt neque doloribus provident nulla autem nihil ipsam iure animi magni sequi accusamus, vitae et.</p>'
        // ]);
    }
}
