<html>

	<head>
		<title>Oblig 2 - Turid Irene Folkestad Sønsteby</title>
		<meta charset="UTF-8"/>
		<link href="css/webcss_v2.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		
		<!-- Memos to self: (aka, den som retter behøver ikke se på dette, det er bare noe jeg eventuelt har glemt å fjerne.)
		En div for hver oppgave, en div for hver del-oppgave.
		-->
		
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
            <p>Oppgave 1-3 er gjort i samarbeid med Natalie og Fredrik, innholdt vårt kan derfor være veldig likt i disse oppgavene.</p>
		</header>
		
		<main class="box">
			<!-- Øvningsoppgavene -->
			<section class="box normal">
				
				<h2>Øvings oppgaver</h2>
				
				<!-- Oppgave 1 -->
				<div class="box oppg" id="oppg1">
					<h3 class="utdyp">Oppgave 1</h3>
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
                                <li>Musikkvideoer</li>
                                <li>Album og preview av musikk</li>
                                <li>Events / tour</li>
                                <li>Nettbutikk</li>
                                <li>Nyheter, awards, twitter, blog, forum</li>
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
                                <li>Logo</li>
                                <li>Meny/undermeny</li>
                                <li>Subscribe liste</li>
                            </ul>
				</div>
				
				<!-- Oppgave 2 -->
				<div class="box oppg" id="oppg2">
					<h3 class="solve">Oppgave 2</h3>
						<h4>Oppgaven</h4>
							<p>Begynn å arbeide med designet på nettstedet. Dette gjøres ved hjelp av skisser og wireframes, og skal lede frem til et avansert design.</p>
                            <p>Det grafiske designet kommer ikke til å bedømmes men forsøk å gjøre siden så pen som mulig, det vil da være koseligere å jobbe med den. Tenk nøye over hva som er mulig med HTML og CSS og prøv å implementere så mange som mulig avanserte teknikker i planleggingsfasen. Jo bedre jobb dere gjør her jo enklere blir neste oblig.</p>
                            <p>Når du designer er det viktig at du tenker på hvordan opplevelsen blir for brukeren, om menyen er vanskelig å bruke vil mange brukere slutte å benytte nettsiden. En godt gjennomtenkt navigasjonsmeny og brukeropplevelse er derfor svært viktig.</p>
                            <p>Designet skal være responsivt og dere skal lage spesifikke design utkast for forskjellige skjermstørrelser. Få frem hvordan siden skal skalere mellom forskjellige skjermstørrelser i skissene. Dere skal også lage en utskriftsstil, så det vil være naturlig å designe opp dette allerede nå.</p>
						<h4>Løsningen</h4>
                            <p></p>
                            <p><a href="oppgaver/skisserWireframes.php">En egen side med prosessen frem til disse bildene.</a></p>
				</div>
				
				<!-- Oppgave 3 -->
				<div class="box oppg" id="oppg3">
					<h3 class="solve">Oppgave 3</h3>
						<h4>Oppgaven</h4>
							<p>Sett opp et prosjekt på Github sammen. Dere skal benytte dette prosjektet i utviklingsarbeidet videre og innleveringen i oblig 3 vil blant annet være en link til Github prosjektet.</p>
                            <p>I denne oppgaven skal dere sette opp et Github prosjekt (repo) og lage en basis struktur for HTML/CSS, mappestruktur og sørge for at alle i gruppa kommer i gang med Github og har tilgang til prosjektet.</p>
						<h4>Løsningen</h4>
                            <p>Her er link til GitHub prosjektet vårt: <a href="https://github.com/turidfs/zip">https://github.com/turidfs/zip</a></p>
				</div>
				
			</section>
			
			<!-- Eksamensoppgavene -->
			<section class="box eksamen">
				
				<h2>Tidligere eksamensoppgaver</h2>
				
				<!-- Oppgave 4 -->
				<div class="box eksoppg" id="oppg4">
					<h3 class="solve">Oppgave 4</h3>
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
				</div>
				
				<!-- Oppgave 5 -->
				<div class="box eksoppg" id="oppg5">
					<h3 class="solve">Oppgave 5</h3>
						<h4>Oppgaven</h4>
							<p>Hva er den praktiske forskjellen på å endre en tekst til uppercase "manuelt" i HTML fremfor å kjøre text-transform:uppercase i CSS?
							Hvilken metode bør man benytte (om du mener begge, så angi i hvilke tilfeller)?</p>
						<h4>Løsningen</h4>
				</div>
				
				<!-- Oppgave 6 -->
				<div class="box eksoppg" id="oppg6">
					<h3 class="solve">Oppgave 6</h3>
						<h4>Oppgaven</h4>
							<p>I kurset har vi sett på tre ulike teknikker for å tilpasse en webside til ulike skjermstørrelser;
							relative måleenheter, medietyper med spesiell vekt på handheld og media queries.</p>
								<ul class="listlitenbokst">
									<li>Hva er forskjellen på disse teknikkene, og hvilke(n) vil du anbefale?</li>
									<li>Hvilke av disse teknikkene er relatert til begrepet responsive web design, og hvordan?</li>
								</ul>
						<h4>Løsningen</h4>
				</div>
				
				<!-- Oppgave 7 -->
				<div class="box eksoppg" id="oppg7">
					<h3 class="solve">Oppgave 7</h3>
						<h4>Oppgaven</h4>
							<p>Forklar kort, og så pressist som mulig, hva RSS er og hva det benyttes til</p>
						<h4>Løsningen</h4>
				</div>
                
                <!-- Oppgave 8 -->
				<div class="box eksoppg" id="oppg8">
					<h3 class="utdyp">Oppgave 8</h3>
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
                                <dt>&amp;lt;</dt>
                                    <dd>Gir tegnet &lt;. Hvis man bruker tegnet direkte uten å bruke escape-characters vil en nettleser, skjermleser eller lignende kunne tro at man forsøker å åpne en tagg.</dd>
                                <dt>&amp;gt;</dt>
                                    <dd>Gir tegnet &gt;. Hvis man bruker tegnet direkte uten å bruke escape-characters vil en nettleser, skjermleser eller lignende kunne tro at man forsøker å lukke en tagg.</dd>
                                <dt>&amp;amp;</dt>
                                    <dd>Gir tegnet &amp;. Dette tegnet var ikke i utgangspunktet et problem i html, men man laget et problem da man begynte å bruke det for å ha en løsning på andre tegn som var et problem.</dd>
                                <dt>&amp;quot;</dt>
                                    <dd>Gir tegnet &quot;. Dette er ikke noe særlig brukt rett i elementer, men vi må bruke det dersom vi skal ha et eller flere quote-marks i f.eks. et attributt.</dd>
                            </dl>
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