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

if (!defined('ADMIN_FILE')) {
   exit('THIS FILE WAS NOT CALLED WITHIN ADMINISTRATION');
}


$module_name = basename(dirname(dirname(__FILE__)));

if(!is_mod_admin($module_name)) {
    DisplayError('<strong>'._ERROR.'</strong><br /><br />' . _ADMIN_NO_MODULE_RIGHTS . $module_name);
}

global $db, $admin_file, $currentlang;

define('IN_SITEMAP_ADMIN', TRUE);
$op = $_GETVAR->get('op', '_REQUEST');

switch ($op) {
    case 'sitemap':
        include(NUKE_MODULES_DIR.$module_name.'/admin/SiteMap.php');
    break;
    case 'sitemap_save':
        include(NUKE_MODULES_DIR.$module_name.'/admin/SiteMapS.php');
    break;
}

?>