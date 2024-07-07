<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/sign_up.css') }}">
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('Image/Logo.png') }}" alt="Logo">
        </div>
        <div class="form-container">
            <h2>Create Admin Account</h2>
            <form action="{{ route('admin.register.post') }}" method="POST">
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
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>
</body>

</html>
