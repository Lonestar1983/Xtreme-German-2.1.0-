<table width="99%" cellpadding="4" cellspacing="1"  align="center" class="forumline">
    <tr {DHTML_HAND} {DHTML_ONCLICK}"show_config('board_{DHTML_ID}')">
        <th  height="25" class="menu" colspan="2">{L_SIG_TITLE}</th>
    </tr>
</table>
<div id="board_{DHTML_ID}" {DHTML_DISPLAY}>
<!-- Advanced Signature Divider Control -->
    <table width="99%" cellpadding="4" cellspacing="1"  align="center" class="forumline">
        <tr>
            <td class="row1">
                {L_SIG_INPUT}<br />
                <span class="gensmall">
                    {L_SIG_EXPLAIN}
                </span>
            </td>
            <td class="row2">
                <input type="text" maxlength="255" name="sig_line" value="{SIG_DIVIDERS}" />
            </td>
        </tr>
        <tr>
            <td class="row1">
                {L_MAX_SIG_LENGTH}<br />
                <span class="gensmall">
                    {L_MAX_SIG_LENGTH_EXPLAIN}
                </span>
            </td>
            <td class="row2">
                <input class="post" type="text" size="5" maxlength="4" name="max_sig_chars" value="{SIG_SIZE}" />
            </td>
        </tr>
    </table>
<!-- Advanced Signature Divider Control -->
</div>