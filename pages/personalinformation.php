<?php
//turn on error reporting
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Information</title>
    <!-- Add bootstrap,stylesheet,viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/328/dating/styles/styles.css">
</head>
<body>
<header>
    <div class="container-fluid  "><!--container fluid,margin div start -->
        <div class="bg-danger text-light rounded  m-2">
            <h2 class="font-italic text-center">Sky Dating - Meet Love Of Your Life</h2>
        </div>
    </div><!--container fluid div end -->
</header>
<main>
    <div class="container p-1">
        <div class="border p-3"><!--border padding div start-->
            <h3 class="font-weight-bold">Personal Information</h3>
            <hr>
            <form action="" method="POST">
                <div class="row"><!--row div start-->
                    <div class="col-sm-8"><!--col div start-->

                        <div class="form-group">
                            <label for="firstName" class="form-control-label font-weight-bold">First Name</label>
                            <input type="text" class="form-control" name="firstName" id="firstName"
                                   value="{{ @firstName }}"><!--pattern="[a-zA-Z]"-->
                            <check if="{{ isset(@errors['firstName']) }}">
                                <h6>Error in First name!</h6>
                            </check>
                        </div>

                        <div class="form-group">
                            <label for="lastName" class="font-weight-bold">Last Name</label>
                            <input type="text" class="form-control" name="lastName" id="lastName"
                                   value="{{ @lastName }}">
                            <check if="{{ isset(@errors['lastName']) }}">
                                <h6>Error in last name!</h6>
                            </check>
                        </div>

                        <div class="form-group">

                            <label for="age" class="font-weight-bold">Age</label>
                            <input type="text" class="form-control" id="age" name="age" value="{{ @age }}">
                            <check if="{{ isset(@errors['age']) }}">
                                <h6>Error in Age!</h6>
                            </check>
                        </div>

                        <div class="form-check">
                            <label class="font-weight-bold ">Gender</label>
                            <input type="radio" name="gender" value="Male"
                            <check if="{{ @gender == 'Male'}}">checked</check>
                            > Male

                            <input type="radio" name="gender" value="Female"
                            <check if="{{ @gender == 'Female'}}">checked</check>
                            > Female

                            <check if="{{ isset(@errors['gender']) }}">
                                <h6>Please Select Gender</h6>
                            </check>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="font-weight-bold">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phonenumber"
                                   value="{{ @phonenumber}}">
                            <check if="{{ isset(@errors['phonenumber']) }}">
                                <h6>Error in phone Format(XXXXXXXXXX)</h6>
                            </check>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Premium Membership</label><br>
                            <input type="checkbox" name="premium"> Sign me up a Premium Account
                        </div>

                    </div>
                    <div class="col-sm-4 p-4">
                        <div>
                            <p class="jumbotron p-2"><span class="font-weight-bold">Note:</span>All information
                                entered is protected by our
                                <span class="text-primary">privacy policy.</span>
                                Profile information can only be viewed
                                by others with your <span class="m-5 p-5">permission. </span>
                            </p>
                        </div>
                    </div><!--col div end-->
                </div><!--row div end-->

                <div class="text-right">
                    <input type="submit" class="btn btn-primary" name="submit" value="Next &gt;">
                </div>
            </form>
        </div><!--border padding  div end-->
    </div><!--container div end-->
</main>

<!-- footer-->
<footer>
    <div class="container-fluid "><!--container fluid div start -->
        <div class="bg-danger text-light rounded m-2"><!--text,bg-rounded div start-->
            <h3 class="text-center font-italic">Live Love Life</h3>
        </div><!--text,bg-rounded div end-->
    </div><!--container fluid div end -->
</footer>
</body>
</html>