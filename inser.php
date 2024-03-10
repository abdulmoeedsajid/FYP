<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">

    <input type="text" placeholder="name" name="name">
    <input type="text" placeholder="email" name="email">
    <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

include "./Admin/practice.php";  // connection 

if (isset($_POST['submit'])) {
 
    // Variables       //Input fields name
    
    // $fullname = $_POST['name'];
    // $contact = $_POST['email'];

    $fullname = $_POST['name'];
    $contact = $_POST['email'];

    // $insert="INSERT INTO `insert table`(`id`, `first name`, `email`) VALUES ('','$fullname','$contact')";
    
 $insert = " INSERT INTO `insert table`(`id`, `first name`, `email`) VALUES
     ( ' ','$fullname','$contact')";

// connect query

$result = mysqli_query($conn, $insert);


// printing value

    if ($result) {
        echo "Data Add";
    }
    else {
      echo "not Add";
    }
}
?>