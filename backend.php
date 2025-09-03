<?php
session_start();

// Connect to DB
$host = "localhost";
$database_username = "root";
$database_password = "";
$database_name = "university";

$conn = mysqli_connect($host, $database_username, $database_password, $database_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $form_type = $_POST['form_type'] ?? '';

    // =============================
    // ✅ LOGIN SECTION
    // =============================
    if ($form_type === 'login') {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $passwd = $_POST['passwd'];

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);

            if (password_verify($passwd, $user['password'])) {
                $_SESSION['username'] = $user['username'];
                $_SESSION['user_id'] = $user['user_id'];
                header("Location: dashboard.php");
                exit();
            } else {
                header("Location: login1.php?error=Incorrect password");
                exit();
            }
        } else {
            header("Location: login1.php?error=User not found");
            exit();
        }
    }

    // =============================
    // ✅ SIGN-UP SECTION
    // =============================
    else {
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT); // Secure hash

        $sql_query = "INSERT INTO users (user_id, first_name, email, phone_number, username, password)
                      VALUES ('$user_id', '$first_name', '$email', '$phone_number', '$username', '$passwd')";

        if (mysqli_query($conn, $sql_query)) {
            echo "<p style='color:green;'>Success! Your record has been saved.</p>";
            echo "<a href='index.php'>Sign Up Again</a> | <a href='login1.php'>Login Now</a>";
        } else {
            echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
        }
    }
}

mysqli_close($conn);
?>
