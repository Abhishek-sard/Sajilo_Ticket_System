<?php
// Include database connection if needed.
// include 'includes/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/slider.css"> <!-- Include new CSS file -->
</head>

<body>
    <nav class="navbar">
        <div class="logo-container">
            <h1>Sajilo Ticket System</h1>
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Notifications</a></li>
        </ul>
    </nav>

    <div class="content">
        <h1>Welcome to the Home Page</h1>

        <!-- Image Slider -->
        <div class="slider-container">
            <div class="slides">
                <div class="slide"><img src="images/slide1.jpg" alt="Slide 1"></div>
                <div class="slide"><img src="images/slide2.jpg" alt="Slide 2"></div>
                <div class="slide"><img src="images/slide3.jpg" alt="Slide 3"></div>
            </div>
            <button class="slider-btn prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="slider-btn next" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </div>

    <script>
        let currentIndex = 0;

        function moveSlide(direction) {
            const slides = document.querySelector('.slides');
            const totalSlides = slides.children.length;
            currentIndex = (currentIndex + direction + totalSlides) % totalSlides;
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        }
    </script>
</body>

</html>