<?php

use Illuminate\Database\Seeder;

use App\Models\Teacher;
use App\User;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $teachersData = [
            [
                'id'       => User::where('login', 'aga.janiec')->first()->id,
                'photo'         => 'agnieszka_janiec.jpg',
                'position'      => 'Właściciel, rehabilitant',
                'education'     => ['WSP Kraków'],
                'skills'        => [
                                    'Samorządowe Przedszkole Integracyjne Nr 28',
                                    'Agaja'
                                ],
                'courses'       => [
                    'Dotyk dla zdrowia – kurs I stopnia',
                    'Dotyk dla zdrowia – kurs II stopnia',
                    'HANDLE -kurs I, II stopnia',
                    'Growth through Play System  kurs I stopień',
                    'Integracja odruchów twarzy wg metody dr Swietłany Masgutowej',
                    'Integracja odruchów dynamicznych i posturalnych wg metody dr Swietłany Masgutowej',
                    'Zastosowanie ustno – twarzowej terapii regulacyjnej Castillio –Moralesa u dzieci z obniżonym napięciem mięśniowym',
                    'Program aktywności: świadomość ciała , dotyk i komunikacja – M. C. Knillów,',
                    'Stymulacja systemu taktylnego i jej wpływ na rozwój psychoruchowy dziecka',
                    'Neurokinezjologia jako metoda wspomagająca rozwój dziecka',
                    'Biomedyczna i integralna terapia dzieci',
                    'Diagnoza i terapia Si dziecka o 0-3',
                    'Współpraca z dzieckiem w trakcie diagnozy i terapii Si',
                    'Diagnoza i terapia małego dziecka o specjalnych potrzebach edukacyjnych',
                    'Wychowanie dziecka do samodzielności',
                    'Komunikacja i struktura w pracy z osobą autystyczną',
                    'Diagnoza i terapia osób autystycznych fundacja Sotis',
                    'Pedagogika zabawy Klanza',
                    'Pedagogika cyrku',
                    'Jak budować porozumienie między dziećmi-metoda E.Mazlich i A. Faber',
                    'Szkoła dla rodziców i wychowawców E.Mazlich i A. Faber',
                    'Prawidłowa współpraca nauczycieli i rodziców',
                    'Stymulacja kreatywności dziecka uzdolnionego S. Meyer',
                    'Dziecko trudne do wychowania- profilaktyka zachowań społecznych',
                    'Wczesne wspomaganie rozwoju dziecka',
                    'FAS — diagnoza i terapia',
                    'Agresja osób z autyzmem i u osób z głębokim upośledzeniem umysłowy — agresja osób z niepełnosprawnością i zaburzeniami psychicznymi w świetle praktyki terapeutycznej',
                    'Cykl szkoleń: diagnoza i terapia dziecka z ADHD',
                    'Praktyczny kurs alternatywnych wspomagających metod porozumiewania się',
                    'Zabawy fundamentalne',
                    'Emisja głosu w terapii dziecka',
                    'Praktyczna zastosowanie idei Carla Orfa w umuzykalnianiu dzieci',
                    'Diagnoza i terapia dysleksji i dyskalkuli, specyficznych trudności w nauce matematyki',
                    'Terapia logopedyczna dzieci z uszkodzeniami OUN',
                    'Diagnoza i terapia dzieci z afazją',
                    'Psychostymulacyjna metoda pracy z dziećmi z autyzmem',
                    'Masaż Shantala',
                    'Terapia czaszkowo-krzyżowa',
                    'Diagnozy i terapii stymulacyjnej metodą Carla Delacato',
                    'Diagnoza i terapia funkcji wzrokowych Impuls System w trudnościach w czytaniu',
                    'Diagnoza funkcjonalna dzieci ze spektrum autyzmu – Fundacja Prodeste',
                    'Skuteczne metody pracy z dzieckiem z wada wymowy I.Michalak -Widera',
                    'Diagnoza i terapia dysfagii wdl. Praksedy Szyper',
                    'Dziecięca neurologopedia kliniczna w świetle współczesnej wiedzy neurofizjologicznej-Aleksandra Łada',
                    'Szkolenie I stopnia z Programu Rozwoju Komunikacji Makaton',
                    'Wykorzystanie elementów metody werbotonalnej w terapii dzieci z zaburzeniami komunikacji językowej',
                    'Picture Exchange Communication PECS System poziom I',
                    'K-Taping logopedyczny dr Roger Ehrenreich'
                ],
                'description'   => 'Mgr pedagogiki specjalnej Uniwersytetu Pedagogicznego o specjalności oligofrenopedagog, nauczyciel dyplomowany, logopeda (Uniwersytet Pedagogiczny Kraków), neurologopeda (Uniwersytet Wrocławski), terapeuta Integracji Sensorycznej. Aktualnie w trakcie studium szkoły trenerów i certyfikowanej specjalizacji CRAFTA® (Akademia Terapii Czaszkowo-Żuchwowej). Terapeuta słuchowej metody Warnknego. Dziesięć lat doświadczenia zawodowego jako pedagog specjalny w grupie integracyjnej w Samorządowym Przedszkolu Integracyjnym Nr 28 w Krakowie. Inicjatorka i współtwórca licznych szkoleń oraz sześciu edycji Krakowskiej Konferencji Nauczyciele-Nauczycielom. Do 2012 roku neurologopeda w Samorządowym Przedszkolu Integracyjnym Nr 32 w Krakowie. Twórca konferencji „Dobra terapia –Podaj dalej” Od 2003 roku Redaktorka działu: Notatnik Nauczyciela Wspomagającego w miesięczniku „Bliżej przedszkola”. Współpracuje z PT ADHD w ramach akcji ADHD ŚWIAT TO ZA MAŁO. Wykładowca i uczestnik ogólnopolskich konferencji dotyczących wieloaspektowego wsparcia dziecka z zaburzeniem rozwoju. Współautorka następujących książek: „Jacy Jesteśmy — program do pracy w grupach integracyjnych”, „Opanować chaos- poradnik dla rodziców dzieciz ADHD”, „Sen Małego Czarodzieja — poradnik i książka pracy dla dzieci z zaburzeniami koncentracji i nie tylko”, „Przyjaciele Małego Czarodzieja — diagnoza i terapia dziecka z ADHD w grupach przedszkolnych” oraz „Mały Przewodnik po ADHD” ze „Specjalnym Kalendarzem ADHD 2011”. Propagatorka komunikacji NVC- „Porozumienia bez przemocy”. Prywatnie mama Uli i Grzesia.',
            ],
            [
                'id'          => User::where('login', 'ola.lanoszka')->first()->id,
                'photo'       => 'ola_lanoszka.jpg',
                'position'    => 'Rehabilitant',
                'education'   => ['WSP Kraków'],
                'skills'      => [],
                'courses'     => [],
                'description' => 'Mgr fizjoterapii Collegium Medicum Uniwersytetu Jagiellońskiego w Krakowie. Od czasu ukończenia studiów pogłębiała swoją wiedzę na specjalistycznych kursach: PNF, NDT-Bobath, Kinesio Taping Association International KT1 I KT2 oraz Reha Plus Edukacja, metoda SET, NDT-Bobath Baby, Neurac1 a także masaż Shantala. Aktualnie jest specjalistą zajmującym się doborem do potrzeb dzieci sprzętu rehabilitacyjnego Theratogs. Oraz zdobywa uprawnienia trenerskie metody Shantala. W swojej pracy łączy metodę HANDLA ( I i II stopień) i terapię biomedyczną. Ściśle współpracuje z rodzicami dzieci objętych opieką fizjoterapeutyczną w gabinecie. Aktywnie uczestniczyła jako wolontariusz w zabawie z dziećmi upośledzonymi ruchowo w fundacji „Zawsze Wierni 4 Łapy” w zakresie dogoterapii, Od 2006 roku pracowała w Szpitalu Dziecięcym im. Św. Ludwika w Krakowie a następnie od 2011 w Polskim Centrum Rehabilitacji Funkcjonalnej „Votum RehaPlus” w zakresie problemów neurologicznych, wcześniactwa, opóźnienia psychoruchowego i innych poważnych trudności rozwojowych dzieci. Mama Oli i Tomasza.',
            ],
            [
                'id'          => User::where('login', 'agata.glowacka')->first()->id,
                'photo'       => 'agata_glowacka.jpg',
                'position'    => 'Rehabilitant',
                'education'   => ['WSP Kraków'],
                'skills'      => [],
                'courses'     => [],
                'description' => 'Mgr Oligofrenopedagog, absolwentka Pedagogiki Specjalnej (Uniwersytet Pedagogiczny w Krakowie), oraz Terapii Pedagogicznej z Rewalidacją Indywidualną. Wieloletni Instruktor ZHR, Terapeuta Integracji Sensorycznej I stopnia i II stopień prowadzony przez Dr Zoe Mailloux z międzynarodowym certyfikatem Stowarzyszenia Terapii Zajeciowej. Członek Zespołu działającego na rzecz osób niepełnosprawnych „Ku pełni życia”. Członek Harcerskiego Ochotnicznego Pogotowia Ratunkowego. Jako pedagog w przedszkolu i szkole integracyjnej posiada wieloletnie doświadczenie w pracy z dziećmi z zaburzeniami rozwoju. Terapeuta metody HANDLA I, II stopień.
    W swojej pracy, łączy metodę integracji sensorycznej i niedyrektywną metodę GPS– „Odmieniając Codzienne Chwile” – program metod wspierania wczesnych umiejętności społeczno-komunikacyjnych dziecka ze spektrum autyzmu przez zabawę. Doskonali się w nowoczesnych technikach pracy z dziećmi z trudnościami w szkole integracyjnej: „Nowe technologie w nauczaniu współczesnego ucznia”, „Picture Exchange Communication System – Poziom I”, „Być dobrym wychowawcą”, „Uczniowie uzdolnieni- rola szkoły w rozwoju i wspieraniu ich możliwości twórczych”, Szkolenie z zakresu stymulacji wzrokowej dziecka w okresie przedszkolnym i wczesnoszkolnym, „Metody arteterapii w pracy z dziećmi”, „Dziecko z cukrzycą w placówce oświatowej”,„ Kształtowanie gotowości do nauki czytania”, „Dziecko z zaburzeniami zachowań w grupie przedszkolnej- propozycje wspierające rodzica i nauczyciela”, „Diagnozy i terapii stymulacyjnej metodą Carla Delacato”, „Diagnoza funkcjonalna dzieci ze spektrum autyzmu”, „Diagnozy i terapii funkcji wzokowych IMPULS SYSTEM w trudnościach w czytaniu”, „Analiza rysunku dziecka”, „Kurs doskonalący I stopnia z zakresu Biblioterapii”, „Kurs wychowawców kolonijnych”, „Podstawowy Kurs Ratownictwa Przedmedycznego Harcerskiego Ochotniczego Pogotowia Ratunkowego”, „Kurs Pierwszej Pomocy Przedmedycznej z Elementami Medycyny Ratunkowej”.',
            ],
            [
                'id'     => User::where('login', 'kasia.glowacka')->first()->id,
                'photo'       => 'kasia_glowacka.jpg',
                'position'    => 'Rehabilitant',
                'education'   => ['WSP Kraków'],
                'skills'      => [],
                'courses'     => [],
                'description' => 'Mgr pedagogiki przedszkolnej i wczesnoszkolnej Uniwersytetu Pedagogicznego. Terapeuta Integracji Sensorycznej II stopnia (2 letnie studium podyplomowe w Warszawie) oraz metody HANDLE Ii II stopnia. Zawodowo nauczyciel klas I-III w szkole integracyjnej. Pracuje z dziećmi dyslektycznymi i przeżywającymi niepowodzenia szkolne. Specjalizuje się w diagnozie i wyrównywaniu deficytów edukacyjnych u dzieci szkolnych. Ukończyła studia podyplomowe z informatyki (oraz dodatkowe kursy przygotowujące do pracy z wykorzystaniem komputera w klasach I-III). Posiada kurs kwalifikacyjny z terapii pedagogicznej. Terapeuta szkolnego programu odruchów według metody dr Sally Goddard. Przez lata prowadziła gromadę zuchową, Instruktor ZHR, Członek Harcerskiego Ochotniczego Pogotowia Ratunkowegowięc w pracy wykorzystuje zasadę nauki przez zabawę. Propagator Kinezjologi Edukacyjnej Dennisona st. I i II.',
            ]
        ];

        foreach( $teachersData as $teacher ) {
            App\Models\Teacher::create($teacher);
        }
    }
}
