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
	'ACP_MAS_ML_OL_SET'			=> 'Foorumil oleku seaded',
	'ACP_MAS_ML_OL_LB'			=> 'Foorumil oleku staatuse lubamine',
	'ACP_MAS_ML_OL_EXPLAIN'		=> 'Luba foorumil oleku kuvamine liikmetele,<br />See on “Meeskond” , “Grupid” & “Liikmed” lehel.<br />Vaikimisi : Keelatud',
	// Viewonline
	'ACP_MAS_VO_PG_AV_SET'		=> 'Lehe profiilipildi seaded',
	'ACP_MAS_VO_PG_AV_LB'		=> 'Lehekülje profiilipildi lubamine',
	'ACP_MAS_VO_PG_AV_EXPLAIN'	=> 'Luba profiilipilt Kes on foorumil lehel. Vaikimisi : Keelatud',
	'ACP_MAS_VO_PG_AV_SZ_LB'	=> 'Lehe profiilipildi suurus',
	'ACP_MAS_VO_SB_AV_SET'		=> 'Statistika bloki profiilipildi seaded',
	'ACP_MAS_VO_SB_AV_LB'		=> 'Statistika blokki profiilipildi lubamine',
	'ACP_MAS_VO_SB_AV_EXPLAIN'	=> 'Luba profiilipilt Kes on foorumil statistika blokis. Vaikimisi : Keelatud',
	'ACP_MAS_VO_SB_AV_SZ_LB'	=> 'Statistika bloki profiilipildi suurus',
	// Viewforum
	'ACP_MAS_VF_FP_SET'			=> 'Esimese postitaja seaded',
	'ACP_MAS_VF_FP_AV_LB'		=> 'Esimese postitaja profiilipildi lubamine',
	'ACP_MAS_VF_FP_AV_EXPLAIN'	=> 'Luba esimese postitaja profiilipilt foorumi vaates,<br />See on kõikide foorumite lehel.<br />Vaikimisi : Keelatud',
	'ACP_MAS_VF_FP_AV_SZ_LB'	=> 'Esimese postitaja profiilipildi suurus',
	'ACP_MAS_VF_FP_OL_LB'		=> 'Esimese postitaja foorumil oleku kuvamise lubamine',
	'ACP_MAS_VF_FP_OL_EXPLAIN'	=> 'Luba esimese postitaja foorumil oleku kuvamine,<br />See on kõikide foorumite lehel.<br />Vaikimisi : Keelatud',
	'ACP_MAS_VF_LP_SET'			=> 'Viimase postitaja seaded',
	'ACP_MAS_VF_LP_AV_LB'		=> 'Viimase postitaja profiilipildi lubamine',
	'ACP_MAS_VF_LP_AV_EXPLAIN'	=> 'Luba viimase postitaja profiilipilt,<br />See on kõikide foorumite lehel, lisaks avalehel.<br />Vaikimisi : Keelatud',
	'ACP_MAS_VF_LP_AV_SZ_LB'	=> 'Viimase postitaja profiilipildi suurus',
	'ACP_MAS_VF_LP_OL_LB'		=> 'Viimase postitaja foorumil oleku kuvamise lubamine',
	'ACP_MAS_VF_LP_OL_EXPLAIN'	=> 'Luba viimase postitaja foorumil oleku kuvamine,<br />See on kõikide foorumite lehel, lisaks avalehel.<br />Vaikimisi : Keelatud',
	// Search
	'ACP_MAS_SH_FP_SET'			=> 'Teema esimese postitaja seaded',
	'ACP_MAS_SH_FP_AV_LB'		=> 'Teema esimese postitaja profiilipildi lubamine',
	'ACP_MAS_SH_FP_AV_EXPLAIN'	=> 'Luba teema esimese postitaja profiilipilt otsingus,<br />See on kõigil teema otsingu lehtedel.<br />Vaikimisi : Keelatud',
	'ACP_MAS_SH_FP_AV_SZ_LB'	=> 'Teema esimese postitaja profiilipildi suurus',
	'ACP_MAS_SH_FP_OL_LB'		=> 'Teema esimese postitaja foorumil oleku kuvamise lubamine',
	'ACP_MAS_SH_FP_OL_EXPLAIN'	=> 'Luba teema esimese postitaja foorumil oleku kuvamine otsingus,<br />See on kõigil teema otsingu lehtedel.<br />Vaikimisi : Keelatud',
	'ACP_MAS_SH_LP_SET'			=> 'Teema viimase postitaja seaded',
	'ACP_MAS_SH_LP_AV_LB'		=> 'Teema viimase postitaja profiilipildi lubamine',
	'ACP_MAS_SH_LP_AV_EXPLAIN'	=> 'Luba teema viimase postitaja profiilipildi kuvamine otsingus,<br />See on kõigil teema otsingu lehtedel.<br />Vaikimisi : Keelatud',
	'ACP_MAS_SH_LP_AV_SZ_LB'	=> 'Teema viimase postitaja profiilipildi suurus',
	'ACP_MAS_SH_LP_OL_LB'		=> 'Teema viimase postitaja foorumil kuvamise lubamine',
	'ACP_MAS_SH_LP_OL_EXPLAIN'	=> 'Enables the Topic Last Poster Online Status in Search,<br />That is in All Topic Search Pages.<br />Default : No',
	'ACP_MAS_SH_UP_SET'			=> 'Post User Setting',
	'ACP_MAS_SH_UP_AV_LB'		=> 'Post User Avatar Enable',
	'ACP_MAS_SH_UP_AV_EXPLAIN'	=> 'Enables the Post User Avatar in Search,<br />That is in All Post Search Pages.<br />Default : No',
	'ACP_MAS_SH_UP_AV_SZ_LB'	=> 'Post User Avatar Size',
	'ACP_MAS_SH_UP_OL_LB'		=> 'Post User Online Status Enable',
	'ACP_MAS_SH_UP_OL_EXPLAIN'	=> 'Enables the Post User Online Status in Search,<br />That is in All Post Search Pages.<br />Default : No',
));
