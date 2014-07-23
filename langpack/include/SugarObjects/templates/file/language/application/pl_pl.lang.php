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
 
$app_list_strings = array (
strtolower($object_name).'_category_dom' =>
    array (
    '' => '',
    'Marketing' => 'Marketing',
    'Knowledege Base' => 'Baza wiedzy',
    'Sales' => 'Sprzedaż',
  ),

    strtolower($object_name).'_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => 'Pomocnicze materiały marketingowe',
    'Product Brochures' => 'Broszura produktu',
    'FAQ' => 'Instrukcja',
  ),

    strtolower($object_name).'_status_dom' =>
    array (
    'Active' => 'Aktywne',
    'Draft' => 'Wersja robocza',
    'FAQ' => 'Instrukcja',
    'Expired' => 'Wygasłe',
    'Under Review' => 'Re-edycja',
    'Pending' => 'Oczekujące',
  ),
  );
?>