<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence();
        $body = fake()->paragraph();
        $photo = fake()->imageUrl(1000 , 680);
        $category_id = fake()->numberBetween(1,10);

        return [
            'title_fr'=>$title. '_fr',
            'title_en'=>$title. '_en',
            'body_fr'=>$body. '_fr',
            'body_en'=>$body. '_en',
            'slug'=>Str::slug($title),
            'photo'=>$photo,
            'category_id'=>$category_id,
            'admin_id'=>  1,

        ];
    }
}
