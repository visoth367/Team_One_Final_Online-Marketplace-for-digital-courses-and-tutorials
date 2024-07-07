<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course->title }} - Course Detail</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/front_sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/video_content.css') }}">
</head>

<body>
    <button class="toggle-btn" id="sidebarToggle"><i class='bx bx-menu'></i></button>
    <aside class="sidebar" id="sidebar">
        <div class="logo-details">
            <div class="logo_name">Educator</div>
        </div>
        <ul class="nav-list">
            <li>
                <a href="/home">
                    <i class='bx bx-home'></i>
                    <span class="links_name">Home</span>
                </a>
            </li>
            <li>
                <a href="/contact-us">
                    <i class='bx bx-envelope'></i>
                    <span class="links_name">Contact Us</span>
                </a>
            </li>
            <li>
                <a href="/profile">
                    <i class='bx bx-user'></i>
                    <span class="links_name">User</span>
                </a>
            </li>
            <li>
                <a href="/about-us">
                    <i class='bx bx-book-content'></i>
                    <span class="links_name">Content</span>
                </a>
            </li>
            <li>
                <a href="/video">
                    <i class='bx bx-video'></i>
                    <span class="links_name">Upload Video</span>
                </a>
            </li>
            <li>
                <a href="/purchased-courses">
                    <i class='bx bx-purchase-tag'></i>
                    <span class="links_name">Purchased Video</span>
                </a>
            </li>
            <li class="profile">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn">
                        <i class='bx bx-log-out' id="log_out"></i>
                        <span class="links_name">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </aside>
    <div class="main-content">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="video-container">
                        <video controls>
                            <source src="{{ asset($course->video_url) }}" type="video/mp4">
                            
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-info">
                        <h1>{{ $course->title }}</h1>
                        <p>{{ $course->description }}</p>
                        <div class="price-rating">
                            <div><strong>Price:</strong> ${{ $course->price }}</div>
                            <div><strong>Rating:</strong> {{ $course->rating }}</div>
                        </div>
                        @if(Auth::check())
                            <form action="{{ route('courses.buy', ['id' => $course->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Purchase Course</button>
                            </form>
                        @else
                            <p>Please <a href="{{ route('login') }}">login</a> to purchase this course.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('closed');
            document.body.classList.toggle('sidebar-closed');
        });
    </script>
</body>

</html>
