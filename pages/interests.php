<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Interests</title>
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
            <h3 class="font-weight-bold">Interests</h3>
            <hr>
            <form action="" method="post">
                <div class="row"><!--row div start-->
                    <div class="col-sm-12"><!--col div start-->
                        <div><label class="font-weight-bold">In-door interests<check if="{{@errors['indoor']}}">
                                    <span class="text-danger">  Please select indoor activities </span>
                            </check></label></div>
                        <div class="form-check form-check-inline col-sm-11 p-3">
                            <repeat group="{{ @indoors }}" value="{{ @indooroption }}">
                                <input type="checkbox" class="form-check-inputm-3" name="indoors[]"value="{{ @indooroption }}"
                                <repeat group="{{ @indoor }}" value="{{ @option }}">
                                <check if="{{ @indooroption == @option  }}">checked</check>
                                </repeat>>{{@indooroption}}
                            </>
                            </repeat>

                        </div>
                        <div><label class="font-weight-bold">Out-door interests <check if="{{@errors['outdoor']}}">
                                <span class="text-danger">Please select indoor activities</span>
                            </check></label></div>
                        <div class="form-check form-check-inline col-sm-11 p-3">
                            <repeat group="{{ @outdoors }}" value="{{ @outdooroptionout }}">
                                <input type="checkbox" class="form-check-inputm-3" name="outdoors[]"value="{{ @outdooroptionout }}"
                                <repeat group="{{ @outdoor }}" value="{{ @optionout }}">
                                    <check if="{{ @outdooroptionout == @optionout  }}">checked</check>
                                </repeat>>{{@outdooroptionout}}
                            </repeat>

                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <input type="submit" name="submit" class="btn btn-primary btn" value="Next &gt;">
                </div>

            </form>
        </div>
    </div>
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