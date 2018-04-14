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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'id' => '26',
        'profile' => 'df',
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Project::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'user_id' => '26',
        'title' => $faker->catchPhrase ,
        'body'  =>$faker->text,
        'tutorial'=>$faker->url,
        'image' => 'test.jpeg',
        'zip_file' =>'test.jpeg',   
    ];
});

$factory->define(App\Subscriber::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'first_name' => $faker->firstName ,
        'last_name'  =>$faker->lastName,
        'email' => $faker->email,    
    ];
});
