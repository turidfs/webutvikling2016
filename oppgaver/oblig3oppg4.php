<html>

	<head>
		<title>Oblig 3 - Turid Irene Folkestad Sønsteby</title>
		<meta charset="UTF-8"/>
		<link href="css/webcss_v2.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<header class="box">
			<h1 class="box">Oblig 3 - oppgave 4</h1>
            <?php include 'webutviklingMenu.php'; ?>
            <p>Lag en enkel nettside der du eksperimenterer med avanserte HTML og CSS funksjoner. Det som burde være med er video, CSS animasjoner, MathML, SVG og webfonter. Eksemplene skal lages selv men de trenger ikke å være veldig avanserte. Videofiler og fonter kan hentes fra nett.</p>
		</header>

		<main class="box">
			<!-- Øvningsoppgavene -->
			<div class="box normal">

				<h2>Øvings oppgaver</h2>

				<!-- Oppgave 4 -->
                <div class="box oppg" id="video">
					<h3 class="solve">Video</h3>
                    <video width="500" height="300" controls>
                        <source src="movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <br />
                    <video width="500" height="300" autoplay>
                        <source src="movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
				</div>
                
				<div class="box oppg" id="animasjon">
					<h3 class="solve">CSS animasjoner</h3>
				</div>
                
                <div class="box oppg" id="mathML">
					<h3 class="solve">MathML</h3>
				</div>
                
                <div class="box oppg" id="svg">
					<h3 class="done">SVG</h3>
                    <!-- Alternativ 1, pixler -->
                    <h4>Alternativ 1, pixler</h4>
                    <svg height="100" width="150" class="logo">
                        <defs>
                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
                                <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
                            </linearGradient>
                        </defs>
                        <ellipse cx="60" cy="50" rx="60" ry="50" fill="url(#grad1)" />
                        <text fill="#ffffff" font-size="45" font-family="Verdana" x="25" y="60">ZiP</text>
                        Sorry, your browser does not support inline SVG.
                    </svg>
                    <svg width="100" height="100" class="menu">
                        <circle cx="50" cy="50" r="50" fill="yellow" />
                        <rect x="25" y="20" rx="5" ry="10" width="50" height="10" style="fill:rgb(0,0,255);" />
                        <rect x="25" y="45" rx="5" ry="10" width="50" height="10" style="fill:rgb(0,0,255);" />
                        <rect x="25" y="70" rx="5" ry="10" width="50" height="10" style="fill:rgb(0,0,255);" />
                    </svg>
                    <svg width="100" height="100" class="menu">
                        <circle cx="50" cy="50" r="50" fill="yellow" />
                        <rect x="25" y="20" rx="5" ry="10" width="50" height="10" style="fill:rgb(0,0,255);" />
                        <text fill="#000" font-size="20" font-family="Verdana" x="20" y="55">Home</text>
                        <rect x="25" y="70" rx="5" ry="10" width="50" height="10" style="fill:rgb(0,0,255);" />
                    </svg>

                    <!-- Alternativ 2, prosent to bolker -->
                    <h4>Alternativ 2, prosent to bolker</h4>
                    <svg height="50%" width="45%" class="logo">
                        <defs>
                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
                                <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
                            </linearGradient>
                        </defs>
                        <ellipse cx="50%" cy="40%" rx="50%" ry="35%" fill="url(#grad1)" />
                        <text fill="#ffffff" font-size="300%" font-family="Verdana" x="20%" y="50%">ZiP</text>
                        Sorry, your browser does not support inline SVG.
                    </svg>
                    <svg width="45%" height="50%" class="menu">
                        <circle cx="55%" cy="45%" r="40%" fill="yellow" />
                        <rect x="30%" y="20%" rx="5" ry="10" width="50%" height="10%" style="fill:rgb(0,0,255);" />
                        <text fill="#000" font-size="20" font-family="Verdana" x="30%" y="50%">Home</text>
                        <rect x="30%" y="60%" rx="5" ry="10" width="50%" height="10%" style="fill:rgb(0,0,255);" />
                    </svg>

                    <!-- Alternativ 3, prosent en bolk -->
                    <h4>Alternativ 3, prosent en bolk</h4>
                    <svg height="50%" width="100%" class="logoMeny">
                        <defs>
                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
                                <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
                            </linearGradient>
                        </defs>
                        <ellipse cx="25%" cy="40%" rx="25%" ry="35%" fill="url(#grad1)" />
                        <text fill="#ffffff" font-size="300%" font-family="Verdana" x="10%" y="50%">ZiP</text>

                        <circle cx="78%" cy="45%" r="25%" fill="yellow" />
                        <rect x="65%" y="22%" rx="5" ry="10" width="25%" height="10%" style="fill:rgb(0,0,255);" />
                        <text fill="#000" font-size="20" font-family="Verdana" x="66%" y="50%">Home</text>
                        <rect x="65%" y="58%" rx="5" ry="10" width="25%" height="10%" style="fill:rgb(0,0,255);" />

                        Sorry, your browser does not support inline SVG.
                    </svg>
				</div>
                
                <div class="box oppg" id="webfonter">
					<h3 class="solve">Webfonter</h3>
                    <h1>Nivå 1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu efficitur erat. Curabitur et ullamcorper purus. Aenean pretium hendrerit nulla, vel elementum ipsum venenatis mollis. Fusce eu tempus nulla. Integer ornare egestas est, id tincidunt diam aliquet eu. Nulla pulvinar, lacus id condimentum laoreet, lorem neque dictum quam, eleifend facilisis ante nunc facilisis diam. Aenean sed malesuada arcu. Vestibulum malesuada metus metus, ac commodo elit convallis eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras vestibulum accumsan mattis.</p>
                    <h2>Nivå 2</h2>
                        <p>Vestibulum iaculis nulla risus, ac interdum nisl ultrices non. Vivamus eu urna id mi feugiat commodo. Ut placerat nibh in neque aliquam imperdiet. Maecenas quis blandit purus, ac egestas ex. Phasellus ex velit, feugiat non eros et, blandit sodales elit. Aliquam erat volutpat. Integer congue viverra felis et tempor. Vestibulum imperdiet consectetur massa, non dictum nulla efficitur vel. Morbi id tristique tellus, id porttitor arcu. Cras sed porta leo. Nam efficitur, magna ullamcorper vulputate placerat, nunc sapien pretium ante, a maximus sapien mi in sem.</p>
                    <h3>Nivå 3</h3>
                        <p>In bibendum eros at venenatis rhoncus. Vestibulum ac ultricies ipsum. Morbi ullamcorper sollicitudin enim vel aliquet. Fusce pulvinar, magna nec interdum congue, ligula purus ultricies elit, et ultricies massa elit vitae mauris. Quisque sodales cursus blandit. Proin egestas eu neque sit amet accumsan. Maecenas dignissim scelerisque tempus. Nulla congue eget eros sed sollicitudin. Donec luctus posuere porttitor. Ut at orci eget tellus dignissim varius vitae vitae mauris. Vestibulum pharetra euismod felis. Integer vel varius nisl, vel eleifend metus. Proin id efficitur metus, sit amet pellentesque nibh. Suspendisse tortor ex, iaculis iaculis molestie at, viverra nec leo. In gravida non lorem sed semper.</p>
                    <h4>Nivå 4</h4>
                        <p>Aliquam erat volutpat. Vestibulum in ornare elit. Donec leo sem, elementum non varius at, consequat condimentum nunc. Aenean fermentum, nunc ac pellentesque iaculis, sapien elit rutrum lacus, a dapibus nunc erat a augue. Phasellus ultricies, nibh et bibendum pellentesque, erat dolor feugiat neque, ac ultrices ante est dictum purus. Sed varius nisi quis leo finibus, id lacinia leo luctus. Nulla maximus tempus risus, id pharetra nisl elementum sit amet. Ut maximus sapien in vulputate tempus. Sed pretium sodales neque, eget ultrices elit aliquam condimentum. Vestibulum sodales tristique semper. Vivamus interdum quis velit ut condimentum. Sed augue dui, aliquam nec maximus commodo, rhoncus et neque.</p>
                    <h5>Nivå 5</h5>
                        <p>Curabitur egestas metus vitae dui ultrices iaculis. Aliquam sed mattis quam. Nam tellus nibh, varius commodo metus quis, placerat sodales mauris. Donec vel maximus risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus mollis eros quis ultrices. Sed venenatis tempus purus, vitae auctor risus viverra vitae. Suspendisse potenti. Phasellus viverra odio eu gravida cursus. Donec sed mauris quis nisl mattis mollis. Maecenas maximus pulvinar enim, at egestas lacus luctus at.</p>
                    <h6>Nivå 6</h6>
                        <p>Sed sollicitudin, enim at efficitur congue, sapien risus tempus velit, a molestie velit odio a felis. Vivamus tempus gravida laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Donec eget nulla dignissim, accumsan dui eget, aliquet metus. Integer ornare a metus a tempor. Curabitur eros velit, lobortis ut venenatis vel, congue in est. Curabitur fermentum posuere leo ac elementum.</p>
				</div>
                
			</div>
		</main>

		<aside class="quick box">
			<ul>
				<li><a href="#top">Top</a></li>
                <li><a href="#video">Video</a></li>
				<li><a href="#animasjon">CSS animasjoner</a></li>
				<li><a href="#mathML">MathML</a></li>
				<li><a href="#svg">SVG</a></li>
                <li><a href="#webfonter">Webfonter</a></li>
			</ul>
		</aside>

	</body>
</html>
