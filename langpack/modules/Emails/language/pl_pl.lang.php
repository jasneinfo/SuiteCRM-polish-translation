<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * The Original Code is: SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2005 SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/

/*********************************************************************************
 * pl_pl.lang.ext.php,v for SugarCRM 4.5.1-->>
 * Translator: Krzysztof Morawski
 * All Rights Reserved.
 * Any bugs report welcome: krzysiek<at>kmmgroup<dot>pl
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_FW'					=> 'FW:',
	'LBL_RE'					=> 'RE:',

	'LBL_BUTTON_CREATE'					=> 'Utwórz',
	'LBL_BUTTON_EDIT'					=> 'Edytuj',
	'LBL_QS_DISABLED'                   => '(Szybkie Wyszukiwanie nie jest dostępne w tym module. Użyj określonego klawisza.)',  
	'LBL_SIGNATURE_PREPEND'				=> 'Podpis ponad odpowiedzią?',
    'LBL_EMAIL_DEFAULT_DESCRIPTION' 	=> 'Oto odpowiedź na Twoje pytanie (Możesz zmienić ten tekst)',
    'LBL_EMAIL_QUOTE_FOR' => 'Cytat: ',
    'LBL_EMAILS_PROJECT_TASK_REL' => 'Wiadomości: Zadania projektowe',
    'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'plik wygladu nie istnieje: $layout',
    'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'plik wyglądu nie jest zarejestrowany w modules/Quotes/Layouts.php',


	'LBL_CONFIRM_DELETE'		=> 'Czy na pewno chcesz usunąć ten folder?',

	'LBL_QUOTES_SUBPANEL_TITLE'	=> 'Oferty',
	'LBL_EMAILS_QUOTES_REL'		=> 'Wiadomości pocztowe: oferty',
    'LBL_ERROR_SELECT_REPORT'   => 'Wybierz raport',
    'LBL_ERROR_SELECT_MODULE_SELECT'   => 'Wybierz nazwę przez kliknięcie przycisku wyboru, obok pola Połączony z',
    'LBL_ERROR_SELECT_MODULE'   => 'Wybierz moduł w polu Połączony z',

	'ERR_ARCHIVE_EMAIL'			=> 'Błąd: Wybierz wiadomości do archiwizacji',
	'ERR_DATE_START'		=> 'Data rozpoczęcia',	
	'ERR_DELETE_RECORD'			=> 'Musisz podać numer rekordu, aby usunąć klienta.',
	'ERR_NOT_ADDRESSED'=> 'Musisz podać adresata wiadomości w polu Do, Do wiadomości lub pozostali odbiorcy',
	'ERR_TIME_START'		=> 'Czas rozpoczęcia',
	'LBL_ACCOUNTS_SUBPANEL_TITLE'=> 'Klienci',	
	'LBL_ADD_ANOTHER_FILE'		=> 'Dodaj inny plik',
    'LBL_ADD_DASHLETS'          => 'Dodaj belkę',
	'LBL_ADD_DOCUMENT'	=> 'Dodaj dokument z modułu Dokumentów Sugar',
	'LBL_ADD_ENTRIES'           => 'Dodaj wpis',
	'LBL_ADD_FILE'				=> 'Dodaj plik',
	'LBL_ARCHIVED_EMAIL'		=> 'Zarchiwizowana wiadomość',
	'LBL_ARCHIVED_MODULE_NAME'	=> 'Utwórz archiwum wiadomości',
	'LBL_ATTACHMENTS'			=> 'Załączniki:',
	'LBL_BCC'				=> 'Pozostali odbiorcy:',
	'LBL_BODY'					=> 'Treść:',
	'LBL_BUGS_SUBPANEL_TITLE'	=> 'Błędy',
	'LBL_CC'					=> 'Do wiadomości:',
	'LBL_COLON'					=> ':',
	'LBL_COMPOSE_MODULE_NAME'	=> 'Zredaguj wiadomość',
	'LBL_CONTACT_FIRST_NAME'	=> 'Imię kontaktu',
	'LBL_CONTACT_LAST_NAME'		=> 'Nazwisko kontaktu',
	'LBL_CONTACT_NAME'			=> 'Kontakt:',
	'LBL_CONTACTS_SUBPANEL_TITLE'=> 'Kontakty',
	'LBL_CREATED_BY'		=> 'Utworzone przez',
	'LBL_DATE_AND_TIME'			=> 'Data i czas wysyłki:',
	'LBL_DATE_SENT'			=> 'Data wysłania:',
	'LBL_DATE'					=> 'Data wysłania:',
    'LBL_DELETE_FROM_SERVER'    => 'Usuń tę wiadomość z serwera',
	'LBL_DESCRIPTION'			=> 'Opis',
	'LBL_EDIT_ALT_TEXT'		=> 'Edytuj tekst komentarza',
	'LBL_EDIT_MY_SETTINGS'=> 'Edytuj moje ustawienia',
	'LBL_EMAIL_ATTACHMENT'=> 'Załączniki wiadomości',
	'LBL_EMAIL_EDITOR_OPTION'=> 'Wyślij wiadomość w HTML',
	'LBL_EMAIL_SELECTOR'		=> 'Wybierz',
	'LBL_EMAIL'					=> 'Wiadomość:',
	'LBL_EMAILS_ACCOUNTS_REL'=> 'Wiadomości pocztowe: Klienci',
	'LBL_EMAILS_BUGS_REL'	=> 'Wiadomości pocztowe: Błędy',
	'LBL_EMAILS_CASES_REL'	=> 'Wiadomości pocztowe: Sprawy',
	'LBL_EMAILS_CONTACTS_REL'=> 'Wiadomości pocztowe: Kontakty',
	'LBL_EMAILS_LEADS_REL'=> 'Wiadomości pocztowe: Wizytówki',
	'LBL_EMAILS_OPPORTUNITIES_REL'=> 'Wiadomości pocztowe: tematy',
	'LBL_EMAILS_NOTES_REL'      => 'Wiadomości pocztowe: Notatki',
	'LBL_EMAILS_PROJECT_REL'	=> 'Wiadomości pocztowe: Realizacje',
	'LBL_EMAILS_PROJECTTASK_REL'=> 'Wiadomości pocztowe: Zadania Projektowe',
	'LBL_EMAILS_PROSPECT_REL'	=> 'Wiadomości pocztowe: Wizytówki',
	'LBL_EMAILS_TASKS_REL'		=> 'Wiadomości pocztowe: Zadania',
	'LBL_EMAILS_USERS_REL'		=> 'Wiadomości pocztowe: Użytkownicy',
	'LBL_ERROR_SENDING_EMAIL'	=> 'Błąd wysyłania wiadomości',
	'LBL_FORWARD_HEADER'		=> 'Rozpocznij przekazywanie wiadomości:',
	'LBL_FROM_NAME'				=> 'Nazwa Od',
	'LBL_FROM'					=> 'Od:',
	'LBL_REPLY_TO'				=> 'Odpowiedź do:',
	'LBL_HTML_BODY'				=> 'Źródło HTML',
	'LBL_INVITEE'				=> 'Odbiorcy',
	'LBL_LEADS_SUBPANEL_TITLE'	=> 'Wizytówki',
	'LBL_MESSAGE_SENT'			=> 'Wiadomość wysłana',
	'LBL_MODIFIED_BY'		=> 'Zmodyfikowane przez',
	'LBL_MODULE_NAME_NEW'		=> 'Archiwum wiadomości',
	'LBL_MODULE_NAME'	=> 'Wszystkie wiadomości',
	'LBL_MODULE_TITLE'	=> 'Wiadomości: ',
	'LBL_NEW_FORM_TITLE'		=> 'Archiwum wiadomości',
	'LBL_NONE'                  => 'Nic',
	'LBL_NOT_SENT'			=> 'Błąd wysyłania',
	'LBL_NOTE_SEMICOLON'=> 'Podpowiedź: Użyj kropki lub średnika, jako separatora dla poszczególnych adresów.',
	'LBL_NOTES_SUBPANEL_TITLE'	=> 'Załączniki',
	'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Tematy',
	'LBL_PROJECT_SUBPANEL_TITLE'=> 'Projekty',
	'LBL_PROJECT_TASK_SUBPANEL_TITLE'=> 'Zadania projektowe',
	'LBL_RAW'                => 'Źródło wiadomości',
	'LBL_SAVE_AS_DRAFT_BUTTON_KEY'=> 'R',
	'LBL_SAVE_AS_DRAFT_BUTTON_LABEL'=> 'Zapisz szkic',
	'LBL_SAVE_AS_DRAFT_BUTTON_TITLE'=> 'Zapisz szkic [Alt+R]',
	'LBL_SEARCH_FORM_DRAFTS_TITLE'=> 'Wyszukaj szkic',
	'LBL_SEARCH_FORM_SENT_TITLE'=> 'Wyszukaj w wysłanych',
	'LBL_SEARCH_FORM_TITLE'		=> 'Wyszukiwanie wiadomości',
	'LBL_SEND_ANYWAYS'=> 'Ta wiadomość nie ma tematu. Czy wysłać/zachować mimo to?',
	'LBL_SEND_BUTTON_KEY'		=> 'S',
	'LBL_SEND_BUTTON_LABEL'		=> 'Wyślij',
	'LBL_SEND_BUTTON_TITLE'		=> 'Wyślij [Alt+S]',
	'LBL_SEND'					=> 'Wyślij',
	'LBL_SENT_MODULE_NAME'		=> 'Wysłane wiadomości',
	'LBL_SHOW_ALT_TEXT'			=> 'Pokaż tekst komentarza',
	'LBL_SIGNATURE'				=> 'Podpis',
	'LBL_SUBJECT'				=> 'Temat:',
	'LBL_TEXT_BODY'				=> 'Treść',
	'LBL_TIME'					=> 'Czas wysyłki:',
	'LBL_TO_ADDRS'				=> 'Do',
	'LBL_USE_TEMPLATE'			=> 'Użyj szablonu:',
	'LBL_USERS_SUBPANEL_TITLE'	=> 'Użytkownicy',
	'LBL_USERS'					=> 'Użytkownicy',

	'LNK_ALL_EMAIL_LIST'	=> 'Wszystkie wiadomości',
	'LNK_ARCHIVED_EMAIL_LIST'=> 'Zarchiwizowane wiadomości',
	'LNK_CALL_LIST'		=> 'Rozmowy telefoniczne',
	'LNK_DRAFTS_EMAIL_LIST'		=> 'Wszystkie szkice',
	'LNK_EMAIL_LIST'		=> 'Wiadomości pocztowe',
	'LBL_EMAIL_RELATE'          => 'Połączone z ',
	'LNK_EMAIL_TEMPLATE_LIST'	=> 'Szablony wiadomości',
	'LNK_MEETING_LIST'			=> 'Spotkania',
	'LNK_NEW_ARCHIVE_EMAIL'	=> 'Utwórz archiwum wiadomości',
	'LNK_NEW_CALL'		=> 'Harmonogram rozmów tel.',
	'LNK_NEW_EMAIL_TEMPLATE'=> 'Utwórz Szablon wiadomosci',
	'LNK_NEW_EMAIL'			=> 'Archiwum wiadomości',
	'LNK_NEW_MEETING'		=> 'Harmongram spotkań',
	'LNK_NEW_NOTE'	=> 'Utwórz notatkę lub załącznik',
	'LNK_NEW_SEND_EMAIL'		=> 'Napisz wiadomość',
	'LNK_NEW_TASK'			=> 'Utwórz zadanie',
	'LNK_NOTE_LIST'				=> 'Notatki',
	'LNK_SENT_EMAIL_LIST'		=> 'Wysłane wiadomości',
	'LNK_TASK_LIST'				=> 'Zadania',
	'LNK_VIEW_CALENDAR'			=> 'Dzisiaj',

	'LBL_LIST_ASSIGNED'		=> 'Przydzielone',
	'LBL_LIST_CONTACT_NAME'		=> 'Nazwa kontatku',
	'LBL_LIST_CREATED'			=> 'Utworzone',
	'LBL_LIST_DATE_SENT'		=> 'Data wysyłki',
	'LBL_LIST_DATE'			=> 'Data wysyłki',
	'LBL_LIST_FORM_DRAFTS_TITLE'	=> 'Szkice',
	'LBL_LIST_FORM_SENT_TITLE'	=> 'Wysłane wiadomości',
	'LBL_LIST_FORM_TITLE'		=> 'Lista wiadomości',
	'LBL_LIST_FROM_ADDR'		=> 'Od',
	'LBL_LIST_RELATED_TO'		=> 'Połączone z',
	'LBL_LIST_SUBJECT'		=> 'Temat',
	'LBL_LIST_TIME'			=> 'Czas wysyłki',
	'LBL_LIST_TO_ADDR'			=> 'Do',
	'LBL_LIST_TYPE'				=> 'Typ',

	'NTC_REMOVE_INVITEE'		=> 'Czy napewno chcesz usunąć tego odbiorcę?',
	'WARNING_SETTINGS_NOT_CONF'	=> 'Uwaga: Twoje ustawienia wiadomości nie są kompletne. Nie możesz wysyłać wiadomości.',
	'WARNING_NO_UPLOAD_DIR'		=> 'Załącznik może nie zostać dołączony: Nie znaleziono wartości dla zmiennej "upload_tmp_dir".  Należy poprawić odpowiednią opcję w pliku php.ini.',
	'WARNING_UPLOAD_DIR_NOT_WRITABLE'	=> 'Załączniki mogą nie zostać załadowane: Została wykryta niepoprawna lub nieużywana wartość dla "upload_tmp_dir".  Należy poprawić odpowiednią opcję w pliku php.ini.',

    // for All emails
    'LBL_BUTTON_RAW_TITLE'  => 'Pokaż źródło wiadomości [Alt+E]',
    'LBL_BUTTON_RAW_KEY'     => 'e',
    'LBL_BUTTON_RAW_LABEL'   => 'Pokaż źródło',
    'LBL_BUTTON_RAW_LABEL_HIDE' => 'Ukryj źródło',

	// for InboundEmail
	'LBL_BUTTON_CHECK'		=> 'Spradź pocztę',
	'LBL_BUTTON_CHECK_TITLE'	=> 'Sprawdź, czy nie ma nowych wiadomości [Alt+C]',
	'LBL_BUTTON_CHECK_KEY'		=> 'c',
	'LBL_BUTTON_FORWARD'		=> 'Przekaż',
	'LBL_BUTTON_FORWARD_TITLE'	=> 'Przekaż tę wiadomość [Alt+F]',
	'LBL_BUTTON_FORWARD_KEY'	=> 'f',
	'LBL_BUTTON_REPLY_KEY'		=> 'r',
	'LBL_BUTTON_REPLY_TITLE'	=> 'Odpowiedź [Alt+R]',
	'LBL_BUTTON_REPLY'			=> 'Odpowiedź',
	'LBL_CASES_SUBPANEL_TITLE'	=> 'Sprawy',
	'LBL_INBOUND_TITLE'			=> 'Wiadomość odebrana',
	'LBL_INTENT'				=> 'Cel',
	'LBL_MESSAGE_ID'		=> 'ID Wiadomości',
	'LBL_REPLY_HEADER_1'		=> 'W ',
	'LBL_REPLY_HEADER_2'		=> 'napisano:',
	'LBL_REPLY_TO_ADDRESS'		=> 'Adres "Odpowiedź do"',
	'LBL_REPLY_TO_NAME'		=> 'Nazwa "Odpowiedź do"',

	'LBL_LIST_BUG'				=> 'Błąd',
	'LBL_LIST_CASE'				=> 'Sprawę',
	'LBL_LIST_CONTACT'			=> 'Kontakt',
	'LBL_LIST_LEAD'				=> 'Wizytówkę',
	'LBL_LIST_TASK'				=> 'Zadanie',
	'LBL_LIST_ASSIGNED_TO_NAME' 	=> 'Przydzielony użytkownik',

	// for Inbox
	'LBL_ALL'				=> 'Wszystko',
	'LBL_ASSIGN_WARN'			=> 'Sprawdź, czy są wybrane wszystkie trzy opcje.',
	'LBL_BACK_TO_GROUP'		=> 'Wróc do grupowej skrzynki odbiorczej',
	'LBL_BUTTON_DISTRIBUTE_KEY'	=> 'a',
	'LBL_BUTTON_DISTRIBUTE_TITLE'=> 'Przydziel [Alt+A]',
	'LBL_BUTTON_DISTRIBUTE'		=> 'Przydziel',
	'LBL_BUTTON_GRAB_KEY'		=> 't',
	'LBL_BUTTON_GRAB_TITLE'		=> 'Pobierz z grupy [Alt+T]',
	'LBL_BUTTON_GRAB'		=> 'Pobierz z grupy',
	'LBL_CREATE_BUG'		=> 'Utwórz błąd',
	'LBL_CREATE_CASE'		=> 'Sprawę',
	'LBL_CREATE_CONTACT'		=> 'Kontakt',
	'LBL_CREATE_LEAD'		=> 'Wizytówkę',
	'LBL_CREATE_TASK'		=> 'Zadanie',
	'LBL_DIST_TITLE'		=> 'Przydzielenie',
	'LBL_LOCK_FAIL_DESC'		=> 'Wybrany element jest obecnie niedostępny.',
	'LBL_LOCK_FAIL_USER'		=> ' odebrano prawo własności.',
	'LBL_MASS_DELETE_ERROR'=> 'Żaden z zaznaczonych elementów nie może być usunięty.',
	'LBL_NEW'				=> 'Nowy',
	'LBL_NEXT_EMAIL'			=> 'Nastepny wolny element',
	'LBL_NO_GRAB_DESC'			=> 'Żaden element nie jest teraz dostępny. Spróuj za chwilę.',
	'LBL_QUICK_REPLY'			=> 'Odpowiedz',
	'LBL_REPLIED'			=> 'Odpowiedziano',
	'LBL_SELECT_TEAM'			=> 'Wybierz zespół',
	'LBL_TAKE_ONE_TITLE'		=> 'Powtórzenia',
	'LBL_TITLE_SEARCH_RESULTS'	=> 'Wyszukaj wyniki',
	'LBL_TO'					=> 'Do: ',
	'LBL_TOGGLE_ALL'		=> 'Zaznacz wszystkie',
	'LBL_UNKNOWN'				=> 'Nieznany',
	'LBL_UNREAD_HOME'			=> 'Nieprzeczytane wiadomości',
	'LBL_UNREAD'			=> 'Nieprzeczytane',
	'LBL_USE_ALL'				=> 'Wyszukane wyniki',
	'LBL_USE_CHECKED'			=> 'Tylko zaznaczone',
	'LBL_USE_MAILBOX_INFO'			=> 'Użyj skrzynki',
	'LBL_USE'				=> 'Przydziel:',
	'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Przydziel wybrane rezultaty do: ',
	'LBL_USER_SELECT'			=> 'Wybierz użytkowników',
	'LBL_USING_RULES'			=> 'Używaj zależności:',
	'LBL_WARN_NO_DIST'			=> 'Nie wybrano metody dystrybucji',
	'LBL_WARN_NO_USERS'	=> 'Nie wybrano żadnego użytkownika',

	'LBL_LIST_STATUS'			=> 'Status',
	'LBL_LIST_TITLE_GROUP_INBOX'=> 'Skrzynka grupowa',
	'LBL_LIST_TITLE_MY_DRAFTS'	=> 'Moje szkice',
	'LBL_LIST_TITLE_MY_INBOX'	=> 'Moja skrzynka',
	'LBL_LIST_TITLE_MY_SENT'=> 'Moje wiadomości wysłane',
	'LBL_LIST_TITLE_MY_ARCHIVES'	=> 'Moje zarchiwizowane wiadomości',

	'LNK_CHECK_MY_INBOX'		=> 'Sprawdź moją pocztę',
	'LNK_DATE_SENT'			=> 'Data wysyłki',
	'LNK_GROUP_INBOX'		=> 'Grupowa skrzynka',
	'LNK_MY_DRAFTS'			=> 'Moje szkice',
	'LNK_MY_INBOX'			=> 'Moja skrzynka',
	'LNK_QUICK_REPLY'		=> 'Odpowiedź',
	'LNK_MY_ARCHIVED_LIST'		=> 'Moje archiwum',

	// advanced search
	'LBL_ASSIGNED_TO'			=> 'Przydzielone do:',
	'LBL_MEMBER_OF'				=> 'Macierzysty',
	'LBL_QUICK_CREATE'			=> 'Utwórz stąd',
	'LBL_STATUS'				=> 'Status wiadomości:',
	'LBL_EMAIL_FLAGGED'			=> 'Oflagowana:',
	'LBL_EMAIL_REPLY_TO_STATUS'	=> 'Status wiadomości Odpowiedz do:',
	'LBL_TYPE'					=> 'Typ:',
	//#20680 EmialTemplate Ext.Message.show;
	'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Sprawdź!',
	'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Wybór tego wzorca spowoduje nadpisanie wszystkich danych wprowadzonych już do tworzonej wiadomości. Czy na pewno chcesz kontynuować?',

);
?>
