<?php
session_start();
$message = "";

// Handle logout
if (isset($_POST['logout'])) {
    session_destroy();
    setcookie("username", "", time() - 3600, "/");
    $_SESSION = [];
    unset($_COOKIE['username']);
    $message = "Logged out successfully.";
}

// Handle login
if (isset($_POST['login'])) {
    $user = $_POST['username'] ?? "";
    $pass = $_POST['password'] ?? "";

    if (empty($user) || empty($pass)) {
        $message = "Please enter username and password.";
    } elseif ($user == "student" && $pass == "1234") {
        $_SESSION['username'] = $user;
        setcookie("username", $user, time() + 3600, "/");
        $message = "Login successful! Welcome $user";
    } else {
        $message = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Simple Login</title>
</head>
<body>
<h2>Student Login</h2>

<?php if (!isset($_SESSION['username'])): ?>
<form method="post">
  Username: <input type="text" name="username"><br><br>
  Password: <input type="password" name="password"><br><br>
  <input type="submit" name="login" value="Login">
</form>
<?php else: ?>
<form method="post">
  <input type="submit" name="logout" value="Logout">
</form>
<?php endif; ?>

<p><?php echo $message; ?></p>

<?php
if (isset($_SESSION['username'])) {
    echo "Session Username: " . htmlspecialchars($_SESSION['username']) . "<br>";
}
if (isset($_COOKIE['username'])) {
    echo "Cookie Username: " . htmlspecialchars($_COOKIE['username']);
}
?>
</body>
</html>
