<?php
    $servername = "localhost";
    $username = "root"; // root
    $password = ""; // ""
    $database="5INA";
    // create connections
    $conn = mysqli_connect($servername, $username, $password, $database);
    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connect successfully!";
?>
<?php
// select data
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        //output data of each row
        while($row = mysqli_fetch_assoc($result)){
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else{
        echo "0 results";
    }
?>
<?php
        //  select data - ver.2
        $sql = "SELECT id, firstname, lastname FROM MyGuests";
        $result = mysqli_query($conn, $sql);
    
    
        if (mysqli_num_rows($result) > 0){
            // output data of each row
            while($row = mysqli_fetch_row($result)){
                echo "id: ". $row[0]. " - Name: ". $row[1]. " ". $row[2]. "<br>";
            }
        } else {
            echo "0 results";
        }
?>
<?php
        // select data - generowanie tabeli
        $sql = "SELECT id, firstname, lastname FROM MyGuests";
        $result = mysqli_query($conn, $sql);
    
    
        if (mysqli_num_rows($result) >0){
            echo "<table>";
            while($row = mysqli_fetch_row($result)){
                echo "<tr><td>" . $row[0]. "</td><td>" . $row[1]. "</td><td>" . $row[2]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
?>        
<?php
/*$sql = "UPDATE MyGuests SET lastname='Sałaciak' WHERE id=2";
if (mysqli_query($conn, $sql)) {
    echo "Record updated succesfully";
} else {
    echo "Error updating record: " . mysqli.error($conn);
}*/
?>
