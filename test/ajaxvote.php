<?php
/**
 * jQuery Voting System
 * @link http://www.w3bees.com/2013/09/voting-system-with-jquery-php-and-mysql.html
 */

include('config.php');
# start new session
session_start();

if ($_SERVER['HTTP_X_REQUESTED_WITH']) {
	if (isset($_POST['postid']) AND isset($_POST['action'])) {
		$postId = (int) mysql_real_escape_string($_POST['postid']);
		# check if already voted, if found voted then return
		if (isset($_SESSION['vote'][$postId])) return;
		# connect mysql db
		dbConnect();

		# query into db table to know current voting score 
		$query = mysql_query("
			SELECT vote
			from voting
			WHERE id = '{$postId}' 
			LIMIT 1" );

		# increase or dicrease voting score
		if ($data = mysql_fetch_array($query)) {
			if ($_POST['action'] === 'up'){
				$vote = ++$data['vote'];
			} else {
				$vote = --$data['vote'];
			}
			# update new voting score
			mysql_query("
				UPDATE voting
				SET vote = '{$vote}'
				WHERE id = '{$postId}' ");

			# set session with post id as true
			$_SESSION['vote'][$postId] = true;
			# close db connection
			dbConnect(false);
		}
	}
}
?>