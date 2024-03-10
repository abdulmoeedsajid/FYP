<?php
$server = "localhost";
$username = "root"; // Change this if your MySQL username is different
$password = "";     // Change this if your MySQL password is different
$database = "fleet track"; // Replace with your actual database name

// Create connection
$conn =  mysqli_connect($server, $username, $password, $database);

if($conn){

    ?>

    <script>
        alert('Connection successful.');
    </script>
   <?php
}
else
{
    
    ?>

    <script>
        alert('Connection not successful.');
    </script>
   <?php
}

?>
