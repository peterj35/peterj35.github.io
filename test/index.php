<?php
/**
 * @link http://www.w3bees.com/2013/09/voting-system-with-jquery-php-and-mysql.html
 */
include('config.php');
# connect mysql db
dbConnect();

$query = mysql_query(
	'SELECT id, first_name, last_name, film_info, vote 
	FROM  voting
	LIMIT 0 , 15');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>jQUery Voting System</title>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div class="wrap">
		<h1><a href="http://www.w3bees.com/2013/09/voting-system-with-jquery-php-and-mysql.html">jQuery Ajax Voting System</a></h1>

		<?php while($row = mysql_fetch_array($query)): ?>
		<div class="item" data-postid="<?php echo $row['id'] ?>" data-score="<?php echo $row['vote'] ?>">
			<div class="vote-span"><!-- voting-->
				<div class="vote" data-action="up" title="Vote up">
					<i class="icon-chevron-up"></i>
				</div><!--vote up-->
				<div class="vote-score"><?php echo $row['vote'] ?></div>
				<div class="vote" data-action="down" title="Vote down">
					<i class="icon-chevron-down"></i>
				</div><!--vote down-->
			</div>

			<div class="post"><!-- post data -->
				<h2><?php echo $row['first_name'].' '.$row['last_name']?></h2>
				<p><?php echo $row['film_info'] ?></p>
			</div>
		</div><!--item-->
		<?php endwhile?>

		<p style="text-align:center; margin-top: 20px">&copy w3bees.com 2013</p>
	</div>
	<?php dbConnect(false); ?>
</body>
</html>