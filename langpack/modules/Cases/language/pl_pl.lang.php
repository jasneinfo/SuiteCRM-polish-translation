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
	'ERR_DELETE_RECORD'					=> 'Aby usunąć Kontrahenta musisz określić numer rekordu.',

	'LBL_ACCOUNT_ID'					=> 'ID Kontrahenta',
	'LBL_ACCOUNT_NAME'					=> 'Nazwa Kontrahenta:',
	'LBL_ACCOUNTS_SUBPANEL_TITLE'		=> 'Kontrahenci',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'		=> 'Wydarzenia',
	'LBL_ATTACH_NOTE' 					=> 'Dodaj notatkę',
	'LBL_BUGS_SUBPANEL_TITLE'			=> 'Błędy',
	'LBL_CASE_NUMBER'					=> 'Numer zgłoszenia:',
	'LBL_CASE_SUBJECT'					=> 'Temat zgłoszenia:',
	'LBL_CASE'							=> 'Zgłoszenie:',
	'LBL_CONTACT_CASE_TITLE'			=> 'Zgłoszenie - osoba kontaktowa:',
	'LBL_CONTACT_NAME'					=> 'Osoba kontaktowa:',
	'LBL_CONTACT_ROLE'					=> 'Rola:',
	'LBL_CONTACTS_SUBPANEL_TITLE'		=> 'Kontakty',
	'LBL_DEFAULT_SUBPANEL_TITLE'		=> 'Zgłoszenia',
	'LBL_DESCRIPTION'					=> 'Opis:',
	'LBL_FILENANE_ATTACHMENT' 			=> 'Plik załącznika',		
	'LBL_HISTORY_SUBPANEL_TITLE'		=> 'Historia',
	'LBL_INVITEE'						=> 'Kontakty',
	'LBL_MEMBER_OF'						=> 'Kontrahent',
	'LBL_MODULE_NAME'					=> 'Zgłoszenia',
	'LBL_MODULE_TITLE'					=> 'Zgłoszenia: Strona główna',
	'LBL_NEW_FORM_TITLE'				=> 'Utwórz zgłoszenie',
	'LBL_NUMBER'						=> 'Numer:',
	'LBL_PRIORITY'						=> 'Priorytet:',
	'LBL_PROJECTS_SUBPANEL_TITLE' 		=> 'Projekty',
	'LBL_DOCUMENTS_SUBPANEL_TITLE' 		=> 'Dokumenty',
	'LBL_RESOLUTION'					=> 'Rozwiązanie:',
	'LBL_SEARCH_FORM_TITLE'				=> 'Wyszukiwanie zgłoszenia',
	'LBL_STATUS'						=> 'Status:',
	'LBL_SUBJECT'						=> 'Temat:',
	'LBL_SYSTEM_ID'						=> 'ID systemowe:',
	'LBL_LIST_ASSIGNED_TO_NAME' 		=> 'Przydzielony użytkownik',
	'LBL_LIST_ACCOUNT_NAME'				=> 'Nazwa kontrahenta',
	'LBL_LIST_ASSIGNED'					=> 'Przydzielony do',
	'LBL_LIST_CLOSE'					=> 'Zamknij',
	'LBL_LIST_FORM_TITLE'				=> 'Lista zgłoszeń',
	'LBL_LIST_LAST_MODIFIED'			=> 'Data modyfikacji',
	'LBL_LIST_MY_CASES'					=> 'Moje nieukończone zgłoszenia',
	'LBL_LIST_NUMBER'					=> 'Numer',
	'LBL_LIST_PRIORITY'					=> 'Priorytet',
	'LBL_LIST_STATUS'					=> 'Status',
	'LBL_LIST_SUBJECT'					=> 'Temat',
	'LBL_LIST_ASSIGNED_TO_NAME'   		=> 'Przydzielony użytkownik',

	'LNK_CASE_LIST'						=> 'Lista zgłoszeń',
	'LNK_NEW_CASE'						=> 'Utwórz Zgłoszenie',
	'NTC_REMOVE_FROM_BUG_CONFIRMATION'	=> 'Czy na pewno chcesz usunąć te zgłoszenie z tego błędu?',
	'NTC_REMOVE_INVITEE'				=> 'Czy na pewno chcesz usunąć uczestnika zgłoszenia?',
	'LBL_LIST_DATE_CREATED'			=> 'Data utworzenia',
	'LBL_ASSIGNED_TO_NAME' => 'Przydzielony do',
	'LBL_TYPE'=>'Typ',
	'LBL_WORK_LOG'=>'Dziennik prac:',
	'LNK_IMPORT_CASES' => 'Importuj zgłoszenia',

    'LBL_CREATED_USER' => 'Utworzone przez użytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowane przez użytkownika',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LBL_CASE_INFORMATION' => 'Opis zgłoszenia',

    //For export labels
    'LBL_MODIFIED_BY_NAME_OWNER' => 'Zmodyfikowane przez właściciela',
    'LBL_MODIFIED_BY_NAME_MOD' => 'Zmodyfikowane przez moderatora',
    'LBL_CREATED_BY_NAME_OWNER' => 'Utworzone przez właściciela',
    'LBL_CREATED_BY_NAME_MOD' => 'Utworzone przez moderatora',
    'LBL_ASSIGNED_USER_NAME_OWNER' => 'Przydzielony użytkownik właściciela',
    'LBL_ASSIGNED_USER_NAME_MOD' => 'Przydzielony użytkownik moderatora',
    'LBL_TEAM_COUNT_OWNER' => 'Grupa kierownicza właściciela',
    'LBL_TEAM_COUNT_MOD' => 'Grupa moderatora',
    'LBL_TEAM_NAME_OWNER' => 'Grupa właściciela',
    'LBL_TEAM_NAME_MOD' => 'Grupa moderatora',
    'LBL_ACCOUNT_NAME_OWNER' => 'Nazwa kontrahenta właściciela',
    'LBL_ACCOUNT_NAME_MOD' => 'Nazwa kontrahenta moderatora',
    'LBL_MODIFIED_USER_NAME' => 'Zmodyfikowana nazwa użytkownika',
    'LBL_MODIFIED_USER_NAME_OWNER' => 'Zmodyfikowana nazwa użytkownika właściciela',
    'LBL_MODIFIED_USER_NAME_MOD' => 'Zmodyfikowana nazwa użytkownika moderatora',
    'LBL_PORTAL_VIEWABLE' => 'Portal Widoczny',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Przydzielony do (ID użytkownika)',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Zmodyfikowane przez (ID użytkownika)',
    'LBL_EXPORT_CREATED_BY' => 'Utworzony przez (ID)',
    'LBL_EXPORT_CREATED_BY_NAME' => 'Utworzone przez użytkownika',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Przypisany użytkownik',
    'LBL_EXPORT_TEAM_COUNT' => 'Grupa kierownicza',

    // SNIP
	'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Powiązane Kontakty \ Wiadomości e-mail',
);

?>