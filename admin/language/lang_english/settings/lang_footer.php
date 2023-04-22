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

if (!defined('ADMIN_FILE') && !defined('IN_SETTINGS')) {
   exit('THIS FILE WAS NOT CALLED WITHIN ADMINISTRATION');
}

$lang_admin[$settingspoint]['MENU_TITLE'] = 'Footer Settings';
$lang_admin[$settingspoint]['SETTING_HEADER'] = 'Footer Settings';
$lang_admin[$settingspoint]['SETTING_FIELDSET'] = 'Footer Options';

$lang_admin[$settingspoint]['FIELD_FOOTER1'] = '1st Footermessage of your Website';
$lang_admin[$settingspoint]['FIELD_FOOTER2'] = '2nd Footermessage of your Website';
$lang_admin[$settingspoint]['FIELD_FOOTER3'] = '3rd Footermessage of your Website';
$lang_admin[$settingspoint]['FIELD_COPYRIGHT'] = 'Copyright in the Footer of your Website.<br />During Installation you had submitted not to change this copyright.';


$lang_admin[$settingspoint]['FIELD_NONE'] = 'No Inputfield for '.$settingspoint.' available';
$lang_admin[$settingspoint]['BUTTON_SAVE'] = 'Save';
$lang_admin[$settingspoint]['BUTTON_BACK'] = 'Return';

?>