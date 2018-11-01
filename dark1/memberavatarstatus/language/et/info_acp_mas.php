<?php
/**
 *
 * Member Avatar & Status [MAS]. An extension for the phpBB Forum Software package.
 * Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
 *
 * @copyright (c) 2018, Dark❶ [dark1]
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 *
 * Language : English [en]
 * Translators :
 * 1. Dark❶ [dark1]
 *
 *
 */

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_MAS_TITLE'				=> 'Kasutajate avatar & staatus [MAS]',

	// Log Message
	'ACP_MAS_LOG_TITLE'			=> '<strong>Kasutajate avatar & staatus [MAS]</strong> %s',

	// ACP MAS Modes
	'ACP_MAS_MODE_MAIN'			=> 'MAS Ülevaade',
	'ACP_MAS_MODE_MEMBERLIST'	=> 'MAS Kasutajalisti Seaded',
	'ACP_MAS_MODE_VIEWONLINE'	=> 'MAS Kohaloleku kuvamise Seaded',
	'ACP_MAS_MODE_VIEWFORUM'	=> 'MAS Foorumi kuvamise Seaded',
	'ACP_MAS_MODE_SEARCH'		=> 'MAS Otsingu Seaded',
));
