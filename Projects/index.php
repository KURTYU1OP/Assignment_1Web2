<?php
session_start(); 
include_once "db.php";
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: rgb(230, 225, 225);
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: white;
            text-align: left;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Table -->
    <table id="myTable" class="display">
        <thead>
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
        </thead>
        <tbody>
            <?php
            $query = "SELECT Profile_ID, User_ID, Firstname, LastName, PostedBy, 
                      PostedDate, ModifiedBy, ModifiedDate FROM `profile`";
                    
            $result = $conn->query($query);

            while($row = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>{$row['Profile_ID']}</td>
                    <td>{$row['User_ID']}</td>
                    <td>{$row['Firstname']}</td>
                    <td>{$row['LastName']}</td>
                    <td>{$row['PostedBy']}</td>
                    <td>{$row['PostedDate']}</td>
                    <td>{$row['ModifiedBy']}</td>
                    <td>{$row['ModifiedDate']}</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Button -->
    <a href="1index.html">
        <button>Go to Personal Details</button>
    </a>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "pageLength": 5,   
                "lengthMenu": [5, 10, 25, 50, 100]
            });
        });
    </script>
</body>
</html>
