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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Applicant::class, function(Faker\Generator $faker){
	$name = $faker->name;
	$parent_name = $faker->name;
	$document_graduate = $faker->name;
	return [
		'reg_number' => rand(100, 200),
		'name' => $name,
		'place_of_birth' => $faker->cityPrefix,
		'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'address' => $faker->address,
		'middle_school_name' => $faker->sentence($nbWords = 6) ,
		'middle_school_address' => $faker->streetAddress,
		'date_of_graduate' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'math_score' => rand(0,8) / 8,
		'english_score' => rand(0,7) / 8,
		'indonesian_score' => rand(0,6) / 7,
		'science_score' => rand(0,8) / 8,
		'average_score' => rand(0,5) / 7,
		'handphone_number' => $faker->phoneNumber,
		'parent_name' => $parent_name,
		'document_graduate' => $document_graduate,
	];
});

$factory->define(App\AcademicYear::class, function(Faker\Generator $faker){
	return [
		'year' => $faker->year($max = 'now'),
	];
});




