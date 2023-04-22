<?php
/*=======================================================================
 Nuke-Evolution     :   Enhanced Web Portal System
 ========================================================================

 Nuke-Evo Base      :   Basic
 Nuke-Evo Version   :   2.1.0
 Nuke-Evo Build     :   2027
 Nuke-Evo Patch     :   0
 Nuke-Evo Filename  :   #$#FILENAME
 Nuke-Evo Date      :   04-Sep-2010  15:45 (GMT+1)
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
$lang_path = NUKE_MODULES_DIR . $module_name . '/admin/language/';
if (@file_exists($lang_path . 'lang-' . $currentlang . '.php'))
{
    @include_once($lang_path . 'lang-' . $currentlang . '.php');
}
elseif (@file_exists($lang_path . 'lang-' . $board_config['default_lang'] . '.php'))
{
    @include_once($lang_path . 'lang-' . $board_config['default_lang'] . '.php');
}
else
{
    DisplayError(_NO_ADMIN_MODULE_LANGUAGE_FOUND . $module_name);
}

switch($op) {

    case 'Donations':
        include(NUKE_MODULES_DIR.$module_name.'/admin/index.php');
    break;

}

?>