<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//Création de la factory pour ma table projects, ne pas oublier de changer Model par Project

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        //
        'title'=> $faker->name,
        'description' => $faker->text(),
    ];
});
