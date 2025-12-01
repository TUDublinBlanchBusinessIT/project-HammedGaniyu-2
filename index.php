<?php include 'db.php'; ?>
<!doctype html>
<html>
<head><title>Add Student</title></head>
<body>
<h2>Add Student (V1)</h2>
<form method="post">
  Name: <input name="name" required><br>
  Email: <input name="email" type="email" required><br>
  DOB: <input name="dob" type="date" required><br>
  Course: <input name="course" required><br>
  <button type="submit" name="submit">Add</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $stmt = $conn->prepare("INSERT INTO students (name,email,dob,course) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $_POST['name'], $_POST['email'], $_POST['dob'], $_POST['course']);
    if ($stmt->execute()) {
        echo "<p>Student added.</p>";
    } else {
        echo "<p>Error: " . htmlspecialchars($stmt->error) . "</p>";
    }
    $stmt->close();
}
?>
</body>
</html>
