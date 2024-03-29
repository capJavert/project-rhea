<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Three Codetroopers">

    <title>Three Codetroopers</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Phaser.js -->
	<script src="js/phaser.min.js"></script>
    <script src="src/Boot.js"></script>
    <script src="src/Preload.js"></script>
    <script src="src/Player.js"></script>
    <script src="src/Monster.js"></script>
    <script src="src/Game.js"></script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-code"></i>  <span class="light">Three</span> Codetroopers
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#troopers-game">Troopers game</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Social</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading hidden">Three Codetroopers</h1>
                        <img id="logo" src="img/three_code_troopers_logo.png" alt="Three Codetroopers" /><br /><br />
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About us</h2>
                <p>We are students @ <a href="http://foi.unizg.hr/" target="_blank">FOI Varaždin</a></p>
                <p></p>
                <p>We know Web design and programming, Android, iOS apps development.. also here and there (when our professors make us) we write something in C++</p>
			</div>
        </div>
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>We are not always so dark and moooody as our website, so here is a look to the other(brighter) side</h2>
			</div>
			
			<div class="clearfix"></div>
			<a href="#troopers-game" class="btn btn-circle page-scroll">
				<i class="fa fa-angle-down animated"></i>
			</a>
			
			<div class="clearfix margin-big"></div>
        </div>
    </section>
	
	<section id="troopers-game">
	    <div id="game"></div>
		<div id="orientation"></div>
		<script type="text/javascript">
			(function () {

				var game = new Phaser.Game(7000, 768, Phaser.CANVAS, 'game');

				game.state.add('Boot', Rhea.Boot);
				game.state.add('Preloader', Rhea.Preloader);
				//game.state.add('Player', Rhea.Player);
				game.state.add('Game', Rhea.Game);

				game.state.start('Boot');

			})();
		</script>
	</section>
	
    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>We are looking forward to Try{Code}Catch Hackathon</h2>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a target="_blank" href="https://github.com/nikolamajcen/" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">nikolamajcen</span></a>
                    </li>
					<li>
                        <a target="_blank" href="https://github.com/mtudjan/" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">mtudjan</span></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://github.com/capJavert/" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">capJavert</span></a>
                    </li>
					<li>
                        <a target="_blank" href="https://github.com/1susec/" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">1susec</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Three Codetroopers</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
