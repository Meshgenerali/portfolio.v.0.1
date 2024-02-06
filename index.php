<?php 
include('./header.php');
include('./constants.php');

?>

    <!--hero's section-->
    <div class="hero" id="home">
        <div class="hero-container">
            <h1 class="hero-heading">Hello, I'm <span>Meshack Malonza</span></h1>
            <p class="hero-description">Software Engineer based on the universe</p>
            <!-- <button class="main-button"><a href="link to github">Projects</a></button> -->
        </div>
    </div>

    <!-- About section -->
<div class="main" id="about">
    <div class="main-container">
        <div class="main-img-container mobile-res">
            <div class="main-img-card">
                <img class="profile" src="./profile.jpg" alt="">
            </div>
        </div>
        <div class="main-content mobile-res">
            <p>I'm a deadlined Software Engineer specializing in building highly performant web applications that solve real world problems and provide users with an awesome experience. <br> <br>Also, a dedicated cybersecurity professional with a strong background in ethical hacking, possessing expertise in penetration testing, vulnerability assessment, and a commitment to upholding the highest ethical and legal standards.</p>
            <button class="main-button"><a target="_blank" href="https://github.com/Meshgenerali">projects</a></button>
        </div>
    </div>
</div>



        <!-- services section -->

        <div class="services" id="services">
            <h1>My Skills</h1>
            <div class="services-wrapper">
                <div class="services-card">
                <div class="skill-logo">
                <i class="fab fa-html5 fa-6x"></i>
                </div>
                <h4 class="skill">HTML</h4>
                </div>

                
                <div class="services-card">
                <div class="skill-logo">
                <i class="fab fa-css3 fa-6x"></i>
                </div>
                <h4 class="skill">CSS</h4>
                </div>

                <div class="services-card">
                <div class="skill-logo">
                <i class="fab fa-js fa-6x"></i>
                </div>
                <h4 class="skill">JavaScript</h4>
                </div>

                
                
                <div class="services-card">
                <div class="skill-logo">
                <i class="fab fa-php fa-6x"></i>
                </div>
                <h4 class="skill">PHP</h4>
                </div>
                
                <div class="services-card">
                <div class="skill-logo">
                <i class="fab fa-laravel fa-6x"></i>
                </div>
                <h4 class="skill">LARAVEL</h4>
                </div>

                
                <div class="services-card">
                <div class="skill-logo">
                <i class="fa-solid fa-database fa-6x"></i>
                </div>
                <h4 class="skill">MYSQL</h4>
                </div>

            </div>
        </div>

<?php
 include('./footer.php');
?>