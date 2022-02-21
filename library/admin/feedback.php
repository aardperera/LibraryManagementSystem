<?php
    include "navbar.php";
    include "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Feedback</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">
            section{
                margin-top: -20px;
                background-image: url("images/feedback.jpg");
                height: 540px;
                background-size: 1364px 540px;
                background-repeat: no-repeat;
               
            }

            .box4{
                height: 540px;
                width: 700px;
                background-color: rgb(0, 0, 0);
                margin: 0px auto;
                opacity: 0.7;
                color: white;
                padding-right: 40px;
                padding: 20px;
            }
            .scroll{
                height: 200px;
                width: 100%;
                overflow: auto;
            }
        </style>
        
    </head>
    <body>
       
        <section>
            
            <div class="box4">
                <h2 style="text-align: center">How was your experience?</h2>
                    Please take a moment to leave a feedback!
                    If you have any suggessions or questions,<br> Comment below.<br><br>

                <form name="feedback" action="" method="post">
                    <input class="form-control" type="text" name="comments" placeholder="Write something..."><br>
                    <input class="btn btn-primary" type="submit" name="submit" value="Comment"><br>
                </form>
               <br>
                <div class="scroll">
                    <?php
                        if(isset($_POST['submit'])){
                            $sql = "INSERT INTO `comment`(`cmid`, `comments`) VALUES (null,'$_POST[comments]');";
                            if(mysqli_query($db,$sql)){
                                $q= "SELECT * FROM `comment` ORDER BY `comment`.`cmid` DESC;";
                                $res = mysqli_query($db,$q);

                                echo "<table class = 'table table-bordered'>";
                                while($row=mysqli_fetch_assoc($res)){
                                    echo "<tr>";
                                        echo "<td>"; echo $row['comments']; echo "</td>";
                                    echo "</tr>";
                                }
                            }
                        }
                        else{
                            $q= "SELECT * FROM `comment` ORDER BY `comment`.`cmid` DESC;";
                            $res = mysqli_query($db,$q);

                            echo "<table class = 'table table-bordered'>";
                            while($row=mysqli_fetch_assoc($res)){
                                echo "<tr>";
                                    echo "<td>"; echo $row['comments']; echo "</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </div>
            </div>    
           
        </section> 
    
        <footer>

        </footer>
    </body>
</html>


