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
	'ACP_MAS_BY'				=> 'By',
	'ACP_MAS_DEV_BY'			=> 'Developed By',

	// ACP MAS Setting Page Common Elements
	'ACP_MAS_AVATAR'			=> 'Luba profiilipilt',
	'ACP_MAS_AV_SIZE'			=> 'Profiilipildi suurus',
	'ACP_MAS_AV_SIZE_PX'		=> 'Pikslid [px]',
	'ACP_MAS_AV_SZ_BIG_EXPLAIN'	=> 'Seadistage profiilipildi suurus pikslites [px],<br />Lubatud ainult 9px kuni 999px.<br />Vaikimisi : 50px',
	'ACP_MAS_AV_SZ_SML_EXPLAIN'	=> 'Seadistage profiilipildi suurus pikslites [px],<br />Lubatud ainult 9px kuni 99px.<br />Vaikimisi : 20px',
	'ACP_MAS_ONLINE'			=> 'Luba kohaloleku kuvamine',

	// ACP MAS Setting Page Non-Common Elements
	'ACP_MAS_PHPBB_AV_SET'		=> 'phpBB Profiilipildi Seade',
	'ACP_MAS_PHPBB_AV_LB'		=> 'Luba profiilipildid',
	'ACP_MAS_PHPBB_AV_EXPLAIN'	=> 'Ükski nendest profiilipildi seadetest ei tööta, sest<br />phpBB profiilipildi kuvamine on keelatud.<br />Luba see siin : ',
	'ACP_MAS_PHPBB_OL_SET'		=> 'phpBB kohaloleku kuvamise seade',
	'ACP_MAS_PHPBB_OL_LB'		=> 'Luba kuvada kasutajate kohalolekut/eemal olekut',
	'ACP_MAS_PHPBB_OL_EXPLAIN'	=> 'Ükski nendest kohaloleku kuvamise seadetest ei tööta, sest<br />phpBB kohaloleku kuvamine on keelatud.<br />Luba see siin : ',
	// Memberlist
	'ACP_MAS_ML_AV_SET'			=> 'Profiilipildi seade',
	'ACP_MAS_ML_AV_LB'			=> 'Luba profiilipilt',
	'ACP_MAS_ML_AV_EXPLAIN'		=> 'Lubab kuvada profiilipilti kasutajatelistis,<br />“Meeskond” , “Grupid” & “Kasutajad” lehel.<br />Vaikimisi : Keelatud',
	'ACP_MAS_ML_AV_SZ_LB'		=> 'Profiilipildi suurus',
	'ACP_MAS_ML_OL_SET'			=> 'Online Status Setting',
	'ACP_MAS_ML_OL_LB'			=> 'Online Status Enable',
	'ACP_MAS_ML_OL_EXPLAIN'		=> 'Enables the Online Status in Memberlist,<br />That is in “The team” , “Groups” & “Members” Page.<br />Vaikimisi : Keelatud',
	// Viewonline
	'ACP_MAS_VO_PG_AV_SET'		=> 'Page Avatar Setting',
	'ACP_MAS_VO_PG_AV_LB'		=> 'Page Avatar Enable',
	'ACP_MAS_VO_PG_AV_EXPLAIN'	=> 'Enables the Avatar in Viewonline Page,<br />That is in “Who is online” Page.<br />Vaikimisi : Keelatud',
	'ACP_MAS_VO_PG_AV_SZ_LB'	=> 'Page Avatar Size',
	'ACP_MAS_VO_SB_AV_SET'		=> 'Stat Block Avatar Setting',
	'ACP_MAS_VO_SB_AV_LB'		=> 'Stat Block Avatar Enable',
	'ACP_MAS_VO_SB_AV_EXPLAIN'	=> 'Enables the Avatar in Viewonline Stat Block,<br />That is in Statistic “Who is online” Block at Bottom of every Page.<br />Default : No',
	'ACP_MAS_VO_SB_AV_SZ_LB'	=> 'Stat Block Avatar Size',
	// Viewforum
	'ACP_MAS_VF_FP_SET'			=> 'First Poster Setting',
	'ACP_MAS_VF_FP_AV_LB'		=> 'First Poster Avatar Enable',
	'ACP_MAS_VF_FP_AV_EXPLAIN'	=> 'Enables the First Poster Avatar in Viewforum,<br />That is in All Forum’s Pages.<br />Default : No',
	'ACP_MAS_VF_FP_AV_SZ_LB'	=> 'First Poster Avatar Size',
	'ACP_MAS_VF_FP_OL_LB'		=> 'First Poster Online Status Enable',
	'ACP_MAS_VF_FP_OL_EXPLAIN'	=> 'Enables the First Poster Online Status in Viewforum,<br />That is in All Forum’s Pages.<br />Default : No',
	'ACP_MAS_VF_LP_SET'			=> 'Last Poster Setting',
	'ACP_MAS_VF_LP_AV_LB'		=> 'Last Poster Avatar Enable',
	'ACP_MAS_VF_LP_AV_EXPLAIN'	=> 'Enables the Last Poster Avatar in Viewforum,<br />That is in All Forum’s Pages & Index Page.<br />Default : No',
	'ACP_MAS_VF_LP_AV_SZ_LB'	=> 'Last Poster Avatar Size',
	'ACP_MAS_VF_LP_OL_LB'		=> 'Last Poster Online Status Enable',
	'ACP_MAS_VF_LP_OL_EXPLAIN'	=> 'Enables the Last Poster Online Status in Viewforum,<br />That is in All Forum’s Pages & Index Page.<br />Default : No',
	// Search
	'ACP_MAS_SH_FP_SET'			=> 'Topic First Poster Setting',
	'ACP_MAS_SH_FP_AV_LB'		=> 'Topic First Poster Avatar Enable',
	'ACP_MAS_SH_FP_AV_EXPLAIN'	=> 'Enables the Topic First Poster Avatar in Search,<br />That is in All Topic Search Pages.<br />Default : No',
	'ACP_MAS_SH_FP_AV_SZ_LB'	=> 'Topic First Topic Poster Avatar Size',
	'ACP_MAS_SH_FP_OL_LB'		=> 'Topic First Poster Online Status Enable',
	'ACP_MAS_SH_FP_OL_EXPLAIN'	=> 'Enables the Topic First Poster Online Status in Search,<br />That is in All Topic Search Pages.<br />Default : No',
	'ACP_MAS_SH_LP_SET'			=> 'Topic Last Poster Setting',
	'ACP_MAS_SH_LP_AV_LB'		=> 'Topic Last Poster Avatar Enable',
	'ACP_MAS_SH_LP_AV_EXPLAIN'	=> 'Enables the Topic Last Poster Avatar in Search,<br />That is in All Topic Search Pages.<br />Default : No',
	'ACP_MAS_SH_LP_AV_SZ_LB'	=> 'Topic Last Poster Avatar Size',
	'ACP_MAS_SH_LP_OL_LB'		=> 'Topic Last Poster Online Status Enable',
	'ACP_MAS_SH_LP_OL_EXPLAIN'	=> 'Enables the Topic Last Poster Online Status in Search,<br />That is in All Topic Search Pages.<br />Default : No',
	'ACP_MAS_SH_UP_SET'			=> 'Post User Setting',
	'ACP_MAS_SH_UP_AV_LB'		=> 'Post User Avatar Enable',
	'ACP_MAS_SH_UP_AV_EXPLAIN'	=> 'Enables the Post User Avatar in Search,<br />That is in All Post Search Pages.<br />Default : No',
	'ACP_MAS_SH_UP_AV_SZ_LB'	=> 'Post User Avatar Size',
	'ACP_MAS_SH_UP_OL_LB'		=> 'Post User Online Status Enable',
	'ACP_MAS_SH_UP_OL_EXPLAIN'	=> 'Enables the Post User Online Status in Search,<br />That is in All Post Search Pages.<br />Default : No',
));
