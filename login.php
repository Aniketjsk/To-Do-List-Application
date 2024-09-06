<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style type="text/css">
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex; /* Enables flexbox layout */
    justify-content: center; /* Centers horizontally */
    align-items: center; /* Centers vertically */
    height: 100vh; /* Ensures the body takes full height for vertical centering */
}

.container {
    text-align: center;
}

h1 {
    margin-bottom: 20px; /* Space between the heading and the form */
}

form {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin: 0 auto; /* Center the form horizontally */
}

/* Input fields */
input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

/* Buttons */
button {
    padding: 10px;
    width: 100%;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

/* Register button */
a button {
    background-color: #2196F3;
    margin-top: 10px;
}

a button:hover {
    background-color: #1976D2;
}

/* Form labels */
label {
    display: block;
    text-align: left;
    margin-bottom: 5px;
    color: #333;
}

a {
    text-decoration: none;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="auth.php" method="POST">
            <label>Username</label>
            <input type="text" name="username" placeholder="Username" required><br><br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <button type="submit" name="login">Login</button>
            <a href="register.php">
                <button type="button">Register</button>
            </a>
        </form>
    </div>
</body>
</html>
