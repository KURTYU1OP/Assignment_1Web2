<?php
session_start(); 
include_once "db.php";
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="act3css.css">
    <title>Table</title>
</head>
<body>
<!--  Table -->
<table border=1>
        <tr>
            <th>Profile_ID</th>
            <th>User_ID</th>
            <th>Firstname</th>
            <th>LastName</th>
            <th>Posted-by</th>
            <th>Posted-date</th>
            <th>Modified-by</th>
            <th>Modified-date</th>
        </tr>
    <?php
    $query = "SELECT Profile_ID, User_ID, Firstname, LastName, PostedBy, 
    PostedDate, ModifiedBy, ModifiedDate FROM `profile`";
              
    $result = $conn->query($query);

    while($row = $result->fetch_assoc()) {
        $Profile_ID = $row['Profile_ID'];
        $User_ID = $row['User_ID'];
        $Firstname = $row['Firstname'];
        $LastName = $row['LastName'];
        $PostedBy = $row['PostedBy'];
        $PostedDate = $row['PostedDate'];
        $ModifiedBy = $row['ModifiedBy'];
        $ModifiedDate = $row['ModifiedDate'];

        echo "
        <tr>
            <td>$Profile_ID</td>
            <td>$User_ID</td>
            <td>$Firstname</td>
            <td>$LastName</td>
            <td>$PostedBy</td>
            <td>$PostedDate</td>
            <td>$ModifiedBy</td>
            <td>$ModifiedDate</td>
        </tr>";
    }
    ?>
    </table>
    
</body>
</html>