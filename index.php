<?php
require('includes/config.php');
$query = "SELECT * FROM home,section_control,social_media,about,personal_info";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="./packages/css/swiper-bundle.min.css">

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="./packages/css/styles.css">

    <title><?= $user_data['title'] ?></title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">MD Tahsinur Rahman</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <?php
                    if ($user_data['home_section']) {
                    ?>

                        <li class="nav__item">
                            <a href="#home" class="nav__link">
                                <i class="uil uil-estate nav__icon"></i>Home
                            </a>
                        </li>
                    <?php
                    }
                    if ($user_data['about_section']) {
                    ?>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="uil uil-user nav__icon"></i>About
                            </a>
                        </li>
                    <?php
                    }
                    if ($user_data['skill_section']) {
                    ?>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i>Skills
                            </a>
                        </li>
                    <?php
                    }
                    if ($user_data['project_section']) {
                    ?>
                        <li class="nav__item">
                            <a href="#project" class="nav__link">
                                <i class="uil uil-scenery nav__icon"></i>Project
                            </a>
                        </li>
                    <?php
                    }
                    if ($user_data['contact_section']) {
                    ?>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class="uil uil-message nav__icon"></i>Contact
                            </a>
                        </li>
                    <?php
                    }
                    ?>

                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>
            <div class="nav__btns">
                <!-- Theme change button -->

                <i class="uil uil-moon change-theme" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content grid">
                    <?php
                    if ($user_data['showicons']) {
                    ?>
                        <div class="home__social">
                            <a href="https://facebook.com/<?= $user_data['facebook'] ?>" target="_blank" class="home__social-icon">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://instagram.com/<?= $user_data['instagram'] ?>" target="_blank" class="home__social-icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://twitter.com/<?= $user_data['twitter'] ?>" target="_blank" class="home__social-icon">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://github.com/<?= $user_data['github'] ?>" target="_blank" class="home__social-icon">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="home__img">
                        <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                <image class="home__blob-img" x="" xlink:href="packages/images/<?= $user_data['pro_pic'] ?>" />
                            </g>
                        </svg>
                    </div>

                    <div class="home__data">
                        <h1 class="home__title"><?= $user_data['title'] ?></h1>
                        <h3 class="home__subtitle"><?= $user_data['subtitle'] ?></h3>
                        <p class="home__description"><?= $user_data['description'] ?></p>
                    </div>
                </div>

                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="fa-solid fa-caret-right home__scroll-mouse"></i>
                        <span class="home__scroll-name">Scroll Down</span>
                        <i class="fa-solid fa-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <h2 class="section__title"><?= $user_data['about_title'] ?></h2>
            <span class="section__subtitle"><?= $user_data['about_subtitle'] ?></span>

            <div class="about__container container grid">
                <img src="./packages/images/<?= $user_data['profile_pic'] ?>" alt="" class="about__img">
                <div class="about__data">
                    <p class="about__description">
                        <?= $user_data['about_desc'] ?>
                    </p>
                    <div class="about__info">
                        <div>
                            <span class="about__info-title"><?= $user_data['info_title'] ?></span>
                            <span class="about__info-name"><?= $user_data['info_name'] ?> <br> <?= $user_data['info_name_br'] ?></span>
                        </div>
                        <div>
                            <span class="about__info-title"><?= $user_data['info_title_two'] ?></span>
                            <span class="about__info-name"><?= $user_data['info_name_two'] ?> <br> <?= $user_data['info_name_two_br'] ?></span>
                        </div>
                        <div>
                            <span class="about__info-title"><?= $user_data['info_title_three'] ?></span>
                            <span class="about__info-name"><?= $user_data['info_name_three'] ?><br><?= $user_data['info_name_three_br'] ?></span>
                        </div>
                    </div>

                    <div class="about__buttons">
                        <a download="" href="packages/pdf/" class="button button--flex">
                            Download CV
                            <i class="fa-solid fa-download button__icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SKILLS ====================-->
        <section class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">My technical level</span>

            <div class="skills__container container grid">
                <div>
                    <!--==================== SKILL-1 ====================-->
                    <div class="skills__content skills__open">
                        <div class="skills__header">
                            <i class="fa-solid fa-chart-simple skills__icon"></i>
                            <div>
                                <h1 class="skills__title">Competitive Programming</h1>
                                <span class="skills__subtitle">More than 1 year experience</span>
                            </div>

                            <i class="fa-solid fa-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">C++</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__python"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">C</h3>
                                    <span class="skills__number">15%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__tab"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Java</h3>
                                    <span class="skills__number">5%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__sql"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Rust</h3>
                                    <span class="skills__number">2%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__google"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--==================== SKILLS 2 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="fa-solid fa-chalkboard-user skills__icon"></i>
                            <div>
                                <h1 class="skills__title">Teacher</h1>
                                <span class="skills__subtitle">More than 3 years</span>
                            </div>

                            <i class="fa-solid fa-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Mathematics</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__bank"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Physics</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__counter"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Oracle</h3>
                                    <span class="skills__number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__google"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">MS Office</h3>
                                    <span class="skills__number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__office"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <!--==================== SKILLS 3 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="fa-solid fa-code skills__icon"></i>
                            <div>
                                <h1 class="skills__title">Web Developer</h1>
                                <span class="skills__subtitle">More than 3 months</span>
                            </div>

                            <i class="fa-solid fa-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__css"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">JavaScript</h3>
                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__js"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills__number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__wordpress"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== QUALIFICATION ====================-->
        <section class="qualification__section">
            <h2 class="section__title">Qualification</h2>
            <span class="section__subtitle">My personal journey</span>

            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target='#education'>
                        <i class="fa-solid fa-graduation-cap qualification__icon"></i>
                        Education
                    </div>

                </div>

                <div class="qualification__sections">
                    <!--==================== QUALIFICATION CONTENT 1 ====================-->
                    <div class="qualification__content qualification__active" data-content id="education">
                        <!--==================== QUALIFICATION 1 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">SSC in Science </h3>
                                <span class="qualification__subtitle">Dawood Public School, Jashore</span>
                                <div class="qualification__calendar">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    2017 - 2018
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 2 ====================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>

                            <div>
                                <h3 class="qualification__title">HSC in Science</h3>
                                <span class="qualification__subtitle">Saint Joseph Higher Secondary School, Dhaka</span>
                                <div class="qualification__calendar">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    2019 - 2020
                                </div>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 3 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">BSc in Computer Science and Engineering</h3>
                                <span class="qualification__subtitle">Khulna University of Engineering and Technology</span>
                                <div class="qualification__calendar">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    2020 - Present
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 4 ====================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <!-- <span class="qualification__line"></span> -->
                            </div>

                            <div>
                                <h3 class="qualification__title">Phase-2 Certification in Competitive Programming</h3>
                                <span class="qualification__subtitle">YouKnowWho Academy</span>
                                <div class="qualification__calendar">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    2022
                                </div>
                            </div>


                        </div>
                    </div>

                    <!--==================== QUALIFICATION CONTENT 2 ====================-->


                </div>
            </div>
        </section>

        <!--==================== PORTFOLIO ====================-->
        <section class="portfolio section" id="portfolio">

            <h2 class="section__title">Project</h2>
            <span class="section__subtitle">Most recent works</span>

            <div class="portfolio__container container swiper-container">
                <div class="swiper-wrapper">
                    <!--==================== PORTFOLIO 1 ====================-->

                    <div class="portfolio__content grid swiper-slide">
                        <img src="./packages/images/portfolio/img1.png" alt="" class="portfolio__img">

                        <div class="portfolio_">
                            <h3 class="portfolio__title">Landing Page</h3>
                            <p class="portfolio__description">Data analitical dashboard adaptable to all devices,
                                with ui components and animated interactions.</p>
                            <a href="#" class="button button--flex button--small portfolio__button">
                                Demo
                                <i class="fa-solid fa-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>

                    <!--==================== PORTFOLIO 2 ====================-->

                    <div class="portfolio__content grid swiper-slide">
                        <img src="./packages/images/portfolio/img2.png" alt="" class="portfolio__img">

                        <div class="portfolio_">
                            <h3 class="portfolio__title">Login Form</h3>
                            <p class="portfolio__description">Above Amazon clone is adaptable to all devices, with
                                ui components and animated interactions.</p>
                            <a href="#" class="button button--flex button--small portfolio__button">
                                Demo
                                <i class="fa-solid fa-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>

                    <!--==================== PORTFOLIO 3 ====================-->

                    <div class="portfolio__content grid swiper-slide">
                        <img src="./packages/images/portfolio/img3.png" alt="" class="portfolio__img">

                        <div class="portfolio_">
                            <h3 class="portfolio__title">Brand Design</h3>
                            <p class="portfolio__description">Tesla Clone is adaptable to all devices, with
                                ui components and animated interactions.</p>
                            <a href="#" class="button button--flex button--small portfolio__button">
                                Demo
                                <i class="fa-solid fa-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- add arrows-->
                <div class="swiper-button-next">
                    <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                </div>

                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                </div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>


            </div>

        </section>

        <!--==================== PROJECT IN MIND ====================-->


        <!--==================== CONTACT ME ====================-->
        <section class="contact section" id="contact">
            <h2 class="section__title">Contact me</h2>
            <span class="section__subtitle">Get in touch</span>

            <div class="contact__container container grid">
                <div>
                    <div class="contact__information">
                        <i class="uil uil-phone-alt contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Call me</h3>
                            <span class="contatc__subtitle">(+880) 1799303603</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>

                        <div>
                            <h3 class="contact__title">E-mail</h3>
                            <span class="contatc__subtitle">rahman2007091@stud.kuet.ac.bd</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-map-marker contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Location</h3>
                            <span class="contatc__subtitle">Khulna, Bangladesh</span>
                        </div>
                    </div>
                </div>

                <form action="includes/process_contact.php" method="post" class="contact__form grid">
                    <div class="contact__inputs grid">
                        <div class="contact__content">
                            <label for="name" class="contact__label">Name</label>
                            <input type="text" name="name" class="contact__input" required>
                        </div>

                        <div class="contact__content">
                            <label for="email" class="contact__label">E-mail</label>
                            <input type="email" name="email" class="contact__input" required>
                        </div>
                    </div>

                    <div class="contact__content">
                        <label for="subject" class="contact__label">Subject</label>
                        <input type="text" name="subject" class="contact__input" required>
                    </div>

                    <div class="contact__content">
                        <label for="message" class="contact__label">Description</label>
                        <textarea name="message" id="message" cols="0" rows="7" class="contact__input" required></textarea>
                    </div>

                    <div>
                        <button type="submit" class="button button--flex">
                            Send message
                            <i class="uil uil-message button__icon"></i>
                        </button>
                    </div>
                </form>
            </div>

        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">

        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">MD Tahsinur Rahman</h1>
                    <span class="footer__subtitle">Competitive Programmer</span>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#services" class="footer__link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Contact</a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a href=https://www.facebook.com/prashanna.drashan" target="_blank" class="footer__social">
                        <i class="uil uil-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/prashanna01/" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://twitter.com/prashanna01" target="_blank" class="footer__social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                </div>
            </div>
            <p class="footer__copy">&#169; MD Tahsinur Rahman. All rights reserved.</p>
        </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>


    <!--==================== SWIPER JS ====================-->
    <script src="./packages/js/swiper-bundle.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="./packages/js/main.js"></script>

    <!-- font awesome kit -->
    <script src="https://kit.fontawesome.com/99c76f4302.js" crossorigin="anonymous"></script>
</body>

</html>