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
 * Language : Estonia [et]
 * Translators :
 * 1. Exabot
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
	'ACP_MAS_TITLE'				=> 'Kasutajate avatar & staatus',

	// Log Message
	'ACP_MAS_LOG_TITLE'			=> '<strong>Kasutajate avatar & staatus</strong> %s',

	// ACP MAS Modes
	'ACP_MAS_MODE_MAIN'			=> 'Ülevaade',
	'ACP_MAS_MODE_MEMBERLIST'	=> 'Kasutajalisti Seaded',
	'ACP_MAS_MODE_VIEWONLINE'	=> 'Kohaloleku kuvamise Seaded',
	'ACP_MAS_MODE_VIEWFORUM'	=> 'Foorumi kuvamise Seaded',
	'ACP_MAS_MODE_SEARCH'		=> 'Otsingu Seaded',
));
