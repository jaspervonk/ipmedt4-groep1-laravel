<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BoekenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //############## AVONTUUR #########################
        DB::table('boeken')->insert([
            'genre_naam' => "Avontuur",
            'isbn' => 9789000339280,
            'titel' => "Botje",
            'auteur' => "Janneke Schotveld",
            'beschrijving' => "Het lijkt een saaie vakantie te worden voor Bibi. Maar dan wordt er een robot bezorgd: Botje. Bibi moet voor Botje zorgen, want Botje is in gevaar. Voorlezen vanaf ca. 7 jaar, zelf lezen vanaf ca. 8 jaar.",
            'image' => "img/default_9789000339280.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Avontuur",
            'isbn' => 9789026130977,
            'titel' => "Het oneindige verhaal",
            'auteur' => "Michael Ende",
            'beschrijving' => "Binnenkort kun je hier de beschrijving van dit boek lezen.",
            'image' => "img/9789026130977.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Avontuur",
            'isbn' => 9789021681603,
            'titel' => "Oma luchtbuks",
            'auteur' => "Barbara Scholten",
            'beschrijving' => "Binnenkort kun je hier de beschrijving van dit boek lezen.",
            'image' => "img/9789021681603.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Avontuur",
            'isbn' => 9789025881535,
            'titel' => "Schreeuw om middernacht",
            'auteur' => "Benjamin Read",
            'beschrijving' => "Binnenkort kun je hier de beschrijving van dit boek lezen.",
            'image' => "img/9789025881535.jpg",
        ]);
        
        DB::table('boeken')->insert([
            'genre_naam' => "Avontuur",
            'isbn' => 9789043922760,
            'titel' => "De zoete zusjes gaan op vakantie",
            'auteur' => "Hanneke de Zoete",
            'beschrijving' => "De Zoete Zusjes hebben vakantie! Maar waar gaan Saar en Janna dit jaar hun spannende avonturen beleven?",
            'image' => "img/9789043922760.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Avontuur",
            'isbn' => 9789025860806,
            'titel' => "Gevangen op het kasteel",
            'auteur' => "Martine Letterie",
            'beschrijving' => "Marie logeert met haar vader op een buitenhuis. Op een ochtend is iedereen in rep en roer, er is een dure gouden munt gestolen. De vader van Marie wordt verdacht. Kan Marie zijn onschuld bewijzen?",
            'image' => "img/default_9789025860806.jpg",
        ]);

        //################## Dieren&Natuur #########################
        DB::table('boeken')->insert([
            'genre_naam' => "Dieren&Natuur",
            'isbn' => 9789044749236,
            'titel' => "Een vriendin voor Elisa",
            'auteur' => "Sarah Bosse",
            'beschrijving' => "De moeder van Elisa is overleden. Een verdrietige tijd, Nu logeert Elisa bij haar oom en tante op een waddeneieland. Ze sluit virendschap met een pony, maar op een dag is de pony verdwenen.",
            'image' => "img/default_9789044749236.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Dieren&Natuur",
            'isbn' => 9789492901996,
            'titel' => "Stip – Pony op avontuur",
            'auteur' => "Nick Driessen",
            'beschrijving' => "
                Niet ver van Emma's nieuwe huis staat een pony. Helemaal alleen in een weiland bij een vervallen boerderij. Hij zit onder de modder. Emma weet niet veel van paarden, maar ze ziet wel dat deze pony een vriend kan gebruiken. Ze noemt hem Stip.
                Maar... van wie is Stip eigenlijk? En waar is zijn baasje? Samen met Mads, een jongen uit de buurt, gaat Emma op zoek.
                Een vrolijk verhaal voor echte pony- en paardenfans!
                Dit is Stip, een ondeugende, grappige en lieve Shetlandpony vol met stippen. Hij is kampioen ontsnappen en door de modder rollen, en is altijd in voor een avontuur (en een lekker hapje).
            ",
            'image' => "img/9789492901996.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Dieren&Natuur",
            'isbn' => 9789048739523,
            'titel' => "Hoe Hors een politiepaard werd",
            'auteur' => "Elisa van Spronsen en Katrien Holland",
            'beschrijving' => "Stoere paardenserie op AVI M5 over het eigenzinnige politiepaard Hors. In dit eerste deel lees je waarom Soesja bij de politiepaardenstal komt wonen en hoe het Hors is gelukt om politiepaard te worden. Dat is namelijk nog niet zo makkelijk. Leuk om te lezen voor iedere jonge paardengek!
            ",
            'image' => "img/9789048739523.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Dieren&Natuur",
            'isbn' => 9789025881528,
            'titel' => "Magneetje",
            'auteur' => "Milja Praagman",
            'beschrijving' => "Gedichten over jij en ik, over dat ene ogenblik, over ruzie en herrie, over een meisje in oma en een oma meisje. Soms dromerig, dan weer nuchter. Vol verwondering en wonderschoon geïllustreerd.",
            'image' => "img/9789025881528.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Dieren&Natuur",
            'isbn' => 9789048738465,
            'titel' => "draf in de klas",
            'auteur' => "Marte Jongbloed en Esther van den Berg",
            'beschrijving' => "Aantrekkelijk leesboek op AVI M3, speciaal voor kinderen die net leren lezen. Over juf Pom die geen stal meer heeft voor haar paard. Wat moet ze nu doen? Door de korte woorden en eenvoudige zinnen kunnen beginnende lezers meteen leeskilometers maken.",
            'image' => "img/9789048738465.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Dieren&Natuur",
            'isbn' => 9789048738625,
            'titel' => "Wat kiest Pieter: een vogelspin of een struisvogel?",
            'auteur' => "Stefan Boonen",
            'beschrijving' => "In dit bijzondere boek op AVI M4 kiest de lezer zelf de afloop van het verhaal. Hoe dat kan? Het verhaal is letterlijk doormidden geknipt. Pieter houdt erg van dieren. Hij leest in de krant: ‘Wij zoeken oppas voor de dieren uit ons dierenpark.’ Dat is echt iets voor hem! Al houdt zijn moeder niet zo van dieren, toch kan Pieter het niet laten om even te gaan kijken. Alleen een struisvogel en vogelspin zijn nog over. Welk dier kan hij het beste kiezen en voor zijn moeder verborgen houden?",
            'image' => "img/9789048738625.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Dieren&Natuur",
            'isbn' => 9789021675015,
            'titel' => "Madieke en Liesbet",
            'auteur' => "Astrid Lindgren",
            'beschrijving' => "Madieke en haar zusje Liesbet knallen soms bijna uit elkaar van levenslust. Bijvoorbeeld als het meivuur aangestoken wordt, of als ze met Kerstmis het allerbijzonderste cadeau van de wereld krijgen. Maar onrecht, daar kunnen ze niet tegen. Vooral Madieke niet. Dan móét ze wel in actie komen!",
            'image' => "img/9789021675015.jpg",
        ]);

        //############## HUMOR #########################
        DB::table('boeken')->insert([
            'genre_naam' => "Humor",
            'isbn' => 9789026148026,
            'titel' => "Leven van een loser 15 - Kopje-onder",
            'auteur' => "Jeff Kinney",
            'beschrijving' => "De familie Botermans strandt op een camperpark. Daar slaat de vakantiestemming om: een epische wolkbreuk en stijgend water… Gaat Bram kopje-onder?",
            'image' => "img/9789026148026.png",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Humor",
            'isbn' => 9789492899859,
            'titel' => "De wereldse wijsheid van de mier.",
            'auteur' => "Philip Bunting",
            'beschrijving' => "Er zijn wel tien biljard mieren op de wereld. Veel, hè? Gelukkig zijn mieren geweldige dieren, waar wij mensen een hoop van kunnen leren. Zo zijn ze dol op hun familie, en helpen ze elkaar graag. Bovendien zijn ze supergoed in recyclen.",
            'image' => "img/9789492899859.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Humor",
            'isbn' => 9789048735648,
            'titel' => "Doe mij nog maar een mop!",
            'auteur' => "Frank van Pamelen",
            'beschrijving' => "Is geschiedenis om te lachen? Zit er humor in de historie? Jazeker! In dit boek kun je grinniken om grappen over Napoleon, schateren om een schoolklas in de oertijd, lachen om ludieke Grieken en rare Romeinen, uitvinders, wereldleiders en nog veel meer. Een historisch leuk moppenboek dat mooi aansluit bij het thema ‘Geschiedenis’.",
            'image' => "img/9789048735648.jpg",
        ]);


        DB::table('boeken')->insert([
            'genre_naam' => "Humor",
            'isbn' => 9789025875466,
            'titel' => "De geheimzinnige verdwijning van Toni Malloni",
            'auteur' => "Harmen van Straaten",
            'beschrijving' => "Een fantasierijk verhaal vol bonte personages, in een knotsgekke setting, boordevol woordgrapjes. Laat dat maar aan Harmen van Straaten over. Tel er zijn grappige, zwierig-slordige illustraties bij op en je hebt het recept voor een heerlijk humoristisch verhaal over ‘Magische Mirakelen’. Toni Malloni verdwijnt op zolder in de goochelhoed van zijn opa en belandt in een pretpark. Daar komt van alles spannends op hem af. Het is aan Toni om zijn opa en Malloni-Land te redden…",
            'image' => "img/9789025875466.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Humor",
            'isbn' => 9789026134654,
            'titel' => "Leven van een loser",
            'auteur' => "Jeff Kinney",
            'beschrijving' => "De familie Botermans strandt op een camperpark. Daar slaat de vakantiestemming om: een epische wolkbreuk en stijgend water… Gaat Bram kopje-onder?",
            'image' => "img/9789026134654.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Humor",
            'isbn' => 9789026142659,
            'titel' => "Leven van een loser 13 - vet koel",
            'auteur' => "Jeff Kinney",
            'beschrijving' => "Vet koel is deel 13 in de megasuccesvolle en supergrappige graphicnovelserie Het leven van een Loser van Jeff Kinney. Voor jongens en meiden van 8 jaar en ouder. Supergrappig vertaald door Hanneke Majoor.
                Door zware sneeuwval sluit Brams school; iedereen heeft ijsvrij. Geweldig, maar al snel verandert de woonwijk in een winters slagveld. Er worden ijsforten gebouwd en epische sneeuwbalgevechten gehouden. Midden in de vuurlinie zitten Bram en Theo.",
            'image' => "img/9789026142659.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Humor",
            'isbn' => 9789492899804,
            'titel' => "Daans wereld 3",
            'auteur' => "Jonathan Meres",
            'beschrijving' => "De familie Botermans strandt op een camperpark. Daar slaat de vakantiestemming om: een epische wolkbreuk en stijgend water… Gaat Bram kopje-onder?",
            'image' => "img/9789492899804.jpg",
        ]);


        //############## SPROOKJES #########################
        DB::table('boeken')->insert([
            'genre_naam' => "Sprookjes",
            'isbn' => 9789025774684,
            'titel' => "Groot Biegel sprookjesboek",
            'auteur' => "Paul Biegel",
            'beschrijving' => "
                Paul Biegel noemde zichzelf ‘een ouderwetse sprookjesschrijver’. 
                En een rasechte verteller, dat was hij.  
                Lees bijvoorbeeld een verhaal over een witte zwaan die naar de sterren vliegt, 
                en eentje over een jongetje dat op wonderbaarlijke wijze zijn lievelingsbeer terugvindt. 
                Het ‘Groot Biegel sprookjesboek’ is met zijn heerlijke sprookjes een waar genot om voor te lezen. Of om zelf te lezen natuurlijk!",
            'image' => "img/9789025774684.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Sprookjes",
            'isbn' => 9789025871338,
            'titel' => "Geheimen van het wilde woud",
            'auteur' => "Tonke Dragt",
            'beschrijving' => "Binnenkort kun je hier de beschrijving van dit boek lezen.",
            'image' => "img/9789025871338.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Sprookjes",
            'isbn' => 9789492901675,
            'titel' => "Het heksenhandboek",
            'auteur' => "Nikki van de Car",
            'beschrijving' => "Binnenkort kun je hier de beschrijving van dit boek lezen.",
            'image' => "img/9789492901675.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Sprookjes",
            'isbn' => 9789025770136,
            'titel' => "Sprookjes van overal",
            'auteur' => "Thé Tjong-Khing",
            'beschrijving' => "
            In het derde deel van De sprookjesverteller vertelt meesterverteller en groot illustrator Thé Tjong-Khing spannende nieuwe sprookjes die van heinde en verre komen. Sprookjes van overal De spannende nieuwe sprookjes in De sprookjesverteller – Sprookjes van overal komen van heinde en verre: uit Scandinavië, Frankrijk, Italië en zelfs Japan. Zoals we van bekroond illustrator en meesterverteller Thé Tjong-Khing gewend zijn, is ook dit prachtdeel voorzien van beeldschone illustraties vol omineuze spanning en ironie. De (voor)lezers zullen op het puntje van hun stoel zitten!
            ",
            'image' => "img/9789025770136.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Sprookjes",
            'isbn' => 9789025877262,
            'titel' => "De ijstuin",
            'auteur' => "Guy Jones",
            'beschrijving' => "
            Ze stond in een tuin. Een tuin van ijs. Elke boom, elk blaadje, elke steen, elk grassprietje was glinsterend wit. Jess deed haar ogen dicht en daarna weer open. De tuin was er nog steeds. Hij bestond echt. Ze besefte dat ze haar adem inhield, alsof ze bang was om een betovering te verbreken.
            Jess is allergisch voor zonlicht. Wanneer ze naar buiten gaat, verbrandt ze meteen. Ze voelt zich eenzaam en geïsoleerd. Op een nacht gaat ze stiekem naar buiten. Ze ontdekt een mysterieuze, schitterende tuin, een plek waar ze eindelijk vrij kan zijn. Maar ze is er niet alleen… Wat wacht daar, wat fluistert daar in die onwerkelijke wereld van ijs?
            ",
            'image' => "img/9789025877262.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Sprookjes",
            'isbn' => 9789025772802,
            'titel' => "Russische sprookjes",
            'auteur' => "Thé Tjong-Khing",
            'beschrijving' => "Veertien bekende en minder bekende sprookjes uit Rusland worden in eigentijdse taal naverteld. Dat zijn onder meer De vuurvogel, Baba Jaga en De mooie Wassilisa. Met veel, ook paginagrote, kleurenillustraties. Vanaf ca. 6 t/m 9 jaar.",
            'image' => "img/9789025772802.jpg",
        ]);

        //############## GRIEZELVERHAAL #########################
        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789025871406,
            'titel' => "De griezelbus 1",
            'auteur' => "Paul van Loon",
            'beschrijving' => "Binnenkort kun je hier de beschrijving van dit boek lezen.",
            'image' => "img/9789025871406.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789066921863,
            'titel' => "Dolfje Weerwolfje",
            'auteur' => "Paul van Loon",
            'beschrijving' => "Als hij zeven wordt, ontdekt Dolfje dat hij een weerwolf is. Eerst werd Dolfje daar verdrietig van. Hij wilde zelfs weglopen van huis. Maar Timmies ouders vonden het helemaal niet erg dat hij een weerwolfje is. Gelukkig maar, want nu kan hij gewoon thuis blijven wonen.
                Met volle maan beleeft hij de spannendste avonturen. Samen met Noura, Timmie, opa weerwolf en neef Leo.",
            'image' => "img/default_9789066921863.jpg",
            'videolink' => "https://www.youtube.com/embed/Rcsuo6XxALU",
            'hoofdpersoon' => "Dolfje",
            'hoofdpersoon_beschrijving' => "Eigenlijk is Dolfje een heel gewone jongen. Maar drie nachten per maand, bij volle maan, verandert hij in een weerwolf. Een witte weerwolf met een brilletje op.",
            'hoofdpersoon_image' => "/img/9789066921863-Dolfje_Weerwolfje.png",
            'audio' => "/audio/9789066921863_audio.wav"
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789021677675,
            'titel' => "Spekkie en Sproet: Een griezelige ontdekking",
            'auteur' => "Vivian den Hollander",
            'beschrijving' => "Het is feest bij Sproet in de straat. Als een van de gasten vraagt of hij binnen even mag bellen omdat zijn mobiel is gestolen, willen Spekkie en Sproet hem graag helpen. Maar de volgende dag ontdekken ze dat hij helemaal niet de nieuwe buurman is, zoals hij zei. En als ze het nummer bellen dat de man op een stukje papier gekrabbeld heeft, komen ze iets heel duisters op het spoor…",
            'image' => "img/9789021677675.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789025868741,
            'titel' => "Dolfje Weerwolfje 3 - Zilvertand",
            'auteur' => "Paul van Loon",
            'beschrijving' => "Als hij zeven wordt, ontdekt Dolfje dat hij een weerwolf is.",
            'image' => "img/9789025868741.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789025861537,
            'titel' => "Foeksia",
            'auteur' => "Paul van Loon",
            'beschrijving' => "Grappig deel in de serie over Foeksia, waarin het heksenfeest wordt onderbroken door een verdrietsspreuk. Wie zit hierachter?",
            'image' => "img/9789025861537.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789025857813,
            'titel' => "Raveleijn 1",
            'auteur' => "Paul van Loon",
            'beschrijving' => "Sprookjesachtig verhaal over een groep kinderen die de stad Raveleijn van de kwaadaardige graaf Grafhart moeten zien te bevrijden. Een fantasierijk jeugdboek, in samenwerking met de Efteling, voor lezers vanaf tien jaar.",
            'image' => "img/9789025857813.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789492899842,
            'titel' => "De laatste helden op aarde",
            'auteur' => "Max Brallier",
            'beschrijving' => "
            Gevaarlijke monsters, bloedstollende actiescènes en een flinke dosis humor: hier is De laatste helden op aarde!
            Tweeënveertig dagen geleden was Jack Sullivan een gewone jongen met een gewoon leven. Maar nu is zijn wereld een TOTALE MONSTER-ZOMBIE-CHAOS. Vanuit zijn coole boomhut beleeft Jack iedere dag als een soort videogame. Maar in zijn eentje kan hij niet op tegen alle angstaanjagende wezens in de stad. En daarbij is het veel leuker om samen met je vrienden tegen monsters te strijden...
            ‘Gruwelijk leuk!",
            'image' => "img/9789492899842.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789492899453,
            'titel' => "Het griezelwoud",
            'auteur' => "Marcus Sedgwick",
            'beschrijving' => "
            Raafjongen heeft kort en puntig zwart haar, geweldig zicht in de nacht en hij kan praten met dieren. Elfmeisje is lichtvoetig, een snelle denker en… helemaal elf. Ze had niet verwacht dat ze Raafjongen zou ontmoeten. Want hoe vaak komt het nou voor dat iemand uit een boom valt en je huis plet?
            Voor ze het weten beleven ze samen heel vreemde, griezelige avonturen, waar gelukkig af en toe ook nog om gelachen kan worden. En proberen ze intussen hun wereld te beschermen tegen trollen, ogers, heksen en andere duistere wezens uit het griezelwoud.",
            'image' => "img/9789492899453.jpg",
        ]);

        //################ Vriendschap&Verliefd ###########################
        DB::table('boeken')->insert([
            'genre_naam' => "Vriendschap&Verliefd",
            'isbn' => 9789025770457,
            'titel' => "Dikke Vik en Vieze Lies lachen om liefde",
            'auteur' => "Sunna Borghuis",
            'beschrijving' => "Vik en Lies (ik-figuur) vinden al die toestanden rondom Valentijnsdag maar onzin. Maar als Vik enkele activiteiten met de populaire Merel gaat doen, wordt Lies toch wel jaloers.",
            'image' => "img/9789025770457.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Vriendschap&Verliefd",
            'isbn' => 9789026145940,
            'titel' => "Liefdeskriebels",
            'auteur' => "Rachel Renée Russell",
            'beschrijving' => "Het schooljaar is bijna voorbij, en Nikki kan niet wachten tot het zomervakantie is. Maar dan komt er een nieuwe jongen in de klas, en hij is SUPERLEUK! Nikki voelt kriebels, maar wat moet ze daar nou weer mee? Want hoe moet dat dan met hottie Brandon? Aartsvijand MacKenzie zit er natuurlijk bovenop. Lukt het haar om Nikki en Brandon uit elkaar te drijven?",
            'image' => "img/9789026145940.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Vriendschap&Verliefd",
            'isbn' => 9789026144080,
            'titel' => "BFF’s voor even",
            'auteur' => "Rachel Renée Russell",
            'beschrijving' => "Nikki mag meedoen aan een schooluitwisseling. Cool, toch? Nou, niet helemaal. Want wie zit er sinds kort op de school waar Nikki een week naartoe gaat? Precies! Aartsvijand MACKENZIE! Nikki kan wel janken. Zal MacKenzie haar de ellendigste week EVER bezorgen of gedraagt ze zich voor één keer?",
            'image' => "img/9789026144080.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Vriendschap&Verliefd",
            'isbn' => 9789020622348,
            'titel' => "Vriendschap is alles",
            'auteur' => "Stine Jensen",
            'beschrijving' => "Prachtige non-fictie over vriendschap Vrienden en vriendinnen: de meeste kinderen hebben ze wel. We zouden niet zonder ze kunnen en willen, maar toch is vriendschap voor veel mensen iets vanzelfsprekends waar ze nooit over nadenken.Waarom hebben we eigenlijk vrienden? Wat voor soorten vrienden bestaan er allemaal, zijn er verschillen tussen jongens¬ en meisjesvrienden? En wat als je ze niet hebt? Filosoof en schrijver Stine Jensen is een echte ‘vriendschaps­professor’, en door het lezen van Alles is vriendschap kan elk kind dat ook worden. Het boek staat vol vragen, weetjes en zelfs een vriendschapsquiz om te ontdekken wat voor soort vriend jij eigen lijk bent. Zoals we van de boeken van Stine gewend zijn, geeft het boek zowel kinderen als volwassenen stof tot nadenken, filosoferen of een gesprek.",
            'image' => "img/9789020622348.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Vriendschap&Verliefd",
            'isbn' => 9789025879020,
            'titel' => "Oorlog en vriendschap",
            'auteur' => "Dolf Veroen",
            'beschrijving' => "Ik was elf toen de oorlog uitbrak.
                Op een vroege ochtend vlogen de vliegtuigen van de vijand zo laag over de huizen dat je de gezichten van de piloten kon zien.
                Ik vond het spannend, maar algauw werd het angstig.
                In onze klas zaten Joodse kinderen en kinderen van verraders. Zelfs de meester durfde niet meer te zeggen wat hij dacht.
                Wij kinderen hadden eigenlijk niets met de oorlog te maken. Zeker als het om vriendschap ging.
                Of toch?",
            'image' => "img/9789025879020.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Vriendschap&Verliefd",
            'isbn' => 9789021678320,
            'titel' => "Het geweldige grote vriendjesboek",
            'auteur' => "Mary Hoffman",
            'beschrijving' => "Wat is een vriend? Moet een vriend dezelfde dingen leuk vinden als jij? Kun je ook vrienden zijn met dieren of met je broer of zus? Wie is jouw allerbeste vriend? En hoe maak je eigenlijk vrienden?",
            'image' => "img/9789021678320.jpg",
        ]);
    }
}
