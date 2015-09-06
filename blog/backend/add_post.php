<?php
include_once('../resources/init.php');

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

	if( ! category_exists('id', $_POST['category'])){
		$errors[] = 'Category does not exist.';
	}

	if ( empty($errors)){
		add_post($title, $contents, $_POST['category']);

		$id = mysql_insert_id();

		header("Location: backend.php?id={$id}");
		die();
	}
}
?>


<!DOCTYPE html>

<html>
<head>

	<style>
	label {display: block; }
	</style>
	<title> Add a Post </title>
</head>

<body>
	<h1> Add a Post </h1>

	<?php
	if (isset($errors) && ! empty($errors)){
		echo '<ul><li>', implode('</li><li>', $errors), '</li></ul>';
	}
	?>

	<form action = "" method="post">
		<div>
			<label for = "title"> Title </label>
			<input type = "text" name = "title" value = "<?php if (isset($_POST['title'])) echo $_POST['title']; ?>">
		</div>
		<div>
			<label for = "contents"> Contents </label>
			<textarea name = "contents" rows = "15" cols = "50"><?php if (isset($_POST['contents'])) echo $_POST['contents']; ?></textarea>
		</div>
		<div>
			<label for = "category"> Category </label>
			<select name = "category">
			<?php
			foreach ( get_categories() as $category){
				?>
				<option value="<?php echo $category['id']; ?>"> <?php echo $category['name']; ?> </option>
				<?php
			}
			?>
			</select>
		</div>
		<div>
			<input type = "submit" value = "Add Post">
		</div>
	</form>
</body>
</html>