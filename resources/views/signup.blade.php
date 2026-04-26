
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .signup-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
            width: 300px;
        }
        .signup-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .signup-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        .signup-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .signup-container button {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .signup-container button:hover {
            background: #45a049;
        }
        .message {
            text-align: center;
            color: blue;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <?php if (!empty($message)) echo "<p class='message'>$message</p>"; ?>
        <form method="post" action="signup.php">
            <label>Username:</label>
            <input type="text" name="username" required>
            
            <label>Email:</label>
            <input type="email" name="email" required>
            
            <label>Password:</label>
            <input type="password" name="password" required>
             <a class="btn btn-primary" button type="button" href="{{ route ('homepage')}}" role="button">Login</a>
           
        </form>
    </div>
</body>
</html>
