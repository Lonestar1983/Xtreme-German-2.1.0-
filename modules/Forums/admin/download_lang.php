<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/***************************************************************************
*                           admin_stats_lang.php
*                            -------------------
*   begin                : Sat, Jan 04, 2003
*   copyright            : (C) 2003 Meik Sievertsen
*   email                : acyd.burn@gmx.de
*
*   $Id: download_lang.php,v 1.4 2003/03/16 18:38:29 acydburn Exp $
*
***************************************************************************/

/***************************************************************************
*
*   This program is free software; you can redistribute it and/or modify
*   it under the terms of the GNU General Public License as published by
*   the Free Software Foundation; either version 2 of the License, or
*   (at your option) any later version.
*
***************************************************************************/

global $file_mode;

//
// Let's set the root dir for phpBB
//
define('IN_PHPBB', TRUE);
require(dirname(__FILE__) . '/pagestart.php');

global $_GETVAR;

if (!empty($board_config))
{
    $lang_file = '/lang_admin_statistics.php';

    if (file_exists(NUKE_FORUMS_DIR . 'language/lang_' . $currentlang . $lang_file))
    {
        include_once(NUKE_FORUMS_DIR . 'language/lang_' . $currentlang . $lang_file);
    }
    elseif (file_exists(NUKE_FORUMS_DIR . 'language/lang_' . $board_config['default_lang'] . $lang_file))
    {
        include_once(NUKE_FORUMS_DIR . 'language/lang_' . $board_config['default_lang'] . $lang_file);
    }
    else
    {
        die('Neither your selected nor the board-default language-file could be found');
    }
}

$lang_file = '/lang_admin_statistics.php';

if (file_exists(NUKE_FORUMS_DIR . 'language/lang_' . $currentlang . $lang_file))
{
    include_once(NUKE_FORUMS_DIR . 'language/lang_' . $currentlang . $lang_file);
}
elseif (file_exists(NUKE_FORUMS_DIR . 'language/lang_' . $board_config['default_lang'] . $lang_file))
{
    include_once(NUKE_FORUMS_DIR . 'language/lang_' . $board_config['default_lang'] . $lang_file);
}
else
{
    die('Neither your selected nor the board-default language-file could be found');
}

$lang_file = '/lang_statistics.php';

if (file_exists(NUKE_FORUMS_DIR . 'language/lang_' . $currentlang . $lang_file))
{
    include_once(NUKE_FORUMS_DIR . 'language/lang_' . $currentlang . $lang_file);
}
elseif (file_exists(NUKE_FORUMS_DIR . 'language/lang_' . $board_config['default_lang'] . $lang_file))
{
    include_once(NUKE_FORUMS_DIR . 'language/lang_' . $board_config['default_lang'] . $lang_file);
}
else
{
    die('Neither your selected nor the board-default language-file could be found');
}

$no_page_header = TRUE;
$mode = $_GETVAR->get('mode', 'request', 'string', '');


$sql = "SELECT * FROM " . STATS_CONFIG_TABLE;

if ( !($result = $db->sql_query($sql)) )
{
    message_die(GENERAL_ERROR, 'Could not query statistics config table', '', __LINE__, __FILE__, $sql);
}

$stats_config = array();

while ($row = $db->sql_fetchrow($result))
{
    $stats_config[$row['config_name']] = trim($row['config_value']);
}

include_once(NUKE_FORUMS_DIR . 'stats_mod/includes/constants.php');
include_once(NUKE_FORUMS_DIR . 'stats_mod/includes/lang_functions.php');
include_once(NUKE_FORUMS_DIR . 'stats_mod/includes/stat_functions.php');
include_once(NUKE_FORUMS_DIR . 'stats_mod/includes/admin_functions.php');

