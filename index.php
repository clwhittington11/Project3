<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--     Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My CSS -->
    <style>
        * {
            font-family: serif;
            font: Georgia;
        }

        .hero {
            background-color: #789986;
            text-align: center;
            /*            margin-bottom: 10px;*/
            padding: 20px;
        }

        .btn {
            background-color: #776A61;
            border: #776A61;
        }

        .btn:hover {
            background-color: #789986;
            border: #789986;
        }

        .container {
            background-color: #789986;
            width: 100%;
            padding: none;
            margin: none;

        }
		.container.bgnone {
            background-color: transparent;


        }

        #carousel {
            /*margin-bottom: 10px;*/
/*            background-color: #789986;*/
        }

        .card {
            background-color: #789986;
            text-align: center;
            font-size: 30px;
            border: none;
            border-radius: 0px;
        }

        .card2 {
            background-color: #0000;
            border-radius: 0px;
            text-align: center;
        }

        .card-title2 {
            text-align: center;
        }

        #myBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: floralwhite;
            color: black;
            cursor: grab;
            padding: 10px;
            border-radius: 10px;
            font: Georgia;
            font-size: 14px;
        }

        #myBtn:hover {
            background-color: #776A61;
            color: white;
        }

    </style>

    <title>Brooklyn Heights Pilates</title>

</head>

<body>

    <!-- Navbar-->
 <?php require_once('nav.php'); ?>

    <!--    Jumbotron-->
    <div class="hero">
        <h1 class="display-4">Brooklyn Heights Pilates</h1>
        <p class="lead">Brooklyn Heights Pilates invites everyone to reap the benefits of the work created by Joseph Pilates in a peaceful and inviting studio where you will learn all the mechanics of pilates.</p>
        <p>Brooklyn Heights Pilates offers Pilates reformer classes, Pilates mat classes, as well as private and duet instruction.</p>
        <p>The Pilates workouts will dramatically change your body awareness, posture, alignment, flexibility, strength, and muscle tone. Our instructors are classically certified, highly educated and each brings his or her own unique perspective to the method.</p>
        <a class="btn btn-primary btn-md" href="#" role="button">Book a class</a>

        <!-- Modal 1-->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#exampleModalCenter">
            Black Friday Special
        </button>

        <!-- Modal 1-->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalCenterTitle">Buy one class, get one free!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Buy Classes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2-->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#ModalCenter">
            New Unlimited Class Package
        </button>

        <!-- Modal 2-->
        <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title2" id="ModalCenterTitle2">New unlimited class package for $299! Includes all classes and semi-privates. Monthly unlimited expires one month after purchase. Cancellation policy applies.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Buy Package</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    Carousel-->
    <div class="container bgnone">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/matpilates.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/girlonreformer2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/girlonreformer.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!--    Card-->
    <div class="card" style="width: 100%";>
        <div class="card-body">
            <h5 class="card-title">We offer private and duet hands-on instruction.
                <a href="#" class="btn btn-primary">Book now</a></h5>
            <div class="img"><img src="assets/img/pilatesinstructor.jpg" class="img-fluid" alt="Responsive image" align="center" width="700px"></div>
        </div>
    </div>

    <!--    Scroll up button-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top of page</button>

    <!--    Contact Card-->
    <div class="card2" style="width: 100%" ;>
        <div class="card-body">
            <h4 class="card-title">Please note we have a strict 12 hour cancellation policy for all classes and 24 hour cancellation policy for all private sessions.</h4>
            <p class="card-title2">Get in touch with us at <a href=email>hello@brooklynheightspilates.com</a> or 347-889-6424.</p>
            <p class="card-title2">We're located at <a href="https://goo.gl/maps/wWaQ9fNAfdwAs3Xw9" target="_blank">158 Montague Street, Fourth Floor, Brooklyn, New York.</a></p>
            <p class="card-title2">© Brooklyn Heights Pilates 2019. All Rights Reserved.</p>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--    Javascrip for myBtn-->
    <script>
        mybutton = document.getElementById("myBtn");
        mybutton.style.display = "none";

        window.onscroll = function() {
            scrollFunction()
            console.log(document.body.scrollTop, document.documentElement.scrollTop);
        };

        function scrollFunction() {
            if (document.body.scrollTop > 900 || document.documentElement.scrollTop > 900) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

    </script>
</body>

</html>

