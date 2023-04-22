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

global $ab_config, $db, $admin_file;

if (is_admin()) {
    $expiretime = time();
    $clearresult = $db->sql_query("SELECT * FROM `"._SENTINEL_BLOCKED_IPS_TABLE."` WHERE (`expires`<'$expiretime' AND `expires`!='0')");
    while($clearblock = $db->sql_fetchrow($clearresult)) {
        $db->sql_uquery("DELETE FROM `"._SENTINEL_BLOCKED_IPS_TABLE."` WHERE `ip_addr`='".$clearblock['ip_addr']."'");
        $db->sql_uquery("OPTIMIZE TABLE `"._SENTINEL_BLOCKED_IPS_TABLE."`");
        if($ab_config['htaccess_path'] != "") {
            if($ab_config['htaccess_path'] != "") { $ipfile = file($ab_config['htaccess_path']); }
            $ipfile = implode("", $ipfile);
            $i = 1;
            while($i <= 3) {
                $tip = substr($clearblock['ip_addr'], -2);
                if ($tip == ".*") {
                    $clearblock['ip_addr'] = substr($clearblock['ip_addr'], 0, -2);
                }
                $i++;
            }
            $testip = "deny from ".$clearblock['ip_addr']."\n";
            $ipfile = str_replace($testip, "", $ipfile);
            $doit = @fopen($ab_config['htaccess_path'], 'w');
            @fwrite($doit, $ipfile);
            @fclose($doit);
        }
    }
    $db->sql_freeresult($clearresult);
    redirect($admin_file.'.php?op=ABBlockedIPList');
} else {
    redirect($admin_file.'.php?op=ABMain');
}
?>