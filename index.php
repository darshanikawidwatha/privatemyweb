<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tharinda Damruwan | Personal Website</title>

    <!--links-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <!--header-->
    <header>

        <a href="" class="logo">BB<span>TDP</span></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">

            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skill">Skill</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>

        </ul>

    </header>

    <!--start home-->
    <section class="home" id="home">

        <div class="home-text">

            <h5>Hello, I'm</h5>
            <h1>Tharinda</h1>
            <h6>I am Passionate Full-stack <span>Developer.</span></h6>
            <p>
                Website, Mobile-apps, Hacking-tools, Linux-tools, etc programmer and developer.
            </p>

            <a href="#contact" class="btn">Contact</a>

        </div>

        <div class="home-img">

            <img src="img/home.png" alt="home-img">

        </div>

    </section>

    <!--start about-->
    <section class="about" id="about">

        <div class="about-img">

            <img src="img/about.png" alt="about-img">

        </div>

        <div class="about-text">

            <h3>ABOUT ME</h3>
            <h2>I am front-end back-end developer with 1 year of experience</h2>
            <p>

                My name is
                <span>

                    <font class="td-name">Tharinda Damruwan</font>

                </span>

                and I'm programmer. I'm from Sri Lanka and I can web design, mobile apps develop, logo design,
                grapic design, web apps develop and more...

            </p>

            <div class="count">

                <a target="_blank" href="https://github.com/tharindadamruwan"><span>Go To My GitHub</span></a>

            </div>

            <div class="main-btn">

                <a href="#contact" class="btn">Contact Me</a>

            </div>

        </div>

    </section>

    <!--start skill-->
    <section class="services" id="skill">

        <div class="center">

            <h3>MY SKILLS</h3>

        </div>

        <div class="services-content">

            <div class="row">

                <i class='bx bxl-html5'></i>
                <h3>HTML 5</h3>
                <p>
                    For web design
                </p>

            </div>

            <div class="row">

                <i class='bx bxl-css3'></i>
                <h3>CSS 3</h3>
                <p>
                    For web design
                </p>

            </div>

            <div class="row">

                <i class='bx bxl-javascript'></i>
                <h3>JAVASCRIPT</h3>
                <p>
                    For back-end developing
                </p>

            </div>

            <div class="row">

                <i class='bx bxl-python'></i>
                <h3>PYTHON</h3>
                <p>
                    For back-end developing, Hacking tools programming, Linux tools programming.
                </p>

            </div>

            <div class="row">

                <i class='bx bxl-php'></i>
                <h3>PHP</h3>
                <p>
                    For back-end developing, Hacking tools programming.
                </p>

            </div>

            <div class="row">

                <i class='bx bxs-terminal'></i>
                <h3>BASH</h3>
                <p>
                    For Hacking tools programming, Linux tools programming.
                </p>

            </div>

            <div class="row">

                <i class='bx bxl-adobe'></i>
                <h3>ADOBE PHOTOSHOP</h3>
                <p>
                    For grapic design.
                </p>

            </div>

            <div class="row">

                <i class='bx bx-paint'></i>
                <h3>ADOBE ILLUSTRATOR</h3>
                <p>
                    For grapic design.
                </p>

            </div>


        </div>

    </section>

    <section class="resume" id="projects">

        <div class="center">

            <h3>MY PROJECTS</h3>
            <a target="_blank" class="admin-btn" href="page/login.php">Admin</a>

        </div>

        <div class="resume-content">

            <?php

            $read = fopen("page/data/projects.txt", "r");

            while (!feof($read)) {
                echo fread($read, 1024);
            }

            fclose($read);

            ?>

        </div>

    </section>

    <!--start contact-->

    <section class="contact" id="contact">

        <div class="center">

            <h3>CONTACT ME</h3>

        </div>

        <div class="contact-form">

            <form method="get">

                <input name="con-name" type="text" placeholder="Enter your name" required>
                <input name="con-email" type="email" placeholder="Enter your email" required>
                <textarea placeholder="Enter your massage" name="con-msg" cols="30" rows="10" required></textarea>

                <input type="submit" class="submit-btn" id="submit-btn" name="submit-btn" value="Submit" />

            </form>

        </div>

    </section>

    <!--link js-->
    <script src="js/script.js"></script>
</body>

</html>