<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FullTextSearch;
use App\Model;
use Faker\Generator as Faker;

$factory->define(FullTextSearch::class, function (Faker $faker) {
    return [
        //
        'full_text_searches.customer_name' => $faker->name,
        'full_text_searches.gender' => random_int(0, 1),
        'full_text_searches.address' => $faker->address,
        'full_text_searches.city' => $faker->city,
        'full_text_searches.postal_code' => $faker->postcode,
        'full_text_searches.country' => $faker->country,
    ];
});
