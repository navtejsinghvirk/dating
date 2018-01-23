<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Information</title>
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
             <h3 class="font-weight-bold">Personal Information</h3>
             <hr>
            <form action="http://nsinghvirk.greenriverdev.com/328/dating/pages/profile.php" method="post">
                <div class="row"><!--row div start-->
                    <div class="col-sm-8"><!--col div start-->

                <div class="form-group">
                   <label for="firstName" class="font-weight-bold">First Name</label>
                    <input type="text" class="form-control" id="firstName">
                </div>

                <div class="form-group">
                    <label for="lastName" class="font-weight-bold">Last Name</label>
                    <input type="text" class="form-control" id="lastName">
                </div>

                <div class="form-group">
                    <label for="age" class="font-weight-bold">Age</label>
                    <input type="text" class="form-control" id="age">
                </div>

                <div class="font-weight-bold">
                    <label >Gender</label>
                </div>
                    <label for ="male">
                    <input type="radio" class="radio-inline" id="male"> Male
                    </label>
                    <label for="female">
                    <input type="radio" class="radio-inline" id="female"> Female
                    </label>

                 <div class="form-group">
                     <label for="phone" class="font-weight-bold">Phone Number</label>
                     <input type="text" class="form-control" id="phone">
                 </div>
                </div>
                <div class="col-sm-4 p-4">
                  <div>
                    <p class="jumbotron p-2 rounded"> <span class="font-weight-bold">Note:
                        </span> All information entered is protected by our
                        <span class="text-primary" >privacy policy.</span>
                        Profile information can only be viewed
                        by others with your  permission
                    </p>
                   </div>
                 </div><!--col div end-->
             </div><!--row div end-->
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn ">Next&gt</button>
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