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
    <style>
            body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: rgb(230, 225, 225);
            }

            h1 {
            text-align: center;
            margin-bottom: 40px;
            }

            .container {
            background-color: rgb(255, 255, 255);
            display: flex;
            align-items: flex-start;
            border-radius: 25px;
            padding: 20px;
            }

            .profile-pic {
            width: 300px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            
            }

            .info {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            margin-left: 10px;
            }

            .name {
            font-size: 1.8em;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
            border-bottom: 2px solid #3498db;
            }

            .details {
            display: grid;
            grid-template-columns: repeat(3, auto);
            gap: 8px 20px;
            }
        </style>
</head>
<body>
 <h1>My Personal Details</h1>
        <div class="container">
            <img src ="images/profilePic.jpg" alt="ID Picture" class="profile-pic">

            <div class="info">
                <div class="name">Kurt Ian D. Adriano</div>
                <div class="details">
                    <p><strong>Gender:</strong> Male</p>
                    <p><strong>Age:</strong> 20</p>
                    <p><strong>Birthday:</strong> 06/29/2005</p>
                    <p><strong>Address:</strong> Calumpit, Bulacan</p>
                    <p><strong>Email:</strong> adrianokurtiandencing@gmail.com</p>
                    <p><strong>University:</strong> Bulacan State University</p>
                    <p><strong>College:</strong> CICT</p>
                    <p><strong>Program:</strong> Bachelor of Science in Information Technology</p>
                    <p><strong>Curriculum :</strong> BSIT - WMAD 2024</p>
                    <p><strong>Major:</strong> WMAD</p>
                    <p><strong>Year Level:</strong> 3rd Year</p>
                    <p><strong>Section:</strong> BSIT 3H-G2 (WMAD)</p>
                </div>
            </div>
        </div>
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