/**
* jQuery Voting System with PHP and MySQL
* @author Resalat Haque
* @link http://www.w3bees.com/2013/09/voting-system-with-jquery-php-and-mysql.html
*/

$(document).ready(function(){
	// ajax setup
	$.ajaxSetup({
		url: 'ajaxvote.php',
		type: 'POST',
		cache: 'false'
	});

	// any voting button (up/down) clicked event
	$('.vote').click(function(){
		var self = $(this); // cache $this
		var action = self.data('action'); // grab action data up/down 
		var parent = self.parent().parent(); // grab grand parent .item
		var postid = parent.data('postid'); // grab post id from data-postid
		var score = parent.data('score'); // grab score form data-score

		// only works where is no disabled class
		if (!parent.hasClass('.disabled')) {
			// vote up action
			if (action == 'up') {
				// increase vote score and color to orange
				parent.find('.vote-score').html(++score).css({'color':'orange'});
				// change vote up button color to orange
				self.css({'color':'orange'});
				// send ajax request with post id & action
				$.ajax({data: {'postid' : postid, 'action' : 'up'}});
			}
			// voting down action
			else if (action == 'down'){
				// decrease vote score and color to red
				parent.find('.vote-score').html(--score).css({'color':'red'});
				// change vote up button color to red
				self.css({'color':'red'});
				// send ajax request
				$.ajax({data: {'postid' : postid, 'action' : 'down'}});
			};

			// add disabled class with .item
			parent.addClass('.disabled');
		};
	});
});