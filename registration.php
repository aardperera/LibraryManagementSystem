<?php
    include "connection.php";
    include "navbar.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale=1">
 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <style type="text/css">
        section{
            margin-top: -20px;
        }
        .box3{
            height: 500px;
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
   
        </header> -->
        <section>
            <div id="regimg">
               <br>
                <div class="box3"><br>
                    <p style="text-align: center; font-size: 25px;">SIGN UP</p>
                    <form name="registration" action=" " method="post">
                        <div class="reg">
                            <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
                            <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
                            <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
                            <input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
                            <input class="form-control" type="text" name="indexno" placeholder="Index No" required=""> <br>
                            <input class="form-control" type="text" name="email" placeholder="Email" required=""> <br>
                            <input class="form-control" type="text" name="telno" placeholder="Tel No" required=""> <br>
                            <input class="btn btn-primary" type="submit" name="submit" value="Sign Up">
                        </div>
                    </form>
                   
                </div>
            </div>

        </section>

        <?php
        
            if(isset($_POST['submit'])){

                $count = 0;
                $sql = "SELECT username FROM student";
                $res = mysqli_query($db,$sql);

                while($row = mysqli_fetch_assoc($res)){
                    if($row['username']==$_POST['username']){
                        $count = $count + 1;
                    }
                }
                if($count==0){
                    mysqli_query($db, "INSERT INTO `STUDENT` VALUES('$_POST[first]', '$_POST[last]','$_POST[username]','$_POST[password]','$_POST[indexno]','$_POST[email]','$_POST[telno]');");
                    ?>
                        <script type="text/javascript">
                            alert("Registration successful!");
                        </script>
                    <?php
                }else{
                    ?>
                        <script type="text/javascript">
                            alert("The username is already exist.");
                        </script>
                    <?php
                }
            }    
        ?>
        <footer>

        </footer>
    </body>
</html>