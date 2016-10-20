<!DOCTYPE html>
<html lang="nb">

	<head>
		<title>Oblig 1 - Turid Irene Folkestad Sønsteby</title>
		<meta charset="UTF-8"/>
		<link href="css/webcss_v1.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<header id="top" class="box">
			<h1 class="box">Oblig 1</h1>
            <?php include 'webutviklingMenu.php'; ?>
		</header>
		
		<main class="box">
			<!-- Oppgavene -->
			<section class="box normal">
				
				<h2>Øvings oppgaver</h2>
				
				<!-- Oppgave 1 -->
				<article id="oppg1" class="box oppg">
					<h3 class="done">Oppgave 1</h3>
						<h4>Oppgaven</h4>
                            <p>Velg en nettside du selv besøker mye, dette kan være nyhetssider, sider for en interesse eller annet. Gå igjennom siden og finn feil, både problemer i kode og i design/funksjonalitet på siden.</p>
                            <p>Lag en liste med alle de feilene du finner.</p>
                            <p>I denne oppgaven vil det kunne være så mange feil på enkelte sider at du ikke får listet alle, men det er helt greit. Poenget er ikke at du skal finne alle feilene, men heller at du skal lære deg å se etter feil.</p>
                            <p>Eksempler på sider som tidligere har blitt gjennomgått for feil og er gode kandidater er arngren.net.</p>
						<h4>Løsningen</h4>
                            <p>Jeg har sett på NAV.no. Har her sett etter hvordan nettsiden bruker/ikke bruker semantiske tagger. Har også sett etter om jeg kan se blanding av innhold og design.</p>
                            <ul>
                                <li>Generelt om siden:
                                    <ul>
                                        <li>Da NAV er et system beregnet på de litt vanskeligstilte i samfunnet er det veldig viktig at det er enkelt for alle å finne frem.</li>
                                        <li>Når man tar bort stilsettet til siden blir strukturen nesten enklere å forstå, men samtidig får man beskjed om at man er logget inn selv om man ikke er det, og det er generelt sett en del meldinger som dukker opp som ikke burde ha vært der. Disse meldingene vil muligens en skjermleser lese opp, og det vil bli veldig forvirrende å være logget inn det ene sekundet og logget ut det neste.</li>
                                        <li>I kildekoden går linje 15 over 3 scrollbare sider i nettleseren min, dette gjør det fryktelig tungvindt å rette opp i eventuelle feil.</li>
                                    </ul>
                                </li>
                                <li>Semantikk:
                                    <ul>
                                        <li>De starter med en nav som muligens er beregnet på synshemmede med "Til hovedmeny" og "Til hovedinnhold", men disse valgene vil ikke føre deg samme sted som menyen ellers vil.</li>
                                        <li>De har laget selve headeren riktig, men alt inni den er strukturert med div'er med klasser, og dette er ikke bra for skjermlesere etc.</li>
                                        <li>Klassene de bruker er ting som "inner-row", dette er ikke en god klasse.</li>
                                        <li>De har mye visuelt skjult innhold, og ironisk nok er mye av dette ting som kunne ha vært bra klasser, f.eks. "Prioriterte tjenester og innhold"</li>
                                        <li>Main inneholder hovedinnhold pluss noe som kanskje hadde passet bedre i en aside (NYTTIG Å VITE, NYHETER og SNARVEIER).</li>
                                        <li>Footeren er jeg ganske imponert over. Den gir mening både med og uten css, og har etter min mening relativt gode klasser.</li>
                                        <li>Jeg savner bruk av article, section og nav, men de har ihvertfall startet litt med semantiske tagger.</li>
                                    </ul>
                                </li>
                                <li>Innhold vs design:
                                    <ul>
                                        <li>Noe som overrasker meg litt (positivt) er at de har klart å skille mellom innhold og design relativt bra, jeg kan ihvertfall ikke umiddelbart se noen feil der.</li>
                                    </ul>
                                </li>
                            </ul>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p>bra, går grundig inn i feil.</p>
                        <h6>Student, positivt</h6>
                        <p>Bra forklart og skrevet i oppgave 1-3 og 6.</p>
                    </div>
				</article>
				
				<!-- Oppgave 2 -->
				<article id="oppg2" class="box oppg">
					<h3 class="done">Oppgave 2</h3>
						<h4>Oppgaven</h4>
                    <p>Ta utgangspunkt i nettsiden du valgte i den forrige oppgaven og kjør den igjennom HTML validatoren til W3C (<a href="http://validator.w3.org">http://validator.w3.org</a>) . Se på feilene du får opp der og beskriv hva de betyr, se også gjerne feilene validatoren finner opp mot feilene du selv fant i forrige oppgave.</p>
						<h4>Løsningen</h4>
                            <ul>
                                <li>Warning: "Element nav does not need a role attribute." - Her kan det se ut til at de har gått fra en div til en nav.</li>
                                <li>Alle advarslene er om at semantiske tagger ikke behøver attributtet role.</li>
                                <li>Error: "No p element in scope but a p end tag seen." - "From line 15, column 4475; to line 15, column 4478" - "pan&gt;&lt;/div&gt;<span class="solve">&lt;/p&gt;</span>&lt;ul cl" - Jeg skulle gjerne ha lett etter denne p-taggen, men linje 15 går over 3 sider scrolling i nettleseren min, så det gidder jeg ikke.. Feilen er at p-taggen avsluttes enten uten å ha blitt påbegynt. Denne feilen gjentas 4 ganger.</li>
                                <li>Error: "Element div is missing one or more of the following attributes: role." - Her klages det over at det ikke er klart for en skjermleser hvilken rolle denne div'en har.</li>
                            </ul>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p>bra, går grundig inn i feil.</p>
                        <h6>Student, positivt</h6>
                        <p>Bra forklart og skrevet i oppgave 1-3 og 6.</p>
                    </div>
				</article>
				
				<!-- Oppgave 3 -->
				<article id="oppg3" class="box oppg">
					<h3 class="done">Oppgave 3</h3>
						<h4>Oppgaven</h4>
                            Beskriv med dine ord hva som er forskjellen på klasser og ID’er i HTML/CSS. Følgende elementer skal være med i forklaringen:
                            <ul>
                                <li>Hva er en klasse?</li>
                                <li>Hva er en ID?</li>
                                <li>Hva er forskjellen mellom en klasse og en ID?</li>
                                <li>Hvorfor bruker vi klasser på noen ting mens vi på andre ting benytter ID’er?</li>
                                <li>Hvorfor bruker man flere klasser på elementer og hva er nytten av det? </li>
                            </ul>
						<h4>Løsningen</h4>
                            <dl>
                                <dt>Klasse</dt><dd>Vi setter klasser på html-elementer, disse kan brukes i både css og JavaScript, men her fokuserer jeg på bruken i css. Klasser i html (og css) bruker vi når vi vil gjøre noe flere ganger.</dd>
                                <dt>ID</dt><dd><!-- The id attribute specifies a unique id for an HTML element (the value must be unique within the HTML document). --> Vi setter også ID'er på html-elementer, disse kan også brukes i både css og JavaScript. En ID kan kun brukes en gang og må da være unik i det gjeldende html-dokumentet.</dd>
                                <dt>Klasse vs ID - Forskjell og bruk</dt><dd>En ID brukes kun på et element (i html-dokumentet). En klasse kan brukes på flere elementer, og som jeg nevnte bruker vi da dette når vi vil gjøre noe flere ganger (f.eks. sette en bestemt type border rundt noe).</dd>
                                <dt>Multiple classes</dt><dd>Jeg har selv brukt flere klasser her for å få lik border rundt forskjellige oppgaver etc, men forskjellig farge. Klassen "<span class="klasseTekst">box</span>" er generelt sett for border, padding og margin og klassene som setter farger på borders er "<span class="klasseTekst">oppg</span>" og "<span class="klasseTekst">normal</span>". Hvis jeg bare hadde skullet bruke en klasse for hvert element hadde jeg måttet gjenta alt fra klassen "<span class="klasseTekst">box</span>" i klassene "<span class="klasseTekst">oppg</span>" og "<span class="klasseTekst">normal</span>".</dd>
                            </dl>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p>forstår essensen.</p>
                        <h6>Admin, negativt</h6>
                        <p>Klasse og ID bør utdypes. "når vi vil gjøre noe" er ikke særlig beskrivende. Klasser og id er noe vi tilegner elementer i html, for å så kunne hente de inn i css for å style dem. vil man at flere ting skal styles likt, brukes class="eks" på alle elementene. id brukes der et element skal styles generisk.</p>
                        <h6>Student, positivt</h6>
                        <p>Bra forklart og skrevet i oppgave 1-3 og 6.</p>
                    </div>
				</article>
				
				<!-- Oppgave 4 -->
				<article id="oppg4" class="box oppg">
					<h3 class="done">Oppgave 4</h3>
						<h4>Oppgaven</h4>
                            <p>Lag en enkel (1 side) nettside der du leker deg med prinsippene rundt Box modellen. På denne siden skal du teste ut de forskjellige box modell css-egenskapene og vise hvordan man bruker box modellen og hva som er styrker og svakheter med dette.</p>
                            <p>Beskriv hva box modellen er og hva den brukes til i egne ord.</p>
						<h4>Løsningen</h4>
                            <a href="oppgaver/boxModel.php"><p>Egen side med box model</p></a>
                    <p>Box model kan blant annet sammenlignes med en BH der content er brystene, padding er innlegget i BH'en, border er selve bhen og margin er avstanden fra BH'en og ut.</p>
                    <p>Med box model menes det at alle html elementer "ligger i en boks". Disse boksene kan vi flytte rundt på, endre størrelsen på, fylle med bokser, putte i bokser, osv.</p>
                    <p>Vi bruker box model blant annet til å lage border og definere avstand mellom de forskjellige html-elementene.</p>
                    <figure>
                        <figcaption>Illustrasjonsbilde for box model</figcaption>
                        <img src="image/box-model.gif" alt="Eksempelbilde for box model">
                    </figure>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p>god kontroll på box model.</p>
                        <h6>Student, positivt</h6>
                        <p>Oppgave 4 viser tydelig at du har jobbet med bokser. Viser at du kan sette bokser over hverandre osv.</p>
                        <h6>Student, negativt</h6>
                        <p>I oppgave 4 var det litt rotete, og her kunne du satt det opp på en måte som viser at du kan plassere boksene med tekst sånn at det ser ryddig og ordentelig ut, kunne også vist at du kan bruke andre border.</p>
                    </div>
				</article>
				
				<!-- Oppgave 5 -->
				<article id="oppg5" class="box oppg">
					<h3 class="done">Oppgave 5</h3>
						<h4>Oppgaven</h4>
                    <p>Du finner et bilde på følgende url: <a href="http://ask.hiof.no/~michaeal/imgs/ressurser/katt.jpg">http://ask.hiof.no/~michaeal/imgs/ressurser/katt.jpg</a></p>
                        <p>Dette bildet skal posisjoneres i midten av en nettside, det må være både horisontalt og vertikalt midtstilt. Det finnes mange måter å gjøre dette på, noen måter er enkle men gir lavere nøyaktighet mens andre måter er vanskeligere men gir større nøyaktighet. Du velger den metoden du selv ønsker å benytte.</p>
                        <p>Tips, det finnes metoder i dag for å få til en perfekt midtstilling av elementer både horisontalt og vertikalt. Vi har ikke snakket om dette ennå men metoden skal enkelt kunne finnes ved et google søk.</p>
						<h4>Løsningen</h4>
                            <a href="oppgaver/bildeposisjonering.php"><p>Egen side med bildeposisjonering</p></a>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p>bra, bilde sentrert.</p>
                        <h6>Admin, negativt</h6>
                        <p>bilde følger med når jeg trekker sammen siden horisontalt. bilde bør "stå fast" når man trekker sammen siden på den måten da resten av elementene på siden din gjør det.</p>
                        <h6>Student, positivt</h6>
                        <p>Oppgave 5 er bildet midtstilt med full skjerm.</p>
                        <h6>Student, negativt</h6>
                        <p>I oppgave 5 blir ikke bildet midstilt når du minsker vinduet, dette kan du løse med å skalere ned bildet til en viss % i forhold til nettleserens vindu.</p>
                    </div>
				</article>
				
				<!-- Oppgave 6 -->
				<article id="oppg6" class="box oppg">
					<h3 class="done">Oppgave 6</h3>
						<h4>Oppgaven</h4>
                            <p>Sett deg inn i de strukturelle/semantiske taggene i HTML5 og beskriv med egne ord hva de forskjellige taggene gjør. Beskriv også hva fordelen med strukturelle/semantiske tagger er i forhold til den gamle modellen der man benyttet &lt;div&gt; elementer på alt med ”semantiske” ID’er.</p>
						<h4>Løsningen</h4>
                            <p>Listen over de semantiske taggene har jeg hentet fra w3schools. (<a href="http://www.w3schools.com/html/html5_semantic_elements.asp">W3schools, semantiske tagger.</a>)</p>
                            <dl>
                                <dt>Semantiske tagger</dt><dd>Sier noe om hva innholdet i taggen er.</dd>
                                <dt>Semantisk tag vs semantisk ID</dt><dd>En semantisk tag kan leses og forståes av en datamaskin, en ID er ikke like enkelt for en datamaskin å finne. Semantiske tagger er også ferdig definerte hvorav ID i teorien kan variere veldig fra programmerer til programmerer. (Selv om de semantiske taggene er basert på ofte brukte IDer.)</dd>
                                <dt>article</dt><dd>En artikkel skal gi mening om man leser kun denne uten å lese resten av nettsiden. Taggen kan f.eks. brukes på forum-poster, blog-poster og nyhetsartikler (i f.eks. avis).</dd>
                                <dt>aside</dt><dd>Innholdet i en aside burde være relatert til informasjonen på resten av siden. Aside er typisk brukt til sidebars, og disse igjen inneholder ofte figurer, sitater, utvidet informasjon, osv.</dd>
                                <dt>details og summary</dt><dd>Gir mulighet til å vise bare deler av teksten. Ytterst ligger details, og inni details ligger blant annet summary, hvor summary da er det som alltid vil vises, ellers kan man ha f.eks. et par p-tagger som har utdypet informasjon. Om brukeren ønsker å se den ekstra informasjonen kan hen trykke på den synlige teksten.</dd>
                                <dt>figure og figcaption</dt><dd>I et figure element kan man legge inn figcaption og image for å få en forklaringstekst til bildet.</dd>
                                <dt>footer</dt><dd>Footer er ekstra informasjon for nettsiden. Det kan brukes flere footere for en nettside eller et nettsted, f.eks. rett i body, i en article, i en section, osv. I den footeren som ligger rett i body er det vanlig å legge inn informasjon om forfatteren av siden, copyright informasjon, kontaktinformasjon, eventuelle linker til vilkår for bruk, osv.</dd>
                                <dt>header</dt><dd>Header er en introduksjon til innholdet som skal komme. Den kan for eksempel ligge rett i body som introduksjon til selve nettsiden, og da inneholder den gjerne logo, navigasjon osv. Det er ingen bestemt begrensning for hvor mange header-tagger man kan ha på en nettside eller et nettsted, og i noen tilfeller er det en fordel å ha flere header-tagger. Hvis man har en nettavis kan man f.eks. legge en header i en seksjon om sport, med en overskrift og navigasjon til forskjellige artikler om sport.</dd>
                                <dt>main</dt><dd>Brukes til å markere hovedinnholdet for siden og legges direkte i en body tag (altså ikke inni article, aside, footer, header, nav, osv.). Det kan bare være en main-tag for hver side. Elementer som ikke skal ligge i main er sidebars, primærnavigasjon, copyright, logo, søkeskjemer, osv.</dd>
                                <dt>mark</dt><dd>Brukes for å markere tekst. Om man ikke endrer stilen for mark selv vil de fleste vise den markerte teksten med svart skrift og gul bakgrunn, ala tusjmarkering i en tekstbok.</dd>
                                <dt>nav</dt><dd>Nav elementet definerer en gruppe linker, det er viktig at det i hovedsak er en gruppe linker og ikke bare en enkelt link. Linkene er oftest strukturert som en uorganisert liste. Noen av bruksområdene for nav er primærnavigasjon for siden, interne linker (innholdsfortegnelse), eksterne linker, osv.</dd>
                                <dt>section</dt><dd>Section taggen definerer en seksjon i et (html-) dokument. Det skal være en tematisk gruppering av innhold. En hjemmeside kan f.eks. grupperes i introduksjon, hovedinnhold og kontaktinformasjon.</dd>
                                <dt>time</dt><dd>Brukes for å fortelle at det handler om en spesifikk tid. Om man vil at en maskin skal kunne forstå innholdet bruker man attributtet datetime.</dd>
                                <dt>nesting/nøsting av section og article</dt><dd>Vi kan ikke bruke definisjonen på article og section for å bestemme hvordan de skal nøstes / ikke nøstes i hverandre. Man kan ha article i article, section i section, section i article, article i section, og hva man enn måtte ønske.</dd>
                            </dl>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p>god oversikt over semantiske tagger.</p>
                        <h6>Admin, negativt</h6>
                        <p>ikke beskrevet forskjell på bruk av semantisk tag og den gamle modellen der man bruker div'er.</p>
                        <h6>Student, positivt</h6>
                        <p>Bra forklart og skrevet i oppgave 1-3 og 6.</p>
                    </div>
				</article>
                
                <!-- Oppgave 7 -->
				<article id="oppg7" class="box oppg">
					<h3 class="done">Oppgave 7</h3>
						<h4>Oppgaven</h4>
                            <p>Bruk kunnskapen du tidligere har tilegnet deg i forrige oppgave om strukturelle/semantiske tagger og sett opp en enkel nettside med informasjon om et tema du interesserer deg for. Denne nettsiden skal benytte de strukturelle/semantiske taggene fra HTML5 og skal kunne valideres i validatoren til W3C. Denne siden vil bli brukt som utgangspunkt for en del videre oppgaver i faget.</p>
                            <p>PS: Siden trenger ikke å inneholde logisk innhold og kan gjerne benytte demo innhold.</p>
						<h4>Løsningen</h4>
                            <p><a href="oppgaver/demoContent.php">Egen side med demo content</a> (Warning: This might hurt your eyes, sorry =D)</p>
                    <p>Jeg får advarsler om at details og summary ikke alltid fungerer, og at jeg burde sette språket for html-dokumentet på engelsk. Jeg har satt språket til norsk bokmål, og for de delene der jeg bruker engelsk tekst har jeg satt lang="en". Jeg får ingen errors og heller ingen advarsler utenom dette.</p>
                    <p><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fwww.it-stud.hiof.no%2F~turidfs%2Fwebutvikling2016%2Foppgaver%2FdemoContent.php" target="_blank">Validering av Demo Content</a> (Åpner i ny fane.)</p>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, negativt</h6>
                        <p>rotete kode. bruk innrykk på tekst også. husk at du nødvendigvis ikke trenger sette id/class på semantiske tagger. du kan hente disse rett inn i style. </p>
                        <h6>Student, positivt</h6>
                        <p>i oppgave 7 og 8 har du fått frem mange css3 funksjoner og jobbet en del med siden.</p>
                    </div>
				</article>
                
                <!-- Oppgave 8 -->
				<article id="oppg8" class="box oppg">
					<h3 class="done">Oppgave 8</h3>
						<h4>Oppgaven</h4>
                            Bruk siden som ble satt opp i forrige oppgave og eksperimenter med CSS3 funksjoner. Du skal benytte minst 5 nye CSS3 teknikker på siden. Eksempler på elementer som kan brukes er:
                            <ul>
                                <li>CSS3 Animations</li>
                                <li>CSS3 Rounded Borders</li>
                                <li>CSS3 Buttons</li>
                                <li>CSS3 Shadows</li>
                                <li>CSS3 Gradients</li>
                            </ul>
                            <p>En god oversikt over nyheter i CSS3 finner du blant annet her: <a href="http://www.w3schools.com/css/css3_intro.asp">http://www.w3schools.com/css/css3_intro.asp</a></p>
						<h4>Løsningen</h4>
							<p><a href="oppgaver/demoContent.php">Egen side med demo content</a> (Warning: This might hurt your eyes, sorry =D)</p>
                            <p>CSS3 teknikker jeg har testet ut: </p>
                            <ul>
                                <li>2D/3D Transformations</li>
                                <li>Animations</li>
                                <li>Backgrounds and Borders</li>
                                <li>Buttons</li>
                                <li>Gradients</li>
                                <li>Multiple Column Layout</li>
                                <li>Rounded Borders</li>
                                <li>Selectors (obviously, vanskelig å få til css uten... =) )</li>
                                <li>Shadows</li>
                                <li>Text Effects</li>
                                <li>User Interface</li>
                            </ul>
                            <p>Har skrevet litt om hva jeg bruker når sånn omtrent der jeg har brukt det, så det skal bli litt lettere å finne frem i koden.</p>
                    <div class="comment">
                        <h5>Feedback</h5>
                        <h6>Admin, positivt</h6>
                        <p>leker deg med css, både css3 og andre stiler i css.</p>
                        <h6>Student, positivt</h6>
                        <p>i oppgave 7 og 8 har du fått frem mange css3 funksjoner og jobbet en del med siden.</p>
                        <h6>Student, negativt</h6>
                        <p>Det er kunne vært tydelig gjort litt bedre hva du har brukt av css3 i oppgave 8.</p>
                    </div>
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
				<li><a href="#oppg7">7</a></li>
				<li><a href="#oppg8">8</a></li>
			</ul>
		</aside>
		
		
	</body>
</html>