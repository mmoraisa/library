<?php

$factory->define(App\Author::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name(),
        'birthday' => $faker->date(),
        'bio_PT' => $faker->paragraph(2),
        'bio_US' => $faker->paragraph(2)
    ];
});
