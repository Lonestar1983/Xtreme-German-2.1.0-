<table width="100%" cellspacing="2" cellpadding="2" >
    <tr>
        <td align="left" valign="bottom" colspan="2">
            <span class="maintitle">
                {L_REPORT_COMMENT}:&nbsp;<a class="maintitle" href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a>
            </span>
        </td>
    </tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" >
    <tr>
        <td align="left" valign="middle" width="100%">
            <span class="nav">
                <a href="{U_INDEX}" class="nav">{L_INDEX}</a>
            </span>
        </td>
    </tr>
</table>

<form action="{S_ACTION}" method="post">
    <table class="forumline" width="100%" cellspacing="1" cellpadding="3" >
        <tr>
            <td class="catHead" colspan="2">
                {L_REPORT_COMMENT}
            </td>
        </tr>
        <tr>
            <td class="row1" width="22%">
                <span class="gen">
                    {L_COMMENTS}
                </span>
                <br />
                <span class="genmed">
                    {L_LAST_ACTION_COMMENTS_EXPLAIN}
                </span>
            </td>
            <td class="row1">
                <textarea rows="15" cols="35" style="width:450px" tabindex="3" class="post" name="last_action_comments"></textarea>
            </td>
        </tr>
        <tr>
            <td class="catBottom" colspan="2" align="center" height="28">
                <input type="submit" accesskey="s" tabindex="6" name="post" class="mainoption" value="{L_SUBMIT}" />
            </td>
        </tr>
    </table>
</form>

<table class="forumline" width="100%" cellspacing="1" cellpadding="3" >
    <tr>
        <td class="catHead" colspan="2">
            {L_PREVIOUS_COMMENTS}
        </td>
    </tr>
    <tr>
        <td class="row1" width="22%">
            &nbsp;
        </td>
        <td class="row1">
            <span class="gen">
                {REPORT_COMMENTS}
            </span>
        </td>
    </tr>
    <tr>
      <td class="catBottom" colspan="2" align="center" height="28">
           &nbsp;
      </td>
    </tr>
</table>