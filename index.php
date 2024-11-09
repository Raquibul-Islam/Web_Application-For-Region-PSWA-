<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirojpur Students Welfare Association</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>
    <header>
        <div class="banner-slider">
            <div class="banner-slides">
                <div class="banner-slide">
                    <img src="Photos/Banner.jpg" alt="Banner 1">
                    <div class="banner-text">Pirojpur Welfare Student Association</div>
                </div>
                <div class="banner-slide">
                    <img src="Photos/banner3.jpg" alt="Banner 2">
                    <div class="banner-text">Pirojpur Welfare Student Association</div>
                </div>
                <div class="banner-slide">
                    <img src="Photos/photo9.jpg" alt="Banner 3">
                    <div class="banner-text">Pirojpur Welfare Student Association</div>
                </div>
                <div class="banner-slide">
                    <img src="Photos/pic2.jpg" alt="Banner 4">
                    <div class="banner-text">Pirojpur Welfare Student Association</div>
                </div>
                <div class="banner-slide">
                    <img src="Photos/photo8.jpg" alt="Banner 5">
                    <div class="banner-text">Pirojpur Welfare Student Association</div>
                </div>
            </div>
            <div class="nav-buttons">
                <button class="nav-button" id="prev">❮</button>
                <button class="nav-button" id="next">❯</button>
            </div>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="pswa_blog.php">Events</a></li>
                <li><a href="students_info.php">Members</a></li>
                <!-- <li><a href="footer.php">Contact</a></li> -->
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="main-container">
        <aside class="sidebar">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="students_info.php">Students Info</a></li>
                <li><a href="teachers_info.php">Teachers Info</a></li>
                <li><a href="alumni_info.php">Alumni Info</a></li>
                <li><a href="admission_booth.php">Admission booth</a></li>
                <li><a href="pswa_blog.php">PSWA Blog</a></li>
                <li><a href="job_oportunities.php">Job Opportunities</a></li>
                <li><a href="scholarship.php">Scholarships</a></li>
                <li><a href="pswa_blog.php">PSWA News</a></li>
            </ul>
        </aside>

        <main class="content">
            <h1>Welcome to the Pirojpur Students Welfare Association (PSWA)</h1>
            <p>The Pirojpur Students Welfare Association (PSWA) is dedicated to the academic, social, and professional support of students from Pirojpur. Our mission is to foster a strong sense of community, provide resources for academic success, and host events that bring students together.</p>
            <h2>Recent Events</h2>
            <ul>
            <li>Admission booth – October 25, 2024</li>
                <li>PSWA General Meeting – November, 2024</li>
                <li>End of Year Tour– December, 2024</li>
            </ul>
            <h2>Upcoming Activities</h2>
            <ul>
               
                <li>Welcome to freshers – September, 2024</li>
                <li>Mini Tour – November, 2024</li>
                <li>Others Program, 2024</li>
            </ul>
        </main>

        <aside class="at-a-glance">
            <h3>Announcements</h3>
            <ul>
                <li>New Scholarship Opportunities for 2024</li>
                <li>Volunteer for the PSWA Internship Program</li>
                <li>Alumni Membership </li>
            </ul>
        </aside>
    </div>

    <div class="photo-gallery">
        <h2>Photo Gallery</h2>
        <div class="gallery-main">
            <img id="main-photo" src="Photos/banner.jpg" alt="Main Photo">
        </div>
        <div class="gallery-thumbnails">
            <div class="gallery-thumbnail">
                <img src="Photos/pic4.jpg" alt="Photo 1" onclick="changePhoto('Photos/pic2.jpg')">
            </div>
            <div class="gallery-thumbnail">
                <img src="Photos/pic3.jpg" alt="Photo 2" onclick="changePhoto('Photos/pic4.jpg')">
            </div>
            <div class="gallery-thumbnail">
                <img src="Photos/pic4.jpg" alt="Photo 3" onclick="changePhoto('Photos/banner.jpg')">
            </div>
            <div class="gallery-thumbnail">
                <img src="Photos/pic3.jpg" alt="Photo 4" onclick="changePhoto('Photos/pic3.jpg')">
            </div>
            <div class="gallery-thumbnail">
                <img src="Photos/pic2.jpg" alt="Photo 5" onclick="changePhoto('Photos/photo8.jpg')">
            </div>
            <div class="gallery-thumbnail">
                <img src="Photos/photo6.jpg" alt="Photo 6" onclick="changePhoto('Photos/photo7.jpg')">
            </div>
            <div class="gallery-thumbnail">
                <img src="Photos/photo7.jpg" alt="Photo 7" onclick="changePhoto('Photos/photo10.jpg')">
            </div>
            <div class="gallery-thumbnail">
                <img src="Photos/photo8.jpg" alt="Photo 8" onclick="changePhoto('Photos/photo9.jpg')">
            </div>
            <div class="gallery-thumbnail">
                <img src="Photos/photo9.jpg" alt="Photo 9" onclick="changePhoto('Photos/photo7.jpg')">
            </div>
            <div class="gallery-thumbnail">
                <img src="Photos/pic4.jpg" alt="Photo 10" onclick="changePhoto('Photos/banner.jpg')">
            </div>
            <div class="gallery-thumbnail">
                <img src="Photos/photo7.jpg" alt="Photo 7" onclick="changePhoto('Photos/photo10.jpg')">
            </div>
            <div class="gallery-thumbnail">
                <img src="Photos/photo7.jpg" alt="Photo 7" onclick="changePhoto('Photos/photo10.jpg')">
            </div>
        </div>
    </div>
    <?php
    require "chatbotindex.php"
    ?>

    

    <script>
        let currentIndex = 0;
        const slides = document.querySelector('.banner-slides');
        const totalSlides = document.querySelectorAll('.banner-slide').length;

        function showSlide(index) {
            slides.style.transform = `translateX(-${index * 100}%)`;
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            showSlide(currentIndex);
        }

        document.getElementById('next').addEventListener('click', nextSlide);
        document.getElementById('prev').addEventListener('click', prevSlide);
        setInterval(nextSlide, 3000);

        function changePhoto(src) {
            const mainPhoto = document.getElementById('main-photo');
            mainPhoto.style.opacity = '0'; 
            setTimeout(() => {
                mainPhoto.src = src;
                mainPhoto.style.opacity = '1';
            }, 1000);
        }
    </script>
    <?php include('footer.php'); ?>
</body>

</html>
