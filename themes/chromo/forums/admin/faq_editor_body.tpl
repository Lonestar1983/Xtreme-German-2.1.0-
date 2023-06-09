<h1>{L_TITLE}</h1>
<p>{L_EXPLAIN}</p>

<table width="100%" cellpadding="4" cellspacing="1"  class="forumline" align="center">
    <tr>
        <th class="thHead" colspan="5">{L_TITLE}</th>
    </tr>
<!-- BEGIN blockrow -->
    <tr>
        <td class="catLeft" width="100%" {DHTML_ONCLICK}"show_dhtml('{blockrow.BLOCK_ID}')">
            <span class="cattitle">
                <a name="{blockrow.BLOCK_ANCHOR}" >{blockrow.BLOCK_TITLE}</a>
            </span>
        </td>
        <td class="cat" align="center" valign="middle" nowrap="nowrap">
            <span class="gen">
                <a href="{blockrow.U_BLOCK_EDIT}">{L_EDIT}</a>
            </span>
        </td>
        <td class="cat" align="center" valign="middle" nowrap="nowrap">
            <span class="gen">
                <a href="{blockrow.U_BLOCK_DELETE}">{L_DELETE}</a>
            </span>
        </td>
        <td class="cat" align="center" valign="middle" nowrap="nowrap">
            <span class="gen">
                <a href="{blockrow.U_BLOCK_MOVE_UP}">{L_MOVE_UP}</a>
            </span>
        </td>
        <td class="catRight" align="center" valign="middle" nowrap="nowrap">
            <span class="gen">
                <a href="{blockrow.U_BLOCK_MOVE_DOWN}">{L_MOVE_DOWN}</a>
            </span>
        </td>
    </tr>
    <tr>
    <td colspan="5" id="{blockrow.BLOCK_ID}" {blockrow.DHTML_DISPLAY}><table>
<!-- BEGIN questrow -->
    <tr>
        <td class="row1" valign="top" width="100%">
            <span class="gen">
                {blockrow.questrow.QUEST_TITLE}
            </span>
        </td>
        <td class="row2" align="center" valign="middle" nowrap="nowrap">
            <span class="gen">
                <a href="{blockrow.questrow.U_QUEST_EDIT}">{L_EDIT}</a>
            </span>
        </td>
        <td class="row2" align="center" valign="middle" nowrap="nowrap">
            <span class="gen">
                <a href="{blockrow.questrow.U_QUEST_DELETE}">{L_DELETE}</a>
            </span>
        </td>
        <td class="row2" align="center" valign="middle" nowrap="nowrap">
            <span class="gen">
                <a href="{blockrow.questrow.U_QUEST_MOVE_UP}">{L_MOVE_UP}</a>
            </span>
        </td>
        <td class="row2" align="center" valign="middle" nowrap="nowrap">
            <span class="gen">
                <a href="{blockrow.questrow.U_QUEST_MOVE_DOWN}">{L_MOVE_DOWN}</a>
            </span>
        </td>
    </tr>
<!-- END questrow -->
<!-- BEGIN no_questions -->
    <tr>
        <td class="row1" align="center" colspan="5">
            <span class="gen">
                {L_NO_QUESTIONS}
            </span>
        </td>
    </tr>
<!-- END no_questions -->
    <tr>
        <td class="row2" valign="top" colspan="5">
            <form method="post" action="{S_ACTION}" style="margin:0px;">
                <span class="gen">
                    <input class="post" name="quest_title" type="text" value="" size="40" />
                    <input name="mode" type="hidden" value="quest_new" />
                    <input name="block" type="hidden" value="{blockrow.BLOCK_NUMBER}" />
                    <input class="liteoption" type="submit" value="{L_ADD_QUESTION}" name="submit" />
                </span>
            </form>
        </td>
    </tr>
    <tr>
        <td colspan="5" height="1" class="spaceRow">
            <img src="{SPACER_IMG}" alt="" width="1" height="1" />
        </td>
    </tr>
    </table></td></tr>
<!-- END blockrow -->
<!-- BEGIN no_blocks -->
    <tr>
        <td class="catLeft" colspan="5">
            <span class="cattitle">
                {L_NO_BLOCKS}
            </span>
        </td>
    </tr>
<!-- END no_blocks -->
    <tr>
        <td class="catLeft" colspan="5">
            <form method="post" action="{S_ACTION}" style="margin:0px;">
                <span class="gen">
                    <input class="post" name="block_title" type="text" value="" size="60" />
                    <input name="mode" type="hidden" value="block_new" />
                    <input class="liteoption" type="submit" value="{L_ADD_BLOCK}" name="submit" />
                </span>
            </form>
        </td>
    </tr>
</table>
<div style="clear:both;"></div>