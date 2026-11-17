<?php
$conn = mysqli_connect("localhost", "root", "", "college") or die("Connection failed");

$id = $_POST['id'] ?? "";
$name = $_POST['name'] ?? "";
$course = $_POST['course'] ?? "";

// Insert
if (isset($_POST['insert'])) {
    if ($name != "" && $course != "") {
        $stmt = mysqli_prepare($conn, "INSERT INTO students (name, course) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $name, $course);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        echo "Record inserted successfully!<br>";
    } else {
        echo "Please enter name and course.<br>";
    }
}

// Update
if (isset($_POST['update'])) {
    if ($id != "" && $name != "" && $course != "") {
        $stmt = mysqli_prepare($conn, "UPDATE students SET name = ?, course = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "ssi", $name, $course, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        echo "Record updated successfully!<br>";
    } else {
        echo "Please enter ID, name and course to update.<br>";
    }
}

// Delete
if (isset($_POST['delete'])) {
    if ($id != "") {
        $stmt = mysqli_prepare($conn, "DELETE FROM students WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        echo "Record deleted successfully!<br>";
    } else {
        echo "Please enter ID to delete.<br>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student CRUD</title>
</head>
<body>
<h2>Student Management System</h2>
<form method="post">
  ID: <input type="number" name="id"><br><br>
  Name: <input type="text" name="name"><br><br>
  Course: <input type="text" name="course"><br><br>
  <input type="submit" name="insert" value="Insert">
  <input type="submit" name="update" value="Update">
  <input type="submit" name="delete" value="Delete">
</form>

<h3>Student Records</h3>
<table border="1" cellpadding="8">
  <tr><th>ID</th><th>Name</th><th>Course</th></tr>
  <?php
  $result = mysqli_query($conn, "SELECT * FROM students");
  while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . htmlspecialchars($row['name']) . "</td>";
      echo "<td>" . htmlspecialchars($row['course']) . "</td>";
      echo "</tr>";
  }
  mysqli_close($conn);
  ?>
</table>
</body>
</html>
