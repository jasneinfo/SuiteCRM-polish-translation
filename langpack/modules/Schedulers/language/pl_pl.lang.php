<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*+******************************************************************************
 * Zasady użytkowania znajdują się na stronie: http://opensaas.pl/kontakt/regulamin.html
 ********************************************************************************
 *  Language     : Język polski
 *  Version      : 6.5.x
 *  Author       : OpenSaaS Sp. z o.o.
 *  Website      : www.opensaas.pl
******************************************************************************+*/

global $sugar_config;

$mod_strings = array (
// OOTB Scheduler Job Names:
'LBL_OOTB_WORKFLOW'		=> 'Zadania obiegu informacji',
'LBL_OOTB_REPORTS'		=> 'Wykonaj raport z wykonania zaplanowanych zadań',
'LBL_OOTB_IE'			=> 'Sprawdź skrzynki poczty przychodzącej',
'LBL_OOTB_BOUNCE'		=> 'Wykonaj nocną wysyłkę odesłania poczty kampanii',
'LBL_OOTB_CAMPAIGN'		=> 'Wykonaj nocną masową wysyłkę poczty kampanii',
'LBL_OOTB_PRUNE'		=> 'Wyczyść bazę danych 1-go dnia miesiąca',
'LBL_OOTB_TRACKER'		=> 'Wyczyść tabele sesji śledzenia',
'LBL_UPDATE_TRACKER_SESSIONS' => 'Zaktualizuj tabele śledzenia sesji',
'LBL_OOTB_SEND_EMAIL_REMINDERS'	=> 'Wyślij powiadomienia e-mail',
'LBL_OOTB_CLEANUP_QUEUE' => 'Wyczyść kolejkę zadań',

// List Labels
'LBL_LIST_JOB_INTERVAL' => 'Częstotliwość:',
'LBL_LIST_LIST_ORDER' => 'Harmonogramy:',
'LBL_LIST_NAME' => 'Harmonogram:',
'LBL_LIST_RANGE' => 'Okres aktywności harmonogramu:',
'LBL_LIST_REMOVE' => 'Usuń:',
'LBL_LIST_STATUS' => 'Status:',
'LBL_LIST_TITLE' => 'Lista harmonogramów:',
'LBL_LIST_EXECUTE_TIME' => 'Rozpocznie się o:',
// human readable:
'LBL_SUN'		=> 'Niedziela',
'LBL_MON'		=> 'Poniedziałek',
'LBL_TUE'		=> 'Wtorek',
'LBL_WED'		=> 'Środa',
'LBL_THU'		=> 'Czwartek',
'LBL_FRI'		=> 'Piątek',
'LBL_SAT'		=> 'Sobota',
'LBL_ALL'		=> 'Każdego dnia',
'LBL_EVERY_DAY'	=> 'Każdego dnia ',
'LBL_AT_THE'	=> 'O  ',
'LBL_EVERY'		=> 'Każdego ',
'LBL_FROM'		=> 'Od ',
'LBL_ON_THE'	=> 'Co ',
'LBL_RANGE'		=> ' do ',
'LBL_AT' 		=> ' o ',
'LBL_IN'		=> ' w ',
'LBL_AND'		=> ' i ',
'LBL_MINUTES'	=> ' minut ',
'LBL_HOUR'		=> ' godzin',
'LBL_HOUR_SING'	=> ' godzina',
'LBL_MONTH'		=> ' miesiąc',
'LBL_OFTEN'		=> ' Tak często, jak tylko możliwe.',
'LBL_MIN_MARK'	=> ' minut',


// crontabs
'LBL_MINS' => 'minuty',
'LBL_HOURS' => 'godziny',
'LBL_DAY_OF_MONTH' => 'dzień miesiąca',
'LBL_MONTHS' => 'miesiąc',
'LBL_DAY_OF_WEEK' => 'dzień tygodnia',
'LBL_CRONTAB_EXAMPLES' => 'Powyżej użyto notacji crontaba.',
'LBL_CRONTAB_SERVER_TIME_PRE' =>  'Specyfikacja cron uruchomienia na podstawie strefy czasowej serwera (',
'LBL_CRONTAB_SERVER_TIME_POST' => '). Proszę podać czas realizacji harmonogramu.',
// Labels
'LBL_ALWAYS' => 'Zawsze',
'LBL_CATCH_UP' => 'Przeprowadź, jeżeli pominieto',
'LBL_CATCH_UP_WARNING' => 'Odznacz, jeżeli to działanie ma potrwać dłuzej.',
'LBL_DATE_TIME_END' => 'Data i czas zakończenia',
'LBL_DATE_TIME_START' => 'Data i czas rozpoczęcia',
'LBL_INTERVAL' => 'Częstotliwość',
'LBL_JOB' => 'Zadanie',
'LBL_JOB_URL' => 'Adres URL zadanis',
'LBL_LAST_RUN' => 'Ostanie wykonanie',
'LBL_MODULE_NAME' => 'Harmonogram',
'LBL_MODULE_TITLE' => 'Harmonogramy',
'LBL_NAME' => 'Nazwa zadania',
'LBL_NEVER' => 'Nigdy',
'LBL_NEW_FORM_TITLE' => 'Nowy harmonogram',
'LBL_PERENNIAL' => 'bez przerwy',
'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie harmonogramu',
'LBL_SCHEDULER' => 'Harmonogram:',
'LBL_STATUS' => 'Status',
'LBL_TIME_FROM' => 'Aktywny od',
'LBL_TIME_TO' => 'Aktywny do',
'LBL_WARN_CURL_TITLE' => 'Ostrzeżenie cURL:',
'LBL_WARN_CURL' => 'Ostrzeżenie:',
'LBL_WARN_NO_CURL' => 'Ten system nie posiada bibliotek cURL włączonych lub wkompilowanych w moduł PHP (--with-curl=/path/to/curl_library). Skontaktuj się z Administratorem, aby rozwiązać ten problem. Bez cURL nie można przeprowadzić harmonogramu.',
'LBL_BASIC_OPTIONS' => 'Podstawowe ustawienia',
'LBL_ADV_OPTIONS'		=> 'Opcje zaawansowane',
'LBL_TOGGLE_ADV' => 'Pokaż zaawansowane opcje',
'LBL_TOGGLE_BASIC' => 'Pokaż podstawowe ustawienia',
// Links
'LNK_LIST_SCHEDULER' => 'Harmonogramy',
'LNK_NEW_SCHEDULER' => 'Utwórz harmonogram',
'LNK_LIST_SCHEDULED' => 'Zaplanowane prace',
// Messages
'SOCK_GREETING' => "To jest interfejs dla serwisu harmonogramów SugarCRM. 
 [ Dostępne komendy demona: start|restart|shutdown|status ]
 Aby wyjść, wpisz 'quit'. Aby wyłączyc serwis, wpisz 'shutdown'.",
'ERR_DELETE_RECORD' => 'Aby usunąć harmonogram musisz określić numer rekordu.',
'ERR_CRON_SYNTAX' => 'Niewłaściwa składnia Crona',
'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten rekord?',
'NTC_STATUS' => 'Zmień status na nieaktywny w celu usunięcia wersji z listy wyboru.',
'NTC_LIST_ORDER' => 'Ustaw kolejność w celu wyświetlenia w odpowiednim miejsu listy wyboru.',
'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Aby ustawić Harmonogram Windows',
'LBL_CRON_INSTRUCTIONS_LINUX' => 'Aby ustawić Crontab',
'LBL_CRON_LINUX_DESC' => 'Dodaj tę listę do crontaba: ',
'LBL_CRON_WINDOWS_DESC' => 'Utwórz plik wsadowy zawierający te linię: ',
'LBL_NO_PHP_CLI' => 'Jeżeli twój komputer nie ma dostępu do binariów PHP, możesz użyć wget albo curl aby załadować twoje Prace.<br>Dla wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose '.$sugar_config['site_url'].'/cron.php > /dev/null 2>&1</b><br>dla curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent '.$sugar_config['site_url'].'/cron.php > /dev/null 2>&1',
// Subpanels
'LBL_JOBS_SUBPANEL_TITLE'	=> 'Aktwyne prace',
'LBL_EXECUTE_TIME'			=> 'Czas uruchomienia',

//jobstrings
'LBL_REFRESHJOBS' => 'Odśwież prace',
'LBL_POLLMONITOREDINBOXES' => 'Sprawdź przychodzące konta pocztowe',
'LBL_PERFORMFULLFTSINDEX' => 'Wyszukiwanie pełnotekstowe Index System',

'LBL_RUNMASSEMAILCAMPAIGN' => 'Wykonaj nocną masową wysyłkę poczty kampanii',
'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Uruchom w nocy proces przetworzania zwróconych emaili kampanii',
'LBL_PRUNEDATABASE' => 'Wyczyść bazę danych 1-go dnia miesiąca',
'LBL_TRIMTRACKER' => 'Wyczyść tabele sesji śledzenia',
'LBL_SENDEMAILREMINDERS'=> 'Wyślij powiadomienia e-mail',
'LBL_CLEANJOBQUEUE' => 'Wyczyść kolejkę zadań',
);
?>