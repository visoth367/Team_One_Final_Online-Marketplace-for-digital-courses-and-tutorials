<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educator - Online Courses</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
   
</head>

<body>
    <header class="header">
    @include('layout.header')
    </header>

<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-text">
                    <h2>Filling up the spaces.</h2>
                    <p>Our mission is to help people find the best courses online and learn from experts anytime,
                        anywhere.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image">
                    <img src="https://blog.ipleaders.in/wp-content/uploads/2021/05/online-course-blog-header.jpg" alt="Online Course" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="categories">
    <div class="container">
        <section class="content-wrapper">
            <h1 class="title">Browse top category</h1>
            <section class="category-section">
                <div class="category-grid">
                    <div class="category-row">
                        <article class="category-column">
                            <div class="category-card">
                                <figure class="category-icon">
                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ee0c3beaf767986524d686128c4ad60478dd01891007408798a93262dddf1563?apiKey=3646c4864f9741b7a5dedf56dabaa45f&"
                                        alt="Business Icon">
                                </figure>
                                <div class="category-info">
                                    <h2 class="category-title">Business</h2>
                                    <p class="course-count">52,822 Courses</p>
                                </div>
                            </div>
                        </article>
                        <article class="category-column">
                            <div class="category-card" style="background-color: var(--Warning-100);">
                                <figure class="category-icon">
                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a954e0938c00efabffc30e085537a85775a91b062e9e5c293db71ea9dea4b20f?apiKey=3646c4864f9741b7a5dedf56dabaa45f&"
                                        alt="Finance & Accounting Icon">
                                </figure>
                                <div class="category-info">
                                    <h2 class="category-title">Finance & Accounting</h2>
                                    <p class="course-count">33,841 Courses</p>
                                </div>
                            </div>
                        </article>
                        <article class="category-column">
                            <div class="category-card" style="background-color: var(--Error-100);">
                                <figure class="category-icon">
                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/45bdab3d6eab207fa1b640efb476b3341129a152001b28c4e9c0fc04394fe7ea?apiKey=3646c4864f9741b7a5dedf56dabaa45f&"
                                        alt="IT & Software Icon">
                                </figure>
                                <div class="category-info">
                                    <h2 class="category-title">IT & Software</h2>
                                    <p class="course-count">22,649 Courses</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="category-row">
                        <article class="category-column">
                            <div class="category-card">
                                <figure class="category-icon">
                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f4bc5db757f667a0189602217073535c31e67b4b94f267076c0ed73552d4652b?apiKey=3646c4864f9741b7a5dedf56dabaa45f&"
                                        alt="Personal Development Icon">
                                </figure>
                                <div class="category-info">
                                    <h2 class="category-title">Personal Development</h2>
                                    <p class="course-count">20,126 Courses</p>
                                </div>
                            </div>
                        </article>
                        <article class="category-column">
                            <div class="category-card">
                                <figure class="category-icon">
                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6e332ed7561f7a2f86e792921b8136bebc24ba5d09c24cdd7853350f2404d554?apiKey=3646c4864f9741b7a5dedf56dabaa45f&"
                                        alt="Marketing Icon">
                                </figure>
                                <div class="category-info">
                                    <h2 class="category-title">Marketing</h2>
                                    <p class="course-count">12,068 Courses</p>
                                </div>
                            </div>
                        </article>
                        <article class="category-column">
                            <div class="category-card">
                                <figure class="category-icon">
                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1d0b946ceb7b143c76a328f3a2d3ecf790460feabf167837735d4e4b32330f80?apiKey=3646c4864f9741b7a5dedf56dabaa45f&"
                                        alt="Design Icon">
                                </figure>
                                <div class="category-info">
                                    <h2 class="category-title">Design</h2>
                                    <p class="course-count">2,600 Courses</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </section>
    </div>
    </section>

    <section class="best-selling">
        <div class="container">
            <h3>Best selling courses</h3>
            <div class="course-list">
                <div class="course-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfkYrjt4UtDTGloye6_T9-LTK6pR4YDze25A&s" alt="Course 1">
                    <h4>Marketing 101</h4>
                    <p>500+ Students</p>
                </div>
                <div class="course-item">
                    <img src="https://miro.medium.com/v2/resize:fit:1200/0*M4bxiCIjcTK-2Xr6.jpeg" alt="Course 2">
                    <h4>Web Development</h4>
                    <p>1200+ Students</p>
                </div>
                <div class="course-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/Leadership_skills_-_illustration.jpg" alt="Course 3">
                    <h4>Leadership Skills</h4>
                    <p>800+ Students</p>
                </div>
                <div class="course-item">
                    <img src="https://adventus.com/resources/ck/images/Blog/Whats-IT-Support.jpg" alt="Course 4">
                    <h4>IT Support</h4>
                    <p>950+ Students</p>
                </div>
            </div>
        </div>
    </section>

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
