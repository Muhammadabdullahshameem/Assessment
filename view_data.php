<?php include('../includes/db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>View Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>View Classes</h2>
    <?php
    $result = $conn->query("SELECT * FROM Classes");
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Capacity</th><th>Teacher ID</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["class_id"]. "</td><td>" . $row["class_name"]. "</td><td>" . $row["capacity"]. "</td><td>" . $row["teacher_id"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>

    <h2>View Pupils</h2>
    <?php
    $result = $conn->query("SELECT * FROM Pupils");
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Medical Info</th><th>Class ID</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["pupil_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["address"]. "</td><td>" . $row["medical_info"]. "</td><td>" . $row["class_id"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>

    <h2>View Teachers</h2>
    <?php
    $result = $conn->query("SELECT * FROM Teachers");
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Phone</th><th>Annual Salary</th><th>Background Check</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["teacher_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["address"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["annual_salary"]. "</td><td>" . ($row["background_check"] ? "Yes" : "No") . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>

</body>
</html>

