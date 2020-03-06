<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'titre' => $faker->catchphrase,
        'contenu' => $faker->paragraphs($nb = random_int(5, 20), $asText = true),
        'date' => $faker->dateTimeBetween('-5 years', '+0 year'),
    ];
});
