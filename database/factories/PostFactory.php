<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
    	'title' => $faker->sentence(3),
		'body' => $faker->sentence(3),
		'slug' => $faker->slug,
		'meta_title' => $faker->sentence(3),
		'meta_keywords' => $faker->sentence(3),
		'meta_description' => $faker->sentence(3),
		'image' => null,
		'author_id' => factory(User::class)
    ];
});
