<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="{{ asset('css/sign_in.css') }}">
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            width: 80%;
            max-width: 1200px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .left-side {
            width: 50%;
            background-color: #e8f4ff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .right-side {
            width: 50%;
            padding: 40px;
            box-sizing: border-box;
        }

        .illustration {
            max-width: 100%;
            height: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            margin: 0;
        }

        .create-account {
            color: #ff5a5f;
            text-decoration: none;
            font-weight: bold;
        }

        .form-container {
            margin-top: 20px;
        }

        .form-container h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .remember-me input {
            margin-right: 10px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #ff5a5f;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .social-signin {
            text-align: center;
            margin-top: 20px;
        }

        .social-signin p {
            margin-bottom: 10px;
        }

        .social-buttons button {
            margin: 5px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button.google {
            background-color: #db4437;
            color: #fff;
        }

        button.facebook {
            background-color: #3b5998;
            color: #fff;
        }

        button.apple {
            background-color: #000000;
            color: #fff;
        }
    </style> -->
</head>

<body>
    <div class="container">
        <div class="left-side">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/45ddbdd71608dfc34bc26d5eba2f07cafa28a191ddce8b419bdafb5f7b932c2c?apiKey=3646c4864f9741b7a5dedf56dabaa45f&" alt="Illustration" class="illustration">
        </div>
        <div class="right-side">
            <div class="header">
                <img src="{{ asset('Image/Logo.png') }}" alt="Logo">
                <!-- <a href="http://127.0.0.1:8000/Sign_up" class="create-account">Create Account</a> -->
            </div>
            <div class="form-container">
                <h2>Sign in to your account</h2>
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="error">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    <div class="remember-me">
                        <input type="checkbox" id="remember-me" name="remember">
                        <label for="remember-me">Remember me</label>
                    </div>
                    
                    <button type="submit">Sign In</button>
                </form>
                <div class="social-signin">
                    <label for="remember-me">Don't have Account <a href="http://127.0.0.1:8000/Sign_up" class="create-account">Create Account</a></label>
                    <p>Or sign in with:</p>
                    <div class="social-buttons">
                        <button class="google">Google</button>
                        <button class="facebook">Facebook</button>
                        <button class="apple">Apple</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>