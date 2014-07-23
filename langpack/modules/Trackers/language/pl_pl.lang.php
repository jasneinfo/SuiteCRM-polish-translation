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

$mod_strings = array (
		  //Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
		  'ShowActiveUsers'      => 'Przeglądaj aktywnych użytkowników',
		  'ShowLastModifiedRecords' => '10 ostatnio modyfikowanych rekordów',
		  'ShowTopUser' => 'Najaktywniejsi użytkownicy',
		  'ShowMyModuleUsage' => 'Wykorzystanie mojego modułu',
		  'ShowMyWeeklyActivities' => 'Moja tygodniowa aktywność',
		  'ShowTop3ModulesUsed' => 'Moje trzy najbardziej aktywne moduły',
		  'ShowLoggedInUserCount' => 'Licznik aktywnych użytkowników',
		  'ShowMyCumulativeLoggedInTime' => 'Rzeczywisty pełny czas mojego zalogowania (w tym tygodniu)',
		  'ShowUsersCumulativeLoggedInTime' => 'Rzeczywisty pełny czas zalogowania wszystkich użytkowników (w tym tygodniu)',
		  
		  //Column header mapping
		  'action' => 'Akcja',
		  'active_users' => 'Licznik aktywności użytkowników',
		  'date_modified' => 'Data ostatniego działania',
		  'different_modules_accessed' => 'Licza używanych modułów',
		  'first_name' => 'Imię',
		  'item_id' => 'ID',
		  'item_summary' => 'Nazwa',
		  'last_action' => 'Data i czas ostatniej aktywności',
		  'last_name' => 'Nazwisko',
		  'module_name' => 'Nazwa modułu',
		  'records_modified' => 'Wszystkie zmodyfikowane rekordy',
		  'top_module' => 'Najbardziej aktywne moduły',
		  'total_count' => 'Wszystkie przeglądane strony',
		  'total_login_time' => 'Czas (gg:mm:ss)',
		  'user_name' => 'Nazwa użytkownika',
		  'users' => 'Użytkownicy',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Włączony',
		  'LBL_MODULE_NAME_TITLE' => 'Ślady',
		  'LBL_MODULE_NAME' => 'Ślady',
		  'LBL_TRACKER_SETTINGS' => 'Ustawienia śledzenia',
		  'LBL_TRACKER_QUERIES_DESC' => 'Śledzenie zapytań',
		  'LBL_TRACKER_QUERIES_HELP' => 'Śledź zapytania SQL, gdy jest włączona funkcja "Śledź wolne zapytania", a wartość wykonania zapytania przekracza, wartość funkcji "Przekroczenie wartości czasu wolnego zapytania" w config.php',
		  'LBL_TRACKER_PERF_DESC' => 'Śledzenie wydajności',
		  'LBL_TRACKER_PERF_HELP' => 'Śledzenie osiągów wykonywania zapytań bazy danych, liczby otwartych plików i wykorzystania pamięci',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Śledzenie sesji',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Informacje o śledzeniu sesji aktywnego użytkownika(ów)',
		  'LBL_TRACKER_DESC' => 'Śledzenie akcji',
		  'LBL_TRACKER_HELP' => 'Strona widoku śledzenia dla użytkownika(ów) (modułów i dostępu do plików) i zachowanych rekordów',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Ilość dni przechowywania danych śledzenia',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Liczba dni',
);
?>