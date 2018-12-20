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
	'MAS_NO_AVATAR_TEXT'		=> 'Avatar puudub',

	// Log Message
	'ACP_MAS_LOG_SET_SAV'		=> '<strong>Kasutajate profiilipilt & Staatus</strong> <br />&raquo;&nbsp; %s &nbsp;edukalt salvestatud!',
	'MAS_LOG_CONFIG'			=> '<strong>Kasutajate profiilipilt & Staatus</strong> <br />&raquo;&nbsp;Viga seadistamises ‘%1$s’, %2$s %3$s',
	'MAS_ERR_AV_SIZE'			=> '<br />&raquo;&nbsp;Profiilipildi suurus ei ole määratud õigesse vahemiku, seega ei ole vaikimisi määratud',
));
