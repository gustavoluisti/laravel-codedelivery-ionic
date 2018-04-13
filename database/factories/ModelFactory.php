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

$factory->define(codedelivery\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(codedelivery\Models\Category::class, function(Faker\Generator $faker){
    return [
        'name' => $faker->word
    ];

});

$factory->define(codedelivery\Models\Product::class, function(Faker\Generator $faker){
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'price'=>$faker->numberBetween(10, 50)
    ];

});
