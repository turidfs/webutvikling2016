<html>

	<head>
		<title>Oblig 5 - Turid Irene Folkestad Sønsteby</title>
		<meta charset="UTF-8"/>
		<link href="css/webcss_v2.css" type="text/css" rel="stylesheet" />
        <style>
            .installasjon img {
                border: 5px solid black;
            }
            .installasjon a img {
                border-color: blue;
            }
            .installasjon figure {
                width: 40%;
                display: block;
            }
            .installasjon {
                display: flex;
                flex-wrap: wrap;
            }
            .installasjon h5 {
                width: 100%;
            }
        </style>
	</head>
	<body>
		<header class="box">
			<h1 class="box">Oblig 5</h1>
            <?php include 'webutviklingMenu.php'; ?>
            
            <!-- Litt generell info -->
            <div id="generelt" class="info box">
            <h3>Informasjon fra foreleser om oppgavene</h3>
            </div>
		</header>
		
		<main class="box">
			<!-- Øvningsoppgavene -->
			<section class="box normal">
				
				<h2>Øvings oppgaver</h2>
				
				<!-- Oppgave 1 -->
				<article class="box oppg" id="oppg1">
					<h3 class="solve">Oppgave 1</h3>
				    <h4>Oppgaven</h4>
				    <p>Lag din egen WordPress side der du tester ut det å bruke et CMS system. Dere skal enten lage en egen theme fra bunn eller gjøre ønskede endringer på en eksisterende theme. Det kan være ganske avansert å lage et theme fra bunn av, så for de fleste vil det være nok å gjøre endringer i et eksisterende theme dere finner i WordPress.org theme repository eller andre steder på nett.</p>
                    <p>Det vil være enklest å kjøre WordPress lokalt på egen maskin i WAMP (Windows) eller MAMP (Mac) som vist i forelesningen. Da det ikke skal leveres en link til WordPress siden så vil det ikke være nødvendig å flytte lokal installasjon til en server. Du kan i oppgaven IKKE bruke WordPress.com da denne løsningen ikke gir tilgang til å gjøre endringer i themes eller installere selv valgte plugins. Ask.hiof.no er et dårlig alternativ for WordPress grunnet noen rettighetsproblemer.</p>
                    <p>Siden dette er den eneste ikke-eksamens oppgaven i obligen er det forventet at dere gjør en del jobb i forbindelse med tilpassing av theme/laging av eget theme og i forbindelse med bruk av plugins. Som alltid kan dere fylle nettstedet med demo data så dere trenger ikke å finne opp informasjon, men nettstedet skal ha et tema.</p>
                    <p>Som et minimum skal dere gjøre følgende:</p>
                    <ul>
                        <li>Sette opp og installere WordPress</li>
                        <li>Installere og modifisere et theme eller lage et eget theme tilpasset siden
                            <ul>
                                <li>Themet skal modifiseres til å passe til innholdet på siden</li>
                            </ul>
                        </li>
                        <li>Installere og sette opp 2 plugins</li>
                        <li>Eksperimentere med sidebar/footer widgets</li>
                    </ul>
                    <p>NB!<br />
                    Innleveringen består av å lage et PDF dokument eller en nettside med informasjon om arbeidet som er gjort. Det er svært viktig at dere dokumenterer hele prosessen når dere gjør det, dette da det er svært vanskelig å få screenshots av installasjonen etter at den er gjort. Innleveringen skal ha screenshots av arbeidet som blir gjort og vise hvilke modifikasjoner som er gjort i theme.<br />
                    Dere trenger ikke å levere den tekniske løsningen, men om du gjør mye utviklingsarbeid så lønner det seg å vise koden som er laget (dette kan telle positivt for stjerneantallet på siste oblig og i forbindelse med creds).</p>
						<h4>Løsningen</h4>
                    <section class="installasjon">
                        <h5>Installasjon av Wordpress</h5>
                            <figure>
                                <figcaption><a href="https://wordpress.org/download/">1. Last ned Wordpress</a></figcaption>
                                <img src="image/wordpress/01download.png" />
                            </figure>
                        <figure>
                            <figcaption>2. Velg Wordpress mappa i zip fila.</figcaption>
                            <img src="image/wordpress/02downloaded.png" />
                        </figure>
                        <figure>
                            <figcaption>3. Plasser Wordpress mappa i ønsket mappe</figcaption>
                            <img src="image/wordpress/03moved.png" />
                        </figure>
                        <figure>
                            <figcaption><a href="\../phpmyadmin">4. Lag en database</a> (localhost/phpmyadmin)</figcaption>
                            <img src="image/wordpress/04database.png" />
                        </figure>
                        <figure>
                            <figcaption>5. Velg språk</figcaption>
                            <img src="image/wordpress/05language.png" />
                        </figure>
                        <figure>
                            <figcaption>6. Oversikt over informasjonen du trenger i neste steg</figcaption>
                            <img src="image/wordpress/06needToKnow.png" />
                        </figure>
                        <figure>
                            <figcaption>7. Registrer informasjonen</figcaption>
                            <img src="image/wordpress/07setup.png" />
                        </figure>
                        <figure>
                            <figcaption>8. Kjør installasjonen</figcaption>
                            <img src="image/wordpress/08runInstall.png" />
                        </figure>
                        <figure>
                            <figcaption>9. Velg navn for nettsiden og brukerinformasjon</figcaption>
                            <img src="image/wordpress/09siteInfo.png" />
                        </figure>
                        <figure>
                            <figcaption>10. Log inn</figcaption>
                            <img src="image/wordpress/10installed.png" />
                        </figure>
                        <figure>
                            <figcaption>11. Gjør endringene dine</figcaption>
                            <img src="image/wordpress/11loggedIn.png" />
                        </figure>
                    </section>
                    
							<p></p>
                    <!-- <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p></p>
                        <h6>Admin, negativt</h6>
                        <p></p>
                        <h6>Student, positivt</h6>
                        <p></p>
                        <h6>Student, negativt</h6>
                        <p></p>
                    </div> -->
				</article>
				
			</section>
			
			<!-- Eksamensoppgavene -->
			<section class="box eksamen">
				
				<h2>Tidligere eksamensoppgaver</h2>
				
				<!-- Oppgave 2 -->
				<article class="box eksoppg" id="oppg2">
					<h3 class="solve">Oppgave 2</h3>
						<h4>Oppgaven</h4>
							<p>Hvilke konkrete råd om sikkerhet vil du gi til de som skal sette opp og drifte et CMS? Begrunn rådene med hvilke trusler de skal motvirke der det er nødvendig.</p>
						<h4>Løsningen</h4>
							<p></p>
                    <!-- <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p></p>
                        <h6>Admin, negativt</h6>
                        <p></p>
                        <h6>Student, positivt</h6>
                        <p></p>
                        <h6>Student, negativt</h6>
                        <p></p>
                    </div> -->
				</article>
                
                <!-- Oppgave 3 -->
				<article class="box eksoppg" id="oppg3">
					<h3 class="solve">Oppgave 3</h3>
						<h4>Oppgaven</h4>
							<p>Gi en mest mulig presis forklaring på hva et CMS er. Hvilke fordeler og ulemper ser du ved å benytte et CMS for henholdsvis utviklere og sluttbrukere?</p>
						<h4>Løsningen</h4>
							<p></p>
                    <!-- <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p></p>
                        <h6>Admin, negativt</h6>
                        <p></p>
                        <h6>Student, positivt</h6>
                        <p></p>
                        <h6>Student, negativt</h6>
                        <p></p>
                    </div> -->
				</article>
                
                <!-- Oppgave 4 -->
				<article class="box eksoppg" id="oppg4">
					<h3 class="solve">Oppgave 4</h3>
				    <h4>Oppgaven</h4>
				    <p>Norge følger etter en rekke land og innfører nå lovgivning som skal sikre universell utforming av bl.a. nettsider. (<a href="http://lovdata.no/dokument/SF/forskrift/2013-06-21-732" target="_blank">http://lovdata.no/dokument/SF/forskrift/2013-06-21-732</a>) For oppgaven er §1,2,4,6,7 og 11 spesielt interessant. Se bort i fra det som står ang. automater.</p>
                    <ol class="listLitenBokst">
                        <li>Hva tror du blir den nye lovens innvirkning på norske utviklere og brukere på kort og lang sikt. Svar fra et teknisk vinklet perspektiv.</li>
                        <li>Det Norge her gjør er lignende det flere land alt har gjort eller står på trappene for å gjøre. Hva tror du betydningen blir for standarder og verktøy/teknologi i et større perspektiv.</li>
                    </ol>
                    <p>(Du kan gjerne svare på a og b sammen, men la det gå frem hva som hører til hvilken vinkling av spørsmålet)</p>
						<h4>Løsningen</h4>
							<p></p>
                    <!-- <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p></p>
                        <h6>Admin, negativt</h6>
                        <p></p>
                        <h6>Student, positivt</h6>
                        <p></p>
                        <h6>Student, negativt</h6>
                        <p></p>
                    </div> -->
				</article>
				
			</section>
		</main>
		
		<aside class="quick box">
			<ul>
				<li><a href="#top">Top</a></li>
				<li><a href="#oppg1">1</a></li>
				<li><a href="#oppg2">2</a></li>
				<li><a href="#oppg3">3</a></li>
				<li><a href="#oppg4">4</a></li>
			</ul>
		</aside>
		
	</body>
</html>