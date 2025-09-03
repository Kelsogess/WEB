<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>University Portal</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="signin.css">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="col-12 col-sm-10 col-md-8 col-lg-6">

    <form method="POST" action="backend.php">
      <h1 class="text-center mb-4">Student Sign Up</h1>

      <label>User ID:</label>
      <input type="text" name="user_id" class="form-control mb-3" required>

      <label>First Name:</label>
      <input type="text" name="first_name" class="form-control mb-3" required>

      <label>Email:</label>
      <input type="email" name="email" class="form-control mb-3" required>

      <label>Phone Number:</label>
      <input type="text" name="phone_number" class="form-control mb-3" required>

      <label>Username:</label>
      <input type="text" name="username" class="form-control mb-3" required>

      <label>Enter a Password:</label>
      <input type="password" name="passwd" class="form-control mb-4" required>

      <button type="submit" name="peana" class="btn btn-success w-100 mb-3">SUBMIT</button>

      <p class="text-center">
        Already have an account?
        <a href="login1.php">Login here</a>
      </p>
    </form>

  </div>
</div>

</body>
</html>