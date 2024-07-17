<?php include('../includes/db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Class</title>
</head>
<body>
    <h2>Add Class</h2>
    <form method="POST" action="add_class.php">
        <label for="class_name">Class Name:</label>
        <input type="text" id="class_name" name="class_name" required><br>
        <label for="capacity">Capacity:</label>
        <input type="number" id="capacity" name="capacity" required><br>
        <label for="teacher_id">Teacher ID:</label>
        <input type="number" id="teacher_id" name="teacher_id"><br>
        <input type="submit" value="Add Class">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $class_name = $_POST['class_name'];
        $capacity = $_POST['capacity'];
        $teacher_id = $_POST['teacher_id'];

        $sql = "INSERT INTO Classes (class_name, capacity, teacher_id) VALUES ('$class_name', $capacity, $teacher_id)";

        if ($conn->query($sql) === TRUE) {
            echo "New class created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

</body>
</html>
