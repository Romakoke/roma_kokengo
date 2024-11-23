<?php
session_start();
include 'connect.php'; // Подключение к базе данных
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url('bg.jpg');
    background-size: cover;
    background-position: center;
}

.login-form {
    background: rgba(64, 64, 64, 0.15);
    border: 3px solid rgba(255, 255, 255, 0.3);
    padding: 30px;
    border-radius: 16px;
    backdrop-filter: blur(25px);
    text-align: center;
    color: white;
    width: 400px;
    box-shadow: 0px 0px 20px 10px rgba(0, 0, 0, 0.15);
}

.login-title {
    font-size: 40px;
    margin-bottom: 40px;
}

.input-box {
    margin: 20px 0;
    position: relative;
}

.input-box input {
    width: 100%;
    background: rgba(255, 255, 255, 0.1);
    border: none;
    padding: 12px 12px 12px 45px;
    border-radius: 99px;
    outline: 3px solid transparent;
    transition: 0.3s;
    font-size: 17px;
    color: white;
    font-weight: 600;
}

.input-box input::placeholder {
    color: rgba(255, 255, 255, 0.8);
    font-size: 17px;
    font-weight: 500;
}

.input-box input:focus {
    outline: 3px solid rgba(255, 255, 255, 0.3);
}

.input-box i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
    color: rgba(255, 255, 255, 0.8);
}

.remember-forgot-box {
    display: flex;
    justify-content: space-between;
    margin: 20px 0;
    font-size: 15px;
}

.remember-forgot-box label {
    display: flex;
    gap: 8px;
    cursor: pointer;
}

.remember-forgot-box input {
    accent-color: white;
    cursor: pointer;
}

.remember-forgot-box a {
    color: white;
    text-decoration: none;
}

.remember-forgot-box a:hover {
    text-decoration: underline;
}

.login-btn {
    width: 100%;
    padding: 10px 0;
    background: #2F9CF4;
    border: none;
    border-radius: 99px;
    color: white;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.login-btn:hover {
    background: #0B87EC;
}

.register {
    margin-top: 15px;
    font-size: 15px;
}

.register a {
    color: white;
    text-decoration: none;
    font-weight: 500;
}

.register a:hover {
    text-decoration: underline;
}

.register-form {
    display: none;
}
header .logo img {
    width: 40px;
    height: 40px;
    vertical-align: middle;
  }

  header .logo a {
    color: #fff;
    font-size: 1.5em;
    font-weight: bold;
    text-decoration: none;
    margin-left: 10px;
  }
  header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
  }

  header .logo img {
    width: 60px;
    height: 60px;
    vertical-align: middle;
  }

  header .logo a {
    color: #fff;
    font-size: 1.5em;
    font-weight: bold;
    text-decoration: none;
    margin-left: 10px;
  }
  </style>
</head>
<body>
    <!-- Форма регистрации -->
    <div class="container" id="signup" style="display:none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="">
            <div class="input-group">
               <i class="fas fa-user"></i>
               <input type="text" name="fName" id="fName" placeholder="First Name" required>
               <label for="fname">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>
        <p class="or">----------or--------</p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have Account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <!-- Форма авторизации -->
    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">----------or--------</p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>

    <script>
        const signUpButton = document.getElementById("signUpButton");
        const signInButton = document.getElementById("signInButton");
        const signupForm = document.getElementById("signup");
        const signInForm = document.getElementById("signIn");

        // Переключение между формами
        signUpButton.addEventListener("click", () => {
            signupForm.style.display = "block";
            signInForm.style.display = "none";
        });

        signInButton.addEventListener("click", () => {
            signupForm.style.display = "none";
            signInForm.style.display = "block";
        });
    </script>
</body>
</html>

<?php
// Регистрация
if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Хэширование пароля

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "<script>alert('Email Address Already Exists!');</script>";
    } else {
        $insertQuery = "INSERT INTO users (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "<script>alert('Registration Successful!');</script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

// Авторизация
if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        header("Location: homepage.php");
        exit();
    } else {
        echo "<script>alert('Incorrect Email or Password');</script>";
    }
}
?>
