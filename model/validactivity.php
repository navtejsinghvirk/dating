<?php
/**
 * Created by PhpStorm.
 * User: Navtej
 * Date: 1/31/2018
 * Time: 8:59 PM
 */

function validoutdoor($myoutdoor)
{
    global $f3;
    return in_array($myoutdoor, $f3->get('outdoors'));
}

function validindoor($myindoor)
{
    global $f3;
    return in_array($myindoor, $f3->get('indoors'));
}

$errors = [];

if (!validOutdoor($myoutdoor)) {
    $errors[$myoutdoor] = 'Please select outdoor';

}
if (!validindoor($myindoor)) {
    $errors[$myindoor] = "please select indoor";
}
$success = sizeof($errors) == 0;