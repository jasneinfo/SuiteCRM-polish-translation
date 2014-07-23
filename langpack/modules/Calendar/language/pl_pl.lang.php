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

	'LBL_MODULE_NAME' => 'Kalendarz',
	'LBL_MODULE_TITLE' => 'Kalendarz',
	'LNK_NEW_CALL' => 'Utwórz połączenie telefoniczne',
	'LNK_NEW_MEETING' => 'Utwórz spotkanie',
	'LNK_NEW_APPOINTMENT' => 'Utwórz termin spotkania',
	'LNK_NEW_TASK' => 'Utwórz zadanie',
	'LNK_CALL_LIST' => 'Połączenia Telefoniczne',
	'LNK_MEETING_LIST' => 'Spotkania',
	'LNK_TASK_LIST' => 'Zadania',
	'LNK_VIEW_CALENDAR' => 'Zobacz kalendarz',
	'LNK_IMPORT_CALLS' => 'Importuj Połączenia Telefoniczne',
	'LNK_IMPORT_MEETINGS' => 'Importuj spotkania',
	'LNK_IMPORT_TASKS' => 'Importuj zadania',
	'LBL_MONTH' => 'Miesiąc',
	'LBL_DAY' => 'Dzień',
	'LBL_YEAR' => 'Rok',
	'LBL_WEEK' => 'Tydzień',
	'LBL_PREVIOUS_MONTH' => 'Poprzedni miesiąc',
	'LBL_PREVIOUS_DAY' => 'Poprzedni dzień',
	'LBL_PREVIOUS_YEAR' => 'Poprzedni rok',
	'LBL_PREVIOUS_WEEK' => 'Poprzedni tydzień',
	'LBL_NEXT_MONTH' => 'Następny miesiąc',
	'LBL_NEXT_DAY' => 'Następny dzień',
	'LBL_NEXT_YEAR' => 'Następny rok',
	'LBL_NEXT_WEEK' => 'Następny tydzień',
	'LBL_AM' => 'AM',
	'LBL_PM' => 'PM',
	'LBL_SCHEDULED' => 'Zaplanowany',
	'LBL_BUSY' => 'Zajęty',
	'LBL_CONFLICT' => 'Konflikt',
	'LBL_USER_CALENDARS' => 'Kalendarz użytkownika',
	'LBL_SHARED' => 'Udostępniony',
	'LBL_PREVIOUS_SHARED' => 'Poprzedni',
	'LBL_NEXT_SHARED' => 'Następny',
	'LBL_SHARED_CAL_TITLE' => 'Współdzielony kalendarz',
	'LBL_USERS' => 'Użytkownicy',
	'LBL_REFRESH' => 'Odśwież',
	'LBL_EDIT_USERLIST' => 'Lista użytkowników',
	'LBL_SELECT_USERS' => 'Wybierz użytkowników, którym system udostępnić kalendarz',
	'LBL_FILTER_BY_TEAM' => 'Filtruj listę użytkowników przez Zespoły:',
	'LBL_ASSIGNED_TO_NAME' => 'Przydzielone do',
	'LBL_DATE' => 'Data i czas rozpoczęcia',
	'LBL_CREATE_MEETING' => 'Utwórz spotkanie',
	'LBL_CREATE_CALL' => 'Utwórz połączenie telefoniczne',
	'LBL_HOURS_ABBREV' => 'h',
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => 'Tak',
	'LBL_NO' => 'Nie',
	'LBL_SETTINGS' => 'Ustawienia',
	'LBL_CREATE_NEW_RECORD' => 'Tworzenie wydarzenia',
	'LBL_LOADING' => 'Ładowanie ......',
	'LBL_SAVING' => 'Zapisanie ......',
	'LBL_SENDING_INVITES' => 'Zapisywanie i wysyłanie zaproszenia .....',
	'LBL_CONFIRM_REMOVE' => 'Czy na pewno chcesz usunąć wydarzenie?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Czy na pewno chcesz usunąć wszystkie cykliczne wydarzenia?',
	'LBL_EDIT_RECORD' => 'Edytuj wydarzenie',
	'LBL_ERROR_SAVING' => 'Błąd podczas zapisu',
	'LBL_ERROR_LOADING' => 'Błąd podczas wczytywania',
	'LBL_GOTO_DATE' => 'Idź do',
	'NOTICE_DURATION_TIME' => 'Czas trwania musi być większy od 0',
	'LBL_STYLE_BASIC' => 'Podstawowe',
	'LBL_STYLE_ADVANCED' => 'Zaawansowane',

	'LBL_INFO_TITLE' => 'Dodatkowe informacje',
	'LBL_INFO_DESC' => 'Opis',
	'LBL_INFO_START_DT' => 'Data rozpoczęcia',
	'LBL_INFO_DUE_DT' => 'Data ukończenia',
	'LBL_INFO_DURATION' => 'Czas trwania',
	'LBL_INFO_NAME' => 'Temat',
	'LBL_INFO_RELATED_TO' => 'Powiązany z',

	'LBL_NO_USER' => 'Brak dopasowania do pola: Przydzielono do',
	'LBL_SUBJECT' => 'Temat',
	'LBL_DURATION' => 'Czas trwania',
	'LBL_STATUS' => 'Status',
	'LBL_DATE_TIME' => 'Data i czas',


	'LBL_SETTINGS_TITLE' => 'Ustawienia',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Wyświetl przedziały czasu w widoku dnia i tygodnia:',
	'LBL_SETTINGS_TIME_STARTS'=>'Czas rozpoczęcia:',
	'LBL_SETTINGS_TIME_ENDS'=>'Czas zakończenia:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Wyświetl Połączenia Telefoniczne:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Wyświetl Zadania:', 
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Wyświetl zakończone spotkania, rozmowy i zadania:',

	'LBL_SAVE_BUTTON' => 'Zapisz',
	'LBL_DELETE_BUTTON' => 'Usuń',
	'LBL_APPLY_BUTTON' => 'Zastosuj',
	'LBL_SEND_INVITES' => 'Zapisz i wyślij zaproszenia',
	'LBL_CANCEL_BUTTON' => 'Anuluj',
	'LBL_CLOSE_BUTTON' => 'Zamknij',

	'LBL_GENERAL_TAB' => 'Szczegóły',
	'LBL_PARTICIPANTS_TAB' => 'Uczestnicy',
	'LBL_REPEAT_TAB' => 'Powtarzanie',	
	
	'LBL_REPEAT_TYPE' => 'Powtarzanie',
	'LBL_REPEAT_INTERVAL' => 'Częstotliwość powtarzania',
	'LBL_REPEAT_END' => 'Zakończenie',	
	'LBL_REPEAT_END_AFTER' => 'po',
	'LBL_REPEAT_OCCURRENCES' => 'powtórzeń',
	'LBL_REPEAT_END_BY' => 'w dniu',	
	'LBL_REPEAT_DOW' => 'Dni tygodnia',	
	'LBL_REPEAT_UNTIL' => 'Powtarzaj, aż',
	'LBL_REPEAT_COUNT' => 'Liczba powtórzeń',
	'LBL_REPEAT_LIMIT_ERROR' => 'Twoje wydarzenie utworzy ponad niż $limit spotkań.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Edycja wszystkich powtórzeń',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Usuń wszystkie powtórzenia',
	
	'LBL_DATE_END_ERROR' => 'Data zakończenia jest przed data rozpoczęcia',

);

$mod_list_strings = array(
	'dom_cal_weekdays'=>
		array(
			"Nie",
			"Pon",
			"Wto",
			"Śro",
			"Czw",
			"Pią",
			"Sob",
		),
	'dom_cal_weekdays_long'=>
		array(
			"Niedziela",
			"Poniedziałek",
			"Wtorek",
			"Środa",
			"Czwartek",
			"Piątek",
			"Sobota",
		),
	'dom_cal_month'=>
		array(
			"",
			"Sty",
			"Lut",
			"Mar",
			"Kwi",
			"Maj",
			"Cze",
			"Lip",
			"Sie",
			"Wrz",
			"Paź",
			"Lis",
			"Gru",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"Styczeń",
			"Luty",
			"Marzec",
			"Kwiecień",
			"Maj",
			"Czerwiec",
			"Lipiec",
			"Sierpień",
			"Wrzesień",
			"Pażdziernik",
			"Listopad",
			"Grudzień",
		),
);
?>