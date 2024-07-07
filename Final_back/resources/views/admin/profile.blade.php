<!doctype html>
<html lang="en">

<head>
    <title>Admin Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/topbar.css') }}">
    <style>
        .custom-table {
            width: 100%;
            border-collapse: collapse;
        }

        .custom-table tr:nth-child(odd) {
            background-color: white;
        }

        .custom-table tr:nth-child(even) {
            background-color: lightgray;
        }

        .custom-table td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <main>
        <header>
        </header>
        <aside>
            @include('admin.sidebar')
        </aside>

        <section class="home-section">
            <div class="container">
                <h3>{{ $admin->username }}</h3>
                <div class="container-item">
                    <div class="profile-image">
                        <img src="{{ $admin->profile_image ? asset('storage/' . $admin->profile_image) : 'default-image-url' }}"
                            alt="Profile Image" id="profileImage" class="img-fluid">
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $admin->name }}</h5>
                            
                            <table class="table custom-table">
                                <tr>
                                    <td><p class="card-text">Username:</p></td>
                                    <td><span id="username">{{ $admin->name }}</span></td>
                                </tr>
                                <tr>
                                    <td><p class="card-text">Email:</p></td>
                                    <td><span id="email">{{ $admin->email }}</span></td>
                                </tr>
                                <!-- <tr>
                                    <td><p class="card-text">Gender:</p></td>
                                    <td><span id="gender">{{ $admin->gender }}</span></td>
                                </tr> -->
                                <!-- <tr>
                                    <td><p class="card-text">Phone Number:</p></td>
                                    <td><span id="phone_number">{{ $admin->phone_number }}</span></td>
                                </tr> -->
                            </table>
                            
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

</body>

</html>
