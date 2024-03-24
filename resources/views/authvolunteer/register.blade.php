
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
        <form action="{{route('userregister.store')}}" method="POST" class="login-form">
            @csrf
        
            <h1>User Register</h1>
            
            <div class="form-group">
                <input type="text" id="FullName" name="FullName" placeholder="FullName" required>
            </div>
            <div class="form-group">
                <input type="text" id="contact_no" name="phone" placeholder="contact_no_en" required>
            </div>
            <div class="form-group">
                <input type="text" id="EmailAddress" name="email" placeholder="EmailAddress" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="confirm password" required>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
            <div class="form-group">
                <p class="forgot-password"><a href="#">Forgot Password?</a></p>
            </div>
            <div class="form-group">
                <p class="register">Already have an account? <a href="{{route('userlogin')}}">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
