<?php include('db_conn.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Furkan Sayin">
    <title>Furkan</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
            <a class="navbar-brand" href="index.php"><i class="fa fa-anchor"></i> Furkan <i class="fa fa-ship"></i></a>
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
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <!-- <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=34.722341, -92.338817&amp;spn=34.722341, -92.338817&amp;t=m&amp;z=13&amp;output=embed"></iframe> -->
                <iframe width="100%" height="400px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.6309895799304!2d29.290855315693666!3d40.814102039299286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cadd97da05ec75%3A0x1edc00d68f9f5d80!2zxLBUw5wgVHV6bGEgS2FtcMO8c8O8!5e0!3m2!1sen!2sus!4v1511587591515" allowfullscreen></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    Furkan Sayın <br>Marine Engineering<br>
                </p>
                <p><i class="fa fa-envelope"></i> 
                    <abbr title="Email"></abbr>: <a href="mailto:sayinf@itu.edu.tr"> sayinf@itu.edu.tr</a>
                </p>
                
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=1017844776" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/frknsyn07" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://instagram.com/furkansayin" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/furkan-sayin-8977509a" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
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
                <p>Copyright <i class="fa fa-copyright "></i> <b>Furkan Sayin</b> 2017</p>

                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
