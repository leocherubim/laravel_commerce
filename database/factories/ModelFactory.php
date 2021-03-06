<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(CodeCommerce\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(CodeCommerce\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence
    ];
});

$factory->define(CodeCommerce\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 99),
        'featured' => $faker->boolean($chanceOfGettingTrue = 50),
        'recommend' => $faker->boolean($chanceOfGettingTrue = 50),
    ];
});

$factory->define(CodeCommerce\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});