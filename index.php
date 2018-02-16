<?php

//error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

//require the autolaod file
require_once('vendor/autoload.php');

//session start
session_start();


//create an instance of the base class
$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET /', function () {
    $template = new Template();
    echo $template->render('pages/home.html');
});

//define route to personal information
$f3->route('GET|POST /personalinformation', function ($f3) {

    if (isset($_POST['submit'])) {

        $gender = ($_POST['gender']);
        $firstName = ($_POST['firstName']);
        $lastName = ($_POST['lastName']);
        $age = ($_POST['age']);
        $phonenumber = ($_POST['phonenumber']);
        $premium = $_POST['premium'];


        include('model/validatepersonal.php');


        $f3->set('gender', $gender);
        $f3->set('firstName', $firstName);
        $f3->set('lastName', $lastName);
        $f3->set('age', $age);
        $f3->set('phonenumber', $phonenumber);
        $f3->set('premium', $premium);
        $f3->set('errors', $errors);
        $f3->set('success', $success);
        $_SESSION['premium'] = $premium;

        if (!isset($premium)) {
            $member = new Member($firstName, $lastName, $age,
                $gender, $phonenumber);
            $_SESSION['member'] = $member;
        } else {
            $premiummember = new PremiumMember($firstName, $lastName
                , $age, $gender, $phonenumber);
            $_SESSION['premiummember'] = $premiummember;
        }


    }
    if ($success) {
        header("location: ./profile");
    }


    $template = new Template();
    echo $template->render('pages/personalinformation.php');
});

//array for states
$f3->set('states', array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
    'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia',
    'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas',
    'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts',
    'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana',
    'Nebraska', 'Nevada', 'New Hampshire',
    'New Jersey', 'New Mexico', 'New York', 'North Carolina',
    'North Dakota', 'Ohio', 'Oklahoma', 'Oregon',
    'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota',
    'Tennessee', 'Texas', 'Utah', 'Vermont',
    'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'));

//define route for profile
$f3->route('GET|POST /profile', function ($f3) {

    if (isset($_POST['submit'])) {

        $state = ($_POST['mystates']);
        $sgender = ($_POST['sgender']);
        $email = ($_POST['email']);
        $biography = ($_POST['biography']);

        include('model/validateprofile.php');

        $f3->set('state', $state);
        $f3->set('sgender', $sgender);
        $f3->set('email', $email);
        $f3->set('biography', $biography);
        $f3->set('errors', $errors);
        $f3->set('success', $success);

        $member = $_SESSION['member'];

        if (isset($_SESSION['member'])) {
            $member->setEmail($email);
            $member->setState($state);
            $member->setSeeking($sgender);
            $member->setBio($biography);
        }

        $_SESSION['member'] = $member;

    }

    if ($success) {
        header("location: ./interest");
    }

    $template = new Template();
    echo $template->render('pages/profile.php');
});

//indoor ,outdoor array
$f3->set('indoors', array(' tv', ' movies', ' cooking', ' board games',
    ' puzzles', ' reading', ' playing cards', ' video games'));
$f3->set('outdoors', array(' hiking', ' biking', ' swimming',
    ' collecting', ' walking', ' climbing'));

//route to activity
$f3->route('GET|POST /interest', function ($f3) {

    if (isset($_POST['submit'])) {

        $indoor = ($_POST['indoors']);
        $outdoor = ($_POST['outdoors']);

        include('model/validactivity.php');

        $f3->set('indoor', $indoor);
        $f3->set('outdoor', $outdoor);
        $f3->set('errors', $errors);
        $f3->set('success', $success);

        $member = $_SESSION['member'];
        $premiummember = $_SESSION['premiummember'];
        if (isset($_SESSION['premiummember'])) {

            $premiummember->setInDoorInterests($indoor);
            $premiummember->setOutDoorInterests($outdoor);
        }

        $_SESSION['premiummember'] = $premiummember;

    }
    if ($success) {
        header("location: ./summary");
    }

    $template = new Template();
    echo $template->render('pages/interests.php');
});

//route summary page
$f3->route('GET|POST /summary', function ($f3) {


    $_SESSION['member'];
    $_SESSION['premiummember'];


    $template = new Template();
    echo $template->render('pages/summary.php');
});

//run fat free
$f3->run();







