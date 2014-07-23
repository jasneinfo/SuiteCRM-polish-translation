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
  'LBL_MODULE_NAME' => 'Sprzedaż',
  'LBL_MODULE_TITLE' => 'Sprzedaż: Strona główna',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie sprzedaży',
  'LBL_VIEW_FORM_TITLE' => 'Podgląd sprzedaży',
  'LBL_LIST_FORM_TITLE' => 'Lista sprzedaży',
  'LBL_SALE_NAME' => 'Nazwa sprzedaży:',
  'LBL_SALE' => 'Sprzedaż:',
  'LBL_NAME' => 'Nazwa sprzedaży',
  'LBL_LIST_SALE_NAME' => 'Nazwa',
  'LBL_LIST_ACCOUNT_NAME' => 'Nazwa kontrahenta',
  'LBL_LIST_AMOUNT' => 'Kwota',
  'LBL_LIST_DATE_CLOSED' => 'Zamknij',
  'LBL_LIST_SALE_STAGE' => 'Etap sprzedaży',
  'LBL_ACCOUNT_ID'=>'ID Kontrahenta',
   'LBL_CURRENCY_ID'=>'ID Waluty',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Sprzedaż - aktualizacja waluty',
  'UPDATE_DOLLARAMOUNTS' => 'Aktualizacja kwoty US Dollar',
  'UPDATE_VERIFY' => 'Weryfikuj kwotę',
  'UPDATE_VERIFY_TXT' => 'Weryfikuje czy wartości kwot w module sprzedaży są wyrażeniami dziesiętnymi, złożonymi wyłącznie ze znaków numerycznych (0-9) i dziesiętnych(.)',
  'UPDATE_FIX' => 'Napraw kwotę',
  'UPDATE_FIX_TXT' => 'Przeprowadza próbę naprawy niewłaściwych kwot przez utworzenie prawidłowych wyrażeń dziesiętnych. Każda modyfikacja kwoty jest zachowana w bazie danych, w polu amount_backup. Jeśli wykonasz tę operację i pojawi się błąd, nie uruchamiaj jej ponownie, zanim nie zostaną przywrócone poprzednie wartości, inaczej można spowodować nadpisanie danych błędnymi wartościami.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Uaktualnia kwoty bazowej dla sprzedaży na podstawie ustawionych obecnie kursów waluty. Ta wartość jest używana do tworzenia wykresow i Widoku listy kwot waluty.',
  'UPDATE_CREATE_CURRENCY' => 'Tworzenie nowej waluty:',
  'UPDATE_VERIFY_FAIL' => 'Weryfikacja rekordu nie powiodła się:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Aktualna kwota:',
  'UPDATE_VERIFY_FIX' => 'Wykonanie naprawy powinno dać',
  'UPDATE_INCLUDE_CLOSE' => 'Weź pod uwagę zamknięte rekordy',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nowy kwota:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nowa waluta:',
  'UPDATE_DONE' => 'Wykonano',
  'UPDATE_BUG_COUNT' => 'Znaleziono błąd, trwa próba naprawienia:',
  'UPDATE_BUGFOUND_COUNT' => 'Znalezione błędy:',
  'UPDATE_COUNT' => 'Rekordy zaktualizowane:',
  'UPDATE_RESTORE_COUNT' => 'Przywrócono kwoty:',
  'UPDATE_RESTORE' => 'Odzyskiwanie kwoty',
  'UPDATE_RESTORE_TXT' => 'Odzyskiwanie wartości kwoty z kopii bezpieczeństwa.',
  'UPDATE_FAIL' => 'Nie mogę zaktualizować - ',
  'UPDATE_NULL_VALUE' => 'Kwota ma wartość NULL. Ustawiam na 0 -',
  'UPDATE_MERGE' => 'Połącz waluty',
  'UPDATE_MERGE_TXT' => 'Łączenie różnych walut w jedną. Jeśli istnieją rózne rekordy dla tej samej waluty, możesz połączyć je razem. To spowoduje również połączenie tych walut w innych modułach.',
  'LBL_ACCOUNT_NAME' => 'Nazwa Kontrahenta:',
  'LBL_AMOUNT' => 'Kwota:',
  'LBL_AMOUNT_USDOLLAR' => 'Kwota w PLN:',
  'LBL_CURRENCY' => 'Waluta:',
  'LBL_DATE_CLOSED' => 'Oczekiwana data zakończenia:',
  'LBL_TYPE' => 'Typ:',
  'LBL_CAMPAIGN' => 'Kampania reklamowa:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potencjalni Klienci',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',  
  'LBL_NEXT_STEP' => 'Następny krok:',
  'LBL_LEAD_SOURCE' => 'Źródło pozyskania:',
  'LBL_SALES_STAGE' => 'Etap sprzedaży:',
  'LBL_PROBABILITY' => 'Szansa sukcesu(%):',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DUPLICATE' => 'Znaleziono rekord o podobnych danych',
  'MSG_DUPLICATE' => 'Rekord sprzedaży o podobnych dany już istnieje w systemie. Lista z podobnymi danymi znajduje się poniżej.<br>Kliknij przycisk Zapisz, aby kontynuować tworzenie, lub przycisk Anuluj lub przycisk Anuluj aby przerwać tworzenie.',
  'LBL_NEW_FORM_TITLE' => 'Utwórz nową sprzedaż',
  'LNK_NEW_SALE' => 'Utwórz nową sprzedaż',
  'LNK_SALE_LIST' => 'Sprzedaż',
  'ERR_DELETE_RECORD' => 'Aby usunąć sprzedaż musisz określić numer rekordu.',
  'LBL_TOP_SALES' => 'Moje najlepsze otwarte sprzedaże',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Czy na pewno usunąć osoby Kontaktowe z tej szansy sprzedaży?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Czy na pewno chcesz usunąć tę sprzedaż z projektu?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Sprzedaż',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Wydarzenia',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historia',
    'LBL_RAW_AMOUNT'=>'Wstępna Kwota',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
	'LBL_ASSIGNED_TO_NAME' => 'Użytkownik:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Przydzielony użytkownik',
  'LBL_MY_CLOSED_SALES' => 'Moje zamknięte sprzedaże',
  'LBL_TOTAL_SALES' => 'Wszystkie sprzedaże',
  'LBL_CLOSED_WON_SALES' => 'Wygrane szanse sprzedaży',
  'LBL_ASSIGNED_TO_ID' =>'Przydzielony do (ID użytkownika)',
  'LBL_CREATED_ID'=>'Utworzony przez (ID)',
  'LBL_MODIFIED_ID'=>'Zmodyfikowane przez (ID)',
  'LBL_MODIFIED_NAME'=>'Zmodyfikowane przez użytkownika',
  'LBL_SALE_INFORMATION'=>'Informacje o sprzedaży',
  'LBL_CURRENCY_ID'=>'ID Waluty',
  'LBL_CURRENCY_NAME'=>'Nazwa Waluty',
  'LBL_CURRENCY_SYMBOL'=>'Symbol Waluty',
  'LBL_EDIT_BUTTON' => 'Edytuj',
   'LBL_REMOVE' => 'Usuń',


);

?>