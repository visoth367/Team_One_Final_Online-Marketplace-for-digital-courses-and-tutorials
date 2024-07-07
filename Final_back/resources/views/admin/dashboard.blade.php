<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/topbar.css') }}">
</head>

<body>
    <main>
        <header>
            @include('admin.topbar')
        </header>
        <aside class="custom-sidebar">
            @include('admin.sidebar')
        </aside>
        <section class="home-section">
            <div class="container">
                <div class="dashboard">
                    <div class="purching">
                        <div class="card">
                            <h3>Today Purchasing</h3>
                            <p class="large-number">4001</p>
                        </div>
                        <div class="card">
                            <h3>Total Purchasing</h3>
                            <p class="large-number">10015</p>
                        </div>
                    </div>
                    <div class="top-right">  
                        <div class="card revenue">
                            <h3>Revenue</h3>
                            <canvas id="revenueChart"></canvas>
                        </div>
                        <div class="card profile-view">
                            <h3>Profile View</h3>
                            <canvas id="profileViewChart"></canvas>
                            <p class="earnings">$7,443 USD Dollar you earned.</p>
                        </div>
                    </div>   
                    <div class="bot">
                        <div class="rating">
                            <h3>Overall Course Rating</h3>
                            <p class="rating-number">4.6</p>
                            <div class="stars"></div>
                            <canvas id="ratingChart"></canvas>
                        </div>
                        <div class="course-overview">
                            <h3>Course Overview</h3>
                            <canvas id="courseOverviewChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
