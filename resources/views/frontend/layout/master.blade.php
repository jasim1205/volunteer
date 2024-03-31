<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Forum</title>
    <link rel="stylesheet" href="{{ asset('public/frontend/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Header with navigation -->
    <header>
        <h1>Volunteer Forum</h1>
        <nav>
            <ul class="fw-bold">
                <li><a href="{{ route('frontend-home') }}">Home</a></li>
                <li><a href="{{ route('frontend-blog') }}">Blog</a></li>
                <li><a href="{{ route('frontend-event') }}">Events</a></li>
                <li><a href="{{ route('frontend-organization') }}">Organizations</a></li>
                {{-- <li><a href="news.html">Reviews</a></li>
                <li><a href="profile.html">Profile</a></li> --}}
                <li><a href="{{ route('userlogin') }}">Login</a></li> <!-- Added login link -->
            </ul>
        </nav>
    </header>

    <!-- Main content -->
    <div class="container">
        @yield('content')
    </div>
    
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
