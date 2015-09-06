<?php
include_once('blog/resources/init.php');

$posts = ( isset($_GET['id'])) ? get_posts($_GET['id']) : get_posts();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="Peter Ju. Student at Queen's University.">
    <meta name="author" content="Peter Ju">

    <title>Peter Ju - Home</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>

    <!-- Google Stuff -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-54918043-1', 'auto');
        ga('send', 'pageview');
    </script>

    <!-- FavIcon -->
    <link rel = "shortcut icon" href = "favicon.ico">

    <!-- FA -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


</head>

<body>
    <!-- Header -->
    <div class="brand">Peter Ju</div>
    <div class="address-bar">Software Designer | Entrepreneur</div>

    <!-- Navigation -->
    <div id="nav-wrapper">
        <div id="nav" class="navbar navbar-simple" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                    <a class="navbar-brand" href="index.html">peterju.com</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-inner" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="http://peterju.com/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                        </li>
                        <li>
                            <a href="http://peterju.com/portfolio/"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Portfolio</a>
                        </li>
                        <li>
                            <a href="http://peterju.com/blog/"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> Blog</a>
                        </li>
                        <li>
                            <a href="http://peterju.com/contact.html"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </div>
    </div>

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="text-center intro">
                        <h1 class="hello paddingTop glow"><i>Hello World!</i></h1>
                        <hr class="tagline-divider">
                        <p class="paddingTop glow">
                            I'm a Programmer specializing in Software Design.
                        </p>
                        <p class="paddingBot glow">
                            Starting May 2015, I will be a Software Developer for IBM.
                        </p>
                        <p class="glow">
                            I have a passion for creating original, user-centric programs
                        </p>
                        <p class="glow">
                            Check out my <a href="http://www.peterju.com/blog/">Blog</a> and <a href="http://www.peterju.com/portfolio/">Portfolio</a>.
                        </p>
                    </div>
                    <hr>
                    <p class="pull-right paddingTop glow"><a href="http://www.peterju.com/portfolio/colordice/">Something Cool</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <img class="paddingBotTop img-responsive img-border img-left" src="img/profile.png" alt="Peter's Profile picture">
                    <div class="question paddingTop glow">
                        About Me
                    </div>
                    <p>
                        While other generations got to experience the discovery of North America and the space race to the moon, I believe my generation is experiencing the 'discovery' of Globalization. If commercial airliners connected different societies and cultures physically, the internet connects our entire world spiritually through the ability to transmit information easily and freely.
                    </p>
                    <p>
                        Before I moved to Eastern Canada to study Computer Science at Queen's University, I lived in Vancouver and Calgary. I enjoy sports or video games during my leisurely time!
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 paddingBotTop">
                    <hr>
                    <h2 class="text-center glow">
                        Skills
                    </h2>
                    <hr class="tagline-divider">
                    <h2 class="text-center">
                        <small>A full copy of my resume is available. Please <a href="http://www.peterju.com/contact.html">contact me</a> if you would like one.
                        </small>
                    </h2>
                    <hr>
                    <h6>
                    <span class="glow">Experienced in...</span>
                    <hr>
                    <ul class="fa-ul">
                        <li class="glow"><i class="fa-li fa fa-thumbs-o-up"></i>OOP Languages & Large Software Development: C++, Java, Python</i></li>
                        <br>
                        <li class="glow"><i class="fa-li fa fa-thumbs-o-up"></i>Web & Mobile Development: <i>HTML, JS, PHP, iOS, Android, rapid prototyping</i></li>
                        <br>
                        <li class="glow"><i class="fa-li fa fa-thumbs-o-up"></i>Scripting & Testing: <i>Linux, BASH, test automation, determining test cases</i></li>
                        <br>
                        <li class="glow"><i class="fa-li fa fa-thumbs-o-up"></i>IDEs, Tools, Frameworks: <i>Eclipse, Xcode, Bootstrap, MySQL, FTP, Wikis, UML</i></li>
                        <br>
                        <li class="glow"><i class="fa-li fa fa-thumbs-o-up"></i><i>Developing and launching fully-functional websites and applications</i></li>
                        
                    </ul>
                    </h6>

                    <hr>
                    <hr class="tagline-divider">
                    <hr>

                    <h2 class="paddingTop glow">Related Experience</h2>
                    <h4 class="glow"><a href="http://sites.cs.queensu.ca/courses/cisc235/#Personnel">Teaching Assistant (2015-Present)</a><small class="pull-right">Kingston, ON</small></h4>
                    <p>
                        Full-Time TA for <a href="http://sites.cs.queensu.ca/courses/cisc235/">CISC 235</a> (Data-structures) at Queen's University.
                    </p>
                    <p>
                        I work 'full-TA' hours, which includes holding weekly lectures and grading student submissions. I spend extended time examining the students' code about algorithms and experiments performed on them.
                    </p>
                    <p>
                        The course covers topics from computing complexity, algorithmic hashing methods, tree traversal methods among other topics related to data structures.
                    </p>
                    <h4 class="glow"><a href="http://compsasiteservices.com/team.php">Compsa Site Services (2014-Present)</a><small class="pull-right">Kingston, ON</small></h4>
                    <p>
                        Junior Web Developer | Tech: HTML, CSS, PHP, Javascript, Bootstrap | Skills: Teamwork, Collaboration
                    </p>
                    <p>
                        Developed Websites for Compsa Site Services, a student run service at Queen's University. Worked as a team with a senior developer.
                    </p>
                    <h4 class="glow">ThisIsWhyImHungry (2013-2014)<small class="pull-right">Vancouver, BC</small></h4>
                    <p>
                        Cofounder, Developer | Tech: HTML, CSS, PHP, Javascript, WordPress | Skills: Entrepreneurship, Initiative
                    </p>
                    <p>
                        ThisIsWhyImHungry <strong>was</strong> a 'product-discovery' service with a WordPress backend. I was particularly responsible for market analysis/research and user experience.
                    </p>
                    <hr>

                    <h2 class="paddingTop glow">Project Experience</h2>
                    <p>
                        Software Architect for an <i>Upcoming Android App</i>
                    </p>
                    <p>
                        Lead Project Designer for an <i>Upcoming C++ Video Game</i>
                    </p>
                    <hr>
                    <h2 class="paddingTop glow">
                        Github?
                    </h2>
                    <p>
                        My <a href="https://github.com/peterj35">Github</a>, but please keep in mind that it is not meant to be a current collection of my work.
                    </p>
                </div>
            </div>

            <div class="box">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 paddingBotTop">
                    <hr>
                    <h2 class="text-center glow">
                        Education
                    </h2>
                    <hr class="tagline-divider">
                    <h2 class="text-center">
                        <small>2012 - May 2016</small>
                    </h2>
                    <h2 class="glow"><a href="http://www.cs.queensu.ca/applicants/softwaredesign/">Bachelor of Computing Honours in Software Design</a>
                    <br>
                    <a href="http://www.queensu.ca/">Queen's University</a>
                    <br>
                    <small class="pull-right">Kingston, ON</small></h2>
                    <p>
                        Currently in 3rd year of Undergraduate studies, persuing a degree in Computer Science, with focus in:
                        <ul>
                            <li>Software Quality Assurance</li>
                            <li>Algorithms, Data Structures</li>
                            <li>Human Computer Interaction</li>
                        </ul>
                    </p>
                    <!-- <p><i>
                        * Please <a href="http://peterju.com/contact.html">Contact Me</a> if you have any 12 to 16 month internship opportunities related to Software Design, I'm currently looking to experience a professional software development environment.
                    </i></p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h2 class="text-center glow">
                        Portfolio
                    </h2>
                    <hr class="tagline-divider">
                    <h2 class="text-center">
                        <small>
                            Here are my main projects
                            <br>
                            Click to see more
                        </small>
                    </h2>
                </div>
                <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 text-center">
                    <div id="my-carousel" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#my-carousel" data-slide-to="1"></li>
                            <li data-target="#my-carousel" data-slide-to="2"></li>
                            <li data-target="#my-carousel" data-slide-to="3"></li>
                            <li data-target="#my-carousel" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="#jnb" data-toggle="modal">
                                    <img class="img-responsive img-full" src="img/jnblogo.png" alt="JnB WebSolutions">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#colordice" data-toggle="modal">
                                    <img class="img-responsive img-full" src="img/colordice2.png" alt="ColorDice">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#flockr" data-toggle="modal">
                                    <img class="img-responsive img-full" src="img/flockr.jpg" alt="Flockr">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#gqp" data-toggle="modal">
                                    <img class="img-responsive img-full" src="img/gqp.png" alt="GQP">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#quinterac" data-toggle="modal">
                                    <img class="img-responsive img-full" src="img/quinterac.png" alt="Quinterac">
                                </a>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#my-carousel" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#my-carousel" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <p>
                        <a href="http://www.peterju.com/portfolio/">Full Portfolio Page</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- M O D A L S -->
    <!-- JnB -->
    <div class = "modal fade" id = "jnb" role = "dialog">
        <div class = "modal-dialog">
            <div class = "modal-content">
                <div class = "modal-header">
                    <h2>JnB WebSolutions</h2><h6 class="pull-right">Web Service Company</h6>
                </div>
                <div class = "modal-body">
                    <p>
                        Tech / Skills: Web Development, Entrepreneurship, Accounting
                    </p>
                    <p>
                        I founded JnB WebSolutions on March 1st, 2015. For details on my vision, check out the "About" section at the footer of the page.
                    </p>
                    <p>
                        <a href="http://jnbwebsolutions.com">JnB WebSolutions</a>
                    </p>
                </div>
                <div class = "modal-footer">
                    <div class = "text-center">   
                        <a class = "btn btn-geckoboard-normal" data-dismiss = "modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FLOCKR -->
    <div class = "modal fade" id = "flockr" role = "dialog">
        <div class = "modal-dialog">
            <div class = "modal-content">
                <div class = "modal-header">
                    <h2>FlockR</h2><h6 class="pull-right">Android App</h6>
                </div>
                <div class = "modal-body">
                    <p>
                        Tech: Android, Java
                    </p>
                    <p>
                        Flockr is an upcoming Android app that allows users to check out where other users are 'flocking'. Whether it's to hold small study sessions or hold casual pick up sports in your neighbourhood, you can simply make a 'flock' session which will be sent out to people near your location. 
                    </p>
                    <p>
                        This is an app in development, with a working build due for April 2015.
                    </p>
                </div>
                <div class = "modal-footer">
                    <div class = "text-center">   
                        <a class = "btn btn-geckoboard-normal" data-dismiss = "modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- THISISWHYIMHUNGRY -->
    <div class = "modal fade" id = "thisiswhyimhungry" role = "dialog">
        <div class = "modal-dialog">
            <div class = "modal-content">
                <div class = "modal-header">
                    <h2>ThisIsWhyImHungry</h2><h6 class="pull-right">Business Website</h6>

                </div>

                <div class = "modal-body">
                    <p>
                        Tech: HTML5, CSS, PHP, WordPress
                    </p>
                    <p>
                        ThisIsWhyImHungry was a 'product-discovery' business which mostly functioned through its website, which was built upon WordPress. It helped customers discover novelty food and food-related items, while helping vendors sell more of their product. 
                    </p>
                    <p>
                        At its peak, TIWIH was a highly profitable website which averaged 200 unique visitors per day. Its concept, domain and resources were bought out in August 2014, and is now under operation under different branding.
                    </p>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <div class="modalthumbnail">
                                    <img class="img-responsive" src="../img/baconnaise.jpg" alt="Baconnaise">
                                    <div class="modalcaption">
                                        <h2>Baconnaise</h2>
                                        <h4>We mostly featured items that were not widely enjoyed by enough to be sold at local stores, but still had a niche market. Many people discovered Baconnaise through our website.</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <div class="modalthumbnail">
                                    <img class="img-responsive" src="../img/jivacubes.png" alt="Jiva Cubes">
                                    <div class="modalcaption">
                                        <h2>Jiva Cubes</h2>
                                        <h4>Jiva Cubes are cubes you can put directly in warm water to get fresh coffee instantly, anywhere. They were first featured on TIWIH around October, 2013.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "modal-footer">
                        <div class = "text-center">   
                            <a class = "btn btn-geckoboard-normal" data-dismiss = "modal">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GQP -->
    <div class = "modal fade" id = "gqp" role = "dialog">
        <div class = "modal-dialog">
            <div class = "modal-content">
                <div class = "modal-header">
                    <h2><a href="http://www.peterju.com/portfolio/gqp/">GQP</a></h2><h6 class="pull-right">Anonymous Product Board</h6>
                </div>
                <div class = "modal-body">
                    <p>
                        Tech: Web Development, HTML, PHP, UX
                    </p>
                    <p>
                        GQP is an anonymous, public board for quality product recommendations. 
                    </p>
                    <p>
                        <a href="http://www.peterju.com/portfolio/gqp/">Check it out here</a>.
                    </p>
                    <p>
                        Users can anonymously submit product recommendations.
                    </p>
                    <p>
                        The website was developed for a school project. It has not been made public nor has there been any effort to draw any postings or users, but effort has been put into showing how a rapidly-prototyped website would look like.
                    </p>
                    <div class = "modal-footer">
                        <div class = "text-center">   
                            <a class = "btn btn-geckoboard-normal" data-dismiss = "modal">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- QUINTERAC -->
    <div class = "modal fade" id = "quinterac" role = "dialog">
        <div class = "modal-dialog">
            <div class = "modal-content">
                <div class = "modal-header">
                    <h2>Quinterac</h2><h6 class="pull-right">Python-Based Banking Program</h6>
                </div>
                <div class = "modal-body">
                    <p>
                        Tech: Python, Linux Shell (BASH)
                    </p>
                    <p>
                        Quinterac is a Python-Based banking program which can be implemented on an ATM or a similar device. It features full console input, and two login modes (admin or customer) of differing restrictions.
                    </p>
                    <p>
                        The Front-End portion of the program handles user input, while the Back-End portion mimics server-side handling to update the customer's account balance. Admins also have the functionality to create and delete new accounts on the spot, in which they will be updated through the Back-End database manipulation.
                    </p>
                    <p>
                        It has gone through rigorous black and white box testing methods to ensure its robustness, with reports that highlight each section of the development process.
                    </p>
                    <p>
                        The source code of this is available <a href="https://github.com/peterj35/Quinterac">on my Github page</a>.
                    </p>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <div class="modalthumbnail">
                                    <img class="img-responsive" src="../img/atm.png" alt="automated teller machine">
                                    <div class="modalcaption">
                                        <h2>Front End</h2>
                                        <h4>Behaves like an ATM, and handles all user-input.</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <div class="modalthumbnail">
                                    <img class="img-responsive" src="../img/server.jpg" alt="database server">
                                    <div class="modalcaption">
                                        <h2>Back End</h2>
                                        <h4>Updates the account database to match the daily inputs from the Front End.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "modal-footer">
                        <div class = "text-center">   
                            <a class = "btn btn-geckoboard-normal" data-dismiss = "modal">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COLORDICE -->
    <div class = "modal fade" id = "colordice" role = "dialog">
        <div class = "modal-dialog">
            <div class = "modal-content">
                <div class = "modal-header">
                    <h2><a href="http://www.peterju.com/portfolio/colordice/">ColorDice</a></h2><h6 class="pull-right">Javascript</h6>
                </div>
                <div class = "modal-body">
                    <p>
                        Tech: Javascript, CSS
                    </p>
                    <h4><a href="http://www.peterju.com/portfolio/colordice/#">Check it out here.</a></h4>
                    <p>
                        ColorDice is a cool Javascript 'applet' that allows you to roll random hex colors and then highlight them for easy copying onto your clipboard.
                    </p>
                    <p>
                        I originally intended for a 'copy to clipboard' option; but apparently due to security reasaons, I felt highlighting the hex value was a way better option.
                    </p>
                    <p>
                        The source code of this is available <a href="https://github.com/peterj35/Colordice">on my Github page</a>.
                    </p>
                    <div class = "modal-footer">
                        <div class = "text-center">   
                            <a class = "btn btn-geckoboard-normal" data-dismiss = "modal">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /MODALS -->


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p class="copyright text-muted">Copyright &copy; Peter Ju 2015</p>
                    <p class="copyright text-muted">Background image by <a href="https://www.flickr.com/people/89324753@N00">John Johnston</a>; "Whistler Peak's Inukshuk" taken 23 December 2008, 12:51, modified</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="js/jquery.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Custom JavaScript -->
    <script src="js/peterscript.js" type="text/javascript"></script>

</body>
</html>