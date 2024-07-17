<?php include('../includes/db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Pupil</title>
</head>
<body>
    <h2>Add Pupil</h2>
    <form method="POST" action="add_pupil.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br>
        <label for="medical_info">Medical Info:</label>
        <textarea id="medical_info" name="medical_info"></textarea><br>
        <label for="class_id">Class ID:</label>
        <input type="number" id="class_id" name="class_id"><br>
        <input type="submit" value="Add Pupil">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $medical_info = $_POST['medical_info'];
        $class_id = $_POST['class_id'];

        $sql = "INSERT INTO Pupils (name, address, medical_info, class_id) VALUES ('$name', '$address', '$medical_info', $class_id)";

        if ($conn->query($sql) === TRUE) {
            echo "New pupil created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

</body>
</html>
