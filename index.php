<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="lib/css/style.css">
    <link rel="stylesheet" href="lib/animatecss/animate.css">

    <title>Hello!</title>
</head>

<body>

    <section id="navbar">
        <div class="container-fluid navbar-full">
            <div class="container navbar">
                <div class="logo">
                    <a href="/atmajayadw"><img src="Assets/icon/logo.png" alt="logo"></a>
                </div>
                <div class="links">
                    <ul>
                        <li><a class="link" href="">About</a></li>
                        <li><a class="link" href="">Expertise</a></li>
                        <li><a class="link" href="">Portfolio</a></li>
                        <li><a class="link" href="">Contact</a></li>
                    </ul>
                </div>

                <div class="container sidebar">
                    <div class="hamburger">
                        <span class="line1"></span>
                        <span class="line2"></span>
                        <span class="line3"></span>
                    </div>
                    <div class="links">
                        <ul>
                            <li><a class="link" href="">About</a></li>
                            <li><a class="link" href="">Expertise</a></li>
                            <li><a class="link" href="">Portfolio</a></li>
                            <li><a class="link" href="">Contact</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="jumbotron">
        <div class="container-fluid jumbo">
            <div class="container">
                <div class="row">
                    <div class="col-md jumbo-left">
                        <div class="left">
                            <p>Hello, i'm <b>Jay</b></p>
                            <p>Web Developer<br>& Photographer</p>
                            <div class="buttons">
                                <button class="btn explore-btn" href="">Explore!</button>
                                <button class="btn resume-btn" href="">Resume</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 jumbo-right">
                        <div class="right">
                            <img src="assets/image/profile1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container about">
            <div class="row">
                <div class="col-md-6 left">
                    <img src="assets/image/profile2.png" alt="" class="profile2">
                </div>
                <div class="col-md-6 right">
                    <h3>About Me</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore.
                    </p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="expertise">
        <div class="container expertise">
            <div class="head">
                <h3>My Expertise</h3>
                <h5>as</h5>
                <div class="buttons">
                    <button class="btn webdev-btn expertise-btn" onclick="currentSlide(1)">Web Developer</button>
                    <button class="btn photo-btn expertise-btn" onclick="currentSlide(2)">Photographer</button>
                </div>
            </div>
            <div class="contents_expertise webdev">
                <div class="content">
                    <p>Front-End Developer</p>
                    <div class="skills">
                        <div class="skill">
                            <img src="assets/icon/html.png" alt="" class="img-fluid">
                            <P class="title">HTML 5</P>
                        </div>
                        <div class="skill">
                            <img src="assets/icon/css.png" alt="" class="img-fluid">
                            <P class="title">CSS 3</P>
                        </div>
                        <div class="skill">
                            <img src="assets/icon/js.png" alt="" class="img-fluid">
                            <P class="title">Javascript</P>
                        </div>
                        <div class="skill">
                            <img src="assets/icon/bootstrap.png" alt="" class="img-fluid">
                            <P class="title">Bootstrap</P>
                        </div>
                        <div class="skill">
                            <img src="assets/icon/jquery.png" alt="" class="img-fluid">
                            <P class="title">JQuery</P>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <p>Back-End Developer</p>
                    <div class="skills">
                        <div class="skill">
                            <img src="assets/icon/php.png" alt="" class="img-fluid">
                            <P class="title">PHP</P>
                        </div>
                        <div class="skill">
                            <img src="assets/icon/mysql.png" alt="" class="img-fluid">
                            <P class="title">MySQL</P>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <p>Tools</p>
                    <div class="skills">
                        <div class="skill">
                            <img src="assets/icon/photoshop.png" alt="" class="img-fluid">
                            <P class="title">Adobe Photoshop</P>
                        </div>
                        <div class="skill">
                            <img src="assets/icon/xd.png" alt="" class="img-fluid">
                            <P class="title">Adobe XD (UI & UX)</P>
                        </div>
                        <div class="skill">
                            <img src="assets/icon/git.png" alt="" class="img-fluid">
                            <P class="title">Git & Github</P>
                        </div>
                        <div class="skill">
                            <img src="assets/icon/vscode.png" alt="" class="img-fluid">
                            <P class="title">Visual Studio Code</P>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contents_expertise photo">
                <div class="content">
                    <p>Gears</p>
                    <div class="skills">
                        <div class="skill">
                            <img src="assets/icon/fujixt1.png" alt="" class="img-fluid">
                            <P class="title">Fujifilm X-T1</P>
                        </div>
                        <div class="skill">
                            <img src="assets/icon/fujixt10.png" alt="" class="img-fluid">
                            <P class="title">Fujifilm <br> X-T10</P>
                        </div>
                        <div class="skill">
                            <img src="assets/icon/35mm.png" alt="" class="img-fluid">
                            <P class="title">Fujifilm <br> XF 35mm F2</P>
                        </div>
                        <div class="skill">
                            <img src="assets/icon/1650mm.png" alt="" class="img-fluid">
                            <P class="title">Fujifilm <br> XC 16-50mm</P>
                        </div>
                        <div class="skill">
                            <img src="assets/icon/55230mm.png" alt="" class="img-fluid">
                            <P class="title">Fujifilm <br> XC 55-230mm</P>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <p>Editing Tools</p>
                    <div class="skills">
                        <div class="skill">
                            <img src="assets/icon/photoshop.png" alt="" class="img-fluid">
                            <P class="title">Adobe Photoshop</P>
                        </div>
                        <div class="skill">
                            <img src="assets/icon/lightroom.png" alt="" class="img-fluid">
                            <P class="title">Adobe Lightroom</P>
                        </div>
                        <div class="skill">
                            <img src="assets/icon/premiere.png" alt="" class="img-fluid">
                            <P class="title">Adobe Premiere</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container portfolio">
            <div class="head">
                <h3>My Portfolio as</h3>
                <div class="buttons">
                    <p class="portfolio-btn" onclick="currentSlide_(1)">Web Developer</p>
                    <p class="portfolio-btn" onclick="currentSlide_(2)">Photographer</p>
                </div>
            </div>
            <div class="contents_portfolio webdev">
                <div class="content-webdev">
                    <img src="assets/image/porto1.png" alt="porto1" class="img-fluid">
                    <p>SMA Yaspen Tugu Ibu</p>
                </div>
                <div class="content-webdev">
                    <img src="assets/image/porto2.png" alt="porto1" class="img-fluid">
                    <p>Web UI Expert - Designed by
                        Ehsan Moin</p>
                </div>
                <div class="content-webdev">
                    <img src="assets/image/porto3.png" alt="porto1" class="img-fluid">
                    <p>Qulby - Designed by Rahul Rao</p>
                </div>
                <div class="content-webdev">
                    <img src="assets/image/porto4.png" alt="porto1" class="img-fluid">
                    <p>Organic - Designed by inkyy</p>
                </div>
            </div>
            <div class="contents_portfolio photo">
                <div class="content-photo">
                    <img src="assets/image/thumbnail1.jpg" alt="" class="img-fluid">
                    <button class="btn">Animal</button>
                </div>
                <div class="content-photo">
                    <img src="assets/image/thumbnail2.jpg" alt="" class="img-fluid">
                    <button class="btn">Portrait</button>
                </div>
                <div class="content-photo">
                    <img src="assets/image/thumbnail3.jpg" alt="" class="img-fluid">
                    <button class="btn">Event</button>
                </div>
                <div class="content-photo">
                    <img src="assets/image/thumbnail4.jpg" alt="" class="img-fluid">
                    <button class="btn">Wedding</button>
                </div>
                <div class="content-photo">
                    <img src="assets/image/thumbnail5.jpg" alt="" class="img-fluid">
                    <button class="btn">Pre-Wedding</button>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container footer">
            <div class="row">
                <div class="col-md-8">
                    <h3>Get in touch</h3>
                    <p>Have an inquiry or some feedback for me ? <br>
                        Please send email to atmajaya.dw@gmail.com
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="assets/icon/memphis4.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="socmed">
                <a href="https://www.facebook.com/adew36" target="_blank"><img src="assets/icon/facebook.png" alt=""
                        class="img-fluid"></a>
                <a href="https://twitter.com/atmajaya_dw" target="_blank"><img src="assets/icon/twitter.png" alt=""
                        class="img-fluid"></a>
                <a href="https://www.instagram.com/atmajaya.dw/" target="_blank"><img src="assets/icon/instagram.png"
                        alt="" class="img-fluid"></a>
            </div>
        </div>
    </section>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="lib/bootstrap/js/jquery.js"></script>
    <script src="lib/bootstrap/js/popper.js"></script>
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <!--  -->

    <!-- Optional JavaScript -->
    <script src="lib/wowjs/wow.min.js"></script>
    <script src="lib/jqueryeasing/jquery.easing.1.3.js"></script>
    <script src="lib/js/script.js"></script>

</body>

</html>