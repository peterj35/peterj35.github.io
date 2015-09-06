<?php
include_once('resources/init.php');

if( isset($_POST['title'], $_POST['contents'], $_POST['category'])){
	$title = trim($_POST['title']);
	$contents = trim($_POST['contents']);

	if(empty($title)){
		$errors[] = 'You need to supply a title.';
	} else if (strlen($title) > 255 ) {
		$errors[] = 'The title cannot exceed 255 characters.';
	}

	if(empty($contents)){
		$errors[] = 'You need to supply some content.';
	}

	if ( empty($errors)){
		add_post($title, $contents, $_POST['category']);

		$id = mysql_insert_id();

		header("Location: submissions.php?id={$id}");
		die();
	}
}
?>


<!DOCTYPE html>

<html>
<head>

	<meta name="description" content="Add a Product to Good Quality Products">
    <meta name="author" content="Peter Ju">

    <title>Submit a Product - Good Quality Products :: peterju.com</title>

    <!-- Bootstrap CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../css/gqpstyles.css" rel="stylesheet">
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
            <div class="collapse navbar-collapse" id="navHeaderCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http://www.peterju.com">Home</a>
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
                        <h1>Submit Product</h1>
                        <hr class="small">
                        <span class="subheading">
                        Share a Good Quality Product with the World.
                        </span>
                    </div>
                    
                </div>
            </div>
        </div>
    </header>


    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                Be sure to include:
                <ul>
                    <li>
                        What exactly it was you tried - and your experiences with it
                    </li>
                    <li>
                        Product details - cost, popularity, where to buy, etc
                    </li>
                    <li>
                        Reasons why you think this product deserves more recognition
                    </li>
                    <li>
                        A link to an online vendor, if available
                    </li>
                </ul>
                Some Tips:
                <ul>
                    <li>
                        Keep submissions brief and interesting
                    </li>
                    <li>
                        Be creative! What are some products you think only you know about?
                    </li>
                </ul>
				<?php
				if (isset($errors) && ! empty($errors)){
					echo '<ul><li>', implode('</li><li>', $errors), '</li></ul>';
				}
				?>

				<form method="post" action = "" >
				    <div class="row control-group">
                        <div class="col-xs-12">
						<label for = "category">Product Category</label>
                        <br>
						<select name = "category" class="selectpicker">
						<?php
						foreach ( get_categories() as $category){
							?>
							<option value="<?php echo $category['id']; ?>"> <?php echo $category['name']; ?> </option>
							<?php
						}
						?>
						</select>
                        </div>
					</div>
                    <div class="row control-group">
                        <div class="col-xs-12">
    						<label for = "title">Name of Product</label>
    						<input class="form-control" type = "text" name = "title" value = "<?php if (isset($_POST['title'])) echo $_POST['title']; ?>">
					   </div>
                    </div>
                    <div class="row control-group">
                        <div class="col-xs-12">
    						<label for = "contents">Description</label>
    						<textarea class="form-control" name = "contents" rows = "15" cols = "50"><?php if (isset($_POST['contents'])) echo $_POST['contents']; ?></textarea>
                        </div>
					</div>
                    <br>
					<div class="row">
                        <div class="text-center">
						  <button type = "submit" class="btn btn-success">Add This Product!</button>
                          <p class="text-muted">Keep in mind that you cannot edit your post once it has been submitted.</p>
                        </div>
					</div>
				</form>
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
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="../../js/peterscript.js" type="text/javascript"></script>

</body>
</html>