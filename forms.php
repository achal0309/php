<?php 
session_start();
echo $_SESSION['id'];
die();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style>
            .style_doc
            {
                padding: 10px 0;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
            }
        </style>
        <title>SIGN UP</title>
        <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav>
            <div class="navbar navbar-inverse navbar-fixed-top">   
             <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>  
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                <a href="index_1.html" class="navbar-brand">LifeStyle Store</a>
              </div>    
                <div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="Sign_Up.html">Sign Up</a></li>
                        <li><a href="Login_Page.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
                    </ul>
                    </div>
                </div>    
              </div>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-xs-3"></div>
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        <div style="padding-left:65px" class="panel-heading">
                            <h3>USERS PAGE</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="form_user_data.php">
                                <div style="padding-left:50px" class="col-xs-10">
                                    <div class="form-group">
                                    <input type="text" placeholder="Email" class="form-control" name="email">
                                    </div>
                                     <div class="form-group">
                                    <input type="text" placeholder="FIRST_NAME" class="form-control" name="first_name">
                                    </div>
                                     <div class="form-group">
                                    <input type="text" placeholder="LAST_NAME" class="form-control" name="last_name">
                                    </div>
                                     <div class="form-group">
                                    <input type="text" placeholder="PHONE" class="form-control" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" value="registration_submit">Submit</button>
                                    </div>
                                </div>    
                            </form>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <footer>
            <div class="container-fluid style_doc">
                    <center>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center>
            </div>
        </footer>
    </body>
</html>


