$(document).ready(function(){
	//Canvas stuff
	var canvas = $("#canvas")[0];
	var ctx = canvas.getContext("2d");
	var w = $("#canvas").width();
	var h = $("#canvas").height();

	var cw = 10;
	var d1;
	var d2;
	var food1;
	var food2;
	var score1;
	var score2;

	var snake1_array;
	var snake2_array;

	function init()
	{
		d1 = "right";
		d2 = "right";

		create_snake1();
		create_snake2();

		create_food();

		score1 = 0;
		score2 = 0;

		if(typeof game_loop != "undefined") clearInterval(game_loop);
		game_loop = setInterval(paint,60);
	}
	init();


	function create_snake1()
	{
		var length = 5;
		snake1_array = [];
		for(var i = length-1; i>=0; i--)
		{
			snake1_array.push({x: i, y:0});
		}
	}
	function create_snake2()
	{
		var length = 5;
		snake2_array = [];
		for(var i = length-1; i>=0; i--)
		{
			snake2_array.push({x: i, y:44});
		}
	}

	//Food
	function create_food()
	{
		food1 = {
			x: Math.round(Math.random()*(w-cw)/cw),
			y: Math.round(Math.random()*(h-cw)/cw),
		};
		food2 = {
			x: Math.round(Math.random()*(w-cw)/cw),
			y: Math.round(Math.random()*(h-cw)/cw),
		};
		//Creates cell with x/y between 0-44
		//Because there are 45 (450/10) positions across rows and columns
	}




	function paint()
	{
		//Painting BG (every frame)
		ctx.fillStyle = "white";
		ctx.fillRect(0, 0, w, h);
		ctx.strokeStyle = "black";
		ctx.strokeRect(0, 0, w, h);

		var nx = snake1_array[0].x;
		var ny = snake1_array[0].y;

		var ox = snake2_array[0].x;
		var oy = snake2_array[0].y;

		if(d1 == "right")nx++;
		else if(d1 == "left")nx--;
		else if(d1 == "up")ny--;
		else if(d1 == "down")ny++;

		if(d2 == "right")ox++;
		else if(d2 == "left")ox--;
		else if(d2 == "up")oy--;
		else if(d2 == "down")oy++;

		//Snake1 Game Over Clauses
		if(nx == -1 || nx == w/cw || ny == -1 || ny == h/cw || check_collision(nx, ny, snake1_array) || check_collision(ox, oy, snake1_array))
		{
			ctx.fillText("Blue Loses!", cw*2, h/2)
			//restart game
			init();
			return;
		}

		//Snake2 Game Over Clauses
		if(ox == -1 || ox == w/cw || oy == -1 || oy == h/cw || check_collision(ox, oy, snake2_array) || check_collision(nx, ny, snake2_array))
		{
			ctx.fillText("Purp Loses!", cw*2, h/2)
			//restart game
			init();
			return;
		}

		//Eating Logic, Moving Snakes
		//Snake 1
		if(nx == food1.x && ny == food1.y || nx == food2.x && ny == food2.y)
		{
			var tail1 = {x: nx, y: ny};
			score1++;
			create_food();
		}
		else
		{
			var tail1 = snake1_array.pop();
			tail1.x = nx; tail1.y = ny;
		}
		
		if(ox == food1.x && oy == food1.y || ox == food2.x && oy == food2.y)
		{
			var tail2 = {x: ox, y: oy};
			score2++;
			create_food();
		}
		else
		{
			var tail2 = snake2_array.pop();
			tail2.x = ox; tail2.y = oy;
		}
		snake1_array.unshift(tail1);
		snake2_array.unshift(tail2);


		//Painting Snakes
		for(var i =0; i<snake1_array.length; i++)
		{
			var c = snake1_array[i];
			paint_cell_blue(c.x, c.y)
		}
		for(var j =0; j<snake2_array.length; j++)
		{
			var d = snake2_array[j];
			paint_cell_purple(d.x, d.y)
		}

		paint_cell_red(food1.x, food1.y);
		paint_cell_red(food2.x, food2.y);

		ctx.fillStyle = "#6666FF";
		var score1_text = "Blue Snake: " + score1;
		ctx.fillText(score1_text, 5, h/2-5);

		var score2_text = "Purp Snake: " + score2;
		ctx.fillText(score2_text, 5, h/2+5);





	}

	function paint_cell_blue(x, y)
	{
		ctx.fillStyle = "#0066FF";
		ctx.fillRect(x*cw, y*cw, cw, cw);
		ctx.strokeStyle = "white";
		ctx.strokeRect(x*cw, y*cw, cw, cw)
	}
	function paint_cell_purple(x, y)
	{
		ctx.fillStyle = "#993399";
		ctx.fillRect(x*cw, y*cw, cw, cw);
		ctx.strokeStyle = "white";
		ctx.strokeRect(x*cw, y*cw, cw, cw)
	}
	function paint_cell_red(x, y)
	{
		ctx.fillStyle = "red";
		ctx.fillRect(x*cw, y*cw, cw, cw);
		ctx.strokeStyle = "white";
		ctx.strokeRect(x*cw, y*cw, cw, cw)
	}

	function check_collision(x, y, array)
	{
		//This function will check if the provided x/y coordinates exist
		//in an array of cells or not
		for(var i = 0; i < array.length; i++)
		{
			if(array[i].x == x && array[i].y == y)
			 return true;
		}
		return false;
	}


	//Controls
	$(document).keydown(function(e){
		var key = e.which;
		if(key == "37" && d1 != "right") d1 = "left";
		else if(key == "38" && d1 != "down") d1 = "up";
		else if(key == "39" && d1 != "left") d1 = "right";
		else if(key == "40" && d1 != "up") d1 = "down";
		else if(key == "65" && d2 != "right") d2 = "left"; 	//A key
		else if(key == "87" && d2 != "down") d2 = "up";		//W key
		else if(key == "68" && d2 != "left") d2 = "right";	//D key
		else if(key == "83" && d2 != "up") d2 = "down";		//S key
	})




})

