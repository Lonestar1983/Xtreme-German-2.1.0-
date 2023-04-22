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

if (!defined('IN_WEBLINKS_ADMIN')) {
   exit('THIS FILE WAS NOT CALLED WITHIN WEBLINKS ADMINISTRATION');
}

if (empty($ok)) {
    linksHeader();
    OpenTable();
    echo "<center><span class=\"option\"><strong>" . $lang_new[$module_name]['ADMIN_COMMENTS_DELETE'] . "</strong></span></center><br /><br />\n";
    echo "<br /><center><strong>" . $lang_new[$module_name]['WARN_COMMENT_DELETE_ALL'] ."</strong></center>";
    echo "<br />";
    echo "<center><a href=\"".$admin_file.".php?op=LinksCleanVotes&amp;ok=5\">" . $lang_new[$module_name]['SUBMIT_DOIT'] . "</a></center>";
    echo "<center>" . $lang_new[$module_name]['SUBMIT_GOBACK'] ."</center>";
    CloseTable();
} else {
    linksHeader();
    OpenTable();
    $result = $db->sql_query("SELECT distinct `ratinglid` FROM `"._WEBLINKS_VOTEDATA_TABLE."`");
    while ($row = $db->sql_fetchrow($result)) {
        $lid = intval($row['ratinglid']);
        $voteresult = $db->sql_query("SELECT `rating`, `ratinguser`, `ratingcomments` FROM `"._WEBLINKS_VOTEDATA_TABLE."` WHERE `ratinglid` = '$lid'");
        $totalvotesDB = $db->sql_numrows($voteresult);
        include(NUKE_MODULES_DIR.$module_name.'/public/VoteInclude.php');
        $db->sql_query("UPDATE `"._WEBLINKS_LINKS_TABLE."` SET `linkratingsummary`='$finalrating', `totalvotes`='$totalvotesDB', `totalcomments`='$truecomments' WHERE `lid` = '$lid'");
      }
    $db->sql_freeresult($result);
    echo "<center><span class=\"option\"><strong>" . $lang_new[$module_name]['ADMIN_COMMENTS_DELETE'] . "</strong></span></center><br /><br />\n";
    echo "<br /><center><strong>" . $lang_new[$module_name]['MESSAGE_COMMENT_DELETE_ALL'] ."</strong></center>";
    echo "<br /><center><a href=\"".$admin_file.".php?op=Links\">" . $lang_new[$module_name]['OK'] . "</a></center>";
    CloseTable();
}
include_once(NUKE_BASE_DIR.'footer.php');

?>