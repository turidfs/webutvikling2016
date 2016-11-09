<html>

	<head>
		<title>Oblig 4 - Turid Irene Folkestad Sønsteby</title>
		<meta charset="UTF-8"/>
		<link href="css/webcss_v2.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<header class="box">
			<h1 class="box">Oblig 4</h1>
            <?php include 'webutviklingMenu.php'; ?>
            
            <!-- Litt generell info -->
            <div id="generelt" class="info box">
            <h3>Informasjon fra foreleser om oppgavene</h3>
                <p><strong>Selv om oppgaven refererer til gruppeprosjektet i oblig 2/3 så skal denne obligen gjøres individuelt.</strong></p>
            </div>
		</header>
		
		<main class="box">
			<!-- Øvningsoppgavene -->
			<section class="box normal">
				
				<h2>Øvings oppgaver</h2>
				
				<!-- Oppgave 1 -->
				<article class="box oppg" id="oppg1">
					<h3 class="done">Oppgave 1</h3>
				    <h4>Oppgaven</h4>
				    <p>Ta for deg nettsiden du var med på å lage i oblig 2/3 og gå igjennom SEO. Du skal gjennomføre en enkel SEO prosess, fra analyse til veldig enkel implementering.</p>
                    <p>Beskriv hva du ville gjort for å forbedre SEO på siden. Ting som må være med i beskrivelsen din er minst følgende:</p>
                    <ol>
                        <li>Analyse av bedriften
                            <ul>
                                <li>Målsetting</li>
                                <li>Kundegruppen</li>
                                <li>Produkter</li>
                                <li>Konkurrenter</li>
                            </ul>
                        </li>
                        <li>Analyse av SEO på eksisterende nettsted (den teknisk implementasjonen)
                            <ul>
                                <li>Title tags</li>
                                <li>Interne linker</li>
                                <li>Innhold (der det faktisk er noe ordentlig innhold)</li>
                                <li>Osv</li>
                            </ul>
                        </li>
                        <li>SEO informasjon (hva skal gjøres og hvorfor)</li>
                        <li>Teknisk implementasjon
                            <ul>
                                <li>Skriv gjerne litt kode her men du trenger ikke å skrive kjempe masse</li>
                                <li>Beskriv overordnet den tekniske implementasjonen der store endringer trengs.</li>
                            </ul>
                        </li>
                    </ol>
				    <h4>Løsningen</h4>
                    <p><a href="http://www.it-stud.hiof.no/~turidfs/zip2/index.php">Nettsiden</a></p>
                    <h5>Analyse av bedriften</h5>
                    <p></p>
                    <dl>
                        <dt>Målsetting</dt><dd>Dette er et band som ønsker å bli verdenskjent.</dd>
                        <dt>Kundegruppen</dt><dd>Er først og fremst tenåringsjenter.</dd>
                        <dt>Produkter</dt><dd>Fokuserer på musikk, musikkvideoer og merchandise.</dd>
                        <dt>Konkurrenter</dt><dd>De største konkurrente er artister/grupper som Taylor Swift, Justin Bieber, One Direction osv.</dd>
                    </dl>
                    <h5>Analyse av SEO på eksisterende nettsted (den teknisk implementasjonen)</h5>
                    <p></p>
                    <dl>
                        <dt>Title tags</dt><dd>Title tags er "ZiP - *sidenavn*" for alle sidene.</dd>
                        <dt>Interne linker</dt><dd>Menyen med interne linker følger med til alle undersidene og er lik overalt, men det er ingen breadcrumbs.</dd>
                        <dt>Innhold (der det faktisk er noe ordentlig innhold)</dt><dd>Innholdet på de forskjellige sidene (i main) er ikke helt unikt, fordi det er brukt samme innhold på flere sider.</dd>
                    </dl>
                    <h5>SEO informasjon (hva skal gjøres og hvorfor) og Teknisk implementasjon</h5>
                    <ul>
                        <li>Jeg ville begynt med å gjøre headeren enklere å lese for maskiner.</li>
                        <li>Jeg ville ha lagt til breadcrumbs slik at brukeren har bedre oversikt over hvilken side hen er på.</li>
                        <li>Jeg ville ha hentet inn bare noen få artikler til home og sjekket at innholdet ellers bare er i main på en side, slik at innholdet blir unikt i main for alle sidene.</li>
                        <li>Gjøre en analyse av nøkkelord og sørge for at de viktigste nøkkelordene er nevnt på sidene.</li>
                        <li>Legge inn mer informasjon i meta taggen slik at det er mer informasjon enkelt tilgjengelig. Keywords, description, author osv. (Selv om ikke alt blir brukt direkte til SEO.)</li>
                    </ul>
                    <!-- <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p></p>
                        <h6>Admin, negativt</h6>
                        <p></p>
                    </div> -->
				</article>
                
                <!-- Oppgave 2 -->
				<article class="box oppg" id="opp2">
					<h3 class="utdyp">Oppgave 2</h3>
						<h4>Oppgaven</h4>
							<p>Hva er mikrodata? Beskriv hva det er, hvordan det brukes og hvorfor det er nyttig. Beskriv også noen bruksområder som er spesielt egent for mikrodata.</p>
                    <p>Beskrivelsen skal være utfyllende og dekke alle viktige aspekter av Mikrodata. Om ønskelig kan du gjerne lage opp noen kode eksempler for å gjøre det enklere å beskrive vanskelig konsepter.</p>
						<h4>Løsningen</h4>
                    <h5>Hva er det?</h5>
                    <p>Microdata er en måte å merke informasjon slik at vi kan fortelle hva innholdet er og hvorfor det er der.</p>
                    <h5>Hvordan brukes det?</h5>
                    <p>Det brukes ved å sette attributter på html elementer, slik som itemscope, itemtype, itemid, itemprop, itemref. <a href="http://ask.hiof.no/~michaeal/files/web/lectures/forelesningMicrodata.pdf">Microdata eksempelet er hentet fra forelesningsnotat om Microdata side 6.</a></p>
                    <blockquote cite="http://ask.hiof.no/~michaeal/files/web/lectures/forelesningMicrodata.pdf">
