<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'foto' => $faker->imageUrl($width = 640, $height = 480),
        'graduacao' => $faker->titleMale,
        'nomeGuerra' => $faker->lastName,
        'secao' => $faker->jobTitle,
        'idtMil' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
        'cpf' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
        'rg' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
        'dataNasc' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'dataPraca' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'escolaridade' => $faker->word,
        'telefone' => $faker->phoneNumber,
        'endereco' => $faker->address,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),

    ];
});
