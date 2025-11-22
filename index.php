<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rica Mae Sorsona</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            font-family: Arial, sans-serif;
            background: url("background.jpg") no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 350px;
            padding: 30px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        h2 {
            color: white;
            margin-bottom: 20px;
        }

        input {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 6px;
            font-size: 15px;
        }

        input:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.7);
        }

        button {
            width: 95%;
            padding: 12px;
            margin-top: 10px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            background: #333;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: black;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <h2>Welcome!</h2>

        <form action="check.php" method="post">
            <input type="text" name="un" placeholder="Username" required>
            <input type="password" name="pw" placeholder="Password" required>
            <button type="submit">Log In</button>
        </form>
    </div>

</body>

</html>
