<?php
include_once('resources/init.php');

$posts = get_posts(null, $_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="Submissions of Good Quality Products GQP">
    <meta name="author" content="Peter Ju">

    <title>GQP Submissions :: peterju.com</title>

    <!-- Bootstrap CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../css/styles.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css">

    <!-- Google Stuff -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-54918043-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body>

	<!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Mobile Display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target = "#navHeaderCollapse">
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
                <!-- Home Icon -->
                <a class="brand navbar-brand" href="http://www.peterju.com">Peter Ju</a>
            </div>

            <!-- Collect Nav Elements -->
            <div class="collapse navbar-collapse navHeaderCollapse" id="navHeaderCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http://www.peterju.com">Home</a>
                    </li>
                    <li>
                        <a href="http://www.peterju.com/about.html">About</a>
                    </li>
                    <li>
                        <a href="http://www.peterju.com/blog/">Blog</a>
                    </li>
                    <li>
                        <a href="http://www.peterju.com/tutorials/">Tutorials</a>
                    </li>
                    <li>
                        <a href="http://www.peterju.com/portfolio/">Portfolio</a>
                    </li>
                    <li>
                        <a href="http://www.peterju.com/contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <header class="intro-header" style="background-image: url('../../img/gqpbg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>GQP</h1>
                        <hr class="small">
                        <span class="subheading">
                        <a class="btn btn-default" href="http://www.peterju.com/portfolio/gqp/">What is GQP?</a>
                        </span>
                    </div>
                    
                </div>
            </div>
        </div>
    </header>



    <!-- Content -->
	<div class = "container">
		<div class = "row">
			<div class = "col-md-8 text-justify">
				
					<?php
					foreach ($posts as $post) {
						if ( ! category_exists('name', $post['name'])){
							$post['name'] = 'Misc';
						}
					?>
					<div class = "panel panel-default">
						<div class = "panel-body paddingSides">
							<h2><a href="submissions.php?id=<?php echo $post['post_id']; ?>"><?php echo $post['title']; ?></a></h2>
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

			<div class = "col-lg-2">
				<div class = "list-group dynamic">
					<div class = "panel">
						<div class = "panel-body paddingTop paddingBot">
							<h3 class = "list-group-item-heading">Submission Categories</h3>
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

	<!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p class="copyright text-muted">Copyright &copy; Peter Ju 2014</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="../js/peterscript.js" type="text/javascript"></script>

</body>
</html>