<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PMHJ</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/931b85ca51.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstra qp@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: url('image/Background.png'); /* Ensure this image is available */
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .container {
      max-width: 420px;
      width: 50%;
      height: 540px;
      padding: 20px;
      box-shadow: -30px 5px 50px black;
      background-color: white;
    }

    .form-container {
      text-align: left;
      flex-direction: column;
      display: flex;
    }

    .heading {
      text-align: left;
      width: 100%;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: grey;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: calc(100% - 40px);
      padding: 10px;
      margin-bottom: 15px;
      border-top: none;
      border-right: none;
      border-left: none;
      border-bottom: solid #4CAF50;
      outline: none;
    }

    button {
      margin-top: 20px;
      font-size: 20px;
      padding: 12px 20px;
      background-color: #21917B;
      color: white;
      border: none;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      width: 100%;
      font-weight: bold;
    }

    button:hover {
      background-color: #45a049;
    }

    a {
      color: #21917B;
    }

    a.text-decoration-none {
      display: block;
      margin: 0 auto;
      text-align: center;
      color: #000;
      margin-top: 20px;
    }

    a.text-decoration-none:hover {
      color: #45a049;
    }

    p {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- Login Form -->
    <div id="loginForm" class="form-container">
      <div class="heading">
        <h2>Log In</h2>
      </div>
      <form id="loginFormElement">
        <label for="fullName">Username</label> <!-- Changed from "Email Address" to "Username" -->
        <input type="text" id="fullName" name="fullName" required>
        <label for="password">Password (min 8 characters)</label>
        <input type="password" id="password" name="password" required minlength="8">
        <a href="forgot_password.php" class="forgot-password">Forgot Password?</a>
        <button type="submit"><span>Continue</span> </button>
      </form>
      <p>or <a href="signup.php" id="signUpLink">Sign Up</a></p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Validation for Login Form
    document.getElementById('loginFormElement').addEventListener('submit', function (e) {
      e.preventDefault(); // Prevent default form submission

      const email = document.getElementById('fullName').value;
      const password = document.getElementById('password').value;

      if (!email || !password) {
        alert("Please fill in all fields.");
      } else if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
      } else {
        // Redirect to homepage upon successful login
        window.location.href = 'home_page.php';
      }
    });
  </script>
</body>

</html>