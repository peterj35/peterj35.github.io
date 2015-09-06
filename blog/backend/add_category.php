<?php

include_once('../resources/init.php');


if( isset($_POST['name'])){
	$name = trim($_POST['name']);

	if ( empty($name)){
		$error = 'You must submit a category name.';
	} else if( category_exists('name', $name)){
		$error = 'That category already exists.';
	} else if( strlen($name) > 24 ){
		$error = 'Category names can only be up to 24 characters.';
	}

	if ( ! isset($error)){
		add_category($name);
		header('Location: category_list.php');
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add a Category</title>

</head>

<body>
	<h1>Add a Category</h1>

	<?php

	if ( isset($error)){
		echo "<p> {$error} </p>\n";
	}
	?>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>
		<div>
			<input type="submit" value="Add a Category">
		</div>
	</form>
</body>
</html>