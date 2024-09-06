<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Centers content vertically and horizontally */
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 2em; /* Adjust heading size */
            text-align: center; /* Center heading */
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        form input, form textarea {
            display: block;
            margin: 10px auto; /* Center inputs and textarea */
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #218838;
        }

        a {
            margin-right: 10px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .error {
            color: #f44336;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <?php if (isset($_GET['error']) && $_GET['error'] == 'username_exists'): ?>
            <p class="error">Username already exists. Please choose a different one.</p>
        <?php endif; ?>
        <form action="auth.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="register">Register</button>
        </form>
    </div>
</body>
</html>
