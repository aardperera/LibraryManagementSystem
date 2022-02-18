<?php
    include "connection.php";
    include "navbar.php";
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="login.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style type="text/css">
            section{
                margin-top: -20px;
            }
            footer{
                height: 70px;
                width: 1364px;
                background-color: black;
            }
        </style>
    </head>
    <body>
        <!--
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand active">LIBRARY MANAGEMENT SYSTEM</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="books.php">BOOKS</a></li>
                    <li><a href="feedback.php">FEEDBACK</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                    <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
                </ul>
            </div>
        </nav>
        -->            
        <section>
            <div id="loginimg">
                <br><br><br><br>
                <div class="box2"><br>
                    <h1 style="text-align: center; font-size: 25px;">Login</h1><br>
                    <form name="login" action=" " method="post">
                        <div class="login">
                            <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
                            <input class="form-control"type="password" name="password" placeholder="Password" required=""><br>
                            <input class="btn btn-primary" type="submit" name="submit" value="Login">   
                       </div>
                        <p id="login">
                            <br><br>
                            <a style="color: white;" href="">Forgot Password?</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                            Don't have an account? &nbsp;<a style="color: white;" href="registration.php">SIGN UP</a>

                        </p>
                    </form>
                </div>
            </div>

        </section>

        <?php
            if(isset($_POST['submit'])){
                $count = 0;
                $res = mysqli_query($db,"SELECT * FROM student WHERE username='$_POST[username]' && password='$_POST[password]';");
                $count = mysqli_num_rows($res);

                if($count == 0){
                    ?>
                        <script type="text/javascript">
                            alert("The username and password do not match.");
                        </script>
                    <?php
                }else{
                    $_SESSION['login_user'] = $_POST['username'];
                     
                    ?>
                        <script type="text/javascript">
                            window.location = "index.php";
                        </script>
                    <?php

                }
            }

        ?>



        <footer>

        </footer>
    </body>
</html>