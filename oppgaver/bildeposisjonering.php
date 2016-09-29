<!DOCTYPE html>
<html lang="nb">

	<head>
		<title>Oblig 1, oppgave 5 - Turid Irene Folkestad Sønsteby</title>
		<meta charset="UTF-8"/>
		<link href="css/webcss.css" type="text/css" rel="stylesheet" />
        <style>
            body, header {
               width: 95vw; 
            }
            main {
                width: 95vw;
                height: 95vh;
            }
            img {
                display: block;
                margin: auto;
                position: relative;
                vertical-align: middle;
            }
            main {
              display: flex;
              flex-direction: column;
              justify-content: center;
            }
        </style>
	</head>
	<body>
		<header id="top" class="box">
			<h1 class="box">Bildeposisjonering</h1>
            <?php include 'webutviklingMenu.php'; ?>
		</header>
		
		<main class="box">
        <img src="image/katt.jpg" alt="Bilde av en katt" align="middle">
		</main>	
        
	</body>
</html>