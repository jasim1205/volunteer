
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('public/auth/style.css') }}">
</head>
<body>
    <div class="login-container">
        <form action="{{route('login.check')}}" method="POST" class="login-form">
            @csrf
        {{--  <form class="login-form" action="#" method="post">  --}}
            <h1>Admin Login</h1>
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <div class="form-group">
                <p class="forgot-password"><a href="#">Forgot Password?</a></p>
            </div>
            <div class="form-group">
                <p class="register">Don't have an account? <a href="{{route('register')}}">Register here</a></p>
            </div>
        </form>
    </div>
</body>
</html>
