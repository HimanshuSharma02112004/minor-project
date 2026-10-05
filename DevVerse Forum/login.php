<?php
 $showalert = false;
 if($_SERVER['REQUEST_METHOD'] == "POST"){
    include 'doucment/connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE username='$username'";
    $result = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($result);
    if($num == 1 ){
        while($row = mysqli_fetch_assoc($result)){
            if(password_verify($password , $row['user_password'])){
                $showalert = true;
                session_start();
                $_SESSION['loggedin'] = true;
                 $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $username;
                header("location: /mirror project/index.php");
                exit;
            }
        }
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Google Material Icons for Eye Toggle -->
  <link rel="stylesheet" href="https://googleapis.com" />
  <style>
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
  background-color: #f0f2f5;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.login-container {
  background-color: #ffffff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
}

h2 {
  text-align: center;
  margin-bottom: 24px;
  color: #333333;
}

.input-group {
  margin-bottom: 20px;
}

.input-group label {
  display: block;
  margin-bottom: 6px;
  font-size: 14px;
  color: #666666;
  font-weight: 600;
}

.input-group input {
  width: 100%;
  padding: 10px 12px;
  border: 1px solid #cccccc;
  border-radius: 4px;
  font-size: 15px;
  outline: none;
  transition: border-color 0.2s;
}

.input-group input:focus {
  border-color: #007bff;
}

/* Eye icon container setup */
.password-wrapper {
  position: relative;
  display: flex;
  align-items: center;
}

.password-wrapper input {
  padding-right: 40px; /* Leaves space so text doesn't overlap the icon */
}

.toggle-password {
  position: absolute;
  right: 12px;
  cursor: pointer;
  color: #777777;
  user-select: none;
}

.toggle-password:hover {
  color: #333333;
}

.login-btn {
  width: 100%;
  padding: 12px;
  background-color: #007bff;
  color: #ffffff;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.2s;
}

.login-btn:hover {
  background-color: #0056b3;
}

  </style>
</head>
<body>

  <div class="login-container">
    <h2>Welcome Back</h2>
    <form id="loginForm" action="/mirror project/login.php" method="POST">
      
      <!-- Username Field -->
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter username" required  minlength="8" 
    maxlength="20" >
      </div>

      <!-- Password Field -->
      <div class="input-group">
        <label for="password">Password</label>
        <div class="password-wrapper">
          <input type="password" id="password" name="password" placeholder="Enter password" required  minlength="8" 
    maxlength="8" >
          <span class="material-symbols-outlined toggle-password">visibility_off</span>
        </div>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="login-btn">Log In</button>
    </form>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
  const togglePassword = document.querySelector('.toggle-password');
  const passwordInput = document.getElementById('password');
  const loginForm = document.getElementById('loginForm');

  // Handle Eye Open/Close Toggling
  togglePassword.addEventListener('click', function() {
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      this.textContent = 'visibility'; // Changes icon to an open eye
    } else {
      passwordInput.type = 'password';
      this.textContent = 'visibility_off'; // Changes icon back to a closed eye
    }
  });

 
  </script>
</body>
</html>
