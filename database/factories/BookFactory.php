<?php

$factory->define(App\Book::class, function (Faker\Generator $faker) {
    return [
        'name_PT' => $faker->sentence(2),
        'name_US' => $faker->sentence(2),
        'description_PT' => $faker->paragraph(2),
        'description_US' => $faker->paragraph(2),
        'cover_url_PT' => $faker->imageUrl(300,600),
        'cover_url_US' => $faker->imageUrl(300,600),
        'category_id' => $faker->numberBetween(1,5),
        'author_id' => $faker->numberBetween(1,8)
    ];
});
