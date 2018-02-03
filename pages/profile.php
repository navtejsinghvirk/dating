<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <!-- Add bootstrap,stylesheet,viewport -->
    <meta charset="UTF-8">
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
    <div class="container p-2">
        <div class="border p-3"><!--border padding div start-->
            <h3 class="font-weight-bold">Profile</h3>
            <hr>
            <form action="" method="post">
                <div class="row"><!--row div start-->
                    <div class="col-sm-7 p-3"><!--col div start-->

                        <div class="form-group">
                            <label for="email" class="font-weight-bold">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ @email }}">
                            <check if="{{ isset(@errors['email']) }}">
                                <h6>Error in Email!</h6>
                            </check>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">States</label>

                            <select class="form-control" name="mystates" id="mystates">
                                <option>--Select--</option>
                                <repeat group="{{ @states }}" value="{{ @stateOption }}">
                                    <option
                                    <check if="{{ @stateOption  == @state }}">
                                        selected
                                    </check>
                                    >
                                    {{ @stateOption }}
                                    </option>
                                </repeat>
                            </select>
                            <check if="{{ isset(@errors['state']) }}">
                                <h6>{{ @errors['state'] }}</h6>
                            </check>
                        </div>

                        <div class="form-check">
                            <label class="font-weight-bold ">Seeking</label>
                            <input type="radio" name="sgender" value="Male"
                            <check if="{{ @sgender == 'Male'}}">checked</check>
                            >Male

                            <input type="radio" name="sgender" value="Female"
                            <check if="{{ @sgender == 'Female'}}">checked</check>
                            >Female

                            <check if="{{ isset(@errors['sgender']) }}">
                                <h6>Please Select Gender</h6>
                            </check>
                        </div>
                    </div>
                    <div class="col-sm-5 p-3"><!--col div start-->
                        <div class="form-group">
                            <label for="biography" class="font-weight-bold">Biography:</label>
                            <textarea class="form-control" rows="6" id="biography"
                                      name="biography">{{@biography}}</textarea>
                            <check if="{{ isset(@errors['biography']) }}">
                                <h6>Error in Biography!</h6>
                            </check>

                        </div>
                    </div>
                </div>


                <div class="text-right">
                    <input type="submit" name="submit" class="btn btn-primary btn p-2" value="Next &gt;">
                </div>
            </form>
        </div>
    </div>
</main>
<!-- footer-->
<footer>
    <div class="container-fluid"><!--container fluid div start -->
        <div class="bg-danger text-light rounded"><!--text,bg-rounded div start-->
            <h3 class="text-center font-italic">Live Love Life</h3>
        </div><!--text,bg-rounded div end-->
    </div><!--container fluid div end -->
</footer>
</body>
</html>