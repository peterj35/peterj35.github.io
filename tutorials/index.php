<?php
    $file = fopen("tutorials.txt", "r");
    $i=0;
    $cat=0;
    $categories = [];
    while (!feof($file)) {
        $line = fgets($file);
        $timestamp = substr($line, 0, strpos($line, "|"));
        $rest = str_replace($timestamp . "|", "", $line);
        $name = substr($rest, 0, strpos($rest, "|"));
        $rest2 = str_replace($name . "|", "", $rest);
        $category = substr($rest2, 0, strpos($rest2, "|"));
        $link = str_replace($category . "|", "", $rest2);
        $myarray[$i] = array();
        $myarray[$i]['name'] = $name;
        $myarray[$i]['category'] = $category;
        $myarray[$i]['link'] = $link;
        if (!in_array($category, $categories))
        {
            $categories[$cat] = $category;
            ++$cat;
        }
        ++$i;
    }
    fclose($file);
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="description" content="Peter Ju's tutorials about web development, programming, on peterju.com">
    <meta name="author" content="Peter Ju">

    <title>Tutorials :: peterju.com</title>

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/styles.css" rel="stylesheet">
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
    <header class="intro-header" style="background-image: url('../img/tutorialbg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Tutorials</h1>
                        <hr class="small">
                        <span class="subheading">
                        &nbsp;
                        </span>
                    </div>
                    
                </div>
            </div>
        </div>
    </header>

    <!-- Content -->
    <!-- OUTDATED NEEDS REWRITE -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h1>Tutorial Archives</h1>
            <?php
                for ($c = 0; $c < $cat; $c++){
                ?>
                    <div class = "sub-header">
                        <h3><?php echo $categories[$c]; ?></h3>
                    </div>
                    <?php
                        for ($a = 0; $a < $i; $a++){
                            if ( $myarray[$a]['category'] == $categories[$c] ){
                            ?>
                            <li><a href = "<?php echo $myarray[$a]['link']; ?>"><?php echo $myarray[$a]['name']; ?></a></li>
                        <?php       
                            }
                            }
                            }
                            ?>
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
    <script src="../js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="../js/peterscript.js"></script>
</body>
</html>