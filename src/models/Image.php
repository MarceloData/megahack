<?php 

namespace src\models;

use CoffeeCode\Cropper\Cropper;
use Faker\Factory;

$faker = Factory::create("pt_bt");
$generate = false;

if ($generate) {
    for ($img = 0; $img <3 ; $img++) {
        $faker->image(__DIR__."../assets/images", 600, 300);
    }
}

$c = new Cropper("../assets/images/cache");