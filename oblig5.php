<html>

	<head>
		<title>Oblig 5 - Turid Irene Folkestad Sønsteby</title>
		<meta charset="UTF-8"/>
		<link href="css/webcss_v2.css" type="text/css" rel="stylesheet" />
        <style>
            .installasjon img, .themes img {
                border: 5px solid black;
            }
            .installasjon figure, .themes figure {
                width: 40%;
                display: block;
            }
            .installasjon, .themes {
                display: flex;
                flex-wrap: wrap;
            }
            .installasjon h5, .themes h5 {
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
                    <p>I denne oppgaven tar jeg utgangspunkt i siden jeg og gruppa mi laget i oblig 2 og 3. <a href="http://www.it-stud.hiof.no/~turidfs/zip2/index.php">Zelda in Park</a></p>
                    <section class="installasjon">
                        <h5>Installasjon av Wordpress</h5>
                            <figure>
                                <img src="image/wordpress/01download.png" />
                                <figcaption><a href="https://wordpress.org/download/">1. Last ned Wordpress</a></figcaption>
                            </figure>
                        <figure>
                            <img src="image/wordpress/02downloaded.png" />
                            <figcaption>2. Velg Wordpress mappa i zip fila.</figcaption>
                        </figure>
                        <figure>
                            <img src="image/wordpress/03moved.png" />
                            <figcaption>3. Plasser Wordpress mappa i ønsket mappe</figcaption>
                        </figure>
                        <figure>
                            <img src="image/wordpress/04database.png" />
                            <figcaption><a href="\../phpmyadmin">4. Lag en database</a> (localhost/phpmyadmin)</figcaption>
                        </figure>
                        <figure>
                            <img src="image/wordpress/05language.png" />
                            <figcaption>5. Velg språk</figcaption>
                        </figure>
                        <figure>
                            <img src="image/wordpress/06needToKnow.png" />
                            <figcaption>6. Oversikt over informasjonen du trenger i neste steg</figcaption>
                        </figure>
                        <figure>
                            <img src="image/wordpress/07setup.png" />
                            <figcaption>7. Registrer informasjonen</figcaption>
                        </figure>
                        <figure>
                            <img src="image/wordpress/08runInstall.png" />
                            <figcaption>8. Kjør installasjonen</figcaption>
                        </figure>
                        <figure>
                            <img src="image/wordpress/09siteInfo.png" />
                            <figcaption>9. Velg navn for nettsiden og brukerinformasjon</figcaption>
                        </figure>
                        <figure>
                            <img src="image/wordpress/10installed.png" />
                            <figcaption>10. Log inn</figcaption>
                        </figure>
                        <figure>
                            <img src="image/wordpress/11loggedIn.png" />
                            <figcaption>11. Gjør endringene dine</figcaption>
                        </figure>
                    </section>
                    <section class="themes">
                        <h5>Themes</h5>
                        <figure>
                            <img src="image/wordpress/wordpressThemes.png" />
                            <figcaption>Installerte alle twenty-something themene</figcaption>
                        </figure>
                        <figure>
                            <img src="image/wordpress/twentyten.png" />
                            <figcaption>Jeg synes themet twentyten var mest likt det planlagte designet for ZiP og valgte derfor dette som utgangspunkt.</figcaption>
                        </figure>
                        <figure>
                            <img src="image/wordpress/twentyten-zip.png" />
                            <figcaption>Laget et child-theme til twentyten med navnet zip.</figcaption>
                        </figure>
                        <figure>
                            <img src="image/wordpress/github-content.png" />
                            <figcaption><a href="https://github.com/turidfs/wp-content">Lastet opp wp-content til github.</a></figcaption>
                        </figure>
                        <figure>
                            <img src="" />
                            <figcaption></figcaption>
                        </figure>
                    </section>
                    <section class="">
                        <h5>Plugins</h5>
                        <p>De mest praktiske pluginsene å ha er blog (både til feed og til enkeltblog) og twitter feed samt linker til sosiale medier til footeren. Fant ikke plugin til blog. Installerte Facebook, SoundCloud Master, Twitter, YouTube.</p>
                        <figure>
                            <img src="image/wordpress/plugins.png" />
                            <figcaption>Plugins installert og aktivert.</figcaption>
                        </figure>
                    </section>
                    <section class="">
                        <h5>Widgets</h5>
                        <p>Nødvendige widgets er sidebar, footer og header.</p>
                        <ul>
                            <li>Header
                                <ul>
                                    <li>Logo</li>
                                    <li>Meny (knapp)</li>
                                </ul>
                            </li>
                            <li>Sidebar
                                <ul>
                                    <li>Tweets</li>
                                    <li>Tacks</li>
                                </ul>
                            </li>
                            <li>Footer
                                <ul>
                                    <li>Andre sider
                                        <ul>
                                            <li>RSS</li>
                                            <li>Twitter</li>
                                            <li>Facebook</li>
                                            <li>Youtube</li>
                                            <li>Soundcloud</li>
                                        </ul>
                                    </li>
                                    <li>Bandmedlemmenes egne sider
                                        <ul>
                                            <li>Natalie
                                                <ul>
                                                    <li>Twitter</li>
                                                    <li>Facebook</li>
                                                    <li>Youtube</li>
                                                </ul>
                                            </li>
                                            <li>Fredrik
                                                <ul>
                                                    <li>Twitter</li>
                                                    <li>Facebook</li>
                                                    <li>Youtube</li>
                                                </ul>
                                            </li>
                                            <li>Irene
                                                <ul>
                                                    <li>Twitter</li>
                                                    <li>Facebook</li>
                                                    <li>Youtube</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>Copyright</li>
                                    <li>Privacy terms</li>
                                </ul>
                            </li>
                        </ul>
                        <p>Noen undersider som kan ha behov for widgets</p>
                        <ul>
                            <li>Home
                                <ul>
                                    <li>Kalender (events)</li>
                                </ul>
                            </li>
                            <li>About
                                <ul>
                                    <li>Bilder</li>
                                </ul>
                            </li>
                            <li>Media
                                <ul>
                                    <li>Bilder</li>
                                    <li>Videos</li>
                                    <li>Tracks</li>
                                </ul>
                            </li>
                            <li>Social
                                <ul>
                                    <li></li>
                                </ul>
                            </li>
                            <li>Blog
                                <ul>
                                    <li>Bloggerne</li>
                                    <li>Blogposter</li>
                                </ul>
                            </li>
                            <li>Events
                                <ul>
                                    <li>Kalender</li>
                                </ul>
                            </li>
                            <li>Shop
                                <ul>
                                    <li></li>
                                </ul>
                            </li>
                        </ul>
                        <figure>
                            <img src="" />
                            <figcaption></figcaption>
                        </figure>
                    </section>
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
					<h3 class="utdyp">Oppgave 2</h3>
				    <h4>Oppgaven</h4>
				    <p>Hvilke konkrete råd om sikkerhet vil du gi til de som skal sette opp og drifte et CMS? Begrunn rådene med hvilke trusler de skal motvirke der det er nødvendig.</p>
				    <h4>Løsningen</h4>
                    <h5>Pcen du bruker som admin</h5>
                    <p>Bruk en oppdatert pc med et nyere operativsystem og sikkerhetsoppdateringene til dette installert.</p>
                    <h5>CMS systemet</h5>
                    <p>ALLTID last ned sikkerhetsoppdateringene, sjekk etter oppdateringer helst daglig. Sikkerhetsoppdateringer kommer løpende på grunn av nye svakheter, nye hacker angrep og generelt sett om noe oppdages.</p>
                    <p>Vær forsiktig med Themes og Plugins. Det tryggeste er å finne alt fra f.eks. Wordpress, MEN selv ikke dette er 100% sikkert, følg med på oppdateringer til temaet ditt eller pluginsene dine.</p>
                    <p>Dersom det er mulig kan man gjerne bytte urlen for login til noe som ikke er helt normalt og kanskje heller ikke logisk.</p>
                    <h5>Brukere, brukernavn og passord</h5>
                    <p>Ikke gi folk feil tilgang, for mye, for lenge etc. Dersom noen slutter eller får sparken, fjern personens rettigheter i systemet umiddelbart. I hovedsak behøver ikke brukeren tilgang på bestemte deler av systemet dersom de klarer jobben sin uten. Jo færre brukere det er med høyt rettighetsnivå, jo lavere er sannsynligheten for å bli hacket.</p>
                    <p>Ikke bruk standard brukernavn (admin, administrator, webmaster, osv). Det er vanskeligere å hacke noen når man ikke vet hva brukernavnet er.</p>
                    <p>Lag sterke passord, helst random. Ikke lag passord som kan kobles til deg personlig, dersom du har en datter som heter Amalie og hun har bursdag femte februar er Amalie0502 et usikkert passord, unngå generelt sett datoer og favoritter. Begrens hvor mange mulige forsøk man kan gjøre på å taste inn et passord før brukeren blir låst ute i en bestemt eller ubestemt tidsperiode, f.eks. om man tegner feil mønster på en telefon for mange ganger må man vente 5 minutter før man får prøve igjen, deretter 15min, deretter 1 time, osv.</p>
                    <h5>Backup</h5>
                    <p>Ikke om man blir hacket, når man blir hacket. Bruk backup for å rydde opp, MEN sjekk at backupen ikke inneholder samme feilen.</p>
                    <h5>Redigeringer i systemet</h5>
                    <p>Lag en egen installasjon for å teste endringer som gjøres i systemet, da unngår man enkelte problemer som f.eks. å kræsje hele siden eller lage enkelte sikkerhetshull.</p>
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
					<h3 class="utdyp">Oppgave 3</h3>
				    <h4>Oppgaven</h4>
				    <p>Gi en mest mulig presis forklaring på hva et CMS er. Hvilke fordeler og ulemper ser du ved å benytte et CMS for henholdsvis utviklere og sluttbrukere?</p>
				    <h4>Løsningen</h4>
				    <h5>Hva er et CMS?</h5>
				    <p>CMS er forkortelse for Content Management Systems. Det er et system for websider. Det er bygget på en database.</p>
                    <h5>Hvilke fordeler er det ved å bruke et CMS?</h5>
                    <p>Enkelt vedlikehold, fleksibelt. Redigering, forhåndsvisning, utvidbar funksjonalitet (plugins), templates (themes), versjonskontroll, brukerkontroll, automatiske oppdateringer, søk. Slipper å finne opp hjulet på nytt. Mange utviklere, enkelt å få hjelp. Skiller mellom innhold, funksjonalitet og design.</p>
                    <h5>Hvilke ulemper er det ved å bruke et CMS?</h5>
                    <p>Mindre frihet. Feil løsning kan medføre større kostnader. Behov for mye customization kan bli dyrt. Det er en standard som vil si at det fungerer på en bestemt måte, å få til noe annet kan være veldig mye jobb.</p>
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
					<h3 class="utdyp">Oppgave 4</h3>
				    <h4>Oppgaven</h4>
				    <p>Norge følger etter en rekke land og innfører nå lovgivning som skal sikre universell utforming av bl.a. nettsider. (<a href="http://lovdata.no/dokument/SF/forskrift/2013-06-21-732" target="_blank">http://lovdata.no/dokument/SF/forskrift/2013-06-21-732</a>) For oppgaven er §1,2,4,6,7 og 11 spesielt interessant. Se bort i fra det som står ang. automater.</p>
                    <ol class="listLitenBokst">
                        <li>Hva tror du blir den nye lovens innvirkning på norske utviklere og brukere på kort og lang sikt. Svar fra et teknisk vinklet perspektiv.</li>
                        <li>Det Norge her gjør er lignende det flere land alt har gjort eller står på trappene for å gjøre. Hva tror du betydningen blir for standarder og verktøy/teknologi i et større perspektiv.</li>
                    </ol>
                    <p>(Du kan gjerne svare på a og b sammen, men la det gå frem hva som hører til hvilken vinkling av spørsmålet)</p>
				    <h4>Løsningen</h4>
				    <p></p>
                    <ol class="listLitenBokst">
                        <li>Jeg tror det vil skje mest på lang sikt, fordi folk blant annet ikke er veldig glad i forandringer.
                            <ul>
                                <li>Kort sikt: Mer å lære for utviklere. For brukere vil mest sannsynlig en side her og en side der bli litt og litt bedre ettersom de oppdateres.</li>
                                <li>Lang sikt: Det kommer mest sannsynlig til å bli litt trøbbel hos en del bransjer mot slutten av 2020 fordi alle IKT løsninger skal være universelt utformet innen 1. januar 2021, dette vil igjen mest sannsynlig bety mye jobber for utviklere. Det burde bli enklere for funksjonshemmede å gjøre ting selv.</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li>Standarder: Det må lages standarer for hva som er bra universell utforming.</li>
                                <li>Teknologi:</li>
                                <li>Verktøy:</li>
                            </ul>
                        </li>
                    </ol>
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