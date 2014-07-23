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
'LBL_NAME' => 'Nazwa zadania',
'LBL_EXECUTE_TIME'			=> 'Czas uruchomienia',
'LBL_SCHEDULER_ID' 	=> 'Harmonogram',
'LBL_STATUS' 	=> 'Status zadania',
'LBL_RESOLUTION' 	=> 'Rezultat',
'LBL_MESSAGE' 	=> 'Wiadomości',
'LBL_DATA' 	=> 'Data zadania',
'LBL_REQUEUE' 	=> 'Ponów w przypadku niepoprawnego wykonania',
'LBL_RETRY_COUNT' 	=> 'Maksymalna liczba ponownych prób',
'LBL_FAIL_COUNT' 	=> 'Ilość prób',
'LBL_INTERVAL' 	=> 'Odstęp pomiędzy próbami',
'LBL_CLIENT' 	=> 'Właściciel klienta',
'LBL_PERCENT'	=> 'Procent wykonania',
// Errors
'ERR_CALL' 	=> "Nie można wywołać funkcji: %s",
'ERR_CURL' => "Brak biblioteki CURL - nie można uruchomić zadań",
'ERR_FAILED' => "Nieoczekiwany błąd, należy sprawdzić logi PHP oraz sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s w %s w linii %d",
'ERR_NOUSER' => "Nie określono id użytkownika dla zadania",
'ERR_NOSUCHUSER' => "ID użytkownika %s nie został odnaleziony",
'ERR_JOBTYPE' 	=> "Nieznany typ zadania: %s",
'ERR_TIMEOUT' => "Wymuszone przerwanie zadania z powodu przekroczenia czasu wykonania skryptu",
'ERR_JOB_FAILED_VERBOSE' => 'Zadanie %1$s (%2$s) zostało przerwane podczas uruchomienia',
);