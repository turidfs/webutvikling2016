<!DOCTYPE html>
<html lang="nb">

	<head>
		<title>Oblig 1 - Turid Irene Folkestad Sønsteby</title>
		<meta charset="UTF-8"/>
        <style>
            .box{
                border-width: 5px;
                padding: 10px;
                margin: 10px;
            }
            body>header {
                width: 85%;
                border-style: solid;
                background-color: white;
            }
            header h1 {
                border-style: dotted;
                background: linear-gradient(to bottom right, red,orange,yellow,green,blue,indigo,violet);
            }
            .who {
                border-style: dashed;
                background: linear-gradient(to left, red,orange,yellow,green,blue,indigo,violet);
                color: white;
                border-color: black;
            }
            header nav {
                border-style: solid;
                border-width: 2px;
                padding: 10px;
                margin: 10px;
                background-image: url(image/pinkUnicorn.jpg);
                border-radius: 30px 5px 70px 5px;
            }
            header nav ul li {
                background-color: deeppink;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 2em;
                border-radius: 20px;
            }
            header nav ul li a {
                color: white;
            }
            header nav ul li a:visited {
                color: black;
            }
            main {
                width: 85%;
                border-style: double;
                background-color: white;
            }
            #summary {
                border-style: groove;
                background-image: url(image/badgerBadger.gif);
                color: red;
                box-shadow: 10px -10px 10px pink;
            }
            #ipsumer {
                border-style: solid;
                background-color: white;
            }
            #futurama {
                border-style: ridge;
                background-color: lime;
            }
            #futurama mark {
                background-color: darkblue;
                color: aliceblue;
            }
            @keyframes example {
                0% {background-color:red; left:0px; top:0px; color: white;}
                15% {background-color:orange; left:0px; top:0px; color: black;}
                30% {background-color:yellow; left:200px; top:0px; color: black;}
                45% {background-color:green; left:200px; top:200px; color: black;}
                60% {background-color:blue; left:200px; top:200px; color: white;}
                80% {background-color:indigo; left:0px; top:200px; color: white;}
                100% {background-color:violet; left:0px; top:0px; color: black;}
            }
            #futurama h6 {
                position: relative;
                animation-name: example;
                animation-duration: 10s;
                animation-iteration-count: 3;
                font-size: 1.00em;
                height: 3em;
            }
            #futurama p:nth-last-of-type(3) {
                resize: horizontal;
                overflow: hidden;
                background-color: aqua;
                word-break: break-all;
            }
            #futurama p:nth-last-of-type(4) {
                resize: vertical;
                overflow: hidden;
                background-color: aqua;
                word-break: keep-all;
            }
            #futurama p:nth-last-of-type(5) {
                width: 50%;
                resize: both;
                overflow: hidden;
                background-color: aqua;
                word-wrap: break-word;
            }
            #futurama p:nth-last-of-type(6) {
                width: 110%;
                resize: both;
                overflow: hidden;
                background-color: aqua;
                word-break: keep-all;
            }
            #futurama p:nth-last-of-type(7) {
                width: 90%;
                resize: both;
                overflow: hidden;
                background-color: aqua;
                word-break: break-all;
            }
            #futurama p:nth-last-of-type(8) {
                width: 70%;
                resize: both;
                overflow: hidden;
                background-color: aqua;
                word-break: break-all;
            }
            #futurama p:nth-last-of-type(9) {
                width: 30%;
                resize: both;
                overflow: hidden;
                background-color: aqua;
                word-break: break-all;
            }
            #sheen {
                border-style: inset;
                background-color: #8A0707;
                color: darkgray;
                column-count: 3;
            }
            #sheen h3, #sheen figure {
                column-span: all;
            }
            #sheen mark {
                background-color: #e6e600;
            }
            #samuel {
                border-style: outset;
                background-color: black;
                color: white;
            }
            #samuel h2:nth-of-type(2) {
                transform: rotate(180deg);
                text-align: right;
            }
            #samuel h2:nth-of-type(3) {
                transform: rotateY(180deg);
                text-align: right;
            }
            .quick{
                border-style: solid;
                position: fixed;
                right: 0px;
                top: 0px;
                z-index: 5;
                margin: 0px;
                background-color: orange;
                width: 10%;
            }
        </style>
	</head>
	<body>
		<header id="top" class="box">
			<h1 lang="en" class="box">Demo content </h1>
            <p>h1 har dotted border og gradient bakgrunn som går fra øverste venstre hjørne til nederste høyre hjørne med fargene red, orange, yellow, green, blue, indigo og violet.</p>
            <p>who box har dashed border og gradient bakgrunn fra høyre til venstre med fargene red, orange, yellow, green, blue, indigo og violet. Det er også satt tekstfarge hvit og border-color svart.</p>
            <p>Menyen har enn solid border med border-radius: 30px 5px 70px 5px. Bakgrunnen er pink fluffy unicorns. Meny-elementene er i utgangspunktet en uorganisert liste, denne er stylet opp som rosa knapper med hvit tekst i utgangspunktet og teksten blir svart om linken har vært besøkt.</p>
            <?php include 'webutviklingMenu.php'; ?>
		</header>
		
		<main lang="en" class="box">
            <p>Main har double border.</p>
            <article class="box" id="summary">
                <header><h2 lang="nb">Generert fra ipsumer</h2>
                    <p><mark>Summary har border style groove, bakgrunnsbilde er en gif av Badger Badger, teksten er rød og boksen har en rosa skygge opp mot høyre.</mark></p>
                </header>
                <details> <!-- Text generator - http://www.malevole.com/mv/misc/text/ -->
                    <summary>Just the good ol' boys, never meanin' no harm. Ulysses, Ulysses - Soaring through all the galaxies. I never spend much time in school but I taught ladies plenty.</summary>
                    <p>Just the good ol' boys, never meanin' no harm. Beats all you've ever saw, been in trouble with the law since the day they was born. Straight'nin' the curve, flat'nin' the hills. Someday the mountain might get 'em, but the law never will. Makin' their way, the only way they know how, that's just a little bit more than the law will allow. Just good ol' boys, wouldn't change if they could, fightin' the system like a true modern day Robin Hood.</p>
                    <p>Ulysses, Ulysses - Soaring through all the galaxies. In search of Earth, flying in to the night. Ulysses, Ulysses - Fighting evil and tyranny, with all his power, and with all of his might. Ulysses - no-one else can do the things you do. Ulysses - like a bolt of thunder from the blue. Ulysses - always fighting all the evil forces bringing peace and justice to all.</p>
                    <p>I never spend much time in school but I taught ladies plenty. It's true I hire my body out for pay, hey hey. I've gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it's only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine. 'Cause I'm the unknown stuntman that makes Eastwood look so fine.</p>
                </details>
            </article>
            <section class="box" id="ipsumer">
                <header><h2 lang="nb">Generert fra ipsumer</h2></header>
                <article class="box" id="futurama">
                    <header><h3>Futurama</h3>
                        <p>Futurama boksen har border-style ridge og bakgrunnsfarge lime. Mark er satt til å ha mørkeblå bakgrunn og blå-hvit tekst.</p>
                    </header>
                    <h4>I can explain. It's very valuable.</h4>
                    <p>You've killed me! Oh, you've killed me! I am the man with no name, Zapp Brannigan! I barely knew Philip, but as a clergyman I have no problem telling his most intimate friends all about him. This is the worst part. The calm before the battle.</p>
                    <p><mark>Doomsday device?</mark> Ah, now the ball's in Farnsworth's court! Hey, tell me something. You've got all this money. How come you always dress like you're doing your laundry? I found what I need. And it's not friends, it's things.</p>
                    <h5>What are their names?</h5>
                    <p><time datetime="2008-02-14 20:00">You won't have time for sleeping</time>, soldier, not with all the bed making you'll be doing. Please, Don-Bot… look into your hard drive, and open your mercy file! So, how 'bout them Knicks? It's a T. It goes "tuh".</p>
                    <p>I just told you! You've killed me! Hey, whatcha watching? I was having the most wonderful dream. Except you were there, and you were there, and you were there! You know, <mark>I was God once.</mark> Yes! In your face, Gandhi!</p>
                    <h6>Stop it, stop it. It's fine. I will 'destroy' you!</h6>
                    <p><mark>Refresh siden for å se animasjonen!</mark> h6 har en animasjon som bruker 10 sekunder, denne animasjonen går 3 ganger. Animasjonen består av to hendelser: 1. Boksen beveger seg til høyre, ned, til venstre og opp igjen. 2. Boksen endrer farge fra bakgrunnsfargen, til rød, til orange, til gul, til grønn, til blå, til lilla, til fiolett. Tekstfargen varier også mellom hvitt og svart så det skal være mulig å se teksten.</p>
                    <p>You guys aren't Santa! You're not even robots. How dare you lie in front of Jesus? Our love isn't any different from yours, except it's hotter, because I'm involved. And until then, I can never die? Doomsday device? Ah, now the ball's in Farnsworth's court!</p>
                    <p>Who are you, my warranty?! Well I'da done better, but it's plum hard pleading a case while awaiting trial for that there incompetence. Isn't it true that you have been paid for your testimony? Why not indeed!</p>
                    <p>You, a bobsleder!? That I'd like to see! <mark>Say it in Russian!</mark> And remember, don't do anything that affects anything, unless it turns out you were supposed to, in which case, for the love of God, don't not do it!</p>
                    <p>Have you ever tried just turning off the TV, sitting down with your children, and hitting them? I usually try to keep my sadness pent up inside where it can fester quietly as a mental illness. <time datetime="2008-02-14 20:00">Five hours?</time> Aw, man! Couldn't you just get me the death penalty?</p>
                    <p><mark>Boksene med lyseblå bakgrunn kan man dra i nederste høyre hjørne for å endre størrelsen på.</mark> Det er satt overflow hidden på disse boksene slik at man skal slippe å få opp en scrollbar om man bestemmer seg for å leke med dem. Der det ikke er spesifisert noe annet er resize satt til å være både vertikal og horisontal. Det er også satt word-break: break-all om ikke annet er spesifisert.</p>
                    <p>(Dette er niende siste p-tagg i article taggen. Denne har width 30%.) Noooooo! Why yes! Thanks for noticing. That's not soon enough! WINDMILLS DO NOT WORK THAT WAY! GOOD NIGHT! Can I use the gun?</p>
                    <p>(Dette er åttende siste p-tagg i article taggen. Denne har width 70%.) Is the Space Pope reptilian!? You know the worst thing about being a slave? They make you work, but they don't pay you or let you go. Oh, but you can. But you may have to metaphorically make a deal with the devil. And by "devil", I mean <mark>Robot Devil</mark>. And by "metaphorically", I mean get your coat.</p>
                    <p>(Dette er syvende siste p-tagg i article taggen. Denne har width 90%.) Say what? When will that be? Morbo can't understand his teleprompter because he forgot how you say that letter that's shaped like a man wearing a hat. Ok, we'll go deliver this crate like professionals, and then we'll go ride the bumper cars.</p>
                    <p>(Dette er sjette siste p-tagg i article taggen. Denne har word-break: keep-all og width 110%.) We need rest. The spirit is willing, but the flesh is spongy and bruised. Aww, it's true. I've been hiding it for so long. Ugh, it's filthy! Why not create a National Endowment for Strip Clubs while we're at it?</p>
                    <p>(Dette er femte siste p-tagg i article taggen. Denne har word-wrap: break-word og width 50%.) What's with you kids? <mark><time datetime="2008-02-14 20:00">Every other day</time> it's food, food, food. Alright, I'll get you some stupid food.</mark> Leela's gonna kill me. Yep, I remember. They came in last at the Olympics, then retired to promote alcoholic beverages!</p>
                    <p>(Dette er fjerde siste p-tagg i article taggen. Denne taggen har bare vertikal resize. Den har også word-break: keep-all.) You lived before you met me?! Who are you, my warranty?! It's just like the story of the grasshopper and the octopus. All year long, the grasshopper kept burying acorns for winter, while the octopus mooched off his girlfriend and watched TV. But then the winter came, and the grasshopper died, and the octopus ate all his acorns. Also he got a race car. Is any of this getting through to you?</p>
                    <p>(Dette er tredje siste p-tagg i article taggen. Denne taggen har bare horisontal resize.) You guys go on without me! I'm going to go… look for more stuff to steal! Anyhoo, your net-suits will allow you to experience Fry's worm infested bowels as if you were actually wriggling through them.</p>
                    <p>Well I'da done better, but it's plum hard pleading a case while awaiting trial for that there incompetence. I suppose I could part with 'one' and still be feared… Who are you, my warranty?! No, she'll probably make me do it.</p>
                    <p>I found what I need. And it's not friends, it's things. But existing is basically all I do! That's a popular name today. Little "e", big "B"? All I want is to be a monkey of moderate intelligence who wears a suit… that's why I'm transferring to business school!</p>
                    <figure>
                        <img src="image/FuturamaComposition1024.jpg" />
                        <figcaption><a href="http://fillerama.io/">Fillerama</a></figcaption>
                    </figure>
                </article>
            
                <article class="box" id="sheen"> <!-- Charlie Sheen - http://vaticanassass.in/index.php?elem=p&nbr=3&sent=6 -->
                    <header><h3>Charlie Sheen</h3>
                        <p>Charlie Sheen boksen har border-style inset, bakgrunnsfarge blodrød og tekstfarge mørkegrå. Boksen er delt opp i 3 kolonner. Overskriften og figuren går over alle tre kolonnene. Markeringsfargen er også satt til å være en litt mørkere gul.</p>
                    </header>
                    <p>And one of those stupid mottoes, Alex, is 'Don't be special. Be one of us.' News flash! I am special, and I'll never be one of you! ... There it is. And you know, I'm tired ... I'm so tired of pretending like my life isn't perfect and bitchin' and just winning every <time datetime="2008-02-14 20:00">second</time> .... And I'm not perfect and bitchin', and just delivering the goods at every frickin' turn. But like in baseball, the scoreboard doesn't lie. Never has. So what we all have is a marriage of the heart ... of the hearts. Because ... look at what I'm dealing with, man. I'm dealing with fools and trolls. And we are and, I don't know, winning?... Anyone? .... (long silence) .... Rhymes with winning? .... Anyone? .... Yeah, that would be us.</p>

                    <p>Well, I'm not Thomas Jefferson .... <mark>He was a pussy!</mark> And one of those stupid mottoes, Alex, is 'Don't be special. Be one of us.' News flash! I am special, and I'll never be one of you! ... There it is. It's being directed and written by a genius name David Ward who - oh, I don't know - won the Academy Award at 23 for writing The Sting. And it was his pen and his vision that created the classic that we know today as Major League. .... And then, I just got to add this: There was a whole firestorm yesterday about Brooke being, you know, a part of our crew. And let me just say this ... this is all I'm gonna say about it: Where there were four ... there are now three. Goodbye, Brooke, and good luck in your travels ... you're gonna need it ... badly... So .... Because ... look at what I'm dealing with, man. I'm dealing with fools and trolls. You know, they lay down with their ugly wives in front of their ugly children and just look at their loser lives and then they look at me and say, 'I CAN'T PROCESS IT!' Well, no, and you never will. Stop trying. Just sit back and enjoy the show .... You know?</p>

                    <p> So ... you know ... within that is tremendous focus, and tremendous clarity, and tremendous peace. .... And then, I just got to add this: There was a whole firestorm yesterday about Brooke being, you know, a part of our crew. And let me just say this ... this is all I'm gonna say about it: Where there were four ... there are now three. Goodbye, Brooke, and good luck in your travels ... you're gonna need it ... badly... So .... Um ... but I'm excited to get back ... to work. Um ... and not to completely discount what you just talked about ... It's just that if I bring up these ... <mark>these turds</mark> ... these little losers ... there's no reason to then bring them back into the fold, because I have real fame, and they have nothing. And Alex, try to get your mind around this, as a fellow warrior, deep in the trenches: Their entire manifesto is built upon complete and total surrender ... or the concept of complete and total surrender. But I dare anyone to debate me on things.</p>
                    <figure>
                    <img src="image/charlie-sheen-feature.jpg" />
                    <figcaption><a href="http://vaticanassass.in/index.php?elem=p&nbr=3&sent=6">Charlie Sheen</a></figcaption>
                </figure>
                </article>
                
                <article class="box" id="samuel"> <!-- Samuel L Jackson - http://slipsum.com/ -->
                    <header><h2>Samuel L. Jackson</h2>
                        <p>Samuel L. Jackson boksen har border-style outset, bakgrunnsfarge svart og tekstfarge hvit.</p>
                    </header>
                    <figure>
                        <img src="image/PulpFiction.jpg" />
                        <figcaption><a href="http://slipsum.com/">Samuel L Jackson</a></figcaption>
                    </figure>
                    <h2>Is she dead, yes or no?</h2>
                    <p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass. </p>

                    <h2>No, motherfucker</h2>
                    <p>Denne headingen er satt til å være rotert 180 grader (i 2D). Teksten er også satt til align right, slik at overskriften skal komme over paragrafen når teksten har blitt rotert.</p>
                    <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. <mark>And you will know My name is the Lord when I lay My vengeance upon thee.</mark></p>

                    <h2>We happy?</h2>
                    <p>Denne headingen er satt til å være rotert 180 grader rundt Y-aksen (i 3D). Teksten er også satt til align right, slik at overskriften skal komme over paragrafen når teksten har blitt rotert.</p>
                    <p>Do you see any <mark>Teletubbies</mark> in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb. </p>

                    <h2>Hold on to your butts</h2>
                    <p>My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand? </p>
                </article>
        </section>
		</main>
        <aside class="quick box">
            <p>Denne boksen har en fixed posisjon øverst til høyre med z-index 5 og bakgrunnsfarge orange.</p>
            <nav>
                <ul>
                    <li><a href="#top">Top</a></li>
                    <li><a href="#summary">Summary</a></li>
                    <li><a href="#ipsumer">Ipsumer</a></li>
                    <li><a href="#futurama">Futurama</a></li>
                    <li><a href="#sheen">Charlie Sheen</a></li>
                    <li><a href="#samuel">Samuel L. Jackson</a></li>
                </ul>
            </nav>
        </aside>
        <footer></footer>
	</body>
</html>