<html>
	<head>
		<title>Oblig 3 - Turid Irene Folkestad Sønsteby</title>
		<meta charset="UTF-8"/>
		<link href="css/webcss_v2.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<header class="box">
			<h1 class="box">Oblig 3</h1>
            <?php include 'webutviklingMenu.php'; ?>

            <!-- Litt generell info -->
            <div id="generelt" class="info box">
                <h3>Informasjon fra foreleser om oppgavene</h3>
                <p>Oppgave 1, 2 og 3 skal gjøres i de samme gruppene dere benyttet i oblig 2. Oppgave 4 og de gamle eksamensoppgavene skal gjøres individuelt.
                <br />
                Leveransen i oppgaven er en individuell nettside med linker til de felles gruppeoppgavene og linker til de individuelle oppgavene som er gjort. Vis tydelig i din individuelle innlevering hvem du har samarbeidet med på gruppeprosjektet.</p>
                <p>Aktivitetsloggen på GitHub er en del av det individuelle vurderingsgrunnlaget, dette betyr at GitHub repoet må være public og må vise at alle har bidratt og at dere har hatt gode arbeidsrutiner.</p>
            </div>
            <?php include 'sammarbeidOblig2og3.php'; ?>
		</header>

		<main class="box">
			<!-- Øvningsoppgavene -->
			<section class="box normal">

				<h2>Øvings oppgaver</h2>

				<!-- Oppgave 1 -->
				<article class="box oppg" id="oppg1">
					<h3 class="utdyp">Oppgave 1</h3>
						<h4>Oppgaven</h4>
							<p>Gjør ferdig nettstedet dere begynte på i oblig 2. Nettstedet må ikke være veldig avansert men skal vise at dere behersker HTML og CSS godt, og at dere evner å gjøre et planlagt design til et ferdig nettsted.</p>
						<h4>Løsningen</h4>
							<p><a href="http://www.it-stud.hiof.no/~turidfs/zip2/index.php">Nettsiden</a></p>
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

				<!-- Oppgave 2 -->
				<article class="box oppg" id="oppg2">
					<h3 class="done">Oppgave 2</h3>
						<h4>Oppgaven</h4>
							<p>Test og dokumenter at nettstedet validerer (både HTML og CSS) og at den vises som planlagt/korrekt på ulike enheter, i ulike oppløsninger og i ulike nettlesere. Det er viktig at nettstedet fungerer korrekt på mobile enheter, nettbrett, bærbare og stasjonære pcer.</p>
                            <p>Dokumenter ved hjelp av for eksempel skjermbilder at dere har testet i forskjellige oppløsninger og i forskjellige nettlesere.</p>
                            <p>Om dere får noen valideringsfeil som ikke kan fikses når dere tester skal dere beskrive disse og hva de betyr. Med valideringsfeil som ikke kan fikses menes browser hacks, CSS som ikke er ”ferdig” og HTML kode som ikke er ”ferdig”. Valideringsfeil som kan ordnes burde ordnes før innlevering.</p>
						<h4>Løsningen</h4>
							<p><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fwww.it-stud.hiof.no%2F~turidfs%2Fzip2%2Findex.php" target="_blank">Validering av nettsidens HTML</a> (åpner i ny fane)</p>
							<p><a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.it-stud.hiof.no%2F~turidfs%2Fzip2%2Findex.php%3F&profile=css3&usermedium=all&warning=1&vextwarning=&lang=en" target="_blank">Validering av nettsidens CSS</a> (åpner i ny fane)</p>
                            <p>De fleste feilene er html5 og css3 valideringsfeil, elementer som ikke er helt ferdige i standarden.</p>
				</article>

				<!-- Oppgave 3 -->
				<article class="box oppg" id="oppg3">
					<h3 class="done">Oppgave 3</h3>
						<h4>Oppgaven</h4>
							<p>Lag en kort oppsummering av arbeidet og hvordan alle i gruppen har bidratt. Skriv også litt om hvordan dere har arbeidet i Git og hvordan dette har fungert for dere.</p>
						<h4>Løsningen</h4>
                            <h5>Oblig 2</h5>
							<p>Vi satt i hovedsak sammen for å jobbe med oppgavene. Vi jobbet i MakerSpace og i Enigma sonen og fikk erfare at det er fort gjort å bli mer sosial enn arbeidssom.</p>
                            <h5>Oblig 3</h5>
                    <p>Vi hadde litt problemer internt i gruppa med en del sykdom. Vi var heller ikke flinke nok til å sørge for å fordele arbeidsoppgaver eller sørge for at alle hadde forstått oppgavene sine.</p>
                    <p>En i gruppa fikk ikke nyeste versjonen av filene vi andre lastet opp, og det tok oss ganske lang tid å finne ut av hva som var problemet. Det viste seg å at prosjektet hadde blitt forket istedenfor å redigere samme repo.</p>
                    <p>Vi har to github repo fordi jeg ikke helt fikk til å lage en branch slik jeg hadde tenkt til for å teste ut noe design og var usikker på om jeg kom til å få det til som jeg ville eller ikke. Gruppa ble deretter enig i at designet funket.</p>
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
				<article class="box oppg" id="oppg4">
					<h3 class="done">Oppgave 4</h3>
						<h4>Oppgaven</h4>
							<p>Lag en enkel nettside der du eksperimenterer med avanserte HTML og CSS funksjoner. Det som burde være med er video, CSS animasjoner, MathML, SVG og webfonter. Eksemplene skal lages selv men de trenger ikke å være veldig avanserte. Videofiler og fonter kan hentes fra nett.</p>
						<h4>Løsningen</h4>
							<p><a href="oppgaver/oblig3oppg4.php">Egen side</a></p>
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

				<!-- Oppgave 5 -->
				<article class="box eksoppg" id="oppg5">
					<h3 class="done">Oppgave 5</h3>
						<h4>Oppgaven</h4>
							<p>Det dukker stadig opp "utvidelser" til HTML-språket, og MathML er en av disse vi har sett på i kurset. Hvilke fordeler og ulemper er det ved å bruke MathML fremfor å sette inn et bilde slik det ble gjort tidligere?</p>
						<h4>Løsningen</h4>
							<p>En av fordelene ved å bruke MathML fremfor å sette inn et bilde er at innholdet blir søkbart og maskinlesbart (universell utforming).</p>
                            <p>En av de største ulempene er at det er veldig lite støtte fra de forskjellige nettleserne. I hovedsak er det bare Mozilla Firefox og Safari som støtter det.</p>
                            <blockquote cite="https://en.wikipedia.org/wiki/MathML">
                                <h5>MathML tegn og syntaks</h5>
                                <p>Informasjonen her er hentet fra <a href="https://en.wikipedia.org/wiki/MathML">Wikipedias side om MathML</a> 11.10.16 klokkka 15:36.</p>
                                <dl>
                                    <dt>Token elements</dt><dd>Token elements generally only contain characters (not other elements). They include:</dd>
                                    <dt>&lt;mi>x&lt;/mi&gt;</dt><dd>identifiers</dd>
                                    <dt>&lt;mo&gt;+&lt;/mo&gt;</dt><dd>operators</dd>
                                    <dt>&lt;mn&gt;2&lt;/mn&gt;</dt><dd>numbers</dd>
                                    <dt>&lt;mtext&gt;non zero&lt;/mtext&gt;</dt><dd>text</dd>
                                    <dt>&lt;mtext&gt;&lt;b&gt;non&lt;/b&gt; zero&lt;/mtext&gt;</dt><dd>Note however that these token elements may be used as extension points, allowing markup in host languages. MathML in HTML5 allows most inline HTML markup in mtext, and is conforming, with the HTML markup being used within the MathML to mark up the embedded text (making the first word bold in this example).</dd>
                                    <dt>Layout elements</dt><dd>These are combined using layout elements, that generally contain only elements.They include:</dd>
                                    <dt>&lt;mrow&gt;</dt><dd>a horizontal row of items</dd>
                                    <dt>&lt;msup&gt;, &lt;munderover&gt;</dt><dd>and others – superscripts, limits over and under operators like sums, etc.</dd>
                                    <dt>&lt;mfrac&gt;</dt><dd>fractions</dd>
                                    <dt>&lt;msqrt&gt; and &lt;mroot&gt;</dt><dd>roots</dd>
                                    <dt>&lt;mfenced&gt;</dt><dd>surrounding content with fences, such as parentheses.</dd>
                                    <dt></dt><dd></dd>
                                    <dt></dt><dd></dd>
                                    <dt></dt><dd></dd>
                                    <dt></dt><dd></dd>
                                </dl>
                            </blockquote>
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
                
                <!-- Oppgave 6 -->
				<article class="box eksoppg" id="oppg6">
					<h3 class="done">Oppgave 6</h3>
						<h4>Oppgaven</h4>
							<p>Hvilke fordeler/ulemper ville det hatt dersom en webside måtte være 100% korrekt/validert før den kunne vises av en nettleser? Tenk på standarder, teknologi, utviklere og brukere.</p>
						<h4>Løsningen</h4>
                        <h5>Generelt</h5>
                            <p>Det ville mest sannsynlig ha vært mer profesjonelt innhold og mindre brukergenererte data.</p>
                            <h6>Fordeler</h6>
                                <p>Mer profesjonelt og mindre brukergenerert ville i stor grad ha betydd mindre tull som f.eks. svindel, upresise/ukorekte/feil data.</p>
                            <h6>Ulemper</h6>
                                <p>En veldig stor ulempe er at det er risiko for at mange nettsider får problemer hver gang det kommer en oppdatering i html, css og js. Det kan også bli vanskelig å teste ut nye ting som enda ikke er 100% støttet av nettlesere, som f.eks. Browser-hacks. Mer profesjonelt og mindre brukergenerert kan også bety at internett fort kunne ha blitt mer som et leksikon enn et interaktivt samarbeidsverktøy.</p>
                        <h5>Standarder</h5>
                            <h6>Fordeler</h6>
                                <p>Det hadde vært enklere å få alle nettlesere til å følge samme standard.</p>
                            <h6>Ulemper</h6>
                                <p>Det kan fort bli mer motstand mot nye standarder, fordi folk vet at de må gjøre ekstra arbeid med en gang det kommer ut.</p>
                        <h5>Teknologi</h5>
                            <h6>Fordeler</h6>
                                <p>Det kan bli enklere å utvikle teknologi når man vet at alt funker.</p>
                            <!--<h6>Ulemper</h6>
                                <p></p>-->
                            <p></p>
                        <h5>Utviklere</h5>
                            <!--<h6>Fordeler</h6>
                                <p></p>-->
                            <h6>Ulemper</h6>
                                <p>For utviklere vil det mest sannsynlig være flest ulemper. Det er litt dumt om koden man lager må være 100% ferdig før man kan teste den ut. Ofte oppdager man problemer underveis som det er mye enklere å fikse når siden er f.eks. 20% ferdig, dette kan fort bli veldig mye ekstra jobb om man har gjort den samme feilen opp til 100%.</p>
                        <h5>Brukere</h5>
                            <h6>Fordeler</h6>
                                <p>Det ville mest sannsynlig blitt mer likt hva en handicappet bruker og en ikke handicappet bruker ville ha kunnet utforske, dermed ville det mest sannsynlig ha blitt mer press fra alle hold om å gi sidene god tilgjengelighet.</p>
                            <h6>Ulemper</h6>
                                <p></p>
                            <p>For de fleste brukere kan det være veldig slitsomt å måtte gå igjennom side etter side uten å få tilbake noe innhold fordi siden ikke er perfekt. Det ville mest sannsynlig ha blitt vanskeligere for brukere å generere innhold selv (f.eks. en blogg).</p>
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
				<li><a href="#oppg5">5</a></li>
				<li><a href="#oppg6">6</a></li>
			</ul>
		</aside>

	</body>
</html>
