<?php
include "db.php";

// Insert student
if (isset($_POST['add'])) {
    $name = trim($_POST['name'] ?? "");
    $email = trim($_POST['email'] ?? "");
    $course = trim($_POST['course'] ?? "");

    if ($name != "" && $email != "" && $course != "") {
        $stmt = mysqli_prepare($conn, "INSERT INTO students (name, email, course) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $course);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}

// Delete student
if (isset($_GET['delete'])) {
    $delId = (int)$_GET['delete'];
    $stmt = mysqli_prepare($conn, "DELETE FROM students WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $delId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

$result = mysqli_query($conn, "SELECT * FROM students");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <script src="script.js"></script>
</head>
<body class="container py-4">
<h2 class="text-center mb-4">Student Registration</h2>

<div class="card p-3 mb-4">
  <form method="post" onsubmit="return validateForm()">
    <input id="name" name="name" class="form-control mb-2" placeholder="Name">
    <input id="email" name="email" class="form-control mb-2" placeholder="Email">
    <select id="course" name="course" class="form-select mb-3">
      <option value="">Select Course</option>
      <option>BCA</option>
      <option>BBA</option>
      <option>B.Com</option>
    </select>
    <button name="add" class="btn btn-primary">Add Student</button>
  </form>
</div>

<table class="table table-bordered">
  <tr><th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Action</th></tr>
  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><?= htmlspecialchars($row['name']) ?></td>
    <td><?= htmlspecialchars($row['email']) ?></td>
    <td><?= htmlspecialchars($row['course']) ?></td>
    <td>
      <a href="?delete=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirmDelete()">Delete</a>
    </td>
  </tr>
  <?php } ?>
</table>
</body>
</html>
