<html>

	<head>
		<title>Oblig 2 - Turid Irene Folkestad Sønsteby</title>
		<meta charset="UTF-8"/>
		<link href="css/webcss_v2.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<header class="box">
			<h1 class="box">Oblig 2</h1>
            <?php include 'webutviklingMenu.php'; ?>
            
            <!-- Litt generell info -->
            <div id="generelt" class="info box">
                <h3>Informasjon fra foreleser om oppgavene</h3>
                <p>Denne obligatoriske oppgaven skiller seg litt ut fra forrige oppgave. Dere skal danne grupper på 3-5 personer og sammen begynne å lage et komplett nettsted. I denne oppgaven skal dere komme i gang med planleggingen,	prototyping	og innholds generering, i neste oblig skal dere fullføre arbeidet dere begynner i denne. Det er derfor svært viktig for neste oblig at dere gjør en svært god jobb i denne.</p>
                <p>Nettsiden dere skal lage skal være langt mer avansert enn det dere har jobbet med til nå. Eksempler på nettstedtyper dere kan lage er en nettbutikk som selger et spesifikt produkt eller en nettside som presenterer et firma og dets tjenester. Dere kan godt velge å bruke en eksisterende nettbutikk eller et reelt selskap som utgangspunkt for arbeidet deres, men det er også helt greit å finne opp noe.</p>
                <p>Det er viktig at dere utfordrer og presser grensene deres vesentlig i denne oppgaven, gjør ting som dere ikke tror dere klarer. Når dere er ferdig med noe	så tenk nøye over hva dere kan gjøre for å gjøre nettsiden ennå litt bedre og om noe av det dere har gjort kan gjøres på en bedre måte.</p>
                <p>Oppgaven foregår i grupper men alle skal levere individuelt. Oppgave 1 til 3 skal gjøres i gruppe mens oppgave 4 – 8 skal gjøres individuelt. Dere leverer derfor som tidligere en oversikt over oppgavene du har gjort individuelt og linker til felles prosjektet som er gjort i oppgave 1 – 3.</p>
                <p><strong>Nettsideprosjektet skal gjøres ferdig i oblig 3 men jobb så mye dere klarer utover arbeidskravet i denne obligen så dere får det litt enklere i oblig 3.</strong></p>
                <p><strong>Nettsiden skal ha:</strong></p>
                <ul>
                    <li>Responsivt design med bruk av media queries</li>
                    <li>Flest mulig (innen rimelighetens og fornuftens grenser) CSS selektorer. Prøv og bruke alle de forskjellige selektorene i CSS</li>
                    <li>Siden skal være bygget opp med semantiske/strukturelle tagger</li>
                    <li>Skille struktur og innhold fra utseende</li>
                    <li>Være tilpasset ulike medier og enheter</li>
                    <li>Ha en enkel RSS feed</li>
                    <li>En god struktur på innholdet og et greit design</li>
                </ul>
                <p>Prosjektet skal jobbes med på Github (dette skal vi snakke om i en forelesning) og Github repoet skal vise at alle har bidratt.</p>
                <p><strong>Feedback:</strong> Da dere jobber i grupper med deler av denne oppgaven vil det være en sannsynlighet for at dere får deres egen oppgave som oppgave å gi feedback på. Om dette skjer skal dere merke feedbacken med ”N/A” både som positiv og negativ kommentarer, gi 1 stjerne og gi studassleder Thomas Bergby (<a href="mailto:thomas.m.bergby@hiof.no">thomas.m.bergby@hiof.no</a>) beskjed.</p>
            </div>
            <?php include 'sammarbeidOblig2og3.php'; ?>
		</header>
		
		<main class="box">
			<!-- Øvningsoppgavene -->
			<section class="box normal">
				
				<h2>Øvings oppgaver</h2>
				
				<!-- Oppgave 1 -->
				<div class="box oppg" id="oppg1">
					<h3 class="done">Oppgave 1</h3>
						<h4>Oppgaven</h4>
							<p>Lag en plan for nettsiden og finn ut hva den skal handle om. Produser/innhent innholdet dere trenger for å lage nettsiden (denne gangen fungerer ikke lorem ipsum). Vurder målgruppen for nettsiden og bestem utifra dette hva som skal være med på siden. Lage en plan for designet på nettsiden og finn frem til ressurser dere trenger i forbindelse med designet.</p>
                            <p>I denne oppgaven trenger dere ikke å tenke på opphavsrett så dere kan fritt hente bilder, tekst og innhold fra andre steder på nett om det passer.</p>
						<h4>Løsningen</h4>
                            <p>Vi er et band.</p>
                            <p>Målgruppen vår er først og fremst tenåringsjenter.</p>
                            <p>Det de ønsker å se er:</p>
                            <ul>
                                <li>Flashy bilder</li>
                                <li>Nyheter, awards</li>
                                <li>Twitter</li>
                                <li>Kan helt fint være rotete, dette blir en del av designet</li>
                                <li>Musikkvideoer</li>
                                <li>Albumoversikt, preview av sanger</li>
                                <li>Blog</li>
                                <li>Forum</li>
                                <li>Subscribe liste</li>
                                <li>Nettbutikk</li>
                                <li>Events / tour</li>
                            </ul>
                            <p>Det vi skal lage egne sider / undersider for er:</p>
                            <ul>
                                <li>About</li>
                                <li>Events (Tour/Tickets)</li>
                                <li>Social (Nyheter, awards, twitter, blog, forum)
                                    <ul>
                                        <li>Blog</li>
                                    </ul>
                                </li>
                                <li>Media
                                    <ul>
                                        <li>Tracks</li>
                                        <li>Musikkvideoer</li>
                                        <li>Bilder</li>
                                    </ul>
                                </li>
                                <li>Shop</li>
                            </ul>
                            <p>På forsiden skal vi vise preview av:</p>
                            <ul>
                                <li>Flashy bilder</li>
                                <li>Siste tweet</li>
                                <li>Preview av musikk</li>
                                <li>Siste nyheter</li>
                            </ul>
                            <p>Felles for alle sidene er:</p>
                            <ul>
                                <li>Header
                                    <ul>
                                        <li>Logo</li>
                                        <li>Meny/undermeny</li>
                                    </ul>
                                </li>
                                <li>Footer
                                    <ul>
                                        <li>Subscribe liste</li>
                                        <li>Copyright</li>
                                    </ul>
                                </li>
                            </ul>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p>Greit gjennomført</p>
                        <h6>Student, positivt</h6>
                        <p>oppgave 1-3 bra</p>
                    </div>
				</div>
				
				<!-- Oppgave 2 -->
				<div class="box oppg" id="oppg2">
					<h3 class="done">Oppgave 2</h3>
						<h4>Oppgaven</h4>
							<p>Begynn å arbeide med designet på nettstedet. Dette gjøres ved hjelp av skisser og wireframes, og skal lede frem til et avansert design.</p>
                            <p>Det grafiske designet kommer ikke til å bedømmes men forsøk å gjøre siden så pen som mulig, det vil da være koseligere å jobbe med den. Tenk nøye over hva som er mulig med HTML og CSS og prøv å implementere så mange som mulig avanserte teknikker i planleggingsfasen. Jo bedre jobb dere gjør her jo enklere blir neste oblig.</p>
                            <p>Når du designer er det viktig at du tenker på hvordan opplevelsen blir for brukeren, om menyen er vanskelig å bruke vil mange brukere slutte å benytte nettsiden. En godt gjennomtenkt navigasjonsmeny og brukeropplevelse er derfor svært viktig.</p>
                            <p>Designet skal være responsivt og dere skal lage spesifikke design utkast for forskjellige skjermstørrelser. Få frem hvordan siden skal skalere mellom forskjellige skjermstørrelser i skissene. Dere skal også lage en utskriftsstil, så det vil være naturlig å designe opp dette allerede nå.</p>
						<h4>Løsningen</h4>
                            <p><a href="oppgaver/skisserHome.php">En egen side med design prosessen.</a></p>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p>Ser en masse skisser, det er bra. Men hadde vært godt om dere hadde inkludert litt ideer laget på nett også. Blir litt mer oversiktlig på den måten. Skulle også gjerne ha sett et forslag på en navigasjonsmeny.</p>
                        <h6>Student, positivt</h6>
                        <p>oppgave 1-3 bra</p>
                    </div>
				</div>
				
				<!-- Oppgave 3 -->
				<div class="box oppg" id="oppg3">
					<h3 class="done">Oppgave 3</h3>
						<h4>Oppgaven</h4>
							<p>Sett opp et prosjekt på Github sammen. Dere skal benytte dette prosjektet i utviklingsarbeidet videre og innleveringen i oblig 3 vil blant annet være en link til Github prosjektet.</p>
                            <p>I denne oppgaven skal dere sette opp et Github prosjekt (repo) og lage en basis struktur for HTML/CSS, mappestruktur og sørge for at alle i gruppa kommer i gang med Github og har tilgang til prosjektet.</p>
						<h4>Løsningen</h4>
                            <p>Her er link til GitHub prosjektet vårt: <a href="https://github.com/turidfs/zip">https://github.com/turidfs/zip</a></p>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p>Ok. Pass på at alle bidrar i oblig 3 da vi må se at alle har gjort sin del. Om dette blir vanskelig må dere legge til et skriv eller si ifra at mye gjøres fra en spesifikk pc mer enn en annen.</p>
                        <h6>Student, positivt</h6>
                        <p>oppgave 1-3 bra</p>
                    </div>
				</div>
				
			</section>
			
			<!-- Eksamensoppgavene -->
			<section class="box eksamen">
				
				<h2>Tidligere eksamensoppgaver</h2>
				
				<!-- Oppgave 4 -->
				<div class="box eksoppg" id="oppg4">
					<h3 class="done">Oppgave 4</h3>
						<h4>Oppgaven</h4>
							<p>Forklar den praktiske forskjell på følgende to måter å linke inn et print-stilark sammen med et annet stilark for visning på skjerm.
							I hvilke generelle situasjoner ville du brukt hvilken metode:</p>
							<p>Alternativ 1:
							<br />
							&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;stilark.css&quot; media=&quot;<strong>screen</strong>&quot; /&gt;
							<br />
							&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;print.css&quot; media=&quot;print&quot; /&gt;
							</p>
							<p>Alternativ 2:
							<br />
							&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;stilark.css&quot; media=&quot;<strong>all</strong>&quot; /&gt;
							<br />
							&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;print.css&quot; media=&quot;print&quot; /&gt;
							</p>
						<h4>Løsningen</h4>
                            <h5>Screen</h5>
                            <p>Media="screen" vil i teorien føre til at stilarket kun hentes inn til pc-skjermer.</p>
                            <p>Dersom man bruker mediaqueries i et stilark og kun har det ene stilarket vil det være dumt å bruke media="screen" fordi man da risikerer å ikke få lastet inn stilene til andre devices. Det samme gjelder da om man ønsker å bruke større eller mindre deler av samme stilen i både screen og print, f.eks. farger.</p>
                            <p>Dersom man har egne stilark for hver device (eventruelt med media queries) kan man helt fint bruke media="screen" til stilarket for pc. Ved å gjøre dette kan man potensielt sett spare browseren for tid og ressurser ved at den bare henter og leser de linjene med CSS den behøver. Dette er imidlertid ikke en helt sikker metode fordi det kan bli problemer om devicen ikke identifiserer seg riktig, eller om man har satt breakpoints på feil sted.</p>
                            <h5>All</h5>
                            <p>Media="all" kan brukes på alle devices.</p>
                            <p>Dersom man har mye stiler som f.eks. størrelsesforhold og farger som man vil beholde fra nettleser til print er det best å bruke media="all" slik at man slipper å gjenta alt dette i print stilarket.</p>
                            <h5>Forskjellen</h5>
                            <p>Forskjellen er først og fremst at med media="all" vil print arve stil fra det andre stilarket og med media="screen" vil ikke print arve noe.</p>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p>Godt gjennomført og bra beskrevet. Tatt med mye fint her.</p>
                        <h6>Student, positivt</h6>
                        <p>Oppgave 4 bra skrevet og gjennomført</p>
                    </div>
				</div>
				
				<!-- Oppgave 5 -->
				<div class="box eksoppg" id="oppg5">
					<h3 class="done">Oppgave 5</h3>
						<h4>Oppgaven</h4>
							<p>Hva er den praktiske forskjellen på å endre en tekst til uppercase "manuelt" i HTML fremfor å kjøre text-transform:uppercase i CSS?
							Hvilken metode bør man benytte (om du mener begge, så angi i hvilke tilfeller)?</p>
						<h4>Løsningen</h4>
                            <p>Alt man gjør med tekst og informasjon i HTML burde være en del av innholdet. Altså om ordet normalt skrives med store bokstaver (for eksempel HTML og CSS) så burde det stå med store bokstaver i HTML, men om man vil gjøre en hel setning eller enkelte ord til store bokstaver som design skal det være en del av CSS. Dersom man endrer teksten til store bokstaver i html vil man "skrike" den ut, og man mister også det orginale oppsettet med små og store bokstaver slik at det kan bli vanskelig å komme tilbake til dette igjen.</p>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p>Riktig, litt vanskelig formulert, men du svarer forsåvidt riktig.</p>
                        <h6>Student, positivt</h6>
                        <p>Oppgave 5 bra gjennomført</p>
                    </div>
				</div>
				
				<!-- Oppgave 6 -->
				<div class="box eksoppg" id="oppg6">
					<h3 class="done">Oppgave 6</h3>
						<h4>Oppgaven</h4>
							<p>I kurset har vi sett på tre ulike teknikker for å tilpasse en webside til ulike skjermstørrelser;
							relative måleenheter, medietyper med spesiell vekt på handheld og media queries.</p>
								<ul class="listlitenbokst">
									<li>Hva er forskjellen på disse teknikkene, og hvilke(n) vil du anbefale?</li>
									<li>Hvilke av disse teknikkene er relatert til begrepet responsive web design, og hvordan?</li>
								</ul>
						<h4>Løsningen</h4>
                            <p>Alle disse teknikkene er relatert til responsivt webdesign. Vi bruker først og fremst medietyper og/eller media queries for å si noe om hvilke størrelser og/eller enheter vi vil lage design for. Etter at vi har definert hvilke størrelser vi vil lage design for (f.eks. mobil ca 320px, tablet ca 768px, pc ca 1200px) lager vi noe felles og noe forskjellig design for disse. Farger og relativ tekststørrelse kan som oftest brukes likt på alle enheter/størrelser, imens størrelsen på boksene i hovedsak burde variere. F.eks kan vi ha en "kolonne" på mobil, 2 "kolonner" på tablet og 3-4 "kolonner" på pc.</p>
                            <dl>
                                <dt>Relative måleenheter (rem, em, ex, %)</dt><dd>De fleste relative måleenheter er relative til foreldreelementet. Rem er relativ til body. Hvis vi setter en prosent på en p tagg som ligger i en article i en section i body, så henter vi størrelsen i body (stort sett angitt med px), deretter kan vi redusere/øke størrelsen i section, så reduserer/øker vi den i article og deretter reduserer/øker vi den igjen i p taggen, det samme skjer hvis vi bruker em, men det vil ikke skje i rem fordi den er relativ til body uansett hvor mange foreldre elementer det er. Hvis vi setter rem på en p tagg i en article i en section i body, så henter vi fortsatt størrelsen fra body til section, men vi henter også størrelsen fra body til article og p taggen, så hvor mye størrelsen er redusert eller økt i foreldreelementene har ingen betydning for størrelsen på teksten i p taggen om vi bruker rem.</dd>
                                <dt>Medietyper</dt><dd>De forskjellinge mediatypene man kan velge er: (<a href="http://www.w3schools.com/tags/att_link_media.asp">hentet fra w3schools</a>)
                                    <blockquote cite="http://www.w3schools.com/tags/att_link_media.asp">
                                    <dl>
                                        <dt>all</dt><dd>Default. Suitable for all devices</dd>
                                        <dt>aural</dt><dd>Speech synthesizers</dd>
                                        <dt>braille</dt><dd>Braille feedback devices</dd>
                                        <dt>handheld</dt><dd>Handheld devices (small screen, limited bandwidth)</dd>
                                        <dt>projection</dt><dd>Projectors</dd>
                                        <dt>print</dt><dd>Print preview mode/printed pages</dd>
                                        <dt>screen</dt><dd>Computer screens</dd>
                                        <dt>tty</dt><dd>Teletypes and similar media using a fixed-pitch character grid</dd>
                                        <dt>tv</dt><dd>Television type devices (low resolution, limited scroll ability)</dd>
                                    </dl>
                                    </blockquote>
                                Det er først og fremst all og print vi bruker.
                                </dd>
                                <dt>Media queries</dt><dd><img src="image/breakpoints.png" align="right" />I media queries velger vi hvor vi vil ha såkalte breakpoints. Deretter lager vi stil som, gjelder opp til og med første breakpoint. Så er det stil mellom breakpoint 1 og breakpoint 2, og videre mellom alle breakpoint frem til siste breakpoint hvor man lager en egen stil for alt som er større enn dette. Breakpointene som er i bildet er en ca, og hvor det er best å sette breakpoints både varierer fra side til side og endrer seg med tiden. Den beste måten å sette breakpoints på er ved å begynne med designet for mobil, vise dette med så liten bredde i nettleseren som mulig, og deretter gradvis øke bredden på nettleseren til designet ikke lenger ser bra ut, så setter vi denne størrelsen som første breakpoint. Så gjør vi endringer i designet slik at det gjelder over første breakpoint, deretter gjentar vi prosessen frem til vi har funnet alle våre breakpoints.</dd>
                            </dl>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p>Mye bra her. Godt forklart og bra at du har tatt med flere medietyper enn hva oppgaven spurte om.</p>
                        <h6>Admin, negativt</h6>
                        <p>Du glemte å svare på oppgave b? Selv om det er mer enn nok i besvarelsen ser jeg ikke en forklaring som relaterer media queries med responsive web design.</p>
                        <h6>Student, positivt</h6>
                        <p>resten er også bra gjennomført og svarene er fortstålige</p>
                    </div>
                            
				</div>
				
				<!-- Oppgave 7 -->
				<div class="box eksoppg" id="oppg7">
					<h3 class="done">Oppgave 7</h3>
						<h4>Oppgaven</h4>
							<p>Forklar kort, og så pressist som mulig, hva RSS er og hva det benyttes til</p>
						<h4>Løsningen</h4>
                            <dl>
                                <dt>RSS - Rich Site Summary (Really Simple Syndication)</dt><dd>Idéen bak dette er at man skal kunne bli informert om når nettsider oppdateres istedenfor å måtte sjekke selv. Fokuserer på maskinlesbarhet fordi kommunikasjonen først foregår mellom maskiner. Brukere kan ved hjelp av rss abonnere på nettsiden vår, vi forteller en maskin når vi har gjort endringer og hva slags endringer (hva som ble lagt til, f.eks. en blog-post eller en nyhetsartikkel), slik at maskinen kan fortelle brukeren hva og når noe er oppdatert.</dd>
                            </dl>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p>Grei besvarelse, men kunne vært enda mer presis og kortere.</p>
                        <h6>Student, positivt</h6>
                        <p>resten er også bra gjennomført og svarene er fortstålige</p>
                    </div>
				</div>
                
                <!-- Oppgave 8 -->
				<div class="box eksoppg" id="oppg8">
					<h3 class="done">Oppgave 8</h3>
						<h4>Oppgaven</h4>
							<p>Hvilken effekt/hensikt har hver av følgende fire tegnsekvenser i HTML:</p>
                            <ul>
                                <li>&amp;lt;</li>
                                <li>&amp;gt;</li>
                                <li>&amp;amp;</li>
                                <li>&amp;quot;</li>
                            </ul>
						<h4>Løsningen</h4>
                            <p>Felles for alle tegnene er at de er escape-characters og er brukt til å skrive html-kode i sin opprinnelige form.</p>
                            <dl>
                                <dt>&amp;lt; gir tegnet &lt;</dt>
                                    <dd>Hvis man bruker tegnet direkte uten å bruke escape-characters vil en nettleser, skjermleser eller lignende kunne tro at man forsøker å åpne en tagg.</dd>
                                <dt>&amp;gt; gir tegnet &gt;</dt>
                                    <dd>Hvis man bruker tegnet direkte uten å bruke escape-characters vil en nettleser, skjermleser eller lignende kunne tro at man forsøker å lukke en tagg.</dd>
                                <dt>&amp;amp; gir tegnet &amp;</dt>
                                    <dd>Dette tegnet var ikke i utgangspunktet et problem i html, men man laget et problem da man begynte å bruke det for å ha en løsning på andre tegn som var et problem.</dd>
                                <dt>&amp;quot; gir tegnet &quot;</dt>
                                    <dd>Dette er ikke noe særlig brukt rett i elementer, men vi må bruke det dersom vi skal ha et eller flere quote-marks i f.eks. et attributt.</dd>
                            </dl>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p>Bra! Flott at du forklarer i tillegg.</p>
                        <h6>Student, positivt</h6>
                        <p>resten er også bra gjennomført og svarene er fortstålige</p>
                    </div>
				</div>
				
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
				<li><a href="#oppg6">6</a></li>
				<li><a href="#oppg7">7</a></li>
				<li><a href="#oppg8">8</a></li>
			</ul>
		</aside>
		
	</body>
</html>