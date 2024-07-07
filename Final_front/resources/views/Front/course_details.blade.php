<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course->title }} Details</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/front_sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/course_details.css') }}">
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
            <h2>{{ $course->title }}</h2>
            <div class="card">
                @if ($course->image_url)
                    <img src="{{ asset($course->image_url) }}" class="card-img-top img-fluid" alt="{{ $course->title }}">
                @else
                    <img src="https://via.placeholder.com/800x400.png?text=Course+Image" class="card-img-top img-fluid"
                        alt="Course Image">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $course->title }}</h5>
                    <p class="card-text">{{ $course->description }}</p>
                    <p class="card-text"><strong>Price:</strong> ${{ $course->price }}</p>
                    <p class="card-text"><strong>Rating:</strong> {{ $course->rating }}</p>
                    @if ($course->video_url)
                        <div class="video-container">
                            <video controls>
                                <source src="{{ asset($course->video_url) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif
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