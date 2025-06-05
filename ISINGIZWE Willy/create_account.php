
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        /* Form container */
        form {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Form labels */
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #555;
            text-align: left;
        }

        /* Form inputs */
        input[type="text"], 
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
            color: #333;
        }

        /* Submit button */
        input[type="submit"] {
            width: 100%;
            background-color:rgb(0, 255, 191);
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
        }

        input[type="submit"]:hover {
            background-color:rgb(0, 179, 170);
        }

        /* Div with the login link */
        div {
            font-size: 14px;
            color: #555;
            margin-top: 10px;
        }

        div a {
            color:rgb(0, 255, 213);
            text-decoration: none;
            font-weight: bold;
        }

        div a:hover {
            color:rgb(0, 179, 164);
            text-decoration: underline;
        }

        /* Responsive adjustments */
        @media (max-width: 480px) {
            form {
                padding: 15px 20px;
            }
        }
    </style>
</head>
<body>

  <form action="insert_account.php" method="POST">
    <label for="username">User name</label><br><br>
    <input type="text" name="username" id="username" required><br><br>

    <label for="password">Password</label><br><br>
    <input type="password" name="password" id="password" required><br><br>

    <input type="submit" value="Create Account"><br><br>

    <div>Already have an account? Please <a href="index.php">Login here</a></div>
  </form>

</body>
</html>
