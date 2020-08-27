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
        <title>LOGIN PAGE</title>
        <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="">
                                <div class="col-xs-10">
                                    <div class="form-group">
                                    <p class="text-warning">Login to make purchase</p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.+]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Password" class="form-control" name="password" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn-primary">Submit</button>
                                    </div>
                                </div>    
                            </form>
                            </div> 
                        <div class="panel-footer">
                            <h6>Don't have an account?<a href="Sign_Up.html"> Register</a></h6>
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
            <div class="container style_doc">
                    <center>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center>
            </div>
        </footer>
    </body>
</html>
