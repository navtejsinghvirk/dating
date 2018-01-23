<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <div class="container p-3">
        <div class="border p-4"><!--border padding div start-->
            <h3 class="font-weight-bold">Profile</h3>
            <hr>
            <form action="#" method="post">
                <div class="row"><!--row div start-->
                    <div class="col-sm-7"><!--col div start-->

                        <div class="form-group">
                            <label for="email" class="font-weight-bold">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                            <label for="state" class="font-weight-bold">State</label>
                            <input type="text" class="form-control" id="state">
                        </div>
                        <div class="font-weight-bold">
                            <label >Seeking</label>
                        </div>
                        <label for ="male">
                            <input type="radio" class="radio-inline" id="male"> Male
                        </label>
                        <label for="female">
                            <input type="radio" class="radio-inline" id="female"> Female
                        </label>
                    </div>

                    <div class="col-sm-5"><!--col div start-->
                        <div class="form-group">
                            <label for="biography" class="font-weight-bol">Biography:</label>
                            <textarea class="form-control" rows="6" id="biography"></textarea>
                        </div>
                    </div>
                </div>


                    <div class="text-right">
                        <button type="submit" class="btn btn-primary btn ">Next&gt</button>
                    </div>
            </form>
        </div>
    </div>
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