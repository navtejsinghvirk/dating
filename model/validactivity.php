<?php
/**
 * Created by PhpStorm.
 * User: Navtej
 * Date: 1/31/2018
 * Time: 8:59 PM
 */

function validoutdoor($outdoor)
{
    global $f3;
    return in_array($outdoor, $f3->get('outdoors'));
}

function validindoor($indoor)
{
    global $f3;
    return in_array($indoor, $f3->get('indoors'));
}

$errors = [];

if (!isset($indoor)) {

    $errors[indoor]=" Please choice Interests";
}

if (!isset($outdoor)) {

    $errors[outdoor] = " Please choice Interests";
}
$success = sizeof($errors) == 0;