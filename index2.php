<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rental System</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style3.css">
    <script scr="js/js1.js"></script>
</head>

<body>

    <nav class="navbar" id="nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">Rental Project</a>
            <div class="d-flex" style="margin-left:auto;">
                <a>
                    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; font-size:1.5rem" class="btn btn-primary">Login</button> </a>

            </div>
        </div>
        </div>
    </nav>



    <div id="id01" class="modal">

        <form class="modal-content animate" action="auth.php" method="POST">
            <!--<div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    -->
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>

            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>

    </div>
    <?php

    ?>

    <div class="jumbotron">
        <h1 class="display-4">Welcome, Recruiters</h1>
        <p class="lead">Here you can explore this project by following below guidelines</p>
        <hr class="my-4">
        <p>Please Login with folowing credentials</p>
        <p>Username : Yashwanth</p>
        <p>Password : Yash</p>
        <!-- <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p> -->
    </div>
    <!-- <hr> -->
    <script src="js/script1.js"></script>

    </script>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <!-- <div id="feature" style="display:flex; width:100%;justify-content: space-around;">
    <div style="display:flex-item;" class="fi">
      <div class="ft">
        Virtual <br>Arduino
      </div>
    </div>
    <div style="display:flex-item;" class="fi">
      <div class="ft">
        <div class="display">
          <div class="display-txt">
            Welcome Recruiter!
          </div>
        </div>
      </div>
    </div>
  </div> -->
    <div class="jumbotron rfid-box">

        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3" style="color: black;">
                    <h1 class="rfid">Virtual RFid Scan</h1>
                    <p class="lead">Your Rfid is 1380472889723</p>
                    
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Scan Card</a>
                    </p>

                    <hr class="clearfix w-100 d-md-none pb-3">
                    <!-- <h5 class="text-uppercase font-weight-bold" style="color:black;">Virtual RFId scanner</h5> -->
                    <div>
                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-3" style="color: black;">

                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold">Display</h5>
                    <div class="display">
                        <div class="display-txt">
                            Welcome Recruiter!
                        </div>
                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
    </div>
    <!-- <div style="display:flex-item;" class="fi">
      <div class="ft">
        Clean and Robust ui
      </div>
    </div> -->

    <!-- Footer -->
    <footer class="page-footer font-small teal pt-4" style="
    background-color: #343a40;">

        <!-- Footer Text -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3" style="
    color: #f7f7f7;">

                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold" style="
    color: #f7f7f7;">About Project</h5>
                    <p>To design a rental system that charges automatically on tapping RFId tag on the sensor and a web interface for viewing user account details</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-3" style="
    color: #f7f7f7;">

                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold">About Us</h5>
                    <p>Web Dev:George Mullar Jampana<br>Hardware Design:Thati Yashwanth</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Text -->


    </footer>
    <!-- Footer -->
    </head>

</html>