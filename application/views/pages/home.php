<?php
/**
 * Created by PhpStorm.
 * User: papaa_mukuru
 * Date: 24/12/2017
 * Time: 17:15
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mkawa-Home</title>
    <link rel="icon" type="image/ico" href="<?php echo base_url()?>/images/mkawa2.png"/>


    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/overwrite.css">
    <link href="<?php echo base_url()?>css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" />

</head>
<style>
    .box1 {
        margin: 0 30px 20px 30px;
        background: whitesmoke;
        border: 1px solid #D5D8DC;
        height: inherit;
        padding: 10px;
        font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
    }
    .box2 {
        margin: 30px;
        background: white;
        border: 0 solid #848484;
        padding: 10px;
        -moz-box-shadow: 3px 3px 5px 6px #848484;
        -webkit-box-shadow: 3px 3px 5px 6px #848484;
        box-shadow: 1px 5px 5px 4px #ccc;
    }
    .box3 {
        margin: 0 30px;
        background: white;
        border: 0 solid #848484;
        padding: 10px;
        -moz-box-shadow: 3px 3px 5px 6px #848484;
        -webkit-box-shadow: 3px 3px 5px 6px #848484;
        box-shadow: 1px 5px 5px 4px #ccc;
    }
    .paragraph{
        margin-left: 30px;
        line-height: 30px;
    }
    .head{
        color: black;
        font-size: medium;
        text-align: center;
        padding: 10px;
        background-color: whitesmoke;
        border-radius: 0;
    }
    .head2{
        color: white;
        font-size: x-large;
        text-align: center;
        padding: 10px;
        background-color: cornflowerblue;
        text-shadow: 2px 2px 4px #000000;
        margin-top: 10px;
        border-radius: 8px;
    }
    .catalog{
        width: 100px;
        height: 100px;
        margin: 5px;
        border: 1px inherit solid;
        border-radius:
    }
    .fafb{
        color: darkblue;
        font-size: 30px;
    }
    .fatwt{
        color: cornflowerblue;
        font-size: 30px;
    }
    .faggl{
        color: firebrick;
        font-size: 30px;
    }
    .falin{
        color: royalblue;
        font-size: 30px;
    }
    .facal{
        color: #3c763d;
        font-size: 20px;
    }
    .navbar{
        background-color: #5bbbff;
    }
    .slid{
        width: 100%;
        height: 100%;
        margin-top: 20px;
    }
    .title{
        color: #223389;
        text-shadow: 1px 3px 2px #848484;
        font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
    }
    .trusted{
        width: 70px;
        height: 40px;
    }
    
    @media screen and (max-width: 600px) {
        .title {
            color: #223389;
            font-size: smaller;
            text-shadow: 1px 1px 2px #848484;
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
            margin: 10px;
        }
        .box1 {
            margin: 10px 0 10px 0;
            background: whitesmoke;
            border: 0 solid #848484;
            height: inherit;
            padding: 10px;
            font-size: smaller;
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
        }
        .box2 {
            margin: 10px 5px;
            background: white;
            border: 0 solid #848484;
            padding: 10px;
            -moz-box-shadow: 3px 3px 5px 6px #848484;
            -webkit-box-shadow: 3px 3px 5px 6px #848484;
            box-shadow: 1px 5px 5px 4px #ccc;
        }
        .box3 {
            margin: 10px 0 10px 0;
            background: whitesmoke;
            border: 0 solid #848484;
            height: inherit;
            padding: 10px;
            font-size: small;
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
        }
        .head2{
            color: white;
            font-size: small;
            text-align: center;
            padding: 5px;
            background-color: #0e3833;
            text-shadow: 2px 2px 4px #000000;
            margin-top: 10px;
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
        }
        .head{
            color: black;
            font-size: large;
            text-align: center;
            padding: 5px;
            background-color: #ffe032;
        }
        .trusted{
            width: 50px;
            height: 30px;
        }
        .fafb{
            color: darkblue;
            font-size: 15px;
        }
        .fatwt{
            color: cornflowerblue;
            font-size: 15px;
        }
        .faggl{
            color: firebrick;
            font-size: 15px;
        }
        .falin{
            color: royalblue;
            font-size: 15px;
        }
        .facal{
            color: #3c763d;
            font-size: 20px;
        }
    }
</style>
<body>
<header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>index.php/pages/home">
                    <h3> mkawa.host</h3>
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url()?>index.php/pages/home">Home</a></li>
                    <li><a href="<?php echo base_url()?>index.php/pages/about"><button class="btn btn-success">Login</button></a></li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->
</header>
<!--/header-->
<br>
<br>
<br>

<div class="container" style="margin-top: 30px">
<div class="col-sm-10" style="margin-left: 120px">
    <div class="col-sm-2">
        <img src="<?php echo base_url()?>images/mkawa2.png" width="60%" height="30"  alt="First Slide">
    </div>
    <div class="col-sm-9">
        <div class="form-group input-group">
            <input type="text" class="form-control" placeholder="Enterprise name" name="name" id="name">
            <span class="input-group-addon"><a class="#" href="#"><i class="fa fa-search"></i></a></span>
        </div>
    </div>
</div>
</div>
<div class="container" style="margin-top: ">
    <div class="row box2" style="background-color: white; margin-top: 10px" >
        <div class="col-md-8">
            <div class="row box1" style="background-color: whitesmoke">
                <h3 style="text-align: center">Mkawa programing community is where you can meet number of competent programmers</h3>
            </div>
            <div class="#">
                <p class="paragraph">
                    Get quick technical assistance concerning to programming knowledge from several number of competent programmers registered in mkawa coding communit.
                    Ask a question to wait for the reponse from a programmer capable to solve your issue.
                </p>
                <p class="paragraph">
                    Also you can register to the system and adding your coding capabilities so that hiring institution can pass through your profile and it can be a
                    one of the chance to get projects.
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box1">
                <h3 class="head2">Create account for free</h3>
                <form action="" method="post" role="form" class="contactForm" name="register_form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="username" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="password" data-rule="minlen:4" data-msg="Please enter at least 8 chars of password" />
                        <div class="validation"></div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-xs" style="float: ">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h3 style="text-align: center; font-size: medium">Popular matters</h3>
    <div class="row box3" style="background-color: white">
        <div class="col-md-3">
            <h3 class="head"><img src="<?php echo base_url()?>images/php2.png" width="10%" height="25"  alt="First Slide"> Php</h3>
            <div class="">
                <div class="#">
                <ul>
                    <li><a href="#">Configuring Codeigniter framework on linux</a></li>
                    <li><a href="#">php login script</a></li>
                    <li><a href="#">PHP file download using Codeigniter framework</a></li>
                    <li><a href="#">Codeigniter image upload</a></li>
                </ul>
                </div>

            </div>
        </div>
        <div class="col-md-3">
            <h3 class="head"><i class="fa fa-android" style="color: green"></i> Android</h3>
            <div class="">
                <ul>
                    <li><a href="#">Android call logs</a></li>
                    <li><a href="#">Configuring login script</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <h3 class="head"> <img src="<?php echo base_url()?>images/java.png" width="10%" height="25"  alt="First Slide"> Java</h3>
            <div class="">
                <ul>
                    <li><a href="#">installing jdk on linux</a></li>
                    <li><a href="#">Configuring login script</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <h3 class="head"><img src="<?php echo base_url()?>images/python.png" width="10%" height="25"  alt="First Slide"> Python</h3>
            <div class="">
                <ul>
                    <li><a href="#">Installing Python in linux</a></li>
                    <li><a href="#">Configuring Django framework in linux</a></li>
                    <li><a href="#">Django login script</a></li>
                </ul>
            </div>
    </div>
</div>
</body>

<footer style="background-color: #848484; margin-top: 30px">
    <div class="social-icon">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <ul class="social-network">
                    <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center">
        <div class="copyright">
            &copy; mkawa coding community. All Rights Reserved.
            <div class="credits">
                Designed<a target="_blank" href="https://mkawa.host"> by mkawa.host</a>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url()?>js/jquery-2.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>js/parallax.min.js"></script>
<script src="<?php echo base_url()?>js/wow.min.js"></script>
<script src="<?php echo base_url()?>js/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/fliplightbox.min.js"></script>
<script src="<?php echo base_url()?>js/functions.js"></script>
<script src="<?php echo base_url()?>contactform/contactform.js"></script>

</html>

