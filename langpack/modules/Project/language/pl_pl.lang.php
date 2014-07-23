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
	'LBL_MODULE_NAME' => 'Projekty',
	'LBL_MODULE_TITLE' => 'Projekty: Strona główna',
	'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie projektów',
    'LBL_LIST_FORM_TITLE' => 'Lista projektów',
    'LBL_HISTORY_TITLE' => 'Historia',

	'LBL_ID' => 'Id:',
	'LBL_DATE_ENTERED' => 'Data utworzenia:',
	'LBL_DATE_MODIFIED' => 'Data modyfikacji:',
	'LBL_ASSIGNED_USER_ID' => 'Przydzielony do:',
    'LBL_ASSIGNED_USER_NAME' => 'Przydzielony do:',
	'LBL_MODIFIED_USER_ID' => 'ID Użytkownika modyfikującego:',
	'LBL_CREATED_BY' => 'Utworzone przez:',
	'LBL_TEAM_ID' => 'Zespół:',
	'LBL_NAME' => 'Nazwa:',
    'LBL_PDF_PROJECT_NAME' => 'Nazwa projektu:',
	'LBL_DESCRIPTION' => 'Opis:',
	'LBL_DELETED' => 'Usunięty:',
    'LBL_DATE' => 'Data:',
	'LBL_DATE_START' => 'Data rozpoczęcia:',
	'LBL_DATE_END' => 'Data zakończenia:',
	'LBL_PRIORITY' => 'Priorytet:',
    'LBL_STATUS' => 'Status:',
    'LBL_MY_PROJECTS' => 'Moje Projekty',
    'LBL_MY_PROJECT_TASKS' => 'Moje zadania projektu',
    
	'LBL_TOTAL_ESTIMATED_EFFORT' => 'Całkowita liczba roboczogodzin:',
	'LBL_TOTAL_ACTUAL_EFFORT' => 'Aktualna liczba roboczogodzin:',

	'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_DAYS' => 'Dni',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Przydzielony do',
	'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Całkowita liczba roboczogodzin:',
	'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Aktualna liczba roboczogodzin:',
    'LBL_LIST_UPCOMING_TASKS' => 'Nadchodzące zadania (1 Tydzień)',
    'LBL_LIST_OVERDUE_TASKS' => 'Przeterminowane zadania',
    'LBL_LIST_OPEN_CASES' => 'Otwarte zgłoszenia',
    'LBL_LIST_END_DATE' => 'Data zakończenia',
    'LBL_LIST_TEAM_ID' => 'Zespół',
    

	'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
	'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Zadania projektu',
	'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontakty',
	'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Kontrahenci',
	'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Szanse Sprzedaży',
	'LBL_QUOTE_SUBPANEL_TITLE' => 'Oferty',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nowy projekt',

	'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Czy na pewno chcesz usunąć ten kontakt z tej projektu?',

	'LNK_NEW_PROJECT'	=> 'Utwórz projekt',
	'LNK_PROJECT_LIST'	=> 'Lista projektów',
	'LNK_NEW_PROJECT_TASK'	=> 'Utwórz zadanie projektu',
	'LNK_PROJECT_TASK_LIST'	=> 'Lista zadań projektu',
	
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekty',
	'LBL_ACTIVITIES_TITLE'=>'Wydarzenia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Wydarzenia',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historia',
	'LBL_QUICK_NEW_PROJECT'	=> 'Nowy projekt',
	
	'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Zadania projektu',
	'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
	'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kontrahenci',
	'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Szanse Sprzedaży',
    'LBL_CASES_SUBPANEL_TITLE' => 'Zgłoszenia',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Błędy',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkty',
    

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nazwa zadania',
    'LBL_DURATION' => 'Czas trwania',
    'LBL_ACTUAL_DURATION' => 'Aktualny czas',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Koniec',
    'LBL_PREDECESSORS' => 'Poprzednie',
    'LBL_PERCENT_COMPLETE' => '% wykonano',
    'LBL_MORE'  => 'Więcej...',

    'LBL_PERCENT_BUSY' => '% Zaangażowania',
    'LBL_TASK_ID_WIDGET' => 'id',
    'LBL_TASK_NAME_WIDGET' => 'Opis',
    'LBL_DURATION_WIDGET' => 'Czas trwania',
    'LBL_START_WIDGET' => 'data_rozpoczęcia',
    'LBL_FINISH_WIDGET' => 'data_zakończenia',
    'LBL_PREDECESSORS_WIDGET' => 'poprzednie_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'procent_wykonano',
    'LBL_EDIT_PROJECT_TASKS_TITLE'=> 'Edytuj zadania projektu',
    
    'LBL_OPPORTUNITIES' => 'Szanse Sprzedaży',
	'LBL_LAST_WEEK' => 'Poprzedni',
	'LBL_NEXT_WEEK' => 'Następny',
	'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Zasoby projektu',
	'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Zadania projektu',
	'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Wakacje',
	'LBL_PROJECT_INFORMATION' => 'Przegląd projektu',
	'LBL_EDITLAYOUT' => 'Edycja wygladu' /*for 508 compliance fix*/,
	'LBL_INSERTROWS' => 'Wstaw wiersze' /*for 508 compliance fix*/,
	'LBL_PROJECT_INFORMATION' => 'Przegląd',

);
?>