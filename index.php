<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
        <style>
        body {
            font-family: "fontastique", sans-serif;
            background-image: url('bg/bg.gif');
            background-repeat: repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            scroll-behavior: smooth;
            backface-visibility: hidden;
            transform: translate3d(0, 0, 0);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        @font-face {
            font-family: 'fontastique';
            src: url('font/fontastique.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh; 
        
        }

        .login-container {
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            padding: 40px;
            max-width: 700px;
            text-align: center;
            background-color: 0.8);
            color: white;
            text-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff, 0 0 30px #00ffff;
        }

        .login-container h2 {
            margin-bottom: 10px;
            display: flex;
            font-size: 30px;
            justify-content: center;
            align-items: center;
        }

        .login-container h2 img {
            margin-right: 10px; 
            width: 90px;
            height: 90px; 
        }

        .login-container input[type="text"],
        input[type="password"] {
            width: 65%;
            padding: 6px;
            margin: 10px 0;
            border: 1px solid blue;
            border-radius: 3px;
            background-color: white;
            font-family: "fontastique", Monospace;
        }
        .login-container button {
            max-width: 300px;
            margin: 0 auto;
            padding: 10px 26px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.2);
            color: white;
            text-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff, 0 0 30px #00ffff;
            font-family: "fontastique", Monospace;
        }

        .login-container button:hover {
            background-color: blue;
            color: pink;
            max-width: 300px;
            margin: 0 auto;
        }
        label {
            display: block;
            text-align: left;
            margin-top: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h2>Sign In</h2>
            <form action="category.php" method="get">
                <input type="text" name="username" placeholder="Username" required>
                <input type="text" name="password" placeholder="Password" required>
                <div class="buttons">
                    <button type="submit">Login</button>
                    <button type="button" id="cancelButton">Cancel</button>
                </div>
                <label>
                    <input type="checkbox" name="rememberMe"> Remember Me
                </label>
            </form>
        </div>
    </div>
</body>
</html>
