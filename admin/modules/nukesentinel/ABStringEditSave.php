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

if (!defined('NUKESENTINEL_ADMIN')) {
   die ('You can\'t access this file directly...');
}

global $admin_file, $db, $ab_config, $_GETVAR;

if (is_admin()) {

    $xp         = $_GETVAR->get('xop', '_REQUEST', 'string');
    $min        = $_GETVAR->get('min', '_REQUEST', 'int');
    $direction  = $_GETVAR->get('direction', '_REQUEST', 'string');
    $string     = $_GETVAR->get('string', '_REQUEST', 'string');

    $testnum1 = $db->sql_unumrows("SELECT * FROM `"._SENTINEL_STRINGS_TABLE."` WHERE `string`='".$string."' AND `sid`!='".$sid."'");
    if ($testnum1 > 0) {
        include_once(NUKE_BASE_DIR.'header.php');
        OpenTable();
        OpenMenu(_AB_EDITSTRINGERROR);
        mastermenu();
        CarryMenu();
        stringmenu();
        CloseMenu();
        CloseTable();
        echo '<br />'."\n";
        OpenTable();
        echo '<center><strong>'._AB_STRINGEXISTS.'</strong></center><br />'."\n";
        echo '<center><strong>'._GOBACK.'</strong></center><br />'."\n";
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
    } elseif ($string == "") {
        include_once(NUKE_BASE_DIR.'header.php');
        OpenTable();
        OpenMenu(_AB_EDITSTRINGERROR);
        mastermenu();
        CarryMenu();
        stringmenu();
        CloseMenu();
        CloseTable();
        echo '<br />'."\n";
        OpenTable();
        echo '<center><strong>'._AB_STRINGEMPTY.'</strong></center><br />'."\n";
        echo '<center><strong>'._GOBACK.'</strong></center><br />'."\n";
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
    } else {
        $getIPs = $db->sql_ufetchrow("SELECT * FROM `"._SENTINEL_STRINGS_TABLE."` WHERE `sid`='".$sid."' LIMIT 0,1");
        $db->sql_uquery("UPDATE `"._SENTINEL_STRINGS_TABLE."` SET `string`='".$string."' WHERE `sid`='".$sid."'");
        $list_string = explode("\r\n", $ab_config['list_string']);
        $list_string = str_replace($getIPs['string'], $string, $list_string);
        rsort($list_string);
        $endlist = count($list_string)-1;
        if (empty($list_string[$endlist])) {
            array_pop($list_string);
        }
        sort($list_string);
        $list_string = implode("\r\n", $list_string);
        absave_config("list_string", $list_string);
        redirect($admin_file.'.php?op='.$xop.'&amp;min='.$min.'&amp;direction='.$direction);
    }
} else {
    redirect($admin_file.'.php?op=ABMain');
}

?>