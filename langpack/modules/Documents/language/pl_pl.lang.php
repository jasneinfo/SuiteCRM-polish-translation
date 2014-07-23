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
	//module
	'LBL_MODULE_NAME' => 'Dokumenty',
	'LBL_MODULE_TITLE' => 'Dokumenty: Strona główna',
	'LNK_NEW_DOCUMENT' => 'Utwórz dokument',
	'LNK_DOCUMENT_LIST'=> 'Lista dokumentów',
	'LBL_DOC_REV_HEADER' => 'Rewizja dokumentu',
	'LBL_SEARCH_FORM_TITLE'=> 'Wyszukiwanie dokumentu',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'ID Dokumentu',
	'LBL_NAME' => 'Nazwa dokumentu',
	'LBL_DESCRIPTION' => 'Opis',
	'LBL_CATEGORY' => 'Kategoria',
	'LBL_SUBCATEGORY' => 'Podkategoria',
	'LBL_STATUS' => 'Status',
	'LBL_CREATED_BY'=> 'Utworzony przez',
	'LBL_DATE_ENTERED'=> 'Data utworzenia',
	'LBL_DATE_MODIFIED'=> 'Data modyfikacji',
	'LBL_DELETED' => 'Usunięte',
	'LBL_MODIFIED'=> 'Zmodyfikowane przez (ID)',
	'LBL_MODIFIED_USER' => 'Modyfikowany przez',
	'LBL_CREATED'=> 'Utworzony przez',
	'LBL_REVISIONS'=>'Rewizje',
	'LBL_RELATED_DOCUMENT_ID'=>'ID dokumentu powiązanego',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'ID rewizji dokumentu powiązanego',
	'LBL_IS_TEMPLATE'=>'Jest szablonem',
	'LBL_TEMPLATE_TYPE'=>'Typ dokumentu',
	'LBL_ASSIGNED_TO_NAME'=>'Przydzielony do:',
	'LBL_REVISION_NAME' => 'Numer rewizji',
	'LBL_MIME' => 'Typ [Mime]',
	'LBL_REVISION' => 'Rewizja',
	'LBL_DOCUMENT' => 'Powiązane dokumenty',
	'LBL_LATEST_REVISION' => 'Ostatnia rewizja',
	'LBL_CHANGE_LOG'=> 'Historia zmian',
	'LBL_ACTIVE_DATE'=> 'Data publikacji',
	'LBL_EXPIRATION_DATE' => 'Data wygaśnięcia',
	'LBL_FILE_EXTENSION'  => 'Rozszerzenie pliku',
	'LBL_LAST_REV_MIME_TYPE' => 'Ostatnia wersja typu MIME',
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Niesprecyzowany',
    'LBL_HOMEPAGE_TITLE' => 'Moje dokumenty',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Dodaj dokument',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Nazwa dokumentu:',
	'LBL_FILENAME' => 'Nazwa pliku:',
	'LBL_LIST_FILENAME' => 'Plik:',
	'LBL_DOC_VERSION' => 'Rewizja:',
	'LBL_FILE_UPLOAD' => 'Plik:',

	'LBL_CATEGORY_VALUE' => 'Kategoria:',
	'LBL_LIST_CATEGORY' => 'Kategoria',
	'LBL_SUBCATEGORY_VALUE'=> 'Podkategoria:',
	'LBL_DOC_STATUS'=> 'Status:',
	'LBL_LAST_REV_CREATOR' => 'Wersja utworzona przez:',
	'LBL_LASTEST_REVISION_NAME' => 'Nazwa ostatniej wersji:',
	'LBL_SELECTED_REVISION_NAME' => 'Nazwa zaznaczonej wersji:',
	'LBL_CONTRACT_STATUS' => 'Status umowy:',
	'LBL_CONTRACT_NAME' => 'Nazwa umowy:',
	'LBL_LAST_REV_DATE' => 'Data wersji:',
	'LBL_DOWNNLOAD_FILE'=> 'Pobierz plik:',
	'LBL_DET_RELATED_DOCUMENT'=>'Powiązany dokument:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>'Wersja powiązanego dokumentu:',
	'LBL_DET_IS_TEMPLATE'=>'Szablon? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Typ dokumentu:',
	'LBL_DOC_DESCRIPTION'=>'Opis:',
	'LBL_DOC_ACTIVE_DATE'=> 'Data publikacji:',
	'LBL_DOC_EXP_DATE'=> 'Data wygaśnięcia:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Lista dokumentów',
	'LBL_LIST_DOCUMENT' => 'Dokument',
	'LBL_LIST_CATEGORY' => 'Kategoria',
	'LBL_LIST_SUBCATEGORY' => 'Podkategoria',
	'LBL_LIST_REVISION' => 'Rewizja',
	'LBL_LIST_LAST_REV_CREATOR' => 'Opublikowany przez',
	'LBL_LIST_LAST_REV_DATE' => 'Data rewizji',
	'LBL_LIST_VIEW_DOCUMENT'=>'Podgląd',
    'LBL_LIST_DOWNLOAD'=> 'Pobierz',
	'LBL_LIST_ACTIVE_DATE' => 'Data publikacji',
	'LBL_LIST_EXP_DATE' => 'Data wygaśnięcia',
	'LBL_LIST_STATUS'=>'Status',
	'LBL_LINKED_ID' => 'Powiązane id',
	'LBL_SELECTED_REVISION_ID' => 'ID zaznaczonej rewizji',
	'LBL_LATEST_REVISION_ID' => 'ID ostatniej rewizji',
	'LBL_SELECTED_REVISION_FILENAME' => 'Nazwa pliku zaznaczonej rewizji',
	'LBL_FILE_URL' => 'URL Pliku',
    'LBL_REVISIONS_PANEL' => 'Szczegóły rewizji',
    'LBL_REVISIONS_SUBPANEL' => 'Rewizje',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Nazwa dokumentu:',
	'LBL_SF_CATEGORY' => 'Kategoria:',
	'LBL_SF_SUBCATEGORY'=> 'Podkategoria:',
	'LBL_SF_ACTIVE_DATE' => 'Data publikacji:',
	'LBL_SF_EXP_DATE'=> 'Data wygaśnięcia:',

	'DEF_CREATE_LOG' => 'Dokument utworzony przez',

	//error messages
	'ERR_DOC_NAME'=>'Nazwa dokumentu',
	'ERR_DOC_ACTIVE_DATE'=>'Data publikacji',
	'ERR_DOC_EXP_DATE'=> 'Data wygaśnięcia',
	'ERR_FILENAME'=> 'Nazwa pliku',
	'ERR_DOC_VERSION'=> 'Wersja dokumentu',
	'ERR_DELETE_CONFIRM'=> 'Czy chcesz usunąć tę wersję dokumentu?',
	'ERR_DELETE_LATEST_VERSION'=> 'Brak uprawnień do usunięcia najnowszej wersji dokumentu.',
	'LNK_NEW_MAIL_MERGE' => 'Scalanie poczty',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Szablon scalania poczty:',
	'ERR_MISSING_FILE' => 'W tym dokumencie brakuje pliku, prwdopodobnie z powodu błędu podczas dodawania. Spróbuj ponownie dodać plik lub skontaktuj się z administratorem.',

	'LBL_TREE_TITLE' => 'Dokumenty',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nazwa',
	'LBL_CONTRACT_NAME'=>'Nazwa umowy:',
	'LBL_LIST_IS_TEMPLATE'=>'Szablon?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Typ dokumentu',
	'LBL_LIST_SELECTED_REVISION'=>'Wybrane rewizje',
	'LBL_LIST_LATEST_REVISION'=>'Ostatnia rewizja',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Powiązane umowy',
	'LBL_LAST_REV_CREATE_DATE'=>'Data utworzenia ostatniej rewizji',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Umowy',
    'LBL_CREATED_USER' => 'Utworzone przez użytkownika',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Rewersje',
    'LBL_DOCUMENT_INFORMATION' => 'Informacje ogólne',
	'LBL_DOC_ID' => 'Źródło dokumentu (ID)',
	'LBL_DOC_TYPE' => 'Źródło',
	'LBL_LIST_DOC_TYPE' => 'Źródło',
    'LBL_DOC_TYPE_POPUP' => 'Wybierz źródło, do którego dokument zostanie dodany<br> i z którego będzie dostępny.',
	'LBL_DOC_URL' => 'URL źródła dokumentu',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nazwa pliku',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Pierwszych 20 ostatnio zmodyfikowanych plików jest wyświetlonych na poniższej liście w kolejności alfabetycznej. Użyj wyszukiwania do znalezienia innych plików.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nazwa pliku',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Użytkownik usiłował uzyskać dostęp za pomocą nieprawidłowego zewnętrznego API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Sprawdzenie loginu nie powiodło się dla zewnętrznego API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kontrahenci',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Szanse Sprzedaży',
    'LBL_CASES_SUBPANEL_TITLE' => 'Zgłoszenia',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Błędy',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Oferty',
	'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkty',
);


?>