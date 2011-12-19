<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Enterprise Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-enterprise-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2008 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
/*********************************************************************************
 * pl_pl.lang.php,v for SugarCRM 4.5.1b 
 * Translator: Krzysztof Morawski
 * All Rights Reserved.
 * Any bugs report welcome: krzysiek<at>kmmgroup<dot>pl
 * Contributor(s): ______________________________________..
 ********************************************************************************/
$mod_strings = array(

	'LBL_SYSOPTS_1'						=> 'Wybierz jendą z możliwych opcji konfiguracji systemu, wymienionych poniżej.',
    'LBL_SYSOPTS_2'                     => 'Jaki typ bazy danych będzie używany dla tej instancji Sugar?',
	'LBL_SYSOPTS_CONFIG'				=> 'Konfiguracja systemu',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Określ typ bazy danych',
    'LBL_SYSOPTS_DB_TITLE'              => 'Typ bazy danych',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Popraw wymienione błędy, zanim przejdziesz dalej:',



	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Musisz mieć zainstalowanego i skonfigurowanego klienta Oracle, jeśli wybierzesz tę bazę.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'Wprowadzony login użytkownika, oraz hasło jest nieprawidłowe, dlatego nie można nawiązać połączenia z bazą danych. Wprowadź poprawne dane.',
	'ERR_DB_OCI8_CONNECT'				=> 'Wprowadzony login użytkownika, oraz hasło jest nieprawidłowe, dlatego nie można nawiązać połączenia z bazą danych. Wprowadź poprawne dane.',
	'ERR_DB_OCI8_VERSION'				=> 'Twoja wersja bazy Oracle nie jest wspierana przez Sugar.  Musisz użyć wersji, która jest kompatybilna z aplikacją Sugar. Sprawdż W Macierzy kompatybilnośći w Uwagach do wydania, które wersje bazy Oracle są wspierane.',
    'LBL_DBCONFIG_MSG1'                 => 'Wprowadź nazwę swojej bazy. Będzie to przestrzeń dla tabeli, które są przydzielone do Twojego użytkownika.',
	// seed Ent Reports
	'LBL_Q'								=> 'Zapytanie tematów ',
	'LBL_Q1_DESC'						=> 'Tematy po typie',
	'LBL_Q2_DESC'						=> 'Tematy po klientach',
	'LBL_R1'							=> '6 -cio miesięczny raport lejka sprzedaży',
	'LBL_R1_DESC'						=> 'Tematy za ostatnie 6 miesięcy podzielone przez miesiąc i typ',
	'LBL_OPP'							=> 'Zestaw danych tematu ',
	'LBL_OPP1_DESC'						=> 'Tutaj możesz zmienić wygląd własnych zapytań',
	'LBL_OPP2_DESC'						=> 'To zapytanie zostanie umieszczone zaraz za pierwszym zapytaniem w raporcie',




	'ERR_OC_PASSWORD'					=> 'Hasło jest wymagane.',
	'ERR_OC_SERVER_URL'					=> 'Wymagany jest adres URL serwera Sugar.',
	'ERR_OC_USERNAME'					=> 'Jest wymagana azwa użytkownika serwera.',
	'LBL_INSTALL_OC'					=> 'Zainstaluj klienta baz stałego dostępu',
    'LBL_OC_ADMIN'                      => 'Skontatkuj się z administratorem w celu rozwiązania problemu.',
    'LBL_OC_SUCCESS'                    => 'Instalacja klienta bez stałego dostępgu została zakończona. Kliknij przycisk poniżej w celu podłączenia do Twojej instalacji.',
	'LBL_OC_INSTALL_ADMIN_NAME'			=> 'Nazwa użytkownika- administratora',
	'LBL_OC_INSTAL_DIRECTIONS'			=> 'W celu prawidłowego zainstalowania klienta bez stałego dostępu, wprowadź szczegółowe dane poniżej.',
	'LBL_OC_INSTALL_SERVER_URL'			=> 'Adres URL serwera Sugar',
	'LBL_OC_INSTALL_PASS'				=> 'Hasło użytkownika dostępowego do serwera',
	'LBL_OC_INSTALL_TITLE'				=> 'Instalacja klienta bez stałego dostępu',
	'LBL_OC_INSTALL_USERNAME_DETAILS'	=> 'Za pomocą tego loginu będziesz łączył się z serwerem Sugar.',
	'LBL_OC_INSTALL_USERNAME'			=> 'Nazwa użytkownika',
	'LBL_PERFORM_OC_INSTALL'			=> 'Rozpoczynam instalację klienta bez stalego dostępu',
    'LBL_OC_INSTALL_DIRECTIONS'         => 'Wprowadź szczegóły poniżej w celu prawidłowej instalacji i synchronizacji Twojego klienta bez stałego dostępu.',


	'DEFAULT_CHARSET'					=> 'UTF-8',
	'ERR_ADMIN_PASS_BLANK'				=> 'Wprowadź hasło dla administratora Sugar. ',

    //'ERR_CHECKSYS_CALL_TIME'			=> 'Allow Call Time Pass Reference is Off (please enable in php.ini)',
    'ERR_CHECKSYS'                      => 'Wykryto błędy podczas testu kompatybilności. W celu zapewnienia prawidłowego działania Twojej instalacji SugarCRM, wykonaj sugestie rozwiązań problemów wymienionych poniżej, a następnie jeszcze raz sprawdź, klikając klawisz, lub przeprowadź instalację od początku.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Wyłącz funkcję Allow Call Time Pass Reference (znajdź odpowiedni wpis w php.ini)',
    'ERR_CHECKSYS_CURL'					=> 'Nie odnaleziono: Harmonogram Sugar będzie działał z ograniczoną funkcjonalnością.',
	'ERR_CHECKSYS_IMAP'					=> 'Nie odnaleziono: Poczta przychodząca i poczta kampanii wymaga biblioteki  IMAP. Inaczej nie będzie funkcjonować.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Funkcja Magic Quotes GPC nie może być ustawiona na "On", gdy używasz serwera bazy danych MS SQL.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Ostrzeżenie: ',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> ' (Ustaw to na ',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M lub więcej w Twoim pliku php.ini)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Minimalna wspierana wersja to 4.1.2 - Znaleziono: ',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Nie można zapisać i odczytać zmiennych sesji.  Nie można kontynuować instalacji.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Nieprawidłowy katalog',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Ostrzeżenie: Niezapisywalny',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Twoja wersja PHP nie jest wspierana przez Sugar.  Musisz zainstalować wersję, która jest kompatybilna z aplikacją. Sprawdź w macierzy kompatybilności w Uwagach do wydania, które z wersji PHP są wspierane. Twoja wersja to ',
	'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Zainstalowano niewspieraną wersje PHP: ( Wersja',
    'LBL_DB_UNAVAILABLE'                => 'Baza danych nieostępna',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Nie znaleziono wspieranej bazy danych.  Sprawdź, czy masz wszystkie niezbędne sterowniki jednej z następujących wspieranych typów baz danych: MySQL, MS SQLServer, lub Oracle.  Być może potrzebujesz odkomentować odpowiednie rozszerzenia w pliku php.ini, lub przekompilować odpowiedni plik binarny, zależnie od Twojej wersji PHP. Więcej informacji na temat wspierania baz danych przez PHP znajdziesz w instrukcji PHP.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Funkcje połączone z bibliotekami parsera XML, które są wymagane przez aplikacje Sugar, nie zostały odnalexione. Być może musisz odkomentować rozserzenia w pliku php.ini, lub przekompilować z odpowiednimi plikami binarnymi, zależnie od Twojej wersji PHP. Sprawdź w manualu PHP, aby zasięgnąć więcej informacji.',
    'ERR_CHECKSYS_MBSTRING'             => 'Funkcje połączone z rozszerzeniem PHP Multibyte Strings (mbstring), które są wymagane przez aplikację Sugar, nie zostały znalezione. <br/><br/>Generalnie moduł mbstring nie jest domyślnie włączony w PHP i musi zostać aktywowany poprzez dodanie opcji --enable-mbstring, podczas budowania i kompilacji PHP. Sprawdź w manualu PHP, aby zasięgnąć więcej informacji, jak należy włączyć wspieranie tej funkcji w PHP.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'Opcja session.save_path w twoim pliku konfiguracji PHP (php.ini) nie jest zdefiniowana, lub wskazuje na folder, który nie istnieje. Być może wystarczy jedynie ustawić parametr dla opcji save_path setting w pliku php.ini, lub sprawdzić, czy ustawiony w niej folder istnieje w systemie.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'Opcja session.save_path w twoim pliku konfiguracji PHP (php.ini) wskazuje na folder, dla którego nie są ustawione prawa do zapisu. Wykonaj niezbędne kroki, w celu zapewnienia zapisu w tym folderze.  <br>Zależnie od Twojego systemu operacyjnego, może to wymagać zmian praw dostępu poprzez wykonanie komendy <b>chmod 766</b>, lub kliknięcia prawym klawiszem na nazwie pliku, wejścia w zakładkę z prawami dostępu i odznaczenia opcji <b>Tylko do odczytu</b>.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'Plik config istnieje, ale nie posiada praw do zapisu. Wykonaj niezbędne kroki, w celu zapewnienia zapisu w tym folderze. <br>Zależnie od Twojego systemu operacyjnego, może to wymagać zmian praw dostępu poprzez wykonanie komendy <b>chmod 766</b>, lub kliknięcia prawym klawiszem na nazwie pliku, wejścia w zakładkę z prawami dostępu i odznaczenia opcji <b>Tylko do odczytu</b>.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'Katalog dla własnych pól istnieje, ale nie posiada praw do zapisu. Wykonaj niezbędne kroki, w celu zapewnienia zapisu w tym folderze.  <br>Zależnie od Twojego systemu operacyjnego, może to wymagać zmian praw dostępu poprzez wykonanie komendy <b>chmod 766</b>, lub kliknięcia prawym klawiszem na nazwie pliku, wejścia w zakładkę z prawami dostępu i odznaczenia opcji <b>Tylko do odczytu</b>.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => 'Wymienione poniżej pliki i foldery nie posiadają praw do zapisu. Zależnie od Twojego systemu operacyjnego, może to wymagać zmian praw dostępu poprzez wykonanie komendy <b>chmod 766</b>, lub kliknięcia prawym klawiszem na nazwie pliku, lub katalogu, wejścia w zakładkę z prawami dostępu i odznaczenia opcji <b>Tylko do odczytu</b>, dla wszystkich plików i katalogów umieszczonych głębiej.',
	//'ERR_CHECKSYS_SAFE_MODE'			=> 'Opcja Safe Mode jest włączona (wyłącz ją w php.ini)',
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Opcja Safe Mode jest włączona (wyłącz ją w php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'Nie odnaleziono: SugarCRM osiąga ogromne zyski w wydajności, gdy korzysta z kompresji zlib.',
	'ERR_DB_ADMIN'						=> 'Wprowadzony login lub hasło administratora serwera bazy danych są niepoprawne i połączenie z bazą nie może zostać nawiązane. Wprowadź prawidłowe dane.  (Błąd: ',
    'ERR_DB_ADMIN_MSSQL'                => 'Wprowadzony login lub hasło administratora bazy danych są niepoprawne i połączenie z bazą nie może zostać nawiązane. Wprowadź prawidłowe dane.',
	'ERR_DB_EXISTS_NOT'					=> 'Określona baza danych nie istnieje.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'Baza danych już istnieje i zawiera dane konfiguracyjne. Aby zainstalować aplikację w wybranej bazie danych, cofnij się do kroku instalacji bazy i wybierz opcję: "Czy usunąć istniejącą bazę danych, wraz z tabelami?"  Aby uaktualnić, użyj Kreatora aktualizacji w konsoli administratora.  Przeczytaj dokumentację aktualizacji umieszczoną <a href="http://www.sugarforge.org/content/downloads/" target="_new">tutaj</a>.',
	'ERR_DB_EXISTS'						=> 'Wybrana nazwa bazy danych już istnieje - nie można utworzyć następnej bazy o tej samej nazwie.',
    'ERR_DB_EXISTS_PROCEED'             => 'Wybrana nazwa bazy danych już istnieje.  Możesz<br>1. Kliknąć klawisz <b>Z powrotem</b> i wybrać inną nazwę dla bazy <br>2. Kliknąć <b>Dalej</> i kontynuować, ale wtedy wszystkie istniejące tabele w tej bazie zostaną usunięte.  <strong>To oznacza, że wszystkie tabele i dane zostaną bezpowrotnie usunięte.</strong>',
	'ERR_DB_HOSTNAME'					=> 'Pole nazwy hosta nie może być puste.',
	'ERR_DB_INVALID'					=> 'Wybrano nieprawidłowy typ bazy danych.',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'Wprowadzony login lub hasło administratora serwera bazy danych są niepoprawne i połączenie z bazą nie może zostać nawiązane. Wprowadź prawidłowe dane.',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'Wprowadzony login lub hasło administratora serwera bazy danych są niepoprawne i połączenie z bazą nie może zostać nawiązane. Wprowadź prawidłowe dane.',
	'ERR_DB_MYSQL_VERSION1'				=> 'Twoja wersja MySQL  (',
	'ERR_DB_MYSQL_VERSION2'				=> ') nie jest wspierana przez aplikację Sugar. Musisz zainstalować wersję, która jest kompatybilna z aplikacją.  Sprawdź w macierzy komptatybilności w dokumencie Uwagi do wydania, które wersje MySQL są wspierane.',
	'ERR_DB_NAME'						=> 'Pole nazwy bazy danych nie może być puste.',
	'ERR_DB_NAME2'						=> "Nazwa bazy danych nie może zawierać znaków '\\', '/', lub '.'",
	'ERR_DB_PASSWORD'					=> 'Hasła wprowadzone jako hasła administratora serwera bazy danych aplikacji nie pasują. Wprowadź ponownie takie same hasła w obu polach.',
	'ERR_DB_PRIV_USER'					=> 'wprowadź nazwę użytkownika - administratora bazy danych. Ta nazwa jest wymagana do zainicjowania połączenia z bazą.',
	'ERR_DB_USER_EXISTS'				=> 'Wprowadzona nazwa użytkownika dla bazy danych Sugar już istnieje. Nie można utworzyć nowego użytkownika o tej samej nazwie. Wprowadź inną.',
	'ERR_DB_USER'						=> 'Wprowadź nazwę użytkownika - administratora bazy danych Sugar.',
	'ERR_DBCONF_VALIDATION'				=> 'Popraw następujące błędy przed kontynuacją:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Hasła, wprowadzone jako hasła dla użytkownika posiadającego dostęp do bazy danych nie pasują do siebie. Wprowadź takie same hasła w obu polach.',
	'ERR_ERROR_GENERAL'					=> 'Pojawiły się następujące błędy:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Nie można usunąć pliku: ',
	'ERR_LANG_MISSING_FILE'				=> 'Nie można odnaleźć pliku: ',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'Nie odnaleziono pliku językowego w katalogu include/language w pakiecie językowym: ',
	'ERR_LANG_UPLOAD_1'					=> 'Pojawił się problem z załadowaniem Twojego pliku. Spróbuj ponownie.',
	'ERR_LANG_UPLOAD_2'					=> 'Pakiet językowy musi mieć postać archiwum zip.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP nie może przenieść pliku tymczasowego do katalogu aktualizacji.',
	'ERR_LICENSE_MISSING'				=> 'Pominięto wymagane pola',
	'ERR_LICENSE_NOT_FOUND'				=> 'Nie odnaleziono pliku licenji!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Katalog wybrany na katalogu dziennika nie jest prawidłowy.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'Katalog wybrany na katalogu dziennika nie posiada praw do zapisu.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Katalog dziennika jest wymagany. Jeśli chcesz możesz określić własny katalog.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Nie można wykonać skryptu bezpośrednio.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Nie można użyć pojednyczego znaku cudzysłowu dla ',
	'ERR_PASSWORD_MISMATCH'				=> 'Hasła wprowadzone dla administratowa aplikacji Sugar nie pasują. Wprowadź takie same hasła w obu polach.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Nie można zapisać do pliku <span class=stop>config.php</span> .',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Możesz kontynuować instalację, tworząc ręcznie plik config.php i wklejając do niego informacje konfiguracyjne wyświetlone poniżej. Jakkolwiek <strong>musisz </strong>utworzyć plik config.php, zanim przejdziesz do następnego kroku.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Czy pamiętałeś, aby utworzyć plik config.php?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Uwaga: Nie można zapisywać do pliku config.php. Upewnij się, że istnieje.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Nie można zapisywać do  ',
	'ERR_PERFORM_HTACCESS_2'			=> ' pliku.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Jeśli chcesz zabezpieczyć swój plik dziennika przed dostępem za pomocą przeglądarki, utwórz plik .htaccess z następującym wpisem w Twoim katalogu dziennika:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>Nie wykryto połączenia internetowego.</b> Jeśli uzyskasz połączenie, odwiedź <a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a>, aby zarejestrować swoją kopię SugarCRM. Przesyłając nam nieco wiadomości o tym, jak Twoja firma zamierza wykorzystać aplikację SugarCRM, możemy upewnić się co do tego, że dostarczamy dostosowaną do potrzeb biznesu aplikację.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Określony dla danych sesji katalog nie jest prawdiłowy.',
	'ERR_SESSION_DIRECTORY'				=> 'Określony dla danych sesji katalog nie posiada praw do zapisu.',
	'ERR_SESSION_PATH'					=> 'Katalog danych sesji jest wymagany. Jeśli chcesz - możesz określić własny katalog.',
	'ERR_SI_NO_CONFIG'					=> 'W swoim katalogu głównym nie posiadasz pliku config_si.php, lub nie zdefiniowałeś zmiennej $sugar_config_si w pliku config.php',
	'ERR_SITE_GUID'						=> 'ID aplikacji jest wymagane. Jeśli chcesz, możesz wprowadzić własne.',
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Uwaga: Twoja konfiguracja PHP powinna zostać zmieniona tak, aby zapewnić załadowanie plików o wielkości co najmniej 6MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Wielkość plików możliwych do załadowania',
	'ERR_URL_BLANK'						=> 'Wprowadź podstawowy adres URL dla tej instancji Sugar.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Nie można zlokalizować rekordu instalacyjnego ',
	'ERROR_FLAVOR_INCOMPATIBLE'			=> 'Ładowany plik nie jest kompatybilny z tą wersją aplikacji Sugar (Community Edition, Professional, lub Enterprise): ',
	'ERROR_LICENSE_EXPIRED'				=> "Błąd: Twoja licencja wygasła ",
	'ERROR_LICENSE_EXPIRED2'			=> " dni temu. Wejdź na stronę <a href='index.php?action=LicenseSettings&module=Administration'>'\"zarządzanie licencją\"</a>  w panelu administracyjnym i wprowadź nowy klucz licencyjny.  Jeśli nie wprowadzisz nowego klucza w ciągu 30 dni od wygaśnięcia poprzedniego, nie będziesz miał możliwości zalogowania się do aplikacji.",
	'ERROR_MANIFEST_TYPE'				=> 'Plik Manifest musi określać typ pakietu.',
	'ERROR_PACKAGE_TYPE'				=> 'Plik Manifest określa nieznany typ pakietu',
	'ERROR_VALIDATION_EXPIRED'			=> "Błąd: Twój klucz legalizacyjny wygasł ",
	'ERROR_VALIDATION_EXPIRED2'			=> " dni temu. Wejdź na stronę <a href='index.php?action=LicenseSettings&module=Administration'>'\"Zarządzanie licencją\"</a> w panelu administracyjnym i wprowadź nowy klucz legalizacyjny.  Jeśli nie wprowadzisz nowego klucza w ciągu 30 dni od wygaśnięcia poprzedniego, nie będziesz miał możliwości zalogowania się do aplikacji.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'Ładowany plik nie jest kompatybilny z tą wersją Sugar: ',

	'LBL_BACK'							=> 'Z powrotem',
    'LBL_CANCEL'                        => 'Skasuj',
    'LBL_ACCEPT'                        => 'Akceptuję',
	'LBL_CHECKSYS_1'					=> 'W celu prawidłowego funkcjonowania Twojej instalacji SugarCRM, upewnij się, że wszystkie punkty poniżej są oznaczone na zielono. Jeśli któryś z nich oznaczony jest na czerwono, podejmij niezbędne kroki, w celu naprawienia.<BR><BR> W razie potrzeby uzyskania informacji, w jaki sposób dokonać poprawek, wejdź na <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.',
	'LBL_CHECKSYS_CACHE'				=> 'Zapisywalne podkatalogi dla plików podręcznych',
	//'LBL_CHECKSYS_CALL_TIME'			=> 'PHP Allow Call Time Pass Reference Turned On',
    'LBL_DROP_DB_CONFIRM'               => 'Wybrana nazwa bazy danych już istnieje.  Możesz<br>1. kliknąć klawisz <b>Skasuj</b> i wybrać inną nazwę dla bazy <br>2. kliknąć dalej i kontynuować, ale wtedy wszystkie istniejące tabele w tej bazie zostaną usunięte.  <strong>To oznacza, że wszystkie tabele i dane zostaną bezpowrotnie usunięte.</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'Funkcja PHP Allow Call Time Pass Reference jest wyłączona',
    'LBL_CHECKSYS_COMPONENT'			=> 'Komponent',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Komponenty opcjonalne',
	'LBL_CHECKSYS_CONFIG'				=> 'Zapisywalny pliki konfiguracyjny SugarCRM (config.php)',
	'LBL_CHECKSYS_CURL'					=> 'Moduł cURL ',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Ustawienia zapisu ścieżki sesji',
	'LBL_CHECKSYS_CUSTOM'				=> 'Zapisywalne własne katalogi',
	'LBL_CHECKSYS_DATA'					=> 'Zapisywalne podkatalogi danych',
	'LBL_CHECKSYS_IMAP'					=> 'Moduł IMAP',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'Moduł MB Strings',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (bez limitu)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (Nielimitowany)',
	'LBL_CHECKSYS_MEM'					=> 'Limit pamięci PHP (Memory Limit) >= ',
	'LBL_CHECKSYS_MODULE'				=> 'Zapisywalne podkatalogi i pliki modułów',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'Wersja MySQL',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Niedostępne',
	'LBL_CHECKSYS_OK'					=> 'OK',
	'LBL_CHECKSYS_PHP_INI'				=> '<b>Wskazówka:</b> Twój plik konfiguracyjny (php.ini) jest umieszczony w:',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK (wersja ',
	'LBL_CHECKSYS_PHPVER'				=> 'Wersja PHP',
	'LBL_CHECKSYS_RECHECK'				=> 'Sprawdź ponownie',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'Tryb bezpieczny PHP jest wyłączony (PHP Safe Mode)',
	'LBL_CHECKSYS_SESSION'				=> 'Ścieżka zapisu sesji jest zapisywalna (',
	'LBL_CHECKSYS_STATUS'				=> 'Status',
	'LBL_CHECKSYS_TITLE'				=> 'Akceptacja sprawdzania systemu',
	'LBL_CHECKSYS_VER'					=> 'Znaleziono: ( ver ',
	'LBL_CHECKSYS_XML'					=> 'Parsowanie XML',
	'LBL_CHECKSYS_ZLIB'					=> 'Moduł kompresji ZLIB',
    'LBL_CHECKSYS_FIX_FILES'            => 'Napraw następujące błędy plików i katalogów przed kontynuacją:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Napraw następujące katalogi modułów i podrzędne pliki przed kontynuacją:',
    'LBL_CLOSE'							=> 'Zamknij',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'		=> 'zostało utworzone',
	'LBL_CONFIRM_DB_TYPE'				=> 'Typ bazy danych',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Potwierdź poniższe ustawienia. Jeśli chcesz zmienić jakieś wartości kliknij <b>Z powrotem</b> w celu edycji. Możesz kliknąć <b>Dalej</b>, aby rozpocząć instalację.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Informacje o licencji',
	'LBL_CONFIRM_NOT'					=> 'nie ',
	'LBL_CONFIRM_TITLE'					=> 'Potwierdź ustawienia',
	'LBL_CONFIRM_WILL'					=> 'będzie',
	'LBL_DBCONF_CREATE_DB'				=> 'Utwórz bazę danych',
	'LBL_DBCONF_CREATE_USER'			=> 'Utwórz użytkownika',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Uwaga: Wszystkie dane w Sugar zostaną wyczyszczone,<br> jeśli to pole zostanie zaznaczone.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Czy usunąć i utworzyć od nowa istniejące tabele Sugar?',
    'LBL_DBCONF_DB_DROP'                => 'Usuń tabele',
	'LBL_DBCONF_DB_NAME'			=> 'Nazwa bazy danych',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Hasło użytkownika bazy danych Sugar',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Powtórz hasło użytkownika bazy danych Sugar',
	'LBL_DBCONF_DB_USER'				=> 'Nazwa użytkownika bazy danych Sugar',
    'LBL_DBCONF_SUGAR_DB_USER'    => 'Nazwa użytkownika bazy danych Sugar',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Nazwa użytkownika - administratora serwera bazy danych',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Hasło użytkownika - administratora serwera bazy danych',
	'LBL_DBCONF_DEMO_DATA'				=> 'Czy wypełnić bazę danych przykładowymi danymi?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Wybierz dane demonstracyjne',
	'LBL_DBCONF_HOST_NAME'				=> 'Nazwa komputera - hosta',
    'LBL_DBCONF_HOST_NAME_MSSQL'        => 'Nazwa komputera - hosta \ Instancji na komputerze',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Wprowadź Twoje dane konfiguracyjne poniżej. Jeśli nie jesteś pewien, co powinienś wpisać, sugerujemy użycie wartości domyślnych.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Czy użyć tekstu multi-byte text w danych demonstracyjnych?',
    'LBL_DBCONFIG_MSG2'                 => 'Nazwa serwera stron, lub maszyny (hosta), na którym umieszczona jest baza danych:',
    'LBL_DBCONFIG_MSG3'                 => 'Nazwa bazy danych, która będzie zawierać dane Twojej instancji Sugar, którą zamierzasz zainstalować:',
    'LBL_DBCONFIG_B_MSG1'               => 'Wprowadzenie hasła i nazwy użytkownika - administratora bazy danych, który może tworzyć nowe bazy i tabele i użytkowników z prawem zapisu do tabel, jest niezbędne w celu utworzenia bazy danych aplikacji Sugar.',
    'LBL_DBCONFIG_SECURITY'             => 'Z powodów bezpieczeństwa, możesz wyznaczyć jednego użytkownika uprawnionego do połączen z bazą danych Sugar.  Ten użytkownik musi mieć prawa do zapisu, uaktualniania danych, oraz odczytu danych z konkrentej bazy, która zostanie utworzona dla tej instancji.  Użytkownik ten może być administratorem bazy określonym powyżej, możesz utworzyć nowego, lub wybrać jednego z już istniejących.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Zrób to dla mnie',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Użyj istniejącego użytkownika',
    'LBL_DBCONFIG_CREATE_DD'            => 'Określ użytkownika do utworzenia',
    'LBL_DBCONFIG_SAME_DD'              => 'Taki sam, jak użytkownik - administrator',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_MSSQL_FTS'                     => 'Wyszukiwanie pełnotekstowe',
    'LBL_MSSQL_FTS_INSTALLED'           => 'Zainstalowano',
    'LBL_MSSQL_FTS_INSTALLED_ERR1'      => 'Funkcja wyszukiwania pełnotekstowego nie jest zainstalowana.',
    'LBL_MSSQL_FTS_INSTALLED_ERR2'      => 'Możesz instalować dalej, ale nie będziesz mógł używać funkcji wyszukiwania pełnotekstowego, dopóki nie zainstalujesz ponownie serwera SQL z włączoną tą funkcją.  Sprawdź w instrukcji instalacji serwera SQL, jak należy to zrobić, lub skontaktuj się z administratorem.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Hasło użytkownika z uprawnieniami dostępu do bazy',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Czy konto powyżej jest kontem użytkownika z uprawnienami dostępu do bazy?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'To konto użytkownika z uprawnieniami musi mieć właściwe prawa dostępu, aby utworzyć bazę, mieć możliwość tworzenia i usuwania baz, oraz tworzyć użytkowników. To konto będzie używane tylko do przeprowadzenia zadań, jakie są niezbędne do wykonania podczas instalacji. Możesz także użyć użytkownika bazy danych, jak powyżej, jeśli ma on wystarczające uprawnienia.',
	'LBL_DBCONF_PRIV_USER'				=> 'Nazwa użytkownika z uprawnieniami dostępu do bazy',
	'LBL_DBCONF_TITLE'					=> 'Konfiguracja bazy danych',
    'LBL_DBCONF_TITLE_NAME'             => 'Wprowadź nazwę dla bazy danych',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Wprowadź informacje o użytkowniku bazy danych',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Po zmianach, które zostały wprowadzone, możesz kliknąć przycisk <b>Start</b>, umieszczony poniżej, aby rozpocząć instalację. <i>Po zakończenu instalacji, możesz zmienić wartość zmiennej \'installer_locked\' na \'true\'.</i>',
	'LBL_DISABLED_DESCRIPTION'			=> 'Instalator został już raz uruchomiony. Z powodów bezpieczeństwa, został wyłączony, aby nie został uruchomiony ponownie. Jeśli jesteś absolutnie pewnien, że chcesz uruchomić go ponownie, znajdź (lub dodaj) w pliku config.php zmienną \'installer_locked\' i ustaw ją na \'false\'. Ta linia pliku powinna wyglądać następująco:',
	'LBL_DISABLED_HELP_1'				=> 'Aby uzyskać pomoc podczas instalacji, odwiedź SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'forum wsparcia',
	'LBL_DISABLED_TITLE_2'				=> 'Instalacja SugarCRM została wyłączona',
	'LBL_DISABLED_TITLE'				=> 'Instalacja SugarCRM została wyłączona',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Zestaw znaków najczęściej używany w Twoich ustawieniach lokalnych',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Ustawienia dla poczty wychodzącej',
    'LBL_EMAIL_CHARSET_CONF'         => 'Zestaw znaków dla poczty wychodzącej ',
	'LBL_HELP'							=> 'Pomoc',
    'LBL_INSTALL'                       => 'Instaluj',
    'LBL_INSTALL_TYPE_TITLE'            => 'Opcje instalacji',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Wybierz typ instalacji',
    'LBL_INSTALL_TYPE_TYPICAL'          => ' <b>Typowa instlacja</b>',
    'LBL_INSTALL_TYPE_CUSTOM'         => ' <b>Instalacja niestandardowa</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'Klucz jest wymagany do ogólnego funkcjonowania aplikacji, ale nie jest niezbędny do instalacji. Nie musisz wprowadzać klucza w tym momencie, ale musisz wpisać ten klucz, zaraz po zainstalowaniu aplikacji.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Wymaga minimum informacji do instalacji. Zalecane dla nowych użytkowników.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Wprowadź dodatkowe opcje podczas instalacji. Większość tych opcji jest również dostępna po instalacji w panelu administracyjnym. Zalecane dla zaawansowanych użytkowników.',
	'LBL_LANG_1'				=> 'Aby używać innego języka, niż domyślny w aplikacji (US-English), możesz załadować i zainstalować pakiet językowy w tym momencie. Możesz również zainstalować pakiet językowy, za pomocą Ładowacza modułów po instalacji. Jeśli chcesz, możesz przeskoczyć ten krok, klikająć <b>Dalej</b>.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Zainstaluj',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Usuń',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Odinstaluj',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Załaduj',
	'LBL_LANG_NO_PACKS'					=> 'nic',
	'LBL_LANG_PACK_INSTALLED'			=> 'Następujące pakiety językowe zostały zainstalowane: ',
	'LBL_LANG_PACK_READY'				=> 'Następujące pakiety językowe są gotowe do instalacji: ',
	'LBL_LANG_SUCCESS'					=> 'Pakiet językowy został prawidłowo załadowany.',
	'LBL_LANG_TITLE'			   		=> 'Pakiet językowy',
	'LBL_LANG_UPLOAD'					=> 'Załaduj pakiet językowy',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Akceptacja licencji',
    'LBL_LICENSE_CHECKING'              => 'Sprawdzenie kompatybilności systemu.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Sprawdzanie środowiska',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Weryfikacja ustawień bazy danych.',
    'LBL_LICENSE_CHECK_PASSED'          => 'System przeszedł test kompatybilności.',
    'LBL_LICENSE_REDIRECT'              => 'Przekierowanie na ',
	'LBL_LICENSE_DIRECTIONS'			=> 'Jeśli masz swoje informacje licencyjne, wprowadź je w pola poniżej.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Wprowadź klucz pobierania',
	'LBL_LICENSE_EXPIRY'				=> 'data wygaśnięcia',
	'LBL_LICENSE_I_ACCEPT'				=> 'Akceptuję',
	'LBL_LICENSE_NUM_USERS'				=> 'Liczba użytkowników',
	'LBL_LICENSE_OC_DIRECTIONS'			=> 'Wprowadź liczbę zakupionych licencji dla klientów bez stałego dostępu.',
	'LBL_LICENSE_OC_NUM'				=> 'Liczba licencji klientów bez stałego dostępu',
	'LBL_LICENSE_OC'					=> 'Licencje klientów bez stałego dostępu',
	'LBL_LICENSE_PRINTABLE'				=> ' Podgląd wydruku ',
    'LBL_PRINT_SUMM'                    => 'Wydrukuj podsumowanie',
	'LBL_LICENSE_TITLE_2'			=> 'Licencja SugarCRM',
	'LBL_LICENSE_TITLE'					=> 'Informacje licencyjne',
	'LBL_LICENSE_USERS'					=> 'Użytkownicy licencjonowani',

	'LBL_LOCALE_CURRENCY'				=> 'Ustawienia waluty',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Domyślna waluta',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Symbol waluty',
	'LBL_LOCALE_CURR_ISO'				=> 'Kod waluty (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> 'Separator tysięcy',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Separator dziesiętny',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Przykład',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Liczba po przecinku',
	'LBL_LOCALE_DATEF'					=> 'Domyślny  format daty',
	'LBL_LOCALE_DESC'					=> 'Określone ustawienia lokalne będą zastosowane globalnie dla całej instancji Sugar.',
	'LBL_LOCALE_EXPORT'					=> 'Zestaw znaków dla importu/eksportu<br> <i>(Email, .csv, vCard, PDF, import danych)</i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Znak podziału w pliku (.csv)',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Ustawienia dla importu/eksportu',
	'LBL_LOCALE_LANG'					=> 'Domyślny język',
	'LBL_LOCALE_NAMEF'					=> 'Domyślny format imienia i nazwiska',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = pozdrowienie<br />f = imię<br />l = nazwisko',
	'LBL_LOCALE_NAME_FIRST'				=> 'Jan',
	'LBL_LOCALE_NAME_LAST'				=> 'Kowalski',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Domyślny format czasu',
	'LBL_LOCALE_TITLE'					=> 'Ustawienia lokalne',
    'LBL_CUSTOMIZE_LOCALE'              => 'Ustal własne ustawienia lokalne',
	'LBL_LOCALE_UI'						=> 'Interfejs użytkownika',

	'LBL_ML_ACTION'						=> 'Działanie',
	'LBL_ML_DESCRIPTION'				=> 'Opis',
	'LBL_ML_INSTALLED'					=> 'Data zainstalowania',
	'LBL_ML_NAME'						=> 'Nazwa',
	'LBL_ML_PUBLISHED'					=> 'Data publikacji',
	'LBL_ML_TYPE'						=> 'Typ',
	'LBL_ML_UNINSTALLABLE'				=> 'Nieodinstalowywalny',
	'LBL_ML_VERSION'					=> 'Wersja',
	'LBL_MSSQL'							=> 'Serwer SQL',
	'LBL_MSSQL2'                        => 'Serwer SQL (FreeTDS)',
	'LBL_MYSQL'							=> 'MySQL',
	'LBL_NEXT'							=> 'Następne',
	'LBL_NO'							=> 'Nie',
	'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Hasło administratora ustawień strony',
	'LBL_PERFORM_AUDIT_TABLE'		=> 'tabela kontrolna / ',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Tworzę plik konfiguracyjny Sugar',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>Tworzę bazę danych</b> ',
	'LBL_PERFORM_CREATE_DB_2'		=> ' <b>włączone</b> ',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Tworzę użytkownika i hasło bazy danych...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Tworzenie domyślnych danych Sugar',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Tworzenie hasło i użytkownika dostępowego do bazy danych na hoście...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Tworzenie tabeli zależności Sugar',
	'LBL_PERFORM_CREATING'				=> 'tworzenie / ',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Tworzenie domyślnych raportów',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Tworzenie domyślnych harmonogramów prac',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Wprowadzam domyślne ustawienia',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Tworzenie domyślnych użytkowników',
	'LBL_PERFORM_DEMO_DATA'				=> 'Wypełnianie tabel bazy danych danymi przykładowymi (to może zająć chwilę)',
	'LBL_PERFORM_DONE'					=> 'wykonano<br>',
	'LBL_PERFORM_DROPPING'				=> 'usuwanie / ',
	'LBL_PERFORM_FINISH'				=> 'Zakończono',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Uaktualnianie informacji o licencji',
	'LBL_PERFORM_OUTRO_1'				=> 'Program instalacyjny Sugar ',
	'LBL_PERFORM_OUTRO_2'				=> ' zakończył działanie!',
	'LBL_PERFORM_OUTRO_3'				=> 'Całkowity czas: ',
	'LBL_PERFORM_OUTRO_4'				=> ' sekund.',
	'LBL_PERFORM_OUTRO_5'				=> 'Średnie użycie pamięci: ',
	'LBL_PERFORM_OUTRO_6'				=> ' bajtów.',
	'LBL_PERFORM_OUTRO_7'				=> 'Twój system jest zainstalowany i skonfigurowany domyślnie.',
	'LBL_PERFORM_REL_META'				=> 'dane zależności ... ',
	'LBL_PERFORM_SUCCESS'				=> 'Sukces!',
	'LBL_PERFORM_TABLES'				=> 'Tworzenie tabeli aplikacji, tabel kontrolnych i danych zależności',
	'LBL_PERFORM_TITLE'					=> 'Przeprowadzam konfigurację',
	'LBL_PRINT'							=> 'Drukuj',
	'LBL_REG_CONF_1'					=> 'Wypełnij krótki formularz umieszczony poniżej, aby otrzymywać informacje o nowych produktach, nowych sesjach treningowych, ofertach specjalnych i zaproszeniach na specjalne wydarzenia od SugarCRM. Nie sprzedajemy, nie wynajmujemy, nie udostępniamy, lub w jakiejkolwiek innej formie nie dystrybuujemy informacji zdobytych tutaj firmom trzecim.',
	'LBL_REG_CONF_2'					=> 'Twoje imię, nazwisko i adres email są jedynymi polami wymaganymi podczas rejestracji. Wszystkie inne pola są nieobowiązkowe, ale pomocne. Nie sprzedajemy, nie wynajmujemy, nie udostępniamy, lub w jakiejkolwiek innej formie nie dystrybuujemy informacji zdobytych tutaj firmom trzecim.',
	'LBL_REG_CONF_3'					=> 'Dziękujemy za rejestrację. Kliknij na klawisz <b>Zakończ</b>, aby zalogować się do SugarCRM. Będziesz musiał użyć loginu admin, oraz hasła wprowadzonego w kroku drugim podczas pierwszego logowania.',
	'LBL_REG_TITLE'						=> 'Rejestracja',
    'LBL_REG_NO_THANKS'                 => 'Nie, dziękuję',
    'LBL_REG_SKIP_THIS_STEP'            => 'Przejdź do następnego kroku',
	'LBL_REQUIRED'						=> '* Pole wymagane',

    'LBL_SITECFG_ADMIN_Name'            => 'Nazwa administratora aplikacji Sugar',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Wprowadź ponownie hasło administratora aplikacji',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Uwaga: To nadpisze hasło administratora wprowadzone w czasie instalacji.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Hasło administratora Sugar',
	'LBL_SITECFG_APP_ID'				=> 'ID aplikacji',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Jeśli zaznaczone, musisz wprowadzić ID aplikacji aby nadpisać ID wygenerowane automatycznie.  ID powoduje, że sesje jednej instancji Sugar nie są używane przez inne.  Jeśli masz klaster instalacji Sugar, muszą one współdzielić to samo ID.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Wprowadź swoje własne ID aplikacji',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Jeśli zaznaczone, musisz określić katalog dla dziennika i nadpisać domyślną ścieżkę dla katalogu dziennika Sugar. Z uwagi na miejsce przechowywania pliku dziennika, dostęp do niego poprzez przeglądarkę będzie ograniczony za pomocą plików .htaccess.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Użyj własnego katalogu dziennika',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Jeśli zaznaczone, musisz określić zabezpieczony katalog dla przechowywania informacji o sesji Sugar. To może być zrobione, bardziej zabezpieczyć dane o sesji na serwerach współdzielonych.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Użyj własnego katalogu dla danych o sesji',
	'LBL_SITECFG_DIRECTIONS'			=> 'Wprowadź swoje informacje o konfiguracji strony poniżej. Jeśli nie jesteś pewien, co należy wpisać w polach, sugerujemy pozostawienie domyślnych wartości.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>Popraw następujące błędy przed kontynuacją:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'Katalog dziennika',
	'LBL_SITECFG_SESSION_PATH'			=> 'Ścieżka do katalogu sesji <br>(katalog musi być zapisywalny)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Wybierz opcje bezpieczeństwa',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Jeśli zaznaczone, system będzie okresowo sprawdzał, czy nie pojawiły się nowe wersje aplikacji.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Sprawdzać automatycznie czy są nowe wersje?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Konfiguracja uaktualnień Sugar',
	'LBL_SITECFG_TITLE'					=> 'Konfiguracja strony',
    'LBL_SITECFG_TITLE2'                => 'Znajdź swoją instancję Sugar',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Zabezpieczenia strony',
	'LBL_SITECFG_URL'					=> 'Adres URL instancji Sugar',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Użyć domyślnych?',
	'LBL_SITECFG_ANONSTATS'             => 'Czy wysyłać domyślne statystyki?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Jeśli zaznaczone, aplikacja Sugar będzie wysyłał <b>anonimowe</b> statystyki o Twojej instalacji do SugarCRM Inc., za każdym razem, kiedy system sprawdza czy są nowe wersje. Te informacje pomogą nam lepiej zrozumieć jak jest wykorzystywana aplikacja i pomoże wskazać nam kierunki rozwoju produktu.',
    'LBL_SITECFG_URL_MSG'               => 'Wprowadź adres URL, pod którym będzie można zalogować się do instancji Sugar po zakończeniu instalacji. Adres URL będzie również używany jako bazowy dla innnych adresów na stronach aplikacji. Adres URL powinien zawierać nazwę serwera stron , nazwę maszyny, lub adres IP.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Wprowadź nazwę dla Twojego systemu.  Będzie ona wyświetlona użytkownikom w przeglądarce na pasku tytułu, gdy będą zalogowani do aplikacji.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Po zakończeniu instalacji, będziesz musiał użyć danych administratora do zalogowania do aplikacji.  Wprowadź hasło dla tego użytkownika administratora. To hasło może zostać zmienione po pierwszym logowaniu.',
    'LBL_SYSTEM_CREDS'                  => 'Uwierzytelnianie systemu',
    'LBL_SYSTEM_ENV'                    => 'Środowisko systemu',
	'LBL_START'							=> 'Start',
    'LBL_SHOW_PASS'                     => 'Pokaż hasła',
    'LBL_HIDE_PASS'                     => 'Ukryj hasła',
    'LBL_HIDDEN'                        => '<i>(ukryte)</i>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>Wybierz swój język</b>',
	'LBL_STEP'							=> 'Krok',
	'LBL_TITLE_WELCOME'					=> 'Witamy w SugarCRM ',
	'LBL_WELCOME_1'						=> 'Ten instalator tworzy bazę danych, tabele i wprowadza zmienne konfiguracyjne, które są potrzebne do rozpoczęcia. Cały ten proces powinien zająć ok. 10 minut.',
	'LBL_WELCOME_2'						=> 'W celu uzyskania dokumentacji instalacji odwiedź <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.  <BR><BR> Możesz też uzyskać pomoc od Sugar Community na <a href="http://www.sugarcrm.com/forums/" target="_blank">Forum Sugar </a>.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Czy jesteś gotowy do instalacji?',
    'REQUIRED_SYS_COMP' => 'Wymagane komponenty systemowe',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Zanim rozpoczniesz, upewnij się, że posiadasz wspierane wersje następujących komponentów systemu:<br>
                      <ul>
                      <li> Baza danych / System zadządzania bazą (Przykłady: MySQL, Serwer SQL, Oracle)</li>
                      <li> Serwer stron (Apache, IIS)</li>
                      </ul>
                      Sprawdź w macierzy kompatybilności w Uwagach do wydania, które komponenty systemu są wspierane przez wersję Sugar, którą instalujesz.<br>',
    'REQUIRED_SYS_CHK' => 'Wstępne sprawdzanie systemu',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Gdy rozpoczniesz proces instalacji, system przeprowadzi sprawdzenie na serwerze stron, na którym jest instalowana aplikacja, w celu określenia, czy system jest skonfigurowany prawidłowo i posiada wszystkie niezbędne do pomyślnego zakończenia instalacji komponenty. <br><br>
                      System sprawdzi wszystkie następujące elementy:<br>
                      <ul>
                      <li><b>Wersję PHP</b> &#8211; musi być kompatybilna z aplikacją</li>
                                        <li><b>Zmienne sesji</b> &#8211; muszą działać prawidłowo</li>
                                            <li> <b>Moduł MB Strings</b> &#8211; musi być zainstalowany i włączony w pliku php.ini</li>

                      <li> <b>Wsparcie dla silnika bazy danych</b> &#8211; musi istnieć dla MySQL, Serwera SQL, lub dla Oracle</li>

                      <li> <b>Plik Config.php</b> &#8211; musi istnieć i mieć prawidłowe prawa, umożliwiające zapis.</li>
					  <li>Następujące pliki muszą mieć prawa do zapisu:<ul><li><b>/custom</li>
<li>/cache</li>
<li>/modules</b></li></ul></li></ul>
                                  Jeśli sprawdzanie nie powiedzie się, nie będziesz mógł przeprowadzić procesu instalacji. Wyświetlony zostanie komunikat o błędzie, wyjaśniający dlaczego nie można przejść konkretnego testu. Po dokonaniu niezbędnych zmian, możesz sprawdzić ponownie, a następnie kontynuować instalację.<br>',
    'REQUIRED_INSTALLTYPE' => 'Typowa lub niestandardowa instalacja',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    'Po przeprowadzeniu testu, możesz wybrać typowy lub niestandardowy tryb instalacji.<br><br>
                      Dla obu  - <b>Typowego</b> i <b>Niestandardowego</b>, będziesz potrzebował następujących informacji:<br>
                      <ul>
                      <li> <b>Silnika bazy danych</b>, który będzie napędzał  aplikację <ul><li>Kompatybilne bazy danych to: MySQL, MS SQL Server, Oracle.<br><br></li></ul></li>
                      <li> <b>Nazwy serwera stron</b> lub maszyny (hosta) na którym umieszczona jest baza danych
                      <ul><li>Może to być <i>localhost</i>, jeśli baza danych jest umieszczona na Twoim lokalnym komputerze, lub na tym samym serwerze, na którym są pliki aplikacji.<br><br></li></ul></li>
                      <li><b>Nazwy bazy danych</b>, której zamierzasz użyć do przechowywania danych aplikacji Sugar</li>
                        <ul>
                          <li> Możesz mieć już bazę danych, której zamierzasz użyć. Jeśli wprowadzisz nazwę istniejącej bazy, jej tabele zostaną usunięte podczas instalacji, gdy będzie definiowany nowy schemat dla bazy Sugar.</li>
                          <li> Jeśli nie masz bazy danych, podczas instalacji nazwa, którą wprowadzisz będzie użyta do stworzenia nowej bazy..<br><br></li>
                        </ul>
                      <li><b>Nazwy i hasła użytkownika - administratora serwera bazy danych</b> <ul><li>Administrator bazy powinien móc tworzyć tabele i użytkowników i móc zapisywać do bazy danych.</li><li>Być może będziesz musiał skontaktować się z Twoim administratorem, w celu ustalenia, czy baza danych znajduje się na Twoim lokalnym komputerze, i/lub czy jesteś administratorem serwera bazy danych.<br><br></ul></li></li>
                      <li> <b>Nazwy i hasła dla użytkownika bazy danych Sugar</b>
                      </li>
                        <ul>
                          <li> Użytkownik może być jednocześnie administratorem serwera bazy danych, lub możesz określić nazwę innego istniejącego użytkownika. </li>
                          <li> Jeśli chcesz, możesz też utworzyć nowego użytkownika bazy danych. W tym celu będziesz musiał podać jego nazwę, oraz hasło. Ten użytkownik zostanie utworzony podczas instalacji. </li>
                        </ul></ul><p>

                      Dodatkowo, dla trybu <b>Niestandardowego</b> musisz posiadać następujące informacje:<br>
                      <ul>
                      <li> <b>Adres URL</b>, pod którym będzie można zalogować się do aplikacji, po jej zainstalowaniu. Ten adres URL powinien zawierać nazwę serwera stron, lub nazwę maszyny, lub adres IP.<br><br></li>
                                  <li> [Opcjonalnie] <b>Ścieżkę do katalogu sesji</b> jeśli chcesz, możesz użyć własnego katalogu sesji dla aplikacji Sugar, w celu zapobiegnięcia mieszania się danych z innych instancji, gdy wiele aplikacji jest instalowanych na współdzielonych serwerach.<br><br></li>
                                  <li> [Opcjonalnie] <b>Ścieżkę własnego katalogu dziennika</b>. Jeśli chcesz możesz nadpisać domyślny katalog dla dziennika aplikacji.<br><br></li>
                                  <li> [Opcjonalnie] <b>ID Aplikacji</b>. Jeśli chcesz, możesz nadpisać automatycznie wygenerowane ID, aby mieć pewność, że sesje z jednej instancji Sugar nie zostaną użyte w innej.<br><br></li>
                                  <li><b>Zestaw znaków</b> najczęściej używany w Twoich ustawieniach lokalnych.<br><br></li></ul>
                                  W celu uzyskania bardziej szczegółowych informacji, sięgnij do Instrukcji instalacji.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Przeczytaj poniższe ważne informacje, zanim rozpoczniesz instalację. Informacje te pomogą Ci określić, czy jesteś obecnie przygotowany do zainstalowania aplikacji.',


	'LBL_WELCOME_2'	=> 'W celu uzyskania dokumentacji procesu instalacji wejdź na <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.  <BR><BR> Aby skontaktować się z inżynierem wsparcia Sugar i uzyskania pomocy podczas instalacji, zaloguj się na <a target="_blank" href="http://support.sugarcrm.com">Portal wsparcia SugarCRM</a> i zgłoś potrzebę pomocy.',

	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>Wybierz swój język</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Kreator ustawień',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Witamy w SugarCRM ',
	'LBL_WELCOME_TITLE'					=> 'Kreator ustawień SugarCRM',
	'LBL_WIZARD_TITLE'					=> 'Kreator ustawień Sugar: ',
	'LBL_YES'							=> 'Tak',
    'LBL_YES_MULTI'                     => 'Tak - Multibyte',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Wykonaj zadania prac do wykonania',
	'LBL_OOTB_REPORTS'		=> 'Przeprowadź Raport wykonania zadań harmonogramu',
	'LBL_OOTB_IE'			=> 'Sprawdź skrzynki poczty przychodzącej',
	'LBL_OOTB_BOUNCE'		=> 'Przeprowadź Nocną wysyłkę odbitych wiadomości kampanii',
    'LBL_OOTB_CAMPAIGN'		=> 'Przeprowadź Nocną masową wysyłkę wiadomości kampanii',
	'LBL_OOTB_PRUNE'		=> 'Zoptymalizuj bazę danych pierwszego dnia miesiąca',
    'LBL_OOTB_TRACKER'		=> 'Zoptymalizuj dane śledzenia',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Uaktualnij tabele tracker_sessions',







    'LBL_PATCHES_TITLE'     => 'Zainstaluj najnowsze poprawki',
    'LBL_MODULE_TITLE'      => 'Pobierz i zanistaluj pliki językowe',
    'LBL_PATCH_1'           => 'Jeśli chcesz ominąć ten krok, kliknij [Dalej].',
    'LBL_PATCH_TITLE'       => 'Poprawki systemu',
    'LBL_PATCH_READY'       => 'Następujące poprawki są gotowe do instalacji:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM wykorzystuje sesje PHP do przechowywania ważnych informacji podczas łączenia się z tym serwerem stron. Twoja instalacja PHP nie ma poprawnie skonfigurowanych informacji o sesji.
											<br><br>Pewien błąd konfiguracji w dyrektywie <b>'session.save_path'</b> nie wskazuje na właściwy katalog.  <br>
											<br> Popraw <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP configuration</a> w  php.ini znajdującym się poniżej.",
	'LBL_SESSION_ERR_TITLE'				=> 'Bład konfiguracji sesji PHP',
	'LBL_SYSTEM_NAME'=>'Nazwa systemu',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Określ nazwę dla tej instacji Sugar.',
	'LBL_PATCH_UPLOAD' => 'Wybierz plik poprawki z Twojego komputera',
	'LBL_INCOMPATIBLE_PHP_VERSION' => 'Jest wymagana wersja 5.0 PHP lub wyższa.',
	'LBL_MINIMUM_PHP_VERSION' => 'Minimalna wymagana wersja PHP to 5.1.0. Zalecana wersja to 5.2.x.',
	'LBL_YOUR_PHP_VERSION' => '(Twoja bieżąca wersja to ',
	'LBL_RECOMMENDED_PHP_VERSION' =>' Rekomendowana wersja PHP to 5.2.x)',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'Funkcja wstecznej kompatybilności PHP jest włączona. Ustaw zend.ze1_compatibility_mode na Off aby przejść dalej',
);

?>
