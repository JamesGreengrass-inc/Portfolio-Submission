<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
        <title>James Greengrass' Portfolio</title>
        <!-- Normalize, CSS stylesheets -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/styles.css">
        <!-- Font Family Links -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- Side Navbar 992px or More-->
        <nav class="navbar">
            <a href="index.html">
                <div class="logo">
                    <p>JG</p>
                </div>
            </a>
            <div class="nav-links">
                <ul>
                    <li><a href="html/about-me.html">About Me</a></li>
                    <li><a href="#portfolio">My Portfolio</a></li>
                    <li><a href="html/coding-examples.html">Coding Examples</a></li>
                    <li><a href="html/scs-scheme.html">SCS Scheme</a></li>
                    <li id="contact-me-li"><a href="#contact">Contact Me</a></li>
                    <li><a href="https://github.com/JamesGreengrass" target="_blank"><span class="icon-github"></span></a></li>
                </ul>
            </div>
        </nav>
        <!-- Side Navbar 768px - 991.9px -->
        <nav class="navbar-md">
            <a href="index.html">
                <div class="logo-md">
                    <p>JG</p>
                </div>
            </a>
            <div class="nav-links-md">
                <ul>
                    <li><a href="html/about-me.html"><span class="icon-info-circle"></span></a></li>
                    <li><a href="#portfolio"><span class="icon-briefcase"></span></a></li>
                    <li><a href="html/coding-examples.html"><span class="icon-code"></span></a></li>
                    <li><a href="html/scs-scheme.html"><span class="icon-cast_for_education"></span></a></li>
                    <li><a href="#contact"><span class="icon-contact_mail"></span></a></li>
                    <li><a href="https://github.com/JamesGreengrass"><span class="icon-github"></span></a></li>
                </ul>
            </div>
        </nav>
        <!-- Side Navbar 767.99px or Less -->
        <button type="button" id="menu-btn" onclick="show()">
            <div class="burger"></div>
            <div class="burger"></div>
            <div class="burger"></div>
        </button> 
        <!-- Side Navbar Slide-Out -->
        <nav class="navbar-toggle" id="navbar">
            <a href="index.html">
                <div class="logo-toggle">
                    <p>JG</p>
                </div>
            </a>
            <div class="nav-links-toggle">
                <ul>
                    <li><a href="html/about-me.html">About Me</a></li>
                    <li><a href="#portfolio">My Portfolio</a></li>
                    <li><a href="html/coding-examples.html">Coding Examples</a></li>
                    <li><a href="html/scs-scheme.html">SCS Scheme</a></li>
                    <li id="contact-me-li"><a href="#contact">Contact Me</a></li>
                    <li><a href="https://github.com/JamesGreengrass" target="_blank"><span class="icon-github"></span></a></li>
                </ul>
            </div>
        </nav>
        <!-- Main Content -->
        <main>
            <!-- Hero Image -->
            <section>
                <div class="hero-image">
                    <div class="hero-text text-type">
                        <h1>Hello,</h1>
                        <h2>My Name Is James Greengrass</h2>
                        <p>I'm A Web Developer</p>
                    </div>
                    <div class="scroll-down">
                        <a href="#portfolio">
                            <p>Scroll Down</p>
                            <span class="icon-chevron-down">
                            </span>
                        </a>
                    </div>
                </div>
            </section>
            <!-- Portfolio -->
            <section class="pf" id="portfolio">
                <div class="cards-background">
                    <div class="portfolio-flex">
                        <div class="portfolio">
                            <div class="project">
                                <a href="https://netmatters.james-greengrass.netmatters-scs.co.uk/" target="_blank">
                                    <img src="img/coding.jpg">
                                    <div class="overlay">
                                        <div class="overlay-text">For my first project I had to build an exact copy of the Netmatters homepage using HTML & SASS only. 
                                            Click me to take a look at how I did.</div>
                                    </div>
                                </a>
                                <h3>Project One</h3>
                                <a href="https://netmatters.james-greengrass.netmatters-scs.co.uk/" target="_blank">
                                    <p>
                                        View Project
                                        <span class="icon-arrow-right"></span>
                                    </p>
                                </a>
                            </div>
                            <div class="project">
                                <a href="#" target="_blank">
                                    <img src="img/capri island.jpg">
                                </a>
                                <h3>Project Two</h3>
                                <a href="#">
                                    <p> 
                                        View Project
                                        <span class="icon-arrow-right"></span>
                                    </p>
                                </a>
                            </div>
                            <div class="project">
                                <a href="#" target="_blank">
                                    <img src="img/capri island.jpg">
                                </a>
                                <h3>Project Three</h3>
                                <a href="#">
                                    <p> 
                                        View Project
                                        <span class="icon-arrow-right"></span>
                                    </p>
                                </a>
                            </div>
                            <div class="project">
                                <a href="#" target="_blank">
                                    <img src="img/capri island.jpg">
                                </a>
                                <h3>Project Four</h3>
                                <a href="#">
                                    <p> 
                                        View Project
                                        <span class="icon-arrow-right"></span>
                                    </p>
                                </a>
                            </div>
                            <div class="project">
                                <a href="#" target="_blank">
                                    <img src="img/capri island.jpg">
                                </a>
                                <h3>Project Five</h3>
                                <a href="#">
                                    <p> 
                                        View Project
                                        <span class="icon-arrow-right"></span>
                                    </p>
                                </a>
                            </div>
                            <div class="project">
                                <a href="#" target="_blank">
                                    <img src="img/capri island.jpg">
                                </a>
                                <h3>Project Six</h3>
                                <a href="#">
                                    <p> 
                                        View Project
                                        <span class="icon-arrow-right"></span>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Form -->
            <section>
                <div class="contact-grid" id="contact">
                    <!-- Contact Text -->
                    <div class="contact-text">
                        <h1>Get In Touch</h1>
                        <p>If you would like to contact me, you can via email at:</p>
                        <a href="mailto:james.greengrass@netmatters-scs.com" target="_blank">james.greengrass@netmatters-scs.com</a>
                        <p>If you prefer, you can use the contact form :)</p>
                        <p>I'll get back to you as soon as I can.</p>
                    </div>
                    <!-- Contact Form -->
                    <?php include('php/server-side.php'); ?>
                    <div class="form-container">
                        <form name="myForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()">
                            <div class="contact-form">
                                <input type="text" id="fname" name="fname" placeholder="First Name..." required>
                                <span class="error"><?php echo $fnameErr;?></span>
                                <input type="text" id="lname" name="lname" placeholder="Last name..." required>
                                <span class="error"><?php echo $lnameErr;?></span>
                            </div>
                            <div class="contact-form-pt-two">
                                <input type="text" id="email" name="email" placeholder="Your Primary Email..." required>
                                <span class="error"><?php echo $emailErr;?></span>
                                <input type="text" id="subject" name="subject" placeholder="Subject of your message..." required>
                                <span class="error"><?php echo $subjectErr;?></span>
                                <textarea id="message" name="message" placeholder="Your message..." required></textarea>
                                <span class="error"><?php echo $messageErr;?></span>
                                <input type="submit" value="Submit" name="Submit">
                                <span class="error"><?php echo $success;?></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Scroll Up -->
                <div class="scroll-up-container">
                    <div class="scroll-up">
                        <a href="#">
                            <p>Back To Top</p>
                            <span class="icon-chevron-up">
                            </span>
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <!-- jQuery, JavaScript and Plugins -->
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://unpkg.com/typeit@8.5.4/dist/index.umd.js"></script>
        <script>
            new TypeIt('.text-type', {
                speed: 45,
            }).go();
        </script>
    </body>
</html>