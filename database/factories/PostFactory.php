<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'titre' => $faker->catchPhrase,
        'contenu' => '<p>'. $faker->paragraph($nbSentences = 3, $variableNbSentences = true) .'</p>',
        'date' => $faker->dateTimeBetween('-5 years', '+0 year'),
    ];
});
