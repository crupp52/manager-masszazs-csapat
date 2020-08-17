@extends('layout.main')

@section('content')

    <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" style="background-image: url('{{ asset('customer/images/hero/hero1.jpg') }}')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h1 class="mb-3">Szolgáltatások</h1>
                        <p>Tekintse meg a nyújtott szolgáltatásainkat.</p>
                        <p><a href="javascript: jumpToContent()" class="btn btn-primary">Tudjon meg többet</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section" id="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading-border-bottom font-weight-bold serif text-black mb-5 text-center">Szolgáltatásaink</h1>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-12">
                        <div class="service_13987">
                            <div class="text">
                                @isset($service->title)
                                    <h2 class="serif mb-3">{{ $service->title }}</h2>
                                @endisset
                                {!! $service->description !!}
                                @isset($service->photos)
                                    @foreach($service->photos as $photo)
                                        <div class="row">
                                            <div class="col-lg-12 mb-5">
                                                <a href="{{ asset('storage/images/'.$photo->filename) }}" data-fancybox="gal" class="">
                                                    <img src="{{ asset('storage/images/'.$photo->filename) }}" alt="Image" class="img-fluid w-100">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endisset
                            </div>
                        </div>
                    </div>
                @endforeach

                {{--                <div class="col-12">--}}
                {{--                    <div class="service_13987">--}}
                {{--                        <div class="text">--}}
                {{--                            <p><b class="font-weight-bold">Főbb profilunk:</b> cégekhez, gyárakhoz, intézményekhez eljutni és az ott dolgozóknak úgynevezett manager vagy székes masszázst kiajánlani. Ennek lényege, hogy egy-két-akár három masszőr is kiérkezik a helyszínre és átmasszírozza a dolgozókat. Mindez munkaidőben történik a vezetőség--}}
                {{--                                jóváhagyásával és tudtával adott--}}
                {{--                                napokon. Minimum 5 fő, maximum 500 fő az, amelyet jelenleg csapatunk megbeszélés szerint át tud masszírozni. Egy nap egy masszőr 10-15 főt tud átmasszírozni.</p>--}}
                {{--                            <p>Egy jó manager masszázs csodákra képes! Tapasztalatom szerint a dolgozók hálásak és lojálisak és valóban produktívabban teljesítenek. Míg a vezetőség, mintegy--}}
                {{--                                juttatást adhatja a vállalata dolgozóinak, amely befektetés többszörösen megtérül!</p>--}}
                {{--                            <p>Stressz-oldó, manager masszázs A stressz okozta egészségkárosító hatásokról, sokat lehet hallani, és sajnos napjainkban sokan tapasztalják is ezeket a negatív hatásokat. A nyak-vállöv és a fej masszázsa kikapcsolódást nyújt a szorító--}}
                {{--                                hétköznapi mókuskerékben, biztosítva ezzel az idegrendszer nyugalmát és a minőségi pihenést. Az irodai (szék) masszázs egy olyan rövid ideig tartó masszázs, amely képes az irodai munka során igénybe vett testrészeket felfrissíteni, izomzatot kilazítani. Közérzetjavító, egészségmegőrző szolgáltatás, melyet elsősorban--}}
                {{--                                az irodai munkát végzők számára fejlesztettek ki.</p>--}}
                {{--                            <p>A masszázs egy speciális masszázsszéken történik ruhán keresztül. A masszőr gyúró mozdulatokkal átdolgozza a gerinc két oldalát, a vállakat, a lapockát és a medence egy részét, a nyak és a tarkó masszírozásával, pedig csökkenti a stresszt. Időtartama: 15 perc.</p>--}}
                {{--                            <p>Alkalmazottként jelezze munkáltatójának ezt a lehetőséget! Részletekért keressen bizalommal!</p>--}}
                {{--                            <p><b class="font-weight-bold">Másod profilunk</b>, hogy családokhoz, családi rendezvényekre, összejövetelekre úgynevezett mobil masszázs ágyunkkal, ágyainkkal akár többen is kiérkezünk és a megfelelő higiéniai és személyes szférákat figyelembe véve átmasszírozzuk a csoportot. Lehet választani a weboldalon látható--}}
                {{--                                kollégák közül egyet vagy akár nagyobb--}}
                {{--                                csoportnál többet is. Ezt mindeneképp időben, legalább 2-4 héttel a tervezett masszázsidőpont előtt kérjük jelezni a szervezési feladatok miatt. Egy masszázsra megfelelő helységet, helyszínt a megrendelőnek kell biztosítania! Minden mást mi biztosítunk (zene, masszázs asztal-vagy szék, vivőanyagok, törölközők,--}}
                {{--                                lepedők és persze a megrendelt masszőr/masszázs típus)</p>--}}
                {{--                            <p>A létszámtól függően némi előkészületet és utómunkálatokat igényel a szolgáltatás. De mindezeket átbeszéljük adott programhoz igazítva, egyeztetve. Hosszú távú, rendszeres masszázsra járók sokkal egészségesebbek,--}}
                {{--                                kiegyensúlyozottabbak, ezáltal csökken a stressz, a fizikai-illetve az egyoldalú terhelés okozta testi-és egyéb káros hatások kialakulása. Mi több a már kialakultakat is vissza lehet fordítani!</p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12">--}}
                {{--                    <div class="service_13987">--}}
                {{--                        <div class="text">--}}
                {{--                            <h2 class="serif mb-3">Manager masszázs</h2>--}}
                {{--                            <p>A masszőr, mintegy 15 perc alatt átmasszírozza a dolgozó nyaki, felső háti szakaszát, valamint a problémás területeket csípőtől akár fejbúbig. Erre egy anatómiailag kifejlesztett széket visz segítségül, hogy a kényelem, a lazulás garantált legyen. A masszázs ruházatban történik, esetleg egy váltás kényelmes pólót hozhat a dolgozó magával, hogy az elegáns inget, blúzt ne gyűrje meg a masszőr. A masszázs-sorrendet a munkahelyen állítják össze maguknak az ott dolgozók, vezetők. A részletekért kérje segítségünket!</p>--}}
                {{--                            <div class="row">--}}
                {{--                                <div class="col-lg-12 mb-5">--}}
                {{--                                    <a href="{{ asset('images/services/manager/01.jpg') }}" data-fancybox="gal" class=""><img src="{{ asset('images/services/manager/01.jpg') }}" alt="Image" class="img-fluid"></a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12">--}}
                {{--                    <div class="service_13987">--}}
                {{--                        <div class="text">--}}
                {{--                            <h2 class="serif mb-3">Svéd- vagy frissítőmasszázs</h2>--}}
                {{--                            <p>A legelterjedtebb nyugati masszázsfajta. Eredeti formája masszázs és testgyakorlatok ötvözete. A masszőr simító, dörzsölő,rezegtető és gyúró mozdulatokkal frissíti fel a szervezetet. A masszázs során a vérkeringés és az emésztés javul. A svéd masszázs csökkenti a fájdalmat (pl. stresszes fejfájást), felgyorsítja a--}}
                {{--                                sérülések utáni felépülést, megakadályozza a nem használt izmok sorvadását, enyhíti az álmatlanságot, fokozza az éberséget, de mindenek előtt elősegíti a relaxációt és csökkenti a stressz hatását.</p>--}}
                {{--                            <div class="row">--}}
                {{--                                <div class="col-lg-6 mb-5">--}}
                {{--                                    <a href="{{ asset('images/services/sved/01.jpg') }}" data-fancybox="gal" class=""><img src="{{ asset('images/services/sved/01.jpg') }}" alt="Image" class="img-fluid"></a>--}}
                {{--                                </div>--}}
                {{--                                <div class="col-lg-6 mb-5">--}}
                {{--                                    <a href="{{ asset('images/services/sved/02.jpg') }}" data-fancybox="gal" class=""><img src="{{ asset('images/services/sved/02.jpg') }}" alt="Image" class="img-fluid"></a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <p>Ez a masszázs a legismertebb masszázsok közé tartozik, mert az egész testre kiterjed, az izmok, inak, és ízületek átmasszírozására irányul. Elősegíti a mozgásfunkciók helyes működését, ellazítja a fájdalmasan feszülő, görcsös izmokat. A svédmasszázs legelterjedtebb fogásai a gyúró, dörzsölő, simító és rezegtető--}}
                {{--                                mozdulatok. A simító mozdulatok segítségével egyenletesen eloszlatja a masszázsolajat a testen, ezzel előidézve a test általános ellazulását. Az ezt követő mély simítások mindig a szív felé irányulnak, amik serkentik a vérkeringést és bemelegednek az izmok. Majd a gyúrás a háton, a mellkas felső részén, a lábon és a--}}
                {{--                                fartájékon folytatódik. Ez ellazítja az izmokat, szétválasztja a merev izomrostokat, fokozza az izmok vérellátását. Az izmok tonizálására az ütögetés különféle formáit alkalmazukk, melyek lehetnek erősek, enyhék, lassúak és gyorsak egyaránt. A dörzsölés két ujjal történik a test speciális pontjain. A masszázs során a--}}
                {{--                                vendég igénye szerint krémet vagy olajat használunk.</p>--}}
                {{--                            <p class="lead">Hatásai</p>--}}
                {{--                            <ul>--}}
                {{--                                <li>fellazítja az izmokat</li>--}}
                {{--                                <li>csökkenti a hát- és gerincfájást</li>--}}
                {{--                                <li>fokozza az anyagcserét, ezáltal segíti a test méregtelenítését</li>--}}
                {{--                                <li>kedvezően befolyásolja az emésztést</li>--}}
                {{--                                <li>élénkíti a vérkeringést, bőrünk visszakapja ruganyosságát</li>--}}
                {{--                                <li>frissít, kondicionál</li>--}}
                {{--                                <li>oldja a stresszt</li>--}}
                {{--                                <li>segít megszüntetni az alvászavarokat</li>--}}
                {{--                                <li>gyorsítja a sérülések utáni felépülést</li>--}}
                {{--                                <li>csökkenti a fejfájást, és általában a fájdalmat</li>--}}
                {{--                            </ul>--}}
                {{--                            <p class="lead">Kinek javasolt?</p>--}}
                {{--                            <ul>--}}
                {{--                                <li>reumás megbetegedéseknél</li>--}}
                {{--                                <li>mozgásszervi problémák esetén</li>--}}
                {{--                                <li>ortopéd betegségek kiegészítő kezelésére</li>--}}
                {{--                                <li>rándulások, görcsök és húzódások kezelésére</li>--}}
                {{--                                <li>szívpanaszok és magas vérnyomás kezelésére</li>--}}
                {{--                                <li>tartáshibák korrigálására</li>--}}
                {{--                                <li>izommerevség feloldására</li>--}}
                {{--                                <li>légzési problémák és pszichoszomatikus betegségek gyógyítására</li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12">--}}
                {{--                    <div class="service_13987">--}}
                {{--                        <div class="text">--}}
                {{--                            <h2 class="serif mb-3">Access</h2>--}}
                {{--                            <ul>--}}
                {{--                                <li>Bars (32 pontos fejkezelés)</li>--}}
                {{--                                <li>Zsírsejtek oldása (testbe zárt traumák, érzelmek)</li>--}}
                {{--                                <li>Látásjavítás, a szem traumáinak oldása</li>--}}
                {{--                                <li>Rendpontok, fix nézőpontok, merevségek oldása a testből</li>--}}
                {{--                                <li>Tápláló szexuális és párkapcsolati energiák helyreállítása</li>--}}
                {{--                                <li>Szokások, függőségek oldása</li>--}}
                {{--                                <li>Sivatagosodás eltörlése, a bőr traumáinak oldása, áramlások visszaállítása</li>--}}
                {{--                            </ul>--}}
                {{--                            <p>Az Access Bars hatására a test újrarendezi magát. Több ezer hitrendszerünktől szabadulhatunk meg általa. A fejen lévő pontok érintésével különböző életterületeken dolgozunk. Többek közt a kommunikáción, kreativitáson, pénzen, álmainkon, vágyainkon, öregedésünkön, stb.</p>--}}
                {{--                            <p>Míg az Access Bars egy átfogó jellegű eszköz, összetett, sok életterületet érint egyszerre, addig a testoldások egy-egy problémára, életterületre mélyebben koncentrálnak. Az oldások megkönnyítik a test számára, hogy visszatérjen az eredeti működéseihez, amely elősegíti, hogy a test rendbe jöjjön, és egészséges--}}
                {{--                                legyen.</p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12">--}}
                {{--                    <div class="service_13987">--}}
                {{--                        <div class="text">--}}
                {{--                            <h2 class="serif mb-3">Frissítő-, relaxáló masszázs teljes testen és háton</h2>--}}
                {{--                            <p>Az egészséges, de keveset mozgó, ülő foglalkozású emberek gyakran szenvednek hát és izomfájdalmaktól. A frissítő masszázs során erőteljesebb kezelést alkalmazunk, amely az egész testet átmozgatja, felpezsdíti a vérkeringést. Bizonyos mértékig pótolja az aktív mozgást. Lényege a test összes izmára kiterjedő, erőteljes,--}}
                {{--                                frissítő, masszázs.</p>--}}
                {{--                            <div class="row">--}}
                {{--                                <div class="col-lg-4 mb-5">--}}
                {{--                                    <a href="{{ asset('images/services/sved/03.jpg') }}" data-fancybox="gal" class=""><img src="{{ asset('images/services/sved/03.jpg') }}" alt="Image" class="img-fluid"></a>--}}
                {{--                                </div>--}}
                {{--                                <div class="col-lg-4 mb-5">--}}
                {{--                                    <a href="{{ asset('images/services/sved/04.jpg') }}" data-fancybox="gal" class=""><img src="{{ asset('images/services/sved/04.jpg') }}" alt="Image" class="img-fluid"></a>--}}
                {{--                                </div>--}}
                {{--                                <div class="col-lg-4 mb-5">--}}
                {{--                                    <a href="{{ asset('images/services/sved/05.jpg') }}" data-fancybox="gal" class=""><img src="{{ asset('images/services/sved/05.jpg') }}" alt="Image" class="img-fluid"></a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <p>A relaxáló masszázs, egy ellazult, pihentető, kellemes testélmény, nyugodt, de felfrissült lelkiállapotot okoz. Lazító, stresszoldó, gyengéd teljes testmasszázst az aktuális állapothoz választott illóolajok felhasználásával egészítjük ki.</p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12">--}}
                {{--                    <div class="service_13987">--}}
                {{--                        <div class="text">--}}
                {{--                            <h2 class="serif mb-3">Páros masszázs</h2>--}}
                {{--                            <p>A páros masszázs során két masszőr párhuzamosan 2 vendég masszírozását végzi melegen tartott natur kókuszolajjal. A masszázs egész testen vagy háton történik.Szerelmespároknak, családtagoknak (anya-lánya,…) barátnőknek kíváló társas kikapcsolódás.</p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12">--}}
                {{--                    <div class="service_13987">--}}
                {{--                        <div class="text">--}}
                {{--                            <h2 class="serif mb-3">Nyirokmasszázs</h2>--}}
                {{--                            <p>Az eljárás lényege a pangó nyirokfolyadék elvezetése a kötőszövetből. A nyirokmasszázs segít hatékonyan csökkenteni a nyirokpangás okozta tüneteket pl.: duzzadt boka, narancsbőr.</p>--}}
                {{--                            <p>A nyirok keringés aktiválásával beindul a szervezet öntisztító, méregtelenítő folyamata, és a méreganyagok kiürülnek a veséken és az emésztőrendszeren keresztül, ezáltal erősödik az immunrendszer, mely beindítja az öngyógyító folyamatokat.</p>--}}
                {{--                            <p>Jótékonyan hat az idegrendszerre is; nyugtat ellazít, elősegíti a pihentető alvást, javítja a közérzetet. Nagyszerű kiegészítője a fogyókúrának, léböjtnek.</p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12">--}}
                {{--                    <div class="service_13987">--}}
                {{--                        <div class="text">--}}
                {{--                            <h2 class="serif mb-3">Frissítő talpmasszázs</h2>--}}
                {{--                            <p>Ha egy szerv túlterhelt, alul- vagy felülműködik, akkor ezt a talpon/lábon található szervzóna tapintásának és érzékenységének változása is jelzi. Ilyenkor vagy fájdalmas csomó, dudor tapintható, vagy csak enyhén érzékeny szemcsék, máskor pedig fájdalmatlan kis grízszerű elváltozások észlelhetők. Ez attól függ, hogy--}}
                {{--                                mennyire friss és heves a probléma, ill. milyen mértékű a zavar, elváltozás.</p>--}}
                {{--                            <div class="row">--}}
                {{--                                <div class="col-lg-12 mb-5">--}}
                {{--                                    <a href="{{ asset('images/services/talp/01.jpg') }}" data-fancybox="gal" class=""><img src="{{ asset('images/services/talp/01.jpg') }}" alt="Image" class="img-fluid"></a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <p>Hatása: A teljes szervezet működésére szabályozó, kiegyenlítő, harmonizáló hatású. Az aktív zónák ingerlésével a testben áramló életenergiára hatunk, így az energiatorlódást vagy hiányt hozhatjuk egyensúlyba, így az egész emberi szervezetben hatást válthatunk ki. Serkentjük a vérkeringést, ezáltal a sejtanyagcsere--}}
                {{--                                felgyorsul, így gyorsabban kiválasztódnak a salakanyagok. Serkentjük a nyirokkeringést. Lazító hatású, oldja a testi-lelki feszültségeket.</p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12">--}}
                {{--                    <div class="service_13987">--}}
                {{--                        <div class="text">--}}
                {{--                            <h2 class="serif mb-3">Reflexológiai jellegű talpmasszázs</h2>--}}
                {{--                            <p>A talp reflexzónái segítenek a betegségek feltérképezésében, és a öngyógyulási folyamatok beindulásában. A talpon helyezkednek el az emberi anatómiának megfelelően a különböző szervterületek,--}}
                {{--                                amelyeket reflexológia pontok jelölnek. Ezeknek a pontoknak az erőteljes megnyomása fájdalomérzettel jár, ám a masszázs hatására az adott szerven érzékelt fájdalom vagy probléma csökken.</p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12">--}}
                {{--                    <div class="service_13987">--}}
                {{--                        <div class="text">--}}
                {{--                            <h2 class="serif mb-3">Thai masszázs</h2>--}}
                {{--                            <p>Az egyik legősibb, legnépszerűbb és leghatékonyabb keleti masszázs a szerte a világon híres thai masszázs. A Thai Masszázs egyensúlyba hozza test elemeit. Ha az ember egészséges, az életenergia akadálytalanul áramlik a meridiánokba. A mértéktelen élet, az emocionális stressz, a gyengeség vagy a sérülés ezt a--}}
                {{--                                folyamatot megzavarja. A megrekedt energiát ismét nyugodt folyásba tudja hozni. Fokozza a szervezet védekező képességét.</p>--}}
                {{--                            <div class="row">--}}
                {{--                                <div class="col-lg-6 mb-5">--}}
                {{--                                    <a href="{{ asset('images/services/thai/02.jpg') }}" data-fancybox="gal" class=""><img src="{{ asset('images/services/thai/02.jpg') }}" alt="Image" class="img-fluid"></a>--}}
                {{--                                </div>--}}
                {{--                                <div class="col-lg-6 mb-5">--}}
                {{--                                    <a href="{{ asset('images/services/thai/03.jpg') }}" data-fancybox="gal" class=""><img src="{{ asset('images/services/thai/03.jpg') }}" alt="Image" class="img-fluid"></a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="row">--}}
                {{--                                <div class="col-lg-12 mb-5">--}}
                {{--                                    <a href="{{ asset('images/services/thai/01.jpg') }}" data-fancybox="gal" class=""><img src="{{ asset('images/services/thai/01.jpg') }}" alt="Image" class="img-fluid"></a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <p>Alkalmazható alvászavarnál, ideges/feszült állapotokban, fájdalom enyhítésére. Serkenti a vér- és nyirokkeringését. A többi masszázstól eltérően a thai masszázs abban különbözik, hogy úgynevezett szárazmasszázs, azaz nem használnak hozzá olajat vagy krémet, és ruhában történik. Nem az izmokat, hanem az akupunktúrás--}}
                {{--                                pontokat ingerlik, pontnyomásos technika alkalmazásával. Egész testen alkalmazott eljárás. Minden testrészen végigmegy a masszőr, a lábujjaktól a fejünk búbjáig. A masszőrök nem csak a tenyerükkel és az ujjhegyeikkel, továbbá térddel, könyékkel és talppal is masszíroznak. Rendszeres alkalmazása jó közérzetet biztosít,--}}
                {{--                                emellett kiváló gyógyhatása van a szív- és érrendszeri, emésztőrendszeri és mozgásszervi megbetegedések megelőzésére és kezelésére.</p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12">--}}
                {{--                    <div class="service_13987">--}}
                {{--                        <div class="text">--}}
                {{--                            <h2 class="serif mb-3">Frissítő arc- és dekoltázsmasszázs</h2>--}}
                {{--                            <p>Segíti, hogy az arcbőr feszessé, a sápad, fáradt bőr pedig élettelivé, egészségessé váljon. Ugyanakkor hatékonyan alkalmazható a vérellátás frissítésére, az arcbőr rugalmasságának megőrzésére. Alkalmazásával gyorsul az anyagcsere, felfrissülnek a szövetek, javul az oxigén- és tápanyag-ellátás. Az idegrendszer egészére--}}
                {{--                                hatást gyakorol a megfelelő idegkilépési pontokon alkalmazott nyomás során, melynek nyugtató hatása van. Tiniknek is kifejezetten hasznos, ugyanis csökkenti a mitesszerképződést.</p>--}}
                {{--                            <div class="row">--}}
                {{--                                <div class="col-lg-6 mb-5">--}}
                {{--                                    <a href="{{ asset('images/services/dekoltazs/01.jpg') }}" data-fancybox="gal" class=""><img src="{{ asset('images/services/dekoltazs/01.jpg') }}" alt="Image" class="img-fluid"></a>--}}
                {{--                                </div>--}}
                {{--                                <div class="col-lg-6 mb-5">--}}
                {{--                                    <a href="{{ asset('images/services/dekoltazs/03.jpg') }}" data-fancybox="gal" class=""><img src="{{ asset('images/services/dekoltazs/03.jpg') }}" alt="Image" class="img-fluid"></a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12">--}}
                {{--                    <div class="service_13987">--}}
                {{--                        <div class="text">--}}
                {{--                            <h2 class="serif mb-3">Energetikai masszázs (reiki, orosz, prána energiák)</h2>--}}
                {{--                            <p>Választható teljes testen vagy háton. A közel egy órás masszázs lényege, hogy feloldja a testben lévő blokkokat és csomókat. Ugyanis, ha bárhol a testben megreked az--}}
                {{--                                energia és csomó keletkezik, az gátolhatja a helyes energiaáramlást, ami testi tünetekhez vezethet. Ilyenkor könnyen előjöhetnek a hát, derék- vagy végtagfájdalmak, de kimerültség, fáradtság, sőt szédülés és gyakori fejfájás is előfordulhat.</p>--}}
                {{--                            <p>A masszőr első körben feltérképezi hol keletkeztek a csomók és elindítja a testben a helyes energiaáramlást. A masszázs egyénre szabott aszerint, hogy kinek mire van szüksége, akár egy erősebb vagy egy lágyabb masszírozás formájában. Az energetikai masszázs elősegíti a nyirokrendszer és a keringés gyorsulását, ezáltal--}}
                {{--                                javul a méregtelenítés a szervezetben, valamint gyorsulnak az öngyógyító és regenerációs folyamatok is.</p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12">--}}
                {{--                    <div class="service_13987">--}}
                {{--                        <div class="text">--}}
                {{--                            <h2 class="serif mb-3">Lélekmasszázs (Holistic Pulsing)</h2>--}}
                {{--                            <p>Ringató, pulzáló és lágy mozgásokon keresztül a test gyengéd rezgésbe jön, ami fejtől a lábig terjed. Néhány pillanat múlva a kezelt kellemes, mély ellazulást él át. E mozgások hatására aktivizálódik a sejtemlékezet és az alany felelevenítheti az elnyomott, olykor elvesztett emlékfoszlányokat. Az ellentétek és--}}
                {{--                                kétségek kezdenek feloldódni, megtaláljuk az utat belső bölcsességünkhöz. Ennek a masszázsnak az a célja, hogy a testet, szellemet összhangba hozzuk és a gondolatoktól az érzéshez vezessük. Semmit sem kell tennünk, egyszerűen csak hagyni kell, hogy történjék, aminek történnie kell. Ekkor tudjuk a kódolt, régi--}}
                {{--                                viselkedésmintáinkat elengedni. Így az élet egyszerűbbé, áttekinthetőbbé, szebbé és teljesebbé válik.</p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12">--}}
                {{--                    <div class="service_13987">--}}
                {{--                        <div class="text">--}}
                {{--                            <h2 class="serif mb-3">Access</h2>--}}
                {{--                            --}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>

@endsection
