
<!-- Copyrights @ Happy Birthday Mehak, Akshat jain -->

<?php
$mesg = isset($_GET['msg']) ? $_GET['msg'] : "";

if($mesg === 'send')
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank You Very Much. Your message is successfully sent.')
    </SCRIPT>");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Say Thanks | A surprise for you!</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/cus.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>	

    
</head>

<body id="page-top" class="index">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">a surprise for you!</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="surprise.php">Surprise</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="thanks.php">Say Thanks!</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="head_thank">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Since it took lots of hardwork, you can </div>
                <div class="intro-heading">T . H . A . N . K . - . M . E</div>
                <a href="#q10" class="page-scroll btn btn-xl">say thanks!</a>
            </div>
        </div>
    </header>

    <section id="q10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Say Thanks</h2>
                    <h3 class="section-subheading text-muted">Write your comments about how you find your surprise.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" action = "getcontactdetails.php" method = "POST" onsubmit = "return valcontactform();">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" name = "message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" name="send" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer id="copy">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Happy Birthday Mehak 2015</span>
                </div>
                <div class="col-md-8">
                    <span class="copyright">Wish you a very HAPPY BIRTHDAY</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-1.11.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
	

</body>

</html>
