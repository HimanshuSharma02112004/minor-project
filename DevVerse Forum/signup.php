<?php
$showalert = false;
$showerror = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
  include 'doucment/connect.php';
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpasssword = $_POST['cPassword'];
  $existsql = "SELECT * FROM `users` WHERE username = '$username' AND email='email'";
  $existresult = mysqli_query($conn , $existsql);
  $existnum = mysqli_num_rows($existresult);
  if($existnum > 0){
    $showerror = "Your username/email is a already exist please try other username/email";
    header("location: /mirror project/sipnup.php");
  }
  else{
        if($password == $cpasssword){
          $hash = password_hash($password , PASSWORD_DEFAULT);
    $sql = "INSERT INTO `users` (username , email , user_password) VALUES ('$username', '$email' , '$hash')";
    $result =  mysqli_query($conn , $sql);
    if($result){
       $showalert = true;
       header("location: /mirror project/login.php");
    }
  }
  else{
    $showerror = "ERROR! PASSWORD DO NOT MATCH";
  }
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
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

.signup-container {
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
  padding-right: 40px; /* Leave space so text doesn't overlap the icon */
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

.signup-btn {
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

.signup-btn:hover {
  background-color: #0056b3;
}

.alert{
      background-color: red;
    color:black;
}

  </style>
</head>
<body>

  
  <div class="signup-container">
    <h2>Create Account</h2>
    <form id="signupForm" action="/mirror project/signup.php" method="POST">
      
      <!-- Username Field -->
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter username" required  minlength="8" 
    maxlength="20" >
      </div>

      <!-- Email Field -->
      <div class="input-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="name@example.com" required  minlength="3" 
    maxlength="20" >
      </div>

      <!-- Password Field -->
      <div class="input-group">
        <label for="password">Password</label>
        <div class="password-wrapper">
          <input type="password" id="password" name="password" placeholder="Create password" required  minlength="8" 
    maxlength="8" >
          <span class="material-symbols-outlined toggle-password" data-target="password">visibility_off</span>
        </div>
      </div>

      <!-- Confirm Password Field -->
      <div class="input-group">
        <label for="confirmPassword">Confirm Password</label>
        <div class="password-wrapper">
          <input type="password" id="confirmPassword" name="cPassword" placeholder="Confirm your password" required  minlength="8" 
    maxlength="8" >
          <span class="material-symbols-outlined toggle-password" data-target="confirmPassword">visibility_off</span>
        </div>
      </div>
    

      <!-- Submit Button -->
      <button type="submit" class="signup-btn">Sign Up</button>
    </form>
  </div>

   <script>
    document.addEventListener('DOMContentLoaded', () => {
  const toggleIcons = document.querySelectorAll('.toggle-password');
  const signupForm = document.getElementById('signupForm');

  // Handle Eye Open/Close Toggling
  toggleIcons.forEach(icon => {
    icon.addEventListener('click', function() {
      // Find the specific input target mapped by the custom data-target attribute
      const targetId = this.getAttribute('data-target');
      const passwordInput = document.getElementById(targetId);

      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        this.textContent = 'visibility'; // Changes icon to an open eye
      } else {
        passwordInput.type = 'password';
        this.textContent = 'visibility_off'; // Changes icon back to a closed eye
      }
    });
  });

  // Basic Validation on Form Submit
  signupForm.addEventListener('submit', (e) => {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (password !== confirmPassword) {
      e.preventDefault(); // Stop form submission
      alert('Passwords do not match! Please verify your inputs.');
    } 
  });
});

   </script>
</body>
</html>
