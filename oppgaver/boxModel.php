<!DOCTYPE html>
<html lang="nb">

	<head>
		<title>Oblig 1 - Turid Irene Folkestad Sønsteby</title>
		<meta charset="UTF-8"/>
        <style>
            /* http://www.w3schools.com/css/css_boxmodel.asp */
            body {
                background-color: lightgrey;
            }
            header {
                width: 90%;
                background-color: lightblue;
            }
            h1 {
                background-color: lightpink;
            }
            .who {
                background-color: lightpink;
            }
            main {
                width: 90%;
                position: relative;
                background-color: lightblue;
            }
            .box{
                border-style: solid;
                border-width: 2px;
                padding: 10px;
                margin: 10px;
            }
            .quick{
                position: fixed;
                right: 0px;
                top: 0px;
                z-index: 5;
                background-color: white;
                margin: 0px;
                background-color: lightpink;
                width: 6%;
            }
            #loremColl {
                position: static;
                background-color: lightpink;
            }
            #lorem1 {
                position: relative;
                left: 50px;
                background-color: lightgreen;
                padding-bottom: 30px;
            }
            #lorem2 {
                position: relative;
                right: 50px;
                background-color: lightgreen;
                padding-top: 40px;
            }
            #lorem3 {
                position: relative;
                top: 50px;
                background-color: lightgoldenrodyellow;
                margin-left: 50px;
            }
            #lorem4 {
                position: static;
                background-color: lightcyan;
                margin-bottom: 100px;
            }
            #lorem5 {
                position: static;
                background-color: lightcoral;
                margin-right: 75px;
            }
            #lorem6 {
                position: relative;
                bottom: 50px;
                background-color: lightgray;
            }
            #gangsta {
                position: static;
                background-color: lightgreen;
                padding-right: 33px;
                padding-left: 33px;
            }
            #veggie {
                position: static;
                background-color: lightgreen;
                padding-top: 45px;
                padding-bottom: 45px;
            }
            #bacon {
                position: absolute;
                right: 10px;
                width: 15%;
                background-color: lightgreen;
                padding: 30px;
                margin-top: 200px;
                margin-bottom: 100px;
            }
            #hipster {
                position: static;
                background-color: lightgreen;
                margin-top: 50px;
                margin-bottom: 100px;
            }
            #tuna {
                position: static;
                width: 80%;
                background-color: lightgreen;
            }
        </style>
	</head>
	<body>
		
		<!-- Memos to self: (aka, den som retter behøver ikke se på dette, det er bare noe jeg eventuelt har glemt å fjerne.)
		En div for hver oppgave, en div for hver del-oppgave.
		-->
		
		<header id="top" class="box">
			<h1 class="box">Box model</h1>
            <?php include 'webutviklingMenu.php'; ?>
		</header>
		
		<main class="box">
            <section class="box" id="loremColl">
                <h2>"Normal" Lorem Ipsum</h2>
                <article class="box" id="lorem1">
                    <h3><a href="http://www.lipsum.com/feed/html">Lorem Ipsum - lipsum.com</a></h3>
                    <p>Dette er en box med relativ posisjon forskjøvet 50px mot venstre. Den har også padding-bottom: 30px.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis commodo lorem odio, nec tincidunt quam maximus non. Morbi rutrum eros eu justo semper tempus. Phasellus ultricies, enim eget consequat rhoncus, urna eros condimentum massa, id dapibus purus metus quis libero. Etiam quam lacus, sodales vel ligula vitae, tincidunt faucibus ligula. Praesent eu placerat elit. Nunc ut luctus est. Fusce bibendum vestibulum nunc, sit amet feugiat ligula ornare quis. Mauris at maximus mauris. Suspendisse aliquet odio fringilla leo tristique, quis maximus dolor pulvinar. Pellentesque nec commodo ipsum, ac porttitor neque. Nullam dignissim eu elit a faucibus. Cras ornare mattis orci nec suscipit.</p>
                </article>
                <article class="box" id="lorem2">
                    <h3><a href="http://www.blindtextgenerator.com/lorem-ipsum">Lorem Ipsum - blindtextgenerator</a></h3>
                    <p>Dette er en box med relativ posisjon forskjøvet 50px mot høyre. Den har også padding-top: 40px.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
                </article>
                <article class="box" id="lorem3">
                    <h3><a href="http://www.webpagefx.com/tools/lorem-ipsum-generator/loremipsum/paragraphs">Lorem Ipsum - webpagefx.com - lorem-ipsum-generator</a></h3>
                    <p>Dette er en box med relativ posisjon forskjøvet 50px fra toppen. Den har også margin-left: 50px.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. </p>
                </article>
                <article class="box" id="lorem4">
                    <h3><a href="http://loripsum.net/">Lorem Ipsum - loripsum.net</a></h3>
                    <p>Dette er en box med statisk posisjon, altså står den helt normalt. Den har også margin bottom: 100px.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Quacumque enim ingredimur, in aliqua historia vestigium ponimus. Ac tamen hic mallet non dolere. Graece donan, Latine voluptatem vocant. Restatis igitur vos; Idemque diviserunt naturam hominis in animum et corpus. Duo Reges: constructio interrete. Atqui perspicuum est hominem e corpore animoque constare, cum primae sint animi partes, secundae corporis. Equidem e Cn. Nunc omni virtuti vitium contrario nomine opponitur.</p>
                </article>
                <article class="box" id="lorem5">
                    <h3><a href="http://www.randomtext.me/#/lorem/p-1/20-100">Lorem Ipsum - randomtext</a></h3>
                    <p>Dette er en box med statisk posisjon, altså står den helt normalt. Den har også margin-right: 75px.</p>
                    <p>Lorem ipsum rhoncus quisque nisl volutpat tristique quisque aenean lectus, consectetur id ut auctor mattis netus lacinia mattis, aliquam ultrices aenean gravida magna bibendum mollis viverra aenean condimentum varius urna id amet faucibus magna consectetur scelerisque curabitur integer.</p>
                </article>
                <article class="box" id="lorem6">
                    <h3><a href="http://generator.lorem-ipsum.info/">Lorem Ipsum - generator.lorem-ipsum.info</a></h3>
                    <p>Dette er en box med relativ posisjon forskjøvet 50px fra bunnen.</p>
                    <p>Ne possim accumsan senserit ius, cu periculis evertitur quo. Ad quo illud dicat mediocritatem. Dolore conceptam nec in? Eu tempor persecuti nec, mazim volumus sit no?</p>
                </article>
            </section>
            
            <article class="box" id="gangsta">
                <h2><a href="http://lorizzle.nl/?feed=1">Gangsta Lorem Ipsum</a></h2>
                <p>Dette er en box med statisk posisjon, altså står den helt normalt. Den har også padding right og left 33px.</p>
                <p>Lorem ipsizzle dolor sit amet, we gonna chung adipiscing elit. Nullam mammasay mammasa mamma oo sa velit, ma nizzle volutpizzle, suscipit shizzle my nizzle crocodizzle, shizznit vizzle, for sure. Pellentesque away tortizzle. Uhuh ... yih! eros. izzle ma nizzle dapibizzle turpis tempizzle i'm in the shizzle. Maurizzle dawg nibh check it out turpizzle. izzle tortizzle. Its fo rizzle crunk rhoncizzle nisi. In hac habitasse platea dictumst. Funky fresh dapibizzle. Curabitur tellus urna, pretizzle away, shit fo shizzle my nizzle, shizzlin dizzle funky fresh, nunc. Fo shizzle suscipizzle. Integizzle sempizzle sizzle break it down.</p>
            </article>
            <article class="box" id="veggie">
                <h2><a href="http://veggieipsum.com/">Veggie Ipsum</a></h2>
                <p>Dette er en box med statisk posisjon, altså står den helt normalt. Den har også padding top og bottom 45px.</p>
                <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko. Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot carrot watercress. Corn amaranth salsify bunya nuts nori azuki bean chickweed potato bell pepper artichoke.</p>
            </article>
            <article class="box" id="bacon">
               <h2><a href="http://baconipsum.com/?paras=1&type=meat-and-filler&start-with-lorem=1">Bacon Ipsum</a></h2>
                <p>Dette er en box med absolutt posisjon 10px fra høyre, dette er relativt til main-taggen som den ligger i (og main-taggen har posisjon relativ, hvis ikke hadde det vært relativt til body-taggen), width er satt til å være 15%. Den har også padding 30px (på alle sider), margin-top: 200px og margin-bottom: 100px.</p>
                <p>Bacon ipsum dolor amet ball tip corned beef laboris doner. Nulla beef ribs eu magna filet mignon voluptate meatball jowl sunt chuck ad cupim. Irure leberkas labore turducken ullamco drumstick minim tempor nulla. Frankfurter officia bacon, velit ribeye cupidatat boudin.</p> 
            </article>
            <article class="box" id="hipster">
                <h2><a href="https://hipsum.co/?paras=1&type=hipster-latin">Hipster Ipsum</a></h2>
                <p>Dette er en box med statisk posisjon, altså står den helt normalt. Den har også margin top: 50px og margin-bottom: 100px.</p>
                <p>8-bit gastropub delectus activated charcoal pug, scenester raclette yuccie food truck excepteur schlitz vegan. Church-key polaroid schlitz scenester. Chillwave id DIY, cliche meh green juice before they sold out mlkshk nesciunt salvia bicycle rights cornhole literally. Nesciunt excepteur direct trade chartreuse. Incididunt intelligentsia odio, craft beer vero gluten-free pour-over. Green juice assumenda ullamco, bespoke tousled flexitarian lomo. Distillery synth deserunt sapiente.</p>
            </article>
            <article class="box" id="tuna">
                <h2><a href="https://tunaipsum.com/?paragraphs=1">Tuna Ipsum</a></h2>
                <p>Dette er en box med statisk posisjon, altså står den helt normalt, men den har width 80% så den ikke er litt smalere enn orginalt.</p>
                <p>Eelblenny, black bass prowfish knifejaw torpedo trout, "parrotfish mosquitofish mooneye grouper Canthigaster rostrata California flyingfish." Prickly shark whiptail gulper john dory sandfish whiting pompano zebra lionfish. Blue-redstripe danio southern grayling southern Dolly Varden weasel shark betta swordtail southern flounder, false moray earthworm eel rivuline waryfish thornfish; warbonnet. Armored searobin morwong grideye upside-down catfish knifejaw wels catfish largemouth bass walu four-eyed fish cornetfish bigscale." Weasel shark capelin medaka redtooth triggerfish blue-redstripe danio bobtail snipe eel Razorback sucker crocodile icefish velvet-belly shark longfin capelin! African glass catfish, ghost carp wolf-herring false trevally peamouth pygmy sunfish deep sea bonefish. Long-finned char Pacific salmon dragon goby yellow perch warbonnet climbing perch Indian mul thornyhead? Pleco goatfish combtail gourami, southern smelt kelpfish brotula, wrasse trout-perch smelt-whiting bat ray.</p>
            </article>
		</main>
        <aside class="quick box">
            <p>Dette er en fixed box plassert øverst i høyre hjørne med en z-index på 5 slik at den skal havne øverst.</p>
            <ul>
				<li><a href="#top">Top</a></li>
				<li><a href="#loremColl">Normals</a></li>
				<li><a href="#lorem1">lorem1</a></li>
				<li><a href="#lorem2">lorem2</a></li>
				<li><a href="#lorem3">lorem3</a></li>
				<li><a href="#lorem4">lorem4</a></li>
				<li><a href="#lorem5">lorem5</a></li>
				<li><a href="#lorem6">lorem6</a></li>
				<li><a href="#gangsta">Gangsta</a></li>
				<li><a href="#veggie">Veggie</a></li>
				<li><a href="#bacon">Bacon</a></li>
				<li><a href="#hipster">Hipster</a></li>
				<li><a href="#tuna">Tuna</a></li>
			</ul>
        </aside>
	</body>
</html>