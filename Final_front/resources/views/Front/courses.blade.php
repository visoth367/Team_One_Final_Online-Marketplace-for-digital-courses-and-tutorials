<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses Page</title>
    <link rel="stylesheet" href="{{ asset('css/courses.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <style>
        /* Custom styles for the More Detail button */
        .btn-more-detail {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #ff6600;
            /* Match your site's primary color */
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-more-detail:hover {
            background-color: #cc5200;
            /* Slightly darker shade for hover effect */
        }

        .course-item {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            transition: box-shadow 0.3s ease;
        }

        .course-item:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .course-item img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .course-title {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
        }

        .course-price {
            font-size: 16px;
            color: #ff6600;
            /* Match your site's primary color */
            margin: 5px 0;
        }

        .course-rating {
            font-size: 14px;
            color: #999;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
         @include('layout.header')
    </header>

    <!-- Courses Section -->
    <div class="courses-container">
        <h2 class="section-title">Our Courses</h2>

        <!-- Get the data from the database -->
        <div class="course-list">
            @foreach($courses as $course)
                <div class="course-item">
                    <a href="{{ route('video_content', $course->id) }}">
                        <img src="{{ $course->image_url }}" alt="{{ $course->title }}">
                    </a>
                    <h4 class="course-title">{{ $course->title }}</h4>
                    <p>{{ $course->thumbnail }}</p>
                    <div class="course-price">${{ $course->price }}</div>
                    <div class="course-rating">Rating: {{ $course->rating }}</div>
                    <!-- Add More Detail Button -->
                    <a href="{{ route('video_content', $course->id) }}" class="btn-more-detail">More Detail</a>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section footer-logo">
                <h1>Educator</h1>
                <p>Digital Success Starts Here</p>
            </div>
            <div class="footer-section footer-links">
                <h4>Top Categories</h4>
                <ul>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Development</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
            </div>
            <div class="footer-section footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>