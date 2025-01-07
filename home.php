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

    <div class="slider-container">
        <div class="slides">
            <div class="slide"><img src="images/bus1.jpg" alt="Slide 1"></div>
            <div class="slide"><img src="images/bus2.jpg" alt="Slide 2"></div>
            <div class="slide"><img src="images/bus3.jpg" alt="Slide 3"></div>
            <div class="slide"><img src="images/bus4.jpg" alt="Slide 4"></div>
        </div>
        <button class="slider-btn prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="slider-btn next" onclick="moveSlide(1)">&#10095;</button>
    </div>

    <script>
        let currentIndex = 0;
        const slides = document.querySelector('.slides');
        const totalSlides = slides.children.length;

        function moveSlide(direction) {
            currentIndex = (currentIndex + direction + totalSlides) % totalSlides;
            updateSlidePosition();
        }

        function updateSlidePosition() {
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function autoSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlidePosition();
        }

        // Auto-slide every 3 seconds
        setInterval(autoSlide, 3000);
    </script>
</body>

</html>