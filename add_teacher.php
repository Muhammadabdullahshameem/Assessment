<?php include('../includes/db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Teacher</title>
</head>
<body>
    <h2>Add Teacher</h2>
    <form method="POST" action="add_teacher.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"><br>
        <label for="annual_salary">Annual Salary:</label>
        <input type="number" step="0.01" id="annual_salary" name="annual_salary"><br>
        <label for="background_check">Background Check:</label>
        <input type="checkbox" id="background_check" name="background_check" value="1"><br>
        <input type="submit" value="Add Teacher">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $annual_salary = $_POST['annual_salary'];
        $background_check = isset($_POST['background_check']) ? 1 : 0;

        $sql = "INSERT INTO Teachers (name, address, phone, annual_salary, background_check) VALUES ('$name', '$address', '$phone', $annual_salary, $background_check)";

        if ($conn->query($sql) === TRUE) {
            echo "New teacher created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

</body>
</html>
