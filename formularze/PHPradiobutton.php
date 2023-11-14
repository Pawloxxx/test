<?php
    $servername = "localhost";
    $username = "root"; // root
    $password = ""; // ""
    // create connections
    $conn = mysqli_connect($servername, $username, $password);
    $database="5ina";
    if(mysqli_select_db($conn, $database)) {
        echo "Database $database selected<br>";
    } else {
        echo "Error select database: <br>" . mysqli_error($conn);
    }
    $firstname= $_POST["firstname"];
    $lastname= $_POST["lastname"];
    $fav_language= $_POST["fav_language"];
    $sql = "INSERT INTO MyGuests (firstname, lastname, fav_language) VALUES ('$firstname', '$lastname', '$fav_language')";
    if (mysqli_query($conn, $sql)){
        echo "New record created successfully";
    } else{
        echo "Error" . $sql . "<br>" . mysqli_error($conn);
    }
?>
