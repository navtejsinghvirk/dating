<?php
/**
 * Created by PhpStorm.
 * User: Navtej
 * Date: 1/31/2018
 * Time: 8:53 PM
 */


function validstates($state)
{
    global $f3;
    return in_array($state, $f3->get('states'));
}

function validemail($email)
{
    return ((filter_var($email, FILTER_VALIDATE_EMAIL)) && (!empty($email)));
}

function validsgender($sgender)
{

    return $sgender;
}

function validbiography($biography)
{
    return (!empty($biography) && trim($biography));
}

$errors = [];

if (!validsgender($sgender)) {
    $errors['sgender'] = "Please select gender";
}

if (!validstates($state)) {
    $errors['state'] = "Please select states";
}
if (!validemail($email)) {
    $errors['email'] = "Please Enter Valid Email";
}

if (!validbiography($biography)) {
    $errors['biography'] = "Please Enter About You";
}

$success = sizeof($errors) == 0;