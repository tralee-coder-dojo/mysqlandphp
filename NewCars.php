<html>
<head>

<style>
body {
    background-color: linen;
}

h1 {
    color: maroon;
    margin-left: 40px;
} 
table, th, td {
   border: 1px solid black; padding:5px;
}

</style>


</head>
<body>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "garage");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM cars";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table >";
            echo "<tr>";
                echo "<th>Pric</th>";
                echo "<th>Name</th>";
                echo "<th>Year</th>";
                echo "<th>Pic</th>";
				echo "<th>Desc</th>";
            echo "</tr>   \r\n";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['year_'] . "</td>";
                echo "<td><img src=\"./images/" . $row['img'] . "\" /> </td>";
				echo "<td>" . $row['desc_'] . "</td>";
            echo "</tr> \r\n";

        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

</body>
</html>