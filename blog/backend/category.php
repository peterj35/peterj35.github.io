<?php
include_once('../resources/init.php');

$posts = get_posts(null, $_GET['id']);
?>




<!DOCTYPE html>
<html>
<head>

	<title>Blog : peterju.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/bootstrap.min.css" rel = "stylesheet">
	<link href="../css/styles.css" rel="stylesheet">

	<title> My Blog </title>
</head>

<body>

	<div class = "navbar navbar-inverse navbar-static-top">
		<div class = "container">

				<a href = "../index.html" class = "navbar-brand"><strong>peterju.com</strong></a>

				<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
				</button>

				<div class = "collapse navbar-collapse navHeaderCollapse">

					<ul class = "nav navbar-nav navbar-right">

						<li><a href = "../index.html">Home</a></li>
						<li><a href = "../about.html">About Me</a></li>
						<li class = "dropdown">

							<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Projects<b class = "caret"></b></a>
							<ul class = "dropdown-menu">
								<li><a href = "../programming.html">My Programming</a></li>
								<li><a href = "../tutorial/tutorial.html">My Tutorials</a></li>
								<li><a href = "../cyoaindex.html">Choose your own Adventure</a></li>
								<li><a href = "#">Korean Food and Cuisine</a></li>
							</ul>
						</li>
						<li class = "active"><a href = "index.php">Blog</a></li>
						<li><a href = "../contact.html">Contact</a></li>

					</ul>

				</div>
		</div>
	</div>



	<div class = "container">

		<div class = "jumbotron text-center">
			<h2>My Blog</h2>
			<p>This is my personal blog page - where I will list updates that I make, or updates that I plan to make.</p>
		</div>

	</div>

	<div class = "container">

		<div class = "row">

			<div class = "col-md-6 text-justify">
					<?php
					foreach ($posts as $post) {
						if ( ! category_exists('name', $post['name'])){
							$post['name'] = 'Misc';
						}
						?>
						<h2><a href="index.php?id=<?php echo $post['post_id']; ?>"><?php echo $post['title']; ?></a></h2>
						<p> Posted on <?php echo date('d-m-Y h:i:s', strtotime($post['date_posted'])); ?> 
						in <a href="category.php?id=<?php echo $post['category_id']; ?>"><?php echo $post['name']; ?></a>
						</p>

						<div class = "paddingBot"><?php echo nl2br($post['contents'])?> </div>


					<?php
					}
					?>

			</div>
		</div>
	</div>

	<br>
	<br>
	<br>

	<div class = "navbar navbar-default navbar-fixed-bottom">

		<div class = "container">
			<p! class = "navbar-text pull-left">Site Built By Peter Ju</p!>
			<a href = "https://soundcloud.com/peterv2y/likes" class = "navbar-btn btn-warning btn pull-right">Check out my SoundCloud! I don't produce any music!</a>
		</div>

	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src = "js/bootstrap.js"></script>	
</body>
</html>