<?php
/*=======================================================================
 Nuke-Evolution   :   Enhanced Web Portal System
 ========================================================================

 Nuke-Evo Base          :   Basic
 Nuke-Evo Version       :   2.1.0
 Nuke-Evo Build         :   2027
 Nuke-Evo Patch         :   0
 Nuke-Evo Filename      :   #$#FILENAME
 Nuke-Evo Date          :   04-Sep-2010  15:45 (GMT+1)

 Copyright (c) 2010 by The EVO CMS Development Team
 ========================================================================

 LICENSE INFORMATIONS COULD BE FOUND IN COPYRIGHTS.PHP WHICH MUST BE
 DISTRIBUTED WITHIN THIS MODULEPACKAGE OR WITHIN FILES WHICH ARE
 USED FROM WITHIN THIS PACKAGE.
 IT IS "NOT" ALLOWED TO DISTRIBUTE THIS MODULE WITHOUT THE ORIGINAL
 COPYRIGHT-FILE.
 ALL INFORMATIONS ABOVE THIS SECTION ARE "NOT" ALLOWED TO BE REMOVED.
 THEY HAVE TO STAY AS THEY ARE.
 IT IS ALLOWED AND SHOULD BE DONE TO ADD ADDITIONAL INFORMATIONS IN
 THE SECTIONS BELOW IF YOU CHANGE OR MODIFY THIS FILE.

/*****[CHANGES]**********************************************************
-=[Base]=-
-=[Mod]=-
 ************************************************************************/

if(!defined('NUKE_EVO')) exit;

$content = "<div style='width:100%;'>\n";

$block_content = "<a href=\"http://www.nuke-evolution.com\" target=\"_blank\"><img src=\"images/evo/minilogo.gif\" alt=\"\" border=\"0\" /></a>&nbsp;&nbsp;";
$block_content .= "<a href=\"http://www.nuke-evolution.de\" target=\"_blank\"><img src=\"images/evo/evo_german_minilogo.gif\" alt=\"\" border=\"0\" /></a>&nbsp;&nbsp;";
$block_content .= "<a href=\"http://www.evo-mods.com\" target=\"_blank\"><img src=\"images/evo/evo_mods_minilogo.gif\" alt=\"\" border=\"0\" /></a>&nbsp;&nbsp;";
$block_content .= "<a href=\"http://wiki.evo-german.com\" target=\"_blank\"><img src=\"images/evo/evo_wiki_minilogo.gif\" alt=\"\" border=\"0\" /></a>&nbsp;&nbsp;";
$block_content .= "<a href=\"http://www.evo-arcade.de\" target=\"_blank\"><img src=\"images/evo/evo_arcade_minilogo.gif\" alt=\"\" border=\"0\" /></a>&nbsp;&nbsp;";
$block_content .= "<a href=\"http://www.evo-themes.de\" target=\"_blank\"><img src=\"images/evo/evo_themes_minilogo.gif\" alt=\"\" border=\"0\" /></a>";

$content .= evo_marquee('block_Nuke_Evolution', '50px', '100%', $block_content, 'right', 1, '100%', '100%', 0, 0);
$content .= "</div>\n";
?>