<h1>{L_TITLE}</h1>
<p>{L_TITLE_EXPLAIN}</p>

<form action="{S_ACTION}" name="post" method="post">
    <table width="99%" cellpadding="4" cellspacing="0" >
        <tr>
            <td width="100%">
                <span class="gen">
                    <a href="{U_PACK}" class="gen"><strong>{L_PACK}:</strong></a>&nbsp;{LEVEL}&nbsp;->&nbsp;{PACK}
                </span>
            </td>
            <td nowrap="nowrap" align="right">
                <a href="{U_LEVEL_NEXT}" class="gen">{L_LEVEL_NEXT}</a>
            </td>
        </tr>
    </table>

    <table width="99%" cellpadding="4" cellspacing="1"  align="center" class="forumline">
        <tr>
            <th nowrap="nowrap" colspan="2">{L_KEYS}</th>
        </tr>
<!-- BEGIN row -->
        <tr>
            <td class="{row.CLASS}" nowrap="nowrap">
                <a href="{row.U_KEY}" class="gen">{row.KEY_MAIN}{row.KEY_SUB}</a>
                <span class="gen">
                    {row.STATUS}
                </span>
            </td>
            <td class="{row.CLASS}" width="100%">
                <span class="gen">
                    {row.VALUE}
                </span>
            </td>
        </tr>
<!-- END row -->
<!-- BEGIN none -->
        <tr>
            <td class="row1" align="center">
                <span class="gen">
                    {L_NONE}
                </span>
            </td>
        </tr>
<!-- END none -->
        <tr>
            <td class="catBottom" align="center" colspan="2">
                <input type="submit" name="add" class="mainoption" value="{L_ADD}" />&nbsp;
                <input type="submit" name="cancel" class="liteoption" value="{L_CANCEL}" />
            </td>
        </tr>
    </table>
    {S_HIDDEN_FIELDS}
</form>