<?php
/**
 * Created by PhpStorm.
 * User: Navtej
 * Date: 1/31/2018
 * Time: 2:41 PM
 */

error_reporting(E_ALL);
ini_set("display_errors", 1);

function validName($word)
{
    return ((!empty($word)) && ctype_alpha($word));
}

function validAge($age)
{
    return (is_numeric($age) && ($age >= 18) && (!empty($age)));
}

function validPhone($phonenumber)
{
    return (is_numeric($phonenumber) && preg_match("/^[0-9]{10}$/i", $phonenumber) && (!empty($phonenumber)));
}


function validgender($gender)
{

    return $gender;
}


$errors = [];

if (!validgender($gender)) {
    $errors['gender'] = "Please select gender";
}

if (!validName($firstName)) {
    $errors['firstName'] = "Please Enter valid  First Name";
}

if (!validName($lastName)) {
    $errors['lastName'] = "Please Enter valid Last Name";
}
if (!validAge($age)) {
    $errors['age'] = "Please Enter valid  Age";
}

if (!validPhone($phonenumber)) {
    $errors['phonenumber'] = "Please Enter valid Phone Number";
}


$success = sizeof($errors) == 0;