<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('teachers')->insert([
            [
            'name'        => 'Agnieszka',
            'surname'     => 'Janiec',
            'photo'       => 'agnieszka_janiec.jpg',
            'email'       => 'agnieszka_janiec@gmail.com',
            'education'   => 'WSP Kraków',
            'description' => 'Mgr pedagogiki specjalnej Uniwersytetu Pedagogicznego o specjalności oligofrenopedagog, nauczyciel dyplomowany, logopeda (Uniwersytet Pedagogiczny Kraków), neurologopeda (Uniwersytet Wrocławski), terapeuta Integracji Sensorycznej. Aktualnie w trakcie studium szkoły trenerów i certyfikowanej specjalizacji CRAFTA® (Akademia Terapii Czaszkowo-Żuchwowej). Terapeuta słuchowej metody Warnknego. Dziesięć lat doświadczenia zawodowego jako pedagog specjalny w grupie integracyjnej w Samorządowym Przedszkolu Integracyjnym Nr 28 w Krakowie. Inicjatorka i współtwórca licznych szkoleń oraz sześciu edycji Krakowskiej Konferencji Nauczyciele-Nauczycielom. Do 2012 roku neurologopeda w Samorządowym Przedszkolu Integracyjnym Nr 32 w Krakowie. Twórca konferencji „Dobra terapia –Podaj dalej” Od 2003 roku Redaktorka działu: Notatnik Nauczyciela Wspomagającego w miesięczniku „Bliżej przedszkola”. Współpracuje z PT ADHD w ramach akcji ADHD ŚWIAT TO ZA MAŁO. Wykładowca i uczestnik ogólnopolskich konferencji dotyczących wieloaspektowego wsparcia dziecka z zaburzeniem rozwoju. Współautorka następujących książek: „Jacy Jesteśmy — program do pracy w grupach integracyjnych”, „Opanować chaos- poradnik dla rodziców dzieciz ADHD”, „Sen Małego Czarodzieja — poradnik i książka pracy dla dzieci z zaburzeniami koncentracji i nie tylko”, „Przyjaciele Małego Czarodzieja — diagnoza i terapia dziecka z ADHD w grupach przedszkolnych” oraz „Mały Przewodnik po ADHD” ze „Specjalnym Kalendarzem ADHD 2011”. Propagatorka komunikacji NVC- „Porozumienia bez przemocy”. Prywatnie mama Uli i Grzesia.',
            ],
            [
            'name'        => 'Aleksandra',
            'surname'     => 'Łanoszka',
            'photo'       => 'ola_lanoszka.jpg',
            'email'       => 'ola_lanoszka@gmail.com',
            'education'   => 'WSP Kraków',
            'description' => 'Mgr fizjoterapii Collegium Medicum Uniwersytetu Jagiellońskiego w Krakowie. Od czasu ukończenia studiów pogłębiała swoją wiedzę na specjalistycznych kursach: PNF, NDT-Bobath, Kinesio Taping Association International KT1 I KT2 oraz Reha Plus Edukacja, metoda SET, NDT-Bobath Baby, Neurac1 a także masaż Shantala. Aktualnie jest specjalistą zajmującym się doborem do potrzeb dzieci sprzętu rehabilitacyjnego Theratogs. Oraz zdobywa uprawnienia trenerskie metody Shantala. W swojej pracy łączy metodę HANDLA ( I i II stopień) i terapię biomedyczną. Ściśle współpracuje z rodzicami dzieci objętych opieką fizjoterapeutyczną w gabinecie. Aktywnie uczestniczyła jako wolontariusz w zabawie z dziećmi upośledzonymi ruchowo w fundacji „Zawsze Wierni 4 Łapy” w zakresie dogoterapii, Od 2006 roku pracowała w Szpitalu Dziecięcym im. Św. Ludwika w Krakowie a następnie od 2011 w Polskim Centrum Rehabilitacji Funkcjonalnej „Votum RehaPlus” w zakresie problemów neurologicznych, wcześniactwa, opóźnienia psychoruchowego i innych poważnych trudności rozwojowych dzieci. Mama Oli i Tomasza.',
            ],
            [
            'name'        => 'Agata',
            'surname'     => 'Głowacka',
            'photo'       => 'agata_glowacka.jpg',
            'email'       => 'agata_glowacka@gmail.com',
            'education'   => 'WSP Kraków',
            'description' => 'Mgr Oligofrenopedagog, absolwentka Pedagogiki Specjalnej (Uniwersytet Pedagogiczny w Krakowie), oraz Terapii Pedagogicznej z Rewalidacją Indywidualną. Wieloletni Instruktor ZHR, Terapeuta Integracji Sensorycznej I stopnia i II stopień prowadzony przez Dr Zoe Mailloux z międzynarodowym certyfikatem Stowarzyszenia Terapii Zajeciowej. Członek Zespołu działającego na rzecz osób niepełnosprawnych „Ku pełni życia”. Członek Harcerskiego Ochotnicznego Pogotowia Ratunkowego. Jako pedagog w przedszkolu i szkole integracyjnej posiada wieloletnie doświadczenie w pracy z dziećmi z zaburzeniami rozwoju. Terapeuta metody HANDLA I, II stopień.
W swojej pracy, łączy metodę integracji sensorycznej i niedyrektywną metodę GPS– „Odmieniając Codzienne Chwile” – program metod wspierania wczesnych umiejętności społeczno-komunikacyjnych dziecka ze spektrum autyzmu przez zabawę. Doskonali się w nowoczesnych technikach pracy z dziećmi z trudnościami w szkole integracyjnej: „Nowe technologie w nauczaniu współczesnego ucznia”, „Picture Exchange Communication System – Poziom I”, „Być dobrym wychowawcą”, „Uczniowie uzdolnieni- rola szkoły w rozwoju i wspieraniu ich możliwości twórczych”, Szkolenie z zakresu stymulacji wzrokowej dziecka w okresie przedszkolnym i wczesnoszkolnym, „Metody arteterapii w pracy z dziećmi”, „Dziecko z cukrzycą w placówce oświatowej”,„ Kształtowanie gotowości do nauki czytania”, „Dziecko z zaburzeniami zachowań w grupie przedszkolnej- propozycje wspierające rodzica i nauczyciela”, „Diagnozy i terapii stymulacyjnej metodą Carla Delacato”, „Diagnoza funkcjonalna dzieci ze spektrum autyzmu”, „Diagnozy i terapii funkcji wzokowych IMPULS SYSTEM w trudnościach w czytaniu”, „Analiza rysunku dziecka”, „Kurs doskonalący I stopnia z zakresu Biblioterapii”, „Kurs wychowawców kolonijnych”, „Podstawowy Kurs Ratownictwa Przedmedycznego Harcerskiego Ochotniczego Pogotowia Ratunkowego”, „Kurs Pierwszej Pomocy Przedmedycznej z Elementami Medycyny Ratunkowej”.',
            ],
            [
            'name'        => 'Katarzyna',
            'surname'     => 'Głowacka',
            'photo'       => 'kasia_glowacka.jpg',
            'email'       => 'kasia_glowacka@gmail.com',
            'education'   => 'WSP Kraków',
            'description' => 'Mgr pedagogiki przedszkolnej i wczesnoszkolnej Uniwersytetu Pedagogicznego. Terapeuta Integracji Sensorycznej II stopnia (2 letnie studium podyplomowe w Warszawie) oraz metody HANDLE Ii II stopnia. Zawodowo nauczyciel klas I-III w szkole integracyjnej. Pracuje z dziećmi dyslektycznymi i przeżywającymi niepowodzenia szkolne. Specjalizuje się w diagnozie i wyrównywaniu deficytów edukacyjnych u dzieci szkolnych. Ukończyła studia podyplomowe z informatyki (oraz dodatkowe kursy przygotowujące do pracy z wykorzystaniem komputera w klasach I-III). Posiada kurs kwalifikacyjny z terapii pedagogicznej. Terapeuta szkolnego programu odruchów według metody dr Sally Goddard. Przez lata prowadziła gromadę zuchową, Instruktor ZHR, Członek Harcerskiego Ochotniczego Pogotowia Ratunkowegowięc w pracy wykorzystuje zasadę nauki przez zabawę. Propagator Kinezjologi Edukacyjnej Dennisona st. I i II.',
            ]
        ]);



    }
}
