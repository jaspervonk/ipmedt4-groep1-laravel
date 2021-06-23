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
            'beschrijving' => "TODO",
            'image' => "img/9789026130977.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Avontuur",
            'isbn' => 9789021681603,
            'titel' => "Oma luchtbuks",
            'auteur' => "Barbara Scholten",
            'beschrijving' => "TODO",
            'image' => "img/9789021681603.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Avontuur",
            'isbn' => 9789025881535,
            'titel' => "Schreeuw om middernacht",
            'auteur' => "Benjamin Read",
            'beschrijving' => "TODO",
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

        //################## DIEREN EN NATUUR #########################
        DB::table('boeken')->insert([
            'genre_naam' => "Dieren en natuur",
            'isbn' => 9789044749236,
            'titel' => "Een vriendin voor Elisa",
            'auteur' => "Sarah Bosse",
            'beschrijving' => "De moeder van Elisa is overleden. Een verdrietige tijd, Nu logeert Elisa bij haar oom en tante op een waddeneieland. Ze sluit virendschap met een pony, maar op een dag is de pony verdwenen.",
            'image' => "img/default_9789044749236.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Dieren en natuur",
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
            'genre_naam' => "Dieren en natuur",
            'isbn' => 9789048739523,
            'titel' => "Hoe Hors een politiepaard werd",
            'auteur' => "Elisa van Spronsen en Katrien Holland",
            'beschrijving' => "Stoere paardenserie op AVI M5 over het eigenzinnige politiepaard Hors. In dit eerste deel lees je waarom Soesja bij de politiepaardenstal komt wonen en hoe het Hors is gelukt om politiepaard te worden. Dat is namelijk nog niet zo makkelijk. Leuk om te lezen voor iedere jonge paardengek!
            ",
            'image' => "img/9789048739523.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Dieren en natuur",
            'isbn' => 9789025881528,
            'titel' => "Magneetje",
            'auteur' => "Milja Praagman",
            'beschrijving' => "Gedichten over jij en ik, over dat ene ogenblik, over ruzie en herrie, over een meisje in oma en een oma meisje. Soms dromerig, dan weer nuchter. Vol verwondering en wonderschoon geïllustreerd.",
            'image' => "img/9789025881528.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Dieren en natuur",
            'isbn' => 9789048738465,
            'titel' => "draf in de klas",
            'auteur' => "Marte Jongbloed en Esther van den Berg",
            'beschrijving' => "Aantrekkelijk leesboek op AVI M3, speciaal voor kinderen die net leren lezen. Over juf Pom die geen stal meer heeft voor haar paard. Wat moet ze nu doen? Door de korte woorden en eenvoudige zinnen kunnen beginnende lezers meteen leeskilometers maken.",
            'image' => "img/9789048738465.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Dieren en natuur",
            'isbn' => 9789048738625,
            'titel' => "Wat kiest Pieter: een vogelspin of een struisvogel?",
            'auteur' => "Stefan Boonen",
            'beschrijving' => "In dit bijzondere boek op AVI M4 kiest de lezer zelf de afloop van het verhaal. Hoe dat kan? Het verhaal is letterlijk doormidden geknipt. Pieter houdt erg van dieren. Hij leest in de krant: ‘Wij zoeken oppas voor de dieren uit ons dierenpark.’ Dat is echt iets voor hem! Al houdt zijn moeder niet zo van dieren, toch kan Pieter het niet laten om even te gaan kijken. Alleen een struisvogel en vogelspin zijn nog over. Welk dier kan hij het beste kiezen en voor zijn moeder verborgen houden?",
            'image' => "img/9789048738625.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Dieren en natuur",
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
            'isbn' => 9789026148026,
            'titel' => "Leven van een loser 15 - Kopje-onder",
            'auteur' => "Jeff Kinney",
            'beschrijving' => "De familie Botermans strandt op een camperpark. Daar slaat de vakantiestemming om: een epische wolkbreuk en stijgend water… Gaat Bram kopje-onder?",
            'image' => "img/9789026148026.png",
        ]);

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
            'isbn' => 9789026148026,
            'titel' => "Leven van een loser 15 - Kopje-onder",
            'auteur' => "Jeff Kinney",
            'beschrijving' => "De familie Botermans strandt op een camperpark. Daar slaat de vakantiestemming om: een epische wolkbreuk en stijgend water… Gaat Bram kopje-onder?",
            'image' => "img/9789026148026.png",
        ]);

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
            'isbn' => 9789026148026,
            'titel' => "Leven van een loser 15 - Kopje-onder",
            'auteur' => "Jeff Kinney",
            'beschrijving' => "De familie Botermans strandt op een camperpark. Daar slaat de vakantiestemming om: een epische wolkbreuk en stijgend water… Gaat Bram kopje-onder?",
            'image' => "img/9789026148026.png",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Humor",
            'isbn' => 9789026148026,
            'titel' => "Leven van een loser 15 - Kopje-onder",
            'auteur' => "Jeff Kinney",
            'beschrijving' => "De familie Botermans strandt op een camperpark. Daar slaat de vakantiestemming om: een epische wolkbreuk en stijgend water… Gaat Bram kopje-onder?",
            'image' => "img/9789026148026.png",
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
            'beschrijving' => "TODO",
            'image' => "img/9789025871338.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Sprookjes",
            'isbn' => 9789492901675,
            'titel' => "Het heksenhandboek",
            'auteur' => "Nikki van de Car",
            'beschrijving' => "TODO",
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
            'beschrijving' => "TODO",
            'image' => "img/9789025871406.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789066921863,
            'titel' => "Dolfje Weerwolfje",
            'auteur' => "Paul van Loon",
            'beschrijving' => "Als hij zeven wordt, ontdekt Dolfje dat hij een weerwolf is. Eigenlijk is Dolfje een heel gewone jongen. Maar drie nachten per maand, bij volle maan, verandert hij in een weerwolf. Een witte weerwolf met een brilletje op. Eerst werd Dolfje daar verdrietig van. Hij wilde zelfs weglopen van huis. Maar Timmies ouders vonden het helemaal niet erg dat hij een weerwolfje is. Gelukkig maar, want nu kan hij gewoon thuis blijven wonen.
            Met volle maan beleeft hij de spannendste avonturen. Samen met Noura, Timmie, opa weerwolf en neef Leo.",
            'image' => "img/default_9789066921863.jpg",
            'videolink' => "https://www.youtube.com/embed/Rcsuo6XxALU",
            'hoofdpersoon' => "Dolfje",
            'hoofdpersoon_image' => "bibliotheek/img/9789066921863-Dolfje_Weerwolfje.png"
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
            'isbn' => 9789066921863,
            'titel' => "Dolfje Weerwolfje",
            'auteur' => "Paul van Loon",
            'beschrijving' => "Als hij zeven wordt, ontdekt Dolfje dat hij een weerwolf is.",
            'image' => "img/default_9789066921863.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789066921863,
            'titel' => "Dolfje Weerwolfje",
            'auteur' => "Paul van Loon",
            'beschrijving' => "Als hij zeven wordt, ontdekt Dolfje dat hij een weerwolf is.",
            'image' => "img/default_9789066921863.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789066921863,
            'titel' => "Dolfje Weerwolfje",
            'auteur' => "Paul van Loon",
            'beschrijving' => "Als hij zeven wordt, ontdekt Dolfje dat hij een weerwolf is.",
            'image' => "img/default_9789066921863.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789066921863,
            'titel' => "Dolfje Weerwolfje",
            'auteur' => "Paul van Loon",
            'beschrijving' => "Als hij zeven wordt, ontdekt Dolfje dat hij een weerwolf is.",
            'image' => "img/default_9789066921863.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Griezelverhaal",
            'isbn' => 9789066921863,
            'titel' => "Dolfje Weerwolfje",
            'auteur' => "Paul van Loon",
            'beschrijving' => "Als hij zeven wordt, ontdekt Dolfje dat hij een weerwolf is.",
            'image' => "img/default_9789066921863.jpg",
        ]);

        //################ VRIENDSCHAP EN VERLIEFD ###########################
        DB::table('boeken')->insert([
            'genre_naam' => "Vriendschap en Verliefd",
            'isbn' => 9789025770457,
            'titel' => "Dikke Vik en Vieze Lies lachen om liefde",
            'auteur' => "Sunna Borghuis",
            'beschrijving' => "Vik en Lies (ik-figuur) vinden al die toestanden rondom Valentijnsdag maar onzin. Maar als Vik enkele activiteiten met de populaire Merel gaat doen, wordt Lies toch wel jaloers.",
            'image' => "img/9789025770457.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Vriendschap en Verliefd",
            'isbn' => 9789025770457,
            'titel' => "Dikke Vik en Vieze Lies lachen om liefde",
            'auteur' => "Sunna Borghuis",
            'beschrijving' => "Vik en Lies (ik-figuur) vinden al die toestanden rondom Valentijnsdag maar onzin. Maar als Vik enkele activiteiten met de populaire Merel gaat doen, wordt Lies toch wel jaloers.",
            'image' => "img/9789025770457.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Vriendschap en Verliefd",
            'isbn' => 9789025770457,
            'titel' => "Dikke Vik en Vieze Lies lachen om liefde",
            'auteur' => "Sunna Borghuis",
            'beschrijving' => "Vik en Lies (ik-figuur) vinden al die toestanden rondom Valentijnsdag maar onzin. Maar als Vik enkele activiteiten met de populaire Merel gaat doen, wordt Lies toch wel jaloers.",
            'image' => "img/9789025770457.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Vriendschap en Verliefd",
            'isbn' => 9789025770457,
            'titel' => "Dikke Vik en Vieze Lies lachen om liefde",
            'auteur' => "Sunna Borghuis",
            'beschrijving' => "Vik en Lies (ik-figuur) vinden al die toestanden rondom Valentijnsdag maar onzin. Maar als Vik enkele activiteiten met de populaire Merel gaat doen, wordt Lies toch wel jaloers.",
            'image' => "img/9789025770457.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Vriendschap en Verliefd",
            'isbn' => 9789025770457,
            'titel' => "Dikke Vik en Vieze Lies lachen om liefde",
            'auteur' => "Sunna Borghuis",
            'beschrijving' => "Vik en Lies (ik-figuur) vinden al die toestanden rondom Valentijnsdag maar onzin. Maar als Vik enkele activiteiten met de populaire Merel gaat doen, wordt Lies toch wel jaloers.",
            'image' => "img/9789025770457.jpg",
        ]);

        DB::table('boeken')->insert([
            'genre_naam' => "Vriendschap en Verliefd",
            'isbn' => 9789025770457,
            'titel' => "Dikke Vik en Vieze Lies lachen om liefde",
            'auteur' => "Sunna Borghuis",
            'beschrijving' => "Vik en Lies (ik-figuur) vinden al die toestanden rondom Valentijnsdag maar onzin. Maar als Vik enkele activiteiten met de populaire Merel gaat doen, wordt Lies toch wel jaloers.",
            'image' => "img/9789025770457.jpg",
        ]);
    }
}
