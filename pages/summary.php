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
<header class="container-fluid m-2">
    <nav class="navbar  bg-danger text-light">
        <h5 class="font-italic ">Sky Dating - Meet Love Of Your Life</h5>
        <ul class="navbar-nav "> <li class="nav-item"> <a class="nav-link text-light" href=" ./admin"><h5 >Admin</h5></a> </li> </ul>
    </nav>
</header>

<main>
    <div class="container p-2">
        <div class="border p-3"><!--border padding div start-->
            <form action="#" method="POST">
                <div class="row"><!--row div start-->
                    <div class="col-sm-6"><!--col div start-->
                        <table class="table table-bordered">
                            <tr>
                                <td>Name:
                                    <check if=" {{ @$_SESSION['member'] }}">
                                        <true>{{ @$_SESSION['member']->getFname() }}</true>
                                        <false>{{ @$_SESSION['premiummember']->getFname()}}</false>
                                    </check>

                                    <check if=" {{ @$_SESSION['member'] }}">
                                        <true>{{ @$_SESSION['member']->getLname() }}</true>
                                        <false>{{ @$_SESSION['premiummember']->getLname()}}</false>
                                    </check>
                                </td>
                            </tr>
                            <tr>
                                <td>Gender:
                                    <check if=" {{ @$_SESSION['member'] }}">
                                        <true>{{ @$_SESSION['member']->getGender() }}</true>
                                        <false>{{ @$_SESSION['premiummember']->getGender()}}</false>
                                    </check>
                                </td>
                            </tr>
                            <tr>
                                <td>Age:
                                    <check if=" {{ @$_SESSION['member'] }}">
                                        <true>{{ @$_SESSION['member']->getAge() }}</true>
                                        <false>{{ @$_SESSION['premiummember']->getAge()}}</false>
                                    </check>
                                </td>
                            </tr>
                            <tr>
                                <td>Phone: <check if=" {{ @$_SESSION['member'] }}">
                                        <true>{{ @$_SESSION['member']->getPhone() }}</true>
                                        <false>{{ @$_SESSION['premiummember']->getPhone()}}</false>
                                    </check>
                                </td>
                            </tr>
                            <tr>
                                <td>Email:<check if=" {{ @$_SESSION['member'] }}">
                                        <true>{{ @$_SESSION['member']->getEmail() }}</true>
                                        <false>{{ @$_SESSION['premiummember']->getEmail()}}</false>
                                    </check>
                                </td>
                            </tr>
                            <tr>
                                <td>State:<check if=" {{ @$_SESSION['member'] }}">
                                        <true>{{ @$_SESSION['member']->getState() }}</true>
                                        <false>{{ @$_SESSION['premiummember']->getState()}}</false>
                                    </check>
                                </td>
                            </tr>
                            <tr>
                                <td>Seeking:<check if=" {{ @$_SESSION['member'] }}">
                                        <true>{{ @$_SESSION['member']->getSeeking() }}</true>
                                        <false>{{ @$_SESSION['premiummember']->getSeeking()}}</false>
                                    </check>
                                </td>
                            </tr>
                            <tr>
                                <td><check if=" {{ !empty(@$_SESSION['premium']) }}">
                                        <true>Interests:
                                            <repeat group="@$_SESSION['premiummember']->getInDoorInterests()" value="@indoor">
                                                {{@indoor}}
                                            </repeat>
                                            <repeat group="@$_SESSION['premiummember']->getOutDoorInterests()" value="@outdoor">
                                                {{@outdoor}}
                                            </repeat>
                                        </true>
                                        <false>
                                            <h4 class="text-danger">Please Sign up for more Summary</h4>
                                        </false>
                                    </check>
                                </td>
                            </tr>

                        </table>
                    </div>

                    <div class="col-sm-6"><!--col div start-->
                        <figure class="figure">
                            <img src="/328/dating/images/Icon.jpg" class="figure-img img-fluid rounded" alt="picture">
                        </figure>
                        <div>
                            <h3>Biography</h3>
                            <p><check if=" {{ @$_SESSION['member'] }}">
                                    <true>{{ @$_SESSION['member']->getBio() }}</true>
                                    <false>{{ @$_SESSION['premiummember']->getBio()}}</false>
                                </check>
                            </p>
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