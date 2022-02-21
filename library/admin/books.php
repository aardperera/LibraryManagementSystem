<?php
    include "connection.php";
    include "navbar.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Books</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale=1">
 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <style type="text/css">
        section{
            margin-top: -20px;
            background-image: url("images/books.jpg");
            height: 540px;
            background-size: 1364px 540px;
            background-repeat: no-repeat;
            /*opacity: 0.7;*/
               
        }
        .srch{
            padding-left: 1060px;
        }

    </style>
    </head>
    <body>
        <div class="srch">
            <form class="navbar-form" method="post" name="form1">
                    <input class="form-control" type="text" name="search" placeholder="Search books.." required="">
                    <button type="submit" name="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
            </form>
        </div>
        <section>
            <br>
           <h2>List of Books</h2>
                <?php
                    if(isset($_POST['submit'])){
                        $q = mysqli_query($db, "SELECT * FROM `book` WHERE `name` like '%$_POST[search]%'");

                        if(mysqli_num_rows($q)==0){

                            echo "Sorry! No book found. Try Searching again. ";
                        
                        }else{
                            
                            echo "<table class = 'table table-bordered table-hover'>";
                            echo "<tr style = 'background-color: #6db6b9e6;'>";
                                echo "<th>"; echo "Book-Id"; echo "</th>";
                                echo "<th>"; echo "Name"; echo "</th>";
                                echo "<th>"; echo "Author's-Name"; echo "</th>";
                                echo "<th>"; echo "Edition"; echo "</th>";
                                echo "<th>"; echo "Status"; echo "</th>";
                                echo "<th>"; echo "Quantity"; echo "</th>";
                                echo "<th>"; echo "Department"; echo "</th>";
                            echo "</tr>";

                            while($row=mysqli_fetch_assoc($q)){
                                echo "<tr>";
                                    echo "<td>"; echo $row['bookId']; echo "</td>";
                                    echo "<td>"; echo $row['name']; echo "</td>";
                                    echo "<td>"; echo $row['author']; echo "</td>";
                                    echo "<td>"; echo $row['edition']; echo "</td>";
                                    echo "<td>"; echo $row['status']; echo "</td>";
                                    echo "<td>"; echo $row['quantity']; echo "</td>";
                                    echo "<td>"; echo $row['department']; echo "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";        
                        }
                    }else{
                        $res= mysqli_query($db,"SELECT * FROM `book` ORDER BY `book`.`name` ASC;");

                        echo "<table class = 'table table-bordered table-hover'>";
                            echo "<tr style = 'background-color: #6db6b9e6;'>";
                                echo "<th>"; echo "Book-Id"; echo "</th>";
                                echo "<th>"; echo "Name"; echo "</th>";
                                echo "<th>"; echo "Author's-Name"; echo "</th>";
                                echo "<th>"; echo "Edition"; echo "</th>";
                                echo "<th>"; echo "Status"; echo "</th>";
                                echo "<th>"; echo "Quantity"; echo "</th>";
                                echo "<th>"; echo "Department"; echo "</th>";
                            echo "</tr>";
    
                            while($row=mysqli_fetch_assoc($res)){
                                echo "<tr>";
                                    echo "<td>"; echo $row['bookId']; echo "</td>";
                                    echo "<td>"; echo $row['name']; echo "</td>";
                                    echo "<td>"; echo $row['author']; echo "</td>";
                                    echo "<td>"; echo $row['edition']; echo "</td>";
                                    echo "<td>"; echo $row['status']; echo "</td>";
                                    echo "<td>"; echo $row['quantity']; echo "</td>";
                                    echo "<td>"; echo $row['department']; echo "</td>";
                                echo "</tr>";
                            }
                        echo "</table>";
                    }

                    
                ?>
                </section>
 <footer>

 </footer>
    </body>
</html>