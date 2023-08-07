<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class postsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'user_id' => rand(1,3),

                'post_title' => 'Ultimativni vodič za uzgoj chili papričica',

                'post_body' => 'Riječi chili, čili, chile, chilli, označavaju skupni naziv za plodove sitnoplodnih paprika koje dolaze od različitih vrsta, a najčešće se koriste za pravljenje umaka, namaza, zimnice ili začinskog praha. U svijetu postoji više od 25 vrsta paprika iz roda Capsicum, a samo pet od njih se komercijalno uzgajaju, a to su: Capsicum annuum L., Capsicum chinense Jacq., Capsicum frutescens L., Capsicum baccatum L. i Capsicum pubescens Keep. (Bosland i Botava, 2000., Costa i sur., 2009). Sve vrste chili papričica potječu iz Južne i Srednje Amerike. U Europu su stigle kao i većina introduciranih američkih kultura, u 15. stoljeću nakon Kolumbovog otkrića Amerike. Chili papričice unosne su i važne kulture u određenim dijelovima svijeta, a najviše se uzgajaju u Aziji, Africi, Južnoj i Srednjoj Americi te u južnom dijelu Europe. Indija je najveći svjetski proizvođač chili papričica s 42,2% od ukupnih svjetskih obradivih površina pod ovom kulturom. S obzirom da im je porijeklo iz toplijih krajeva, uzgoj u našem podneblju nije posve jednostavan. No uz ovaj vodič i vi bez problema možete uživati u ovom osebujnom povrću koje ste ubrali direktno iz vašeg vrta!',

                'created_at' => now(),
            ],
            [
                'user_id' => rand(1,3),

                'post_title' => 'Sjetva Papričica',
                
                'post_body' => 'Uzgoj chili papričica počinje, naravno, sjetvom sjemena. Glavno pitanje u vezano uz sjetvu papričica jest koje je vremensko razdoblje najoptimalnije za nju.  Preporuča se period od sredine do kraja veljače ili kasnije za sjetvu. Oni koji siju i prije optimalnog perioda žele što brže uzgojiti biljku kako bi dala plod. Papričicama kao i ostalim kulturama potreban je određeni topli period kako bi došlo do razvijanja cvjetnih pupova i u konačnici razvitka ploda te naravno određena količina svjetlosti.

                Uzgojiti ljute papričice nije tako komplicirano kao što se priča. Kao i kod drugih kultura čije prirodno stanište nije na našem području i u našoj klimatskoj zoni, morate poštivati uvjete koje one zahtijevaju:
                
                Za uspješnost klijanja potrebne su temperature između 25 i 30 (32) Celzijevih stupnjeva.
                Klijavost sjemena kreće se između 70% i 80% u idealnim uvjetima. Što idealnije uvjete dajete, to ćete postići bolju klijavost. Ako temperatura supstrata bude oko 21 stupnjeva Celzijusa, period klijanja se produžuje.
                Klijanje sjemena traje između 5 i 30 dana, ovisno o sorti ljute papričice, ali čak ni sjeme iste sorte ne klija istovremeno. Također je i temperatura jedan od čimbenika koji utječe na ujednačenost klijanja sjemena ljutih papričica kao i ostalih biljaka. Ako je temperatura zraka i supstrata čitav period klijanja konstantna (naravno, uz malo variranja), papričice će klijati ujednačenije.
                Za uspješan uzgoj i urod potrebno je da noćne temperature ne padaju ispod 10 Celzijevih stupnjeva.
                Ljuta preporuka: ne sijte ljute papričice prerano, otežavate i sebi i njima. Ako im ne uspijete osigurati ovdje navedene uvjete, biljke će stagnirati, oslabiti te biti podložne biljnim bolestima.
                
                ',

                'created_at' => now(),
            ],
            [
                'user_id' => rand(1,3),

                'post_title' => 'PRIPREMA ZA UZGOJ CHILI PAPRIČICA',
                
                'post_body' => 'Prva stvar koju ćete trebati odlučiti bit će naravno sorta papričica koje ćete uzgajati. Bilo da želite neke blaže papričice koje ćete jesti svježe ili peći, ili želite odmah prionuti na uzgoj najljuće dostupne papričice, postoji savršena sorta za vas. Par preporuka o izboru sorte za svaki stupanj ljutine:Ako vam je ovo prvi put da pokušavate uzgojiti chili papričice, vjerojatno ćete htjeti da vam one što bolje uspiju te stoga birati sorte koje najbolje trpe početničke greške. Ovo je 5 sorti prigodnih za uzgajivače početnike, odnosno onih s čijim biste uzgojem trebali imati najmanje problema:
                1.Jalapeno
                2.Hot Portugal
                3.Serrano
                4.Cayenne
                5.Aji Lemon (Aji Lemon Drop)/Aji Limo',

                'created_at' => now(),
            ],
            [
                'user_id' => rand(1,3),

                'post_title' => 'Zašto ljudi vole ljutu hranu? - 5 razloga',
                
                'post_body' => '1. OKUS – Malo boli, ali godi
                Jedan od glavnih (i očitih) razloga zašto ljudi uživaju u ljutoj hrani je okus. Ljudi žude za ljutinom na isti način na koji žude za nečim slatkim ili slanim. Dok će neki od vas prije posegnuti za čokoladnim keksima, drugi će si s ogromnim guštom pržiti okusne pupoljke žvačući šaku ljutog kikirikija. Pojedinci jednostavno uživaju u osjećaju boli i ljutine koji daje ljuta hrana. Osjećaj peckanja i “vrućine” uzrokovan kapsaicinom, spojem koji chili papričicu čini ljutom, nekima je sasvim ugodan. Kombinaciju bola i ugode, i psihologiju iza toga, nećemo sada raspakiravati, ali this is a safe space i bez ikakve osude.
                
                Zašto ljudi vole ljutu hranu? - volimljuto.com
                Ljuta hrana često ima složen i intenzivan profil okusa te može pomoći da se posebno istaknu drugi okusi u jelu, time stvarajući zanimljivije iskustvo okusa. Na primjer, ljuti curry može istaknuti okuse kokosovog mlijeka, luka, češnjaka i drugih začina poput kumina i korijandera, kreirajući dubinu i složenost određenog jela.
                
                2. ZDRAVSTVENE PREDNOSTI – Tko zdravo zdravi, dvije sreće grabi
                Vaše tijelo je hram i jasno je da se prema njemu želite/trebate odnositi u skladu s tim. Ljuta hrana, ili više specifično, kapsaicin, je već godinama u fokusu mnogih znanstvenih istraživanja zbog fizičkih i zdravstvenih koristi koje se vjeruje da pruža. Brojne razloge zašto jesti ljutu hranu, a između ostalog i zdravstvene prednosti, već smo naveli i obradili, tako da ukoliko vam treba dodatna motivacija za zakoračiti u svijet ljutog, bacite pogled i na taj blog. 
                
                Za one neupućene, ipak ćemo malo ponoviti gradivo. Dokazano je kako kapsaicin ima protuupalna svojstva i svojstva ublažavanja bolova, a čak može pomoći i u borbi protiv stanica raka. Osim toga, ljuta hrana može poboljšati probavu i smanjiti rizik od srčanih bolesti. Nama to zvuči kao prilično dobar razlog zašto ljudi vole ljutu hranu, a vama?
                
                3. FIZIČKI UČINCI – Sretni i znojni
                “Neki to vole ljuto, neki blago. Ali ako se ne znojite, ne radite to kako treba!” Netko je to jednom sigurno rekao… Vjerojatno su vam crijeva već počela prestrašeno kruliti i želudac lagano peći na samu pomisao chili papričica koja se polako razgrađuju u vašem tijelu. No, nije ni to uzalud. Kada jedemo ljutu hranu, naše tijelo oslobađa endorfine, hormone koji proizvode osjećaj užitka i smanjuju stres. Endorfini mogu stvoriti osjećaj euforije ili “runners high”, što je slično zadovoljavajućem osjećaju koji imate nakon vježbanja. Osim toga, ljutina začina ili chili papričica može uzrokovati znojenje, što ne samo da pruža osvježenje, već i svojevrsni detoks. Reklo bi se – 2 u 1. 
                
                Zašto ljudi vole ljutu hranu? - volimljuto.com
                4. KULTUROLOŠKI ČIMBENICI – Muy caliente
                Kulturološki čimbenici također mogu igrati ulogu u tome zašto ljudi vole ljutu hranu. U mnogim je kulturama, poput Meksika, Indije, Tajlanda i Koreje, ljuta hrana glavni dio kuhinje i smatra se izvorom ponosa i identiteta. Jedenje iste može biti način povezivanja s nečijim kulturnim nasljeđem ili izražavanje osjećaja pripadnosti određenoj zajednici. Osim toga, neki ljudi mogu uživati u izazovu jedenja ljute hrane kao testu svoje hrabrosti ili tolerancije.
                
                Također, jedan od razloga zašto je ljuta hrana popularna u nekim kulturama je taj što može pomoći u prezerviranju hrane. U vrućim podnebljima, gdje se hrana može brzo pokvariti, začini poput chili papričice mogu pomoći u sprječavanju rasta bakterija i gljivica koje mogu uzrokovati kvarenje hrane. Dodavanjem začina svojoj hrani ljudi u tim kulturama mogli su čuvati svoju hranu dulje vrijeme, što im je omogućilo da izbjegnu propadanje namirnica i nahrane svoje obitelji. 
                
                Ljuta hrana može pomoći i u rashlađivanju tijela. U vrućim klimama, jedenje ljute hrane može uzrokovati znojenje tijela, što može pomoći da se ohladi i regulira tjelesnu temperaturu. Na taj su se način ljudi u tim kulturama mogli nositi s vrućinom i osjećati se ugodno, čak i u najtoplijim mjesecima u godini.
                
                Zašto ljudi vole ljutu hranu? - volimljuto.com
                5. POMICANJE GRANICA – Što te ne ubije, ojača te
                U životu je bitno raditi stvari izvan svoje zone komfora jer tek tada doživljavamo istinski character development. Netko to radi tako da spontano cijelu ušteđevinu “stavi na crveno” i nada se da će se rizik na kraju isplatiti, a netko se prijavi na naš Okršaj ljutomana i gura granice tolerancije na ljuto kroz znoj i suze. Kakav god ishod bio, pa makar i potencijalan bankrot ili pro***v, na kraju ćete odšetati bogatiji za jedno novo iskustvo. (Vidite kako za sve imamo dovitljiv razlog.)',

                'created_at' => now(),
            ],
            [
                'user_id' => rand(1,3),

                'post_title' => 'Juha od pečenih paprika - recept',
                
                'post_body' => 'Ljeti, kada dođe sezona najmirisnijeg povrća, ne možemo odoljeti koristiti ga u svemu što kuhamo. Tako i ova juha od pečenih paprika uz dodatak rajčice miriše baš po ljetu!

                Najbolji okus dobit ćete, naravno, ako paprike ispečete na roštilju. No, čak i ako nemate priliku za to, dodajte neki od naših umaka s aromom dima i nitko neće povjerovati da su paprike ispečene u pećnici. Sastojci: 4 crvene paprike
                2 rajčice
                400g pasirane rajčice
                2 češnja češnjaka
                1 mali luk
                maslinovo ulje
                sol
                papar 
                majčina dušica
                sušeni origano
                500 ml temeljca 
                Vrabanero Smoked ljuti umak.... PRIPREMA: 1. Ispecite paprike na roštilju (ili u pećnici pod zagrijanim grillom) dok ne omekane i dobiju crne mrlje.
                2. Vruće paprike odmah stavite u plastičnu vrećicu, zavežite ju i ostavite 15-ak minuta da odstoje. Vlaga će vam pomoći odvojiti kožicu.
                3. Ogulite paprike i narežite ih.
                4. Zagrijte ulje u loncu te prepržite nasjeckani luk.
                5. Kada se luk malo prodinsta, dodajte sjeckani češnjak, sušene začine, rajčice, pasiranu rajčicu i temeljac.
                6. Smanjite vatru i kuhajte 20-25 minuta.
                7. Izmiksajte juhu štapnim mikserom.
                8. Na kraju, dodajte Vrabanero Smoked, promiješajte i poslužite!',

                'created_at' => now(),
            ],
            [
                'user_id' => rand(1,3),

                'post_title' => 'Jamaican Hot Yellow',
                
                'post_body' => 'Jamaican Hot Yellow papričica naraste prosječno oko 60 cm u visinu, a može i više te 60 cm u širinu. Ima zelene listove. Cvjetovi su bijele boje. Nakon presadnje potrebno je proći 95-100 dana do berbe prvih plodova. Prilikom sazrijevanja plodov prelaze iz zelene u žutu boju kako i sam naziv sorte govori. Plodovi su dugački i široki 2,5-5 cm. Oblikom podsjećaju na gljivu ili spljoštenu tikvicu. Ova sorta ima izrazito sjajnu i voštanu kožicu ploda. Kao i njezin crveni varijetet, i ova sorta je mnogorodna. Potpuno zreli plodovi su slatkog, voćnog okusa koji podsjeća na one koje imaju Habanero i Scotch Bonnet papričice, ali s puno manje ljutine koja se lakše podnosi. Svježi plodovi koriste se često u meksičkim jelima, salsama te ljutim umacima. Naravno, plodovi se mogu osušiti i samljeti te koristiti kao začinski prah.',

                'created_at' => now(),
            ],
            [
                'user_id' => rand(1,3),

                'post_title' => 'Dorset Naga',
                
                'post_body' => 'Dorset Naga papričica jedna je od najljućih papričica na svijetu. Naraste 60-150 cm u visinu. Tvorci ove papričice su bračni par Joy i Michael Michuad iz Engleske. Posijali su Nagu Morich i sedam godina izdvajali najbolje plodove te kreirali novu, čistu liniju koja je aromatičnija i plodonosnija od roditeljskih sorti, te ju nazvali Dorset Naga. Ima zelene listove. Cvjetovi su bijele boje. Nakon presadnje potrebno je proći više od 100 dana do prvih plodova. Prilikom sazrijevanja plodovi prelaze iz zelene u crvenu boju. Plodovi su dugački 5 cm, a široki 3 cm te lagano naborane kožice ploda i izduženog, ali zaobljenog vrha. Imaju intenzivnu voćnu aromu s jakom ljutinom. Zbog izuzetne ljutine i velikog broja plodova po biljci, ova papričica je san za sve koji obožavaju eksperimentirati i kuhati ultra ljute umake!',

                'created_at' => now(),
            ],
            [
                'user_id' => rand(1,3),

                'post_title' => 'Habanero Lemon',
                
                'post_body' => 'Habanero Lemon papričica nešto je slabije ljutine od klasične Habanero Red sorte. Ova sorta naraste prosječno do 80 cm u visinu i do 45 cm u širinu. Ima tamnozelene listove s lagano zašiljenim vrhom plojke. Cvjetovi ove sorte su bijele boje. Nakon presadnje potrebno je proći prosječno 90-100 dana do prve berbe. Prilikom sazrijevanja plodovi prelaze iz zelene u limun žutu boju. Plodovi su dugački oko 5 cm, a promjer im je do 2,5 cm. Kožica plodova je vrlo tanka i hrskava. Plodovi imaju voćno – citrusnu aromu. Neki čak u ovim plodovima osjete arome marelice. Sama biljka je vrlo lijepog izgleda kada postigne svoj maksimum. Zbog svog izgleda, može se uzgajati kao ornamentalna (ukrasna) biljka u vrtovima ili teglicama na balkonu. Plodovi ove papričice mogu se konzumirati svježi u salatama, sendivičima, salsama i slično. Naravno, mogu se osušiti i samljeti te koristiti kao i ostale sušene chili papričice kod kuhanja raznih jela.',

                'created_at' => now(),
            ],
        ]);
    }
}
