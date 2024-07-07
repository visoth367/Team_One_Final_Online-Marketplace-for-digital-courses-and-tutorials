<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign In</title>
    <link rel="stylesheet" href="{{ asset('css/sign_in.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/45ddbdd71608dfc34bc26d5eba2f07cafa28a191ddce8b419bdafb5f7b932c2c?apiKey=3646c4864f9741b7a5dedf56dabaa45f&" alt="Illustration" class="illustration">
        </div>
        <div class="right-side">
            <div class="header">
                <img src="{{ asset('Image/Logo.png') }}" alt="Logo">
            </div>
            <div class="form-container">
                <h2>Admin Sign in</h2>
                <form action="{{ route('admin.login.post') }}" method="POST">
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
