<?php

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name_PT' => $faker->word,
        'name_US' => $faker->word
    ];
});