<pre>
&lt;section itemscope itemtype="http://schema.org/Person"&gt;
    Hello, my name is
    &lt;span itemprop="name">John Doe&lt;/span&gt;,
    I am a
    &lt;span itemprop="jobTitle">Graduate research assistant&lt;/span&gt;
    at the
    &lt;span itemprop="affiliation">University of Dreams&lt;/span&gt;
    My friends call me
    &lt;span itemprop="additionalName">Johnny&lt;/span&gt;
    You can visit my homepage at
    &lt;a href="http://www.example.com.com" itemprop="url"&gt;www.example.com&lt;/a&gt;
    &lt;section itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"&gt;
        I live at
        &lt;span itemprop="streetAddress">1234 Peach Drive&lt;/span&gt;
        &lt;span itemprop="addressLocality">Warner Robins&lt;/span&gt;
        &lt;span itemprop="addressRegion">Georgia&lt;/span&gt;.
    &lt;/section&gt;
&lt;/section&gt;
</pre>
                        <p>Denne koden gir:</p>
                        <section itemscope itemtype="http://schema.org/Person">
                            Hello, my name is
                            <span itemprop="name">John Doe</span>,
                            I am a
                            <span itemprop="jobTitle">Graduate research assistant</span>
                            at the
                            <span itemprop="affiliation">University of Dreams</span>
                            My friends call me
                            <span itemprop="additionalName">Johnny</span>
                            You can visit my homepage at
                            <a href="http://www.example.com.com" itemprop="url">www.example.com</a>
                            <section itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                I live at
                                <span itemprop="streetAddress">1234 Peach Drive</span>
                                <span itemprop="addressLocality">Warner Robins</span>
                                <span itemprop="addressRegion">Georgia</span>.
                            </section>
                        </section>
                    </blockquote>
                    <h5>Hvorfor er det viktig?</h5>
                    <p>Det er viktig for maskinlesbarhet, ved at maskiner kan forstå innholdet blir det enklere å gjøre google søk (SEO) og det blir bedre universell utforming.</p>
                    <h5>Bruksområder</h5>
                    <p>Mennesker, artikkler, oppskrifter, hendelser, breadcrumbs, meny, musikk.</p>
                    <!-- <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p></p>
                        <h6>Admin, negativt</h6>
                        <p></p>
                    </div> -->
				</article>
				
			</section>
			
			<!-- Eksamensoppgavene -->
			<section class="box eksamen">
				
				<h2>Tidligere eksamensoppgaver</h2>
				
				<!-- Oppgave 3 -->
				<article class="box eksoppg" id="oppg3">
					<h3 class="done">Oppgave 3</h3>
						<h4>Oppgaven</h4>
							<p>Hva er Site Authority i forbindelse med SEO, og hvordan oppnår man dette?</p>
						<h4>Løsningen</h4>
                    <p>Domain Authority (tidligere Site Authority) måler hele domenet og subdomenet, ikke bare en enkelt side, Page Authority måler en enkelt side. Domain Authority og Page Authority er hvor bra en nettside rangerer og hvor sterk den er over tid.  Man oppnår (høyere Domain Authority og Page Authority) ved god SEO og gode linker fra andre sider.</p>
                    <!-- <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p></p>
                        <h6>Admin, negativt</h6>
                        <p></p>
                    </div> -->
				</article>
                
                <!-- Oppgave 4 -->
				<article class="box eksoppg" id="oppg4">
					<h3 class="done">Oppgave 4</h3>
						<h4>Oppgaven</h4>
							<p>Hvilke faktorer(/elementer/parametre/informasjon) for en webside bruker en søkemotor i rangeringen? (Dette blir selvsagt ikke noen absolutt og endelig liste, men få med de viktigste)</p>
                    <p style="text-decoration: underline;"><strong>Svar som en punktliste i kortfattet form. Om det er ting du anser som spesielt viktig kan du gjerne utdype noe.</strong></p>
						<h4>Løsningen</h4>
							<p></p>
                    <ul>
                        <li>Headinger (h1 til h6)</li>
                        <li>Strukturelle tagger</li>
                        <li>Skalerbarhet</li>
                        <li>Nøkkelord</li>
                        <li>Meta taggen (til en viss grad)</li>
                        <li>Konkurrenter, både når de gjør noe bra og når de gjør noe dårlig.</li>
                        <li>Oppdatering av innhold</li>
                        <li>Unikt innhold</li>
                        <li>Skille mellom innhold, struktur, funksjonalitet osv.</li>
                        <li>Lav bounce rate</li>
                        <li>Alt tagger på bilder</li>
                        <li>Validering av css og html</li>
                        <li>Innvendig meny, gjør det enkelt å finne frem</li>
                        <li>Linker er veldig viktig
                            <ul>
                                <li>Dårlige sider som linker inn gir dårligere SEO</li>
                                <li>Bra sider som linker inn gir god SEO</li>
                                <li>Hvor store eller små sidene som linker inn er har mye å si. Det er bedre å få en link fra Aftenposten enn fra en blog.</li>
                            </ul>
                        </li>
                    </ul>
                    <!-- <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p></p>
                        <h6>Admin, negativt</h6>
                        <p></p>
                    </div> -->
				</article>
                
                <!-- Oppgave 5 -->
				<article class="box eksoppg" id="oppg5">
					<h3 class="done">Oppgave 5</h3>
						<h4>Oppgaven</h4>
							<p>Hvorfor kan vi (som oftest) ikke se resultater av SEO (Search engine optimization) umiddelbart?</p>
						<h4>Løsningen</h4>
							<p>Google må indeksere siden på nytt. Vi kan heller ikke være helt sikre på at de resultatene vi får når vi først får resultater er på grunn av noe vi har gjort, det kan være en av våre konkurrenter har gjort noe sikkelig dumt, og heller ikke hva vi eventuelt har gjort riktig (eller kanskje til og med noe feil/dumt).</p>
                    <!-- <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p></p>
                        <h6>Admin, negativt</h6>
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
				<li><a href="#oppg5">5</a></li>
			</ul>
		</aside>
		
	</body>
</html>