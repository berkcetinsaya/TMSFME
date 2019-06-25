<?php include('db_conn.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Task Management System For Marine Engineers">
    <meta name="author" content="Berk Cetinsaya">
    <title>TMSFME</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navigation -->
    <nav style="background-color:#800000;" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="fa fa-anchor"></i> TMSFME<i class="fa fa-ship"></i></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="operation.php"><i class="fa fa-cog"></i> Operation Task</a>
                    </li>
                    <li>
                        <a href="user.php"> <i class="fa fa-user"></i> Engineer List</a>
                    </li>
                    <li>
                        <a href="filter.php"><i class="fa fa-filter"></i> Filters</a>
                    </li>
                    <li>
                        <a href="contact.php"> <i class="fa fa-address-book"></i> Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-address-book "></i> Contact
                </h3>

            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-8">
                <iframe width="100%" height="400px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104936.13634147834!2d-92.40796714564189!3d34.723984857800104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d2a134a11f569b%3A0x3405f5100df35b17!2sLittle+Rock%2C+AR!5e0!3m2!1sen!2sus!4v1560796217654!5m2!1sen!2sus" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>Little Rock <br>Arkansas, United States<br></p>
                <p><i class="fa fa-envelope-o"></i><abbr title="Email">E</abbr>: <a style="color:#800000;" href="mailto:info@tmsfme.com">info@tmsfme.com</a></p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row text-center">
                <div class="col-lg-12">
                    <p>Copyright <i class="fa fa-copyright "></i> <b>Berk Cetinsaya</b> <?php echo date('Y');?></p>

                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>


</body>

</html>