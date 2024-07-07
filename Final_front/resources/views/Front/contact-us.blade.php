<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/contact-us.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">

</head>

<body>

<header class="header">
    @include('layout.header')
</header>

    <main class="container">
        <section class="connect-section">
            <div class="text">
                <h2>Connect with us</h2>
                <p>Want to chat? We’d love to hear from you! Get in touch with our Customer Success Team to inquire
                    about speaking events, advertising rates, or just say hello.</p>
                
            </div>
            <img src="https://community.thriveglobal.com/wp-content/uploads/2017/12/shutterstock_143568622-1024x683.jpg" alt="Person on phone">
        </section>

        <section class="contact-details">
            <div>
                <h3>Address</h3>
                <p>1900 Olympic Boulevard Suite 100, Santa Monica, CA 90404</p>
            </div>
            <div>
                <h3>Phone</h3>
                <p>(818) 555-0123</p>
            </div>
            <div>
                <h3>Email</h3>
                <p>help.wegrow@gmail.com</p>
                <p>contact.wegrow@gmail.com</p>
            </div>
        </section>

        <section class="contact-form">
            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <h3>Get in touch</h3>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
                
                <label for="phone_number">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" required>
                
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        </section>

        <section class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0196066438214!2d-118.49230568468117!3d34.01524768061762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bb397f1d4bdb%3A0xc7d3b5e6a6a2d1b!2s1900%20Olympic%20Blvd%2C%20Santa%20Monica%2C%20CA%2090404%2C%20USA!5e0!3m2!1sen!2s!4v1625736445348!5m2!1sen!2s"
                allowfullscreen="" loading="lazy"></iframe>
        </section>
    </main>

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