if ($mode == 'export_module')
{
    $module_id  = $_GETVAR->get('module', 'get', 'int', -1);
    $language   = trim($_GETVAR->get('lang', 'get', 'string', ''));

    if (($language == '') || ($module_id == -1))
    {
        message_die(GENERAL_MESSAGE, 'Invalid Call, Hacking Attempt ?');
    }

    $sql = "SELECT short_name FROM " . MODULES_TABLE . " WHERE module_id = " . $module_id;

    if (!($result = $db->sql_query($sql)) )
    {
        message_die(GENERAL_ERROR, 'Unable to get short name', "", __LINE__, __FILE__, $sql);
    }

    if ($db->sql_numrows($result) == 0)
    {
        message_die(GENERAL_ERROR, 'Unable to get Module ' . $module_id);
    }

    $row = $db->sql_fetchrow($result);
    $short_name = trim($row['short_name']);

    if (!($fp = fopen(NUKE_FORUMS_DIR . 'modules/cache/temp.pak', 'wb')))
    {
        message_die(GENERAL_ERROR, 'Unable to write Package File to cache.');
    }

    $language_content = get_lang_entries($short_name, $language);

    fwrite($fp, pack("C*", 0xFF, 0xFC, 0xCC), 3);
    fwrite($fp, 'LANGPACK', 8);
    fwrite($fp, pack("C*", 0xCC, 0xFC, 0xFF), 3);

    $content = '<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/' . "\n\n";
    $content .= '// [' . $language . ']' . "\n";
    $content .= '// [module:' . $short_name . ']' . "\n";

    for ($i = 0; $i < count($language_content); $i++)
    {
        $content .= '$lang[\'' . $language_content[$i]['key'] . '\'] = \'' . $language_content[$i]['value'] . '\';' . "\n";
    }

    $content .= '// [/module:' . $short_name . ']' . "\n";
    $content .= '// [/' . $language . ']' . "\n\n";
    $content .= '?>';

    $size = strlen($content);
    fwrite($fp, $content, $size);
    fwrite($fp, pack("C*", 0xCC, 0xCC, 0xFF), 3);
    fwrite($fp, 'LANGPACK', 8);
    fwrite($fp, pack("C*", 0xFF, 0xCC, 0xCC), 3);

    fclose($fp);

    $content = implode('', file(NUKE_FORUMS_DIR . 'modules/cache/temp.pak'));

    @chmod(NUKE_FORUMS_DIR . 'modules/cache/temp.pak', $file_mode);
    @unlink(NUKE_FORUMS_DIR . 'modules/cache/temp.pak');

    $filename = $short_name . '_' . str_replace('lang_', '', $language) . '.pak';

    header("Content-Type: text/x-delimtext; name=\"" . $filename . "\"");
    header("Content-disposition: attachment; filename=" . $filename);

    echo $content;
}
else if ($mode == 'export_lang')
{
    $language = trim($_GETVAR->get('lang', 'get', 'string', ''));

    if ($language == '')
    {
        message_die(GENERAL_MESSAGE, 'Invalid Call, Hacking Attempt ?');
    }

    $sql = "SELECT short_name FROM " . MODULES_TABLE;

    if (!($result = $db->sql_query($sql)) )
    {
        message_die(GENERAL_ERROR, 'Unable to get short name', "", __LINE__, __FILE__, $sql);
    }

    if ($db->sql_numrows($result) == 0)
    {
        message_die(GENERAL_ERROR, 'Unable to get Modules.');
    }

    $rows = $db->sql_fetchrowset($result);
    $num_rows = $db->sql_numrows($result);

    if (!($fp = fopen(NUKE_FORUMS_DIR . 'modules/cache/temp.pak', 'wb')))
    {
        message_die(GENERAL_ERROR, 'Unable to write Package File to cache.');
    }

    fwrite($fp, pack("C*", 0xFF, 0xFC, 0xCC), 3);
    fwrite($fp, 'LANGPACK', 8);
    fwrite($fp, pack("C*", 0xCC, 0xFC, 0xFF), 3);
    $content = '<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/' . "\n\n";
    $content .= '// [' . $language . ']' . "\n";

    for ($i = 0; $i < $num_rows; $i++)
    {
        $short_name = trim($rows[$i]['short_name']);
        $language_content = get_lang_entries($short_name, $language);

        $content .= '// [module:' . $short_name . ']' . "\n";

        for ($j = 0; $j < count($language_content); $j++)
        {
            $content .= '$lang[\'' . $language_content[$j]['key'] . '\'] = \'' . $language_content[$j]['value'] . '\';' . "\n";
        }

        $content .= '// [/module:' . $short_name . ']' . "\n\n";
    }

    $content .= '// [/' . $language . ']' . "\n\n";
    $content .= '?>';

    $size = strlen($content);
    fwrite($fp, $content, $size);
    fwrite($fp, pack("C*", 0xCC, 0xCC, 0xFF), 3);
    fwrite($fp, 'LANGPACK', 8);
    fwrite($fp, pack("C*", 0xFF, 0xCC, 0xCC), 3);

    fclose($fp);

    $content = implode('', file(NUKE_FORUMS_DIR . 'modules/cache/temp.pak'));

    @chmod(NUKE_FORUMS_DIR . 'modules/cache/temp.pak', $file_mode);
    @unlink(NUKE_FORUMS_DIR . 'modules/cache/temp.pak');

    $filename = $language . '.pak';

    header("Content-Type: text/x-delimtext; name=\"" . $filename . "\"");
    header("Content-disposition: attachment; filename=" . $filename);

    echo $content;
}
else if ($mode == 'export_everything')
{
    $sql = "SELECT short_name FROM " . MODULES_TABLE;

    if (!($result = $db->sql_query($sql)) )
    {
        message_die(GENERAL_ERROR, 'Unable to get short name', "", __LINE__, __FILE__, $sql);
    }

    if ($db->sql_numrows($result) == 0)
    {
        message_die(GENERAL_ERROR, 'Unable to get Modules.');
    }

    $rows = $db->sql_fetchrowset($result);
    $num_rows = $db->sql_numrows($result);

    $languages = get_all_installed_languages();

    if (!($fp = fopen(NUKE_FORUMS_DIR . 'modules/cache/temp.pak', 'wb')))
    {
        message_die(GENERAL_ERROR, 'Unable to write Package File to cache.');
    }

    fwrite($fp, pack("C*", 0xFF, 0xFC, 0xCC), 3);
    fwrite($fp, 'LANGPACK', 8);
    fwrite($fp, pack("C*", 0xCC, 0xFC, 0xFF), 3);
    $content = '<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/' . "\n\n";

    foreach ($languages as $language)
    {
        $content .= '// [' . $language . ']' . "\n";

        for ($i = 0; $i < $num_rows; $i++)
        {
            $short_name = trim($rows[$i]['short_name']);
            $language_content = get_lang_entries($short_name, $language);

            $content .= '// [module:' . $short_name . ']' . "\n";

            for ($j = 0; $j < count($language_content); $j++)
            {
                $content .= '$lang[\'' . $language_content[$j]['key'] . '\'] = \'' . $language_content[$j]['value'] . '\';' . "\n";
            }

            $content .= '// [/module:' . $short_name . ']' . "\n\n";
        }

        $content .= '// [/' . $language . ']' . "\n\n";
    }

    $content .= '?>';

    $size = strlen($content);
    fwrite($fp, $content, $size);
    fwrite($fp, pack("C*", 0xCC, 0xCC, 0xFF), 3);
    fwrite($fp, 'LANGPACK', 8);
    fwrite($fp, pack("C*", 0xFF, 0xCC, 0xCC), 3);

    fclose($fp);

    $content = implode('', file(NUKE_FORUMS_DIR . 'modules/cache/temp.pak'));

    @chmod(NUKE_FORUMS_DIR . 'modules/cache/temp.pak', $file_mode);
    @unlink(NUKE_FORUMS_DIR . 'modules/cache/temp.pak');

    $filename = 'statsv3_lang.pak';

    header("Content-Type: text/x-delimtext; name=\"" . $filename . "\"");
    header("Content-disposition: attachment; filename=" . $filename);

    echo $content;
}
exit;

?>