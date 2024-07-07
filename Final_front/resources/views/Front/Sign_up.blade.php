<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: var(--Gray-White, #fff);
        }

        :root {
            --Gray-White: #fff;
            --Gray-700: #4e5566;
            --Gray-900: #1d2026;
            --Gray-500: #8c94a3;
            --Primary-100: #ffeee8;
            --Primary-500: #ff6636;
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .logo img {
            max-width: 370px;
            height: auto;
        }

        .main-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 60px;
            width: 100%;
        }

        .content {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 40px;
            width: 100%;
        }

        .image-column {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }

        .image-column img {
            max-width: 100%;
            height: auto;
        }

        .form-column {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }

        .btn-submit {
            background-color: #FF6F47;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            width: 100%;
        }

        .social-signup {
            text-align: center;
            margin-top: 20px;
        }

        .social-signup p {
            margin-bottom: 10px;
        }

        .social-buttons button {
            margin: 5px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
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

        .text-muted {
            color: #888;
            font-size: 14px;
            text-align: center;
            margin-top: 20px;
        }

        .text-muted a {
            color: #FF6F47;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="logo">
        <a href="#">
            <img src="Image/Logo.png" alt="Educator Logo">
        </a>
    </div>

    <div class="main-container">
        <div class="content">
            <div class="image-column">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a24265f179fbf3887b71f7e001ef943c53a7a2e0c5c0360ab1aadacaa44be623?apiKey=3646c4864f9741b7a5dedf56dabaa45f&"
                    alt="Decoration image">
            </div>
            <div class="form-column">
                <div class="form-container">
                    <h1>Create Your Account</h1>
                    <form method="POST" action="/Sign_up">
                        @csrf
                        <div class="input-group">
                            <label for="full-name">Full Name</label>
                            <input type="text" id="username" placeholder="Enter your full name" required name="username">
                        </div>
                       
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" placeholder="Enter your email address" required name="email">
                        </div>
                         <div class="input-group">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" required>
                                <option value="" disabled selected>Choose Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="username">Phone Number</label>
                            <input type="text" id="phone_number" placeholder="Phone Number" required name="phone_number">
                        </div>
                        <div class="input-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" placeholder="Create a password" required name="password">
                        </div>
                        <!-- <div class="input-group">
                            <label for="confirm-password">Confirm Password</label>
                            <input type="password" id="confirm-password" placeholder="Confirm your password" required>
                        </div> -->
                        <button type="submit" class="btn-submit">Create Account</button>
                    </form>
                    <div class="social-signup">
                        <p>Or sign up with:</p>
                        <div class="social-buttons">
                            <button class="google">Google</button>
                            <button class="facebook">Facebook</button>
                            <button class="apple">Apple</button>
                        </div>
                    </div>
                    <p class="text-muted">Already have an account? <a href="#">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>