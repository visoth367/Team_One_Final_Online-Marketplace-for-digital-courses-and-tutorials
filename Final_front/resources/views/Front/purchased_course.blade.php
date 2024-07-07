<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchased Courses</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/front_sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/purchased_course.css') }}" rel="stylesheet">
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
            <h2>Purchased Courses</h2>
            <div class="row">
                @foreach ($purchasedCourses as $purchasedCourse)
                    <div class="col-md-4 mb-4">
                        <div class="card course-card">
                            <div class="row g-0">
                                <div class="col-4">
                                    @if ($purchasedCourse->course->image_url)
                                        <img src="{{ asset($purchasedCourse->course->image_url) }}"
                                            alt="{{ $purchasedCourse->course->title }}" class="img-fluid rounded-start">
                                    @else
                                        <img src="https://via.placeholder.com/150" alt="Placeholder Image"
                                            class="img-fluid rounded-start">
                                    @endif
                                </div>
                                <div class="col-8">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">{{ $purchasedCourse->course->title }}</h5>
                                        <p class="card-text mb-2"><strong>Price:</strong>
                                            ${{ $purchasedCourse->course->price }}</p>
                                        <p class="card-text mb-2"><strong>Rating:</strong>
                                            {{ $purchasedCourse->course->rating }}</p>
                                        <a href="{{ route('courses.show', $purchasedCourse->course->id) }}"
                                            class="btn btn-primary mt-auto">View Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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