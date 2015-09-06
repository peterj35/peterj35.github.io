<?php
include_once('../resources/init.php');

$posts = ( isset($_GET['id'])) ? get_posts($_GET['id']) : get_posts();
?>




<!DOCTYPE html>
<html>
<head>

	<title>peterju.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/bootstrap.min.css" rel = "stylesheet">
	<link href="../css/styles.css" rel="stylesheet">

	<title> Backend </title>
</head>

<body>
	<nav>
		<ul>
			<li><a href = "../index.php">Index</a></li>
			<li><a href = "backend.php">Backdex</a></li>
			<li><a href = "add_post.php">Add a Post</a></li>
			<li><a href = "add_category.php">Add a Category</a></li>
			<li><a href = "category_list.php">Category List</a></li>
		</ul>
	</nav>

	<h1>Peter's Blog</h1>

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

		<div><?php echo nl2br($post['contents'])?> </div>

		<menu>
			<ul>
				<li><a href = "delete_post.php?id=<?php echo $post['post_id']; ?>">Delete This Post</a></li>
				<li><a href = "edit_post.php?id=<?php echo $post['post_id']; ?>">Edit this Post</a></li>
			</ul>
		</menu>



		<?php
	}
	?>

</body>
</html>