<?php
    include "connection.php";
    include "navbar.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Books</title>
    </head>
    <body>
        <h2>List of Books</h2>
        <?php
            $res= mysqli_query($db,"SELECT * FROM `book`;");

            echo "<table class = 'table table-bordered table-hover'>";
            echo "<tr style = 'background-color'>";
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
                    echo "<td>"; echo "Book-Id"; echo "</td>";
                    echo "<td>"; echo "Name"; echo "</td>";
                    echo "<td>"; echo "Author's-Name"; echo "</td>";
                    echo "<td>"; echo "Edition"; echo "</td>";
                    echo "<td>"; echo "Status"; echo "</td>";
                    echo "<td>"; echo "Quantity"; echo "</td>";
                    echo "<td>"; echo "Department"; echo "</td>";
            echo "</tr>";
            }
        ?>
    </body>
</html>