<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Library Management System</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale=1">
        <style type="text/css">
            nav{
                float: right;
                word-spacing: 30px;
                padding: 30px;
            }
            nav li{
                display: inline-block;
                line-height: 80px;
            }
            footer{
                height: 70px;
                width: 1364px;
                background-color: black;
                margin-top: -70px;
            }
            
        </style>
    </head>
    <body>
        <div class = "wrapper">
            <header>
                <div class="logo">
                    <img src="images/logo.jpg" height="100px" width="150px">
                    <h1 style="color: white;">LIBRARY MANAGEMENT SYSTEM</h1>
                </div>
                <?php
                    if($_SESSION['login_user']){
                    ?>
                         <nav>
                            <ul>
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="books.php">BOOKS</a></li>
                                <li><a href="logout.php">LOGOUT</a></li>
                                <li><a href="feedback.php">FEEDBACK</a></li>
                            </ul>
                        </nav>
                    <?php        
                    }else{
                    ?>
                        <nav>
                            <ul>
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="books.php">BOOKS</a></li>
                                <li><a href="login.php">LOGIN</a></li>
                                <li><a href="registration.php">REGISTER</a></li>
                                <li><a href="feedback.php">FEEDBACK</a></li>
                            </ul>
                        </nav>
                    <?php    
                    }
                ?>

                
            </header>
            <section>
                <div id="homeimg">
                    <br><br><br>
                    <div class="box1">
                        <br><br>
                        <h1 style="text-align: center; font-size:40px;"> Welcome!</h1><br><br>
                        <h1 style="text-align: center; font-size: 25px;"> "The only thing that you</h1><br>
                        <h1 style="text-align: center; font-size: 25px;"> absolutely have to know, is</h1><br>
                        <h1 style="text-align: center; font-size: 25px;"> the location of the library."</h1><br>
                        <h1 style="text-align: center; font-size: 15px;"> ~ ALBERT EINSTEIN ~</h1>
                    </div> 

                </div>
                
                
            </section>
            
        </div>
        <?php
            include "footer.php";
        ?>
    </body>
</html>