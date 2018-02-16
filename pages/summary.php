<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Summary</title>
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
    <div class="container p-2">
        <div class="border p-3"><!--border padding div start-->
            <form action="#" method="POST">
                <div class="row"><!--row div start-->
                    <div class="col-sm-6"><!--col div start-->
                        <table class="table table-bordered">
                            <tr>
                                <td>Name: {{ @$_SESSION['member']->getFname() }} {{@lastName}}</td>
                            </tr>
                            <tr>
                                <td>Gender: {{ @$_SESSION['member']->getGender() }}</td>
                            </tr>
                            <tr>
                                <td>Age: {{ @$_SESSION['member']->getAge() }}</td>
                            </tr>
                            <tr>
                                <td>Phone: {{ @$_SESSION['member']->getPhone() }}</td>
                            </tr>
                            <tr>
                                <td>Email: {{ @$_SESSION['member']->getEmail() }}</td>
                            </tr>
                            <tr>
                                <td>State: {{ @$_SESSION['member']->getState() }}</td>
                            </tr>
                            <tr>
                                <td>Seeking: {{ @$_SESSION['member']->getSeeking() }}</td>
                            </tr>
                            <tr>
                                <td>Interests: <repeat group = "@$_SESSION['premiummember']->getInDoorInterests()" value="@indoor">{{@indoor}}</repeat>
                                    <repeat group = "@$_SESSION['premiummember']->getOutDoorInterests()" value="@outdoor">{{@outdoor}}</repeat></td>
                            </tr>

                        </table>
                    </div>

                    <div class="col-sm-6"><!--col div start-->
                        <figure class="figure">
                            <img src="/328/dating/images/Icon.jpg" class="figure-img img-fluid rounded" alt="picture">
                        </figure>
                        <div>
                            <h3>Biography</h3>
                            <p>{{@$_SESSION['member']->getBio()}}</p>
                        </div>


                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" value="Contact Me!" name="submit" class="btn btn-primary btn center">
                </div>
            </form>
        </div>
    </div>


</main>
<footer>
    <div class="container-fluid "><!--container fluid div start -->
        <div class="bg-danger text-light rounded m-2"><!--text,bg-rounded div start-->
            <h3 class="text-center font-italic">Live Love Life</h3>
        </div><!--text,bg-rounded div end-->
    </div><!--container fluid div end -->
</footer>

</body>
</html>