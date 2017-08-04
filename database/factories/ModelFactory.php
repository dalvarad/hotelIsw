<?php
use \Freshwork\ChileanBundle\Rut;
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
        'name'      => $faker->name,
        'rut'       => Rut::set(rand(1000000, 25000000))->fix()->format(Rut::FORMAT_WITH_DASH),
        'email'     => $faker->email,
        'password'  => bcrypt(str_random(10)),
        'type'      => $faker->randomElement($array = array ('1','2'))
    ];
});

$factory->define(App\Habitacion::class, function (Faker\Generator $faker) {
 
    return [
        'id_tipo'                 => $faker->randomElement($array = array('1', '2', '3')),
        'id_estado'             => $faker->randomElement($array = array('1', '2', '3')),
        'numero'                => $faker->numberBetween($min = 1, $max = 150),
    ];

});

$factory->define(App\Cliente::class, function (Faker\Generator $faker) {
    return [
        'nombre_cliente'    => $faker->name,
        'rut_cliente'       =>Rut::set(rand(1000000, 25000000))->fix()->format(Rut::FORMAT_WITH_DASH),
        'hora_termino_real_cl'    => $faker->dateTimeBetween('now', '+1 week')
    ];

});