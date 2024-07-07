<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Video</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front_sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uploadPage.css') }}">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            transition: margin-left 0.3s;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 40px 20px;
        }

        .sidebar-closed .main-content {
            margin-left: 78px;
        }

        .main-content {
            margin-left: 250px;
            transition: margin-left 0.3s;
        }

        .toggle-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: #ff6600;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            z-index: 100;
        }

        .toggle-btn:hover {
            background-color: #cc5200;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #ff6600;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #cc5200;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
            border-radius: 5px;
        }
    </style>
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
        <section class="container mt-5">
            <h2>Upload Video</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Short Description (Thumbnail):</label>
                    <textarea id="thumbnail" name="thumbnail" class="form-control" rows="3"
                        required>{{ old('thumbnail') }}</textarea>
                    @error('thumbnail')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea id="description" name="description" class="form-control" rows="3"
                        required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" id="price" name="price" class="form-control" value="{{ old('price') }}"
                        required>
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image:</label>
                    <input type="file" id="image" name="image" class="form-control" accept="image/*" required>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="video" class="form-label">Upload Video:</label>
                    <input type="file" id="video" name="video" class="form-control" accept="video/*" required>
                    @error('video')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create Course</button>
            </form>
        </section>
    </div>
    <footer>
        <!-- Your footer content here -->
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('closed');
            document.body.classList.toggle('sidebar-closed');
        });
    </script>
</body>

</html>