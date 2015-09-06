<?php
include_once('resources/init.php');


$posts = ( isset($_GET['id'])) ? get_posts($_GET['id']) : get_posts();
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="Peter Ju. Peter's Blog at peterju.com.">
    <meta name="author" content="Peter Ju">

	<title>Peter Ju - Blog</title>

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/styles.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Header -->
    <div class="brand">Peter's Development Blog</div>
    <div class="address-bar">Homebrewed PHP & MySQL!</div>

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
                        <li>
                            <a href="http://peterju.com/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                        </li>
                        <li>
                            <a href="http://peterju.com/portfolio/"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Portfolio</a>
                        </li>
                        <li class="active">
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
    <ol id="results">
    </ol>
    <div class="animation_image" style="display:none" align="center"><img src="ajax-loader.gif"></div>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class = "col-md-10 text-justify">
                    <?php
                        foreach ($posts as $post) {
                            if ( ! category_exists('name', $post['name'])){
                                $post['name'] = 'Misc';
                            }
                        ?>
                        <div class = "panel panel-default">
                            <div class = "panel-body paddingSides">
                                <h2><a href="index.php?id=<?php echo $post['post_id']; ?>"><?php echo $post['title']; ?></a></h2>
                                <p> Posted on <?php echo date('d-m-Y h:i:s', strtotime($post['date_posted'])); ?> 
                                in <a href="category.php?id=<?php echo $post['category_id']; ?>"><?php echo $post['name']; ?></a>
                                </p>

                                <p><?php echo nl2br($post['contents'])?></p>
                            </div>
                        </div>
                        <?php
                        }
                    ?>
                </div>
                <div class="col-md-2 text-justify">
                    <div class = "list-group dynamic">
                        <div class = "panel">
                            <div class = "panel-body paddingTop paddingBot">
                                <h4 class = "list-group-item-heading">Blog Categories</h4>
                                <?php
                                foreach ( get_categories() as $category ){
                                ?>
                                <p class = "list-group-item-texxt"><a href="category.php?id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="../js/peterscript.js" type="text/javascript"></script>

</body>
</html>