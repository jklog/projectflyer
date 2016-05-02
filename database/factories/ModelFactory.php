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

$factory->define(App\Flyer::class, function (Faker\Generator $faker) {
    return [
    'street'        => $faker->streetAddress,
    'city'          => $faker->city,
    'zip'           => $faker->postcode,
    'state'         => $faker->state,
    'country'       => $faker->country,
    'price'         => $faker->numberBetween(10000, 5000000),
    'description'   => $faker->paragraphs(3)
    ];
});

$factory->define(App\Job::class, function (Faker\Generator $faker) {
    return [
    'id_transactions'          => $faker->uuid,
    'tr_ClientCode'            => $faker->numberBetween(10, 100),
    'tr_JobNo'                 => $faker->numberBetween(9000, 12000),
    'tr_ClientJobNo'           => $faker->numberBetween(9000, 12000),
    'tr_JobTitle'              => $faker->bs,
    'tr_JobType'               => $faker->phoneNumber,
    'tr_ProjMgrFirstName'      => $faker->firstNameMale,
    'tr_ProjMgrLastName'       => $faker->lastName,
    'tr_StartDate'             => $faker->dateTimeThisMonth($max = 'now'),
    'tr_DueDate'               => $faker->dateTimeBetween($startDate = 'now', $endDate = '+7 days'),
    'tr_Status'                => $faker->streetAddress,
    'tr_Priority'              => $faker->randomNumber($nbDigits = 1),
    'tr_Pending'               => $faker->streetAddress,
    'tr_StatusNotes'           => $faker->catchPhrase,
    'tr_JobDescription'        => $faker->text,
    'tr_AcctMgrFirstName'      => $faker->firstNameMale,
    'tr_AcctMgrLastName'       => $faker->lastName,
    'tr_CloroxWorkOrderNumber' => $faker->streetAddress,
    'tr_CloroxPGNumber'        => $faker->shuffle('12345'),
    'tr_CloroxSpecNumber'      => $faker->shuffle('123456'),
    'tr_UPC'                   => $faker->ean13(),
    'tr_TypeOfProof'           => $faker->word,
    'tr_ProofStock'            => $faker->word,
    'tr_PrintSubstrate'        => $faker->word,
    'tr_PrintMethod'           => $faker->word,
    'tr_PrintQueue'            => $faker->word,
    'tr_PrinterName'           => $faker->company,
    'tr_PrinterLocation'       => $faker->city,
    'tr_SupplierCode'          => $faker->word,
    'tr_ShippingInfo'          => $faker->word,
    'tr_PhotographyOnly'       => $faker->word,
    'tr_CollateralNo'          => $faker->numberBetween(100, 200)
    ];
});


$factory->define(App\Test::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address
    ];
});

$factory->define(App\Student::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'prefix' => $faker->prefix
    ];
});



