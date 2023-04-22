<?php
/*=======================================================================
 Nuke-Evolution     :   Enhanced Web Portal System
 ========================================================================

 Nuke-Evo Base          :       Basic
 Nuke-Evo Version       :       2.1.0
 Nuke-Evo Build         :       2027
 Nuke-Evo Patch         :       0
 Nuke-Evo Filename      :       #$#FILENAME
 Nuke-Evo Date          :       04-Sep-2010  15:45 (GMT+1)

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

if(!defined('NUKE_EVO')) { die('It\'s not allowed to access this file directly'); }

global $module_name, $userinfo, $anonwaitdays, $outsidewaitdays;
$lang_new[$module_name]['MODULE_NAME'] = str_replace ("_", " ", $module_name);
$lang_new[$module_name]['ADD_REVIEW'] = 'Testbericht hinzuf&uuml;gen';
$lang_new[$module_name]['ADMIN_ADD_CAT'] = 'Kategorie hinzuf&uuml;gen';
$lang_new[$module_name]['ADMIN_ADD_REVIEW'] = 'Testbericht hinzuf&uuml;gen';
$lang_new[$module_name]['ADMIN_ADD_SUBCAT'] = 'Unterkategorie hinzuf&uuml;gen';
$lang_new[$module_name]['ADMIN_BROKEN_REVIEW'] = 'Defekte Testberichte bearbeiten';
$lang_new[$module_name]['ADMIN_CATSUB_VALIDATE'] = 'Unterkategorie freigeben';
$lang_new[$module_name]['ADMIN_CAT_ATTACHED'] = 'an dieser Kategorie angeh&auml;ngt';
$lang_new[$module_name]['ADMIN_CAT_VALIDATE'] = 'Kategorie freigeben';
$lang_new[$module_name]['ADMIN_CHECK_CATEGORY'] = 'Kategorien &uuml;berpr&uuml;fen';
$lang_new[$module_name]['ADMIN_CHECK_CATEGORY_INCLSUB'] = 'Unterkategorien einbezogen';
$lang_new[$module_name]['ADMIN_COMMENTS_DELETE'] = 'Kommentare l&ouml;schen';
$lang_new[$module_name]['ADMIN_EDITORIAL_ADD'] = 'Einleitung hinzuf&uuml;gen';
$lang_new[$module_name]['ADMIN_EDITORIAL_MODIFY'] = 'Einleitung bearbeiten';
$lang_new[$module_name]['ADMIN_GO_MAIN'] = 'Zur&uuml;ck zur Hauptadministration';
$lang_new[$module_name]['ADMIN_HEADER'] = 'Nuke-Evolution Testbericht :: Modul-Administration';
$lang_new[$module_name]['ADMIN_IMAGE_PREVIEW'] = 'Bild Vorschau';
$lang_new[$module_name]['ADMIN_MODIFY_CAT'] = 'Kategorie &auml;ndern';
$lang_new[$module_name]['ADMIN_MODIFY_REVIEW'] = 'Testberichte &auml;ndern';
$lang_new[$module_name]['ADMIN_MODIFY_REVIEW_REQUEST'] ='Testbericht &Auml;nderungsw&uuml;nsche bearbeiten';
$lang_new[$module_name]['ADMIN_MODULE_SETTINGS'] = 'Modul Einstellungen';
$lang_new[$module_name]['ADMIN_OPTIONS'] = 'Admin Optionen:';
$lang_new[$module_name]['ADMIN_REVIEWSADMIN'] = 'Testberichte Administration';
$lang_new[$module_name]['ADMIN_REVIEWS_STATUS'] = 'Testberichte Status';
$lang_new[$module_name]['ADMIN_REVIEW_CHECK'] = 'Testberichte &uuml;berpr&uuml;fen';
$lang_new[$module_name]['ADMIN_REVIEW_CHECK_ALL'] = 'Alle Testberichte &uuml;berpr&uuml;fen';
$lang_new[$module_name]['ADMIN_REVIEW_ORIGINAL'] = 'Original Testbericht';
$lang_new[$module_name]['ADMIN_REVIEW_PROPOSED'] = 'Vorgeschlagener Testbericht';
$lang_new[$module_name]['ADMIN_REVIEW_RATING'] = 'Bewertung';
$lang_new[$module_name]['ADMIN_REVIEW_RATING_AVERAGE'] = 'durchschnittliche Bewertung';
$lang_new[$module_name]['ADMIN_REVIEW_RATING_TOTAL'] = 'Gesamt Bewertung';
$lang_new[$module_name]['ADMIN_REVIEW_VALIDATE'] = 'Testbericht freigeben';
$lang_new[$module_name]['ADMIN_REVIEW_VALIDATE_WAIT'] = 'Bitte warten ..';
$lang_new[$module_name]['ADMIN_REVIEW_VOTE_GUESTS'] = 'Bewertungen von G&auml;sten';
$lang_new[$module_name]['ADMIN_REVIEW_VOTE_REGUSER'] = 'Bewertungen von registrierten Benutzern';
$lang_new[$module_name]['ADMIN_REVIEW_VOTE_TOTAL'] = 'Gesamtbewertungen';
$lang_new[$module_name]['ADMIN_REVIEW_VOTE_UNREG'] = 'Bewertungen von Administratoren';
$lang_new[$module_name]['ADMIN_SETTING_BLOCK_BREAKS_NO'] = 'Wie viele Zeilenumbr&uuml;che sollen zwischen jeden Testbericht eingef&uuml;gt werden ?';
$lang_new[$module_name]['ADMIN_SETTING_BLOCK_HEIGHT'] = 'H&ouml;he des Blocks in Pixel';
$lang_new[$module_name]['ADMIN_SETTING_BLOCK_IMAGE_HEIGHT'] = 'Bildgr&ouml;sse: H&ouml;he';
$lang_new[$module_name]['ADMIN_SETTING_BLOCK_IMAGE_WIDTH'] = 'Bildgr&ouml;sse: Breite';
$lang_new[$module_name]['ADMIN_SETTING_BLOCK_ROWS'] = 'Wie viele Testberichte sollen im Testberichte-Block angezeigt werden ?';
$lang_new[$module_name]['ADMIN_SETTING_BLOCK_SCROLL'] = 'Sollen diese Testberichte als Lauftext angezeigt werden (Scroll) ?';
$lang_new[$module_name]['ADMIN_SETTING_BLOCK_SCROLL_AMOUNT'] = 'Scroll Wert';
$lang_new[$module_name]['ADMIN_SETTING_BLOCK_SCROLL_DIRECTION'] = 'Scroll Richtung';
$lang_new[$module_name]['ADMIN_SETTING_BLOCK_SCROLL_TITLE'] ='Scrollverhalten';
$lang_new[$module_name]['ADMIN_SETTING_FIELDSET_BEHAVIOR'] = 'Verhaltensweise';
$lang_new[$module_name]['ADMIN_SETTING_FIELDSET_BLOCKS'] = 'Block Einstellungen';
$lang_new[$module_name]['ADMIN_SETTING_FIELDSET_VOTING'] = 'Einstellungen f&uuml;r Bewertungen';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_DECIMAL_DETAIL'] = 'Wie viele Dezimalstellen sollen in den Bewertungsdetails angezeigt werden ?';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_DECIMAL_MAIN'] = 'Wie viele Dezimalstellen sollen sonst &uuml;berall angezeigt werden ?';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_NO_ADMINREVIEWS'] = 'Sollen Web Administratoren die M&ouml;glichkeit haben, Testberichte zu ihren eigenen Webseiten hinzuf&uuml;gen zu k&ouml;nnen ?';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_NO_BESTREVIEWS'] = 'Anzahl von Testberichte die auf der Seite f&uuml;r Beliebteste Testberichte angezeigt werden ?';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_NO_NEWREVIEWS'] = 'Anzahl von Testberichte die auf der Seite f&uuml;r Neue Testberichte angezeigt werden ?';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_NO_POPULAR'] = 'Anzahl von Hits f&uuml;r den Testbericht um BELIEBT zu sein ?';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_NO_SEARCHREVIEWS'] = 'Anzahl von Testberichte die auf der Suchseite angezeigt werden (Suchergebnisse) ?';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_NO_UNKNOWNREVIEWS'] = 'Sollen G&auml;ste neue Testberichte einreichen k&ouml;nnen ?';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_NO_UNKNOWNVOTING'] = 'D&uuml;rfen G&auml;ste bewerten ? <br />(Wenn Du es nicht erlaubst, dann sind externe Abstimmungen auch nicht zugelassen)';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_NO_UNKNOWN_MODREQ'] = 'K&ouml;nnen G&auml;ste &Auml;nderungen an den Testberichten vorschlagen ?';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_PERC_GUEST_TO_REGISTERED'] = 'Prozentanteil (xx/100):  G&auml;stebewertungen gegen Bewertungen von registrierten Benutzern';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_PERC_UNREG_TO_REGISTERED'] = 'Prozentanteil (xx/100):  Bewertungen von Administratoren gegen Bewertungen von registrierten Benutzern';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_POPULAR_PERCENT'] = 'Beliebte Testberichte als Prozent darstellen<br />(sonst werden sie als #/Gesamtreviews angezeigt) ?';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_POPULAR_VOTEMIN'] = 'Wie viel Prozent oder Anzahl an Hits muss ein Testbericht erreichen, damit er als BELIEBT angezeigt wird ?';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_REVIEWS_PER_PAGE'] = 'Anzahl Testberichte pro Seite ?';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_SHOW_FEATURE_BOX'] ='Den Testberichte Header auf der Hauptseite anzeigen ? (funktioniert nur, wenn das Modul in "Home" aktiviert wird)';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_TITLE'] = 'Allgemeine Einstellungen';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_TOPREVIEWS_PERCENT'] = 'Best bewertete Testberichte als Prozent darstellen<br />(sonst werden sie als #/Gesamtreviews angezeigt) ?';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_TOPREVIEWS_VOTEMIN'] = 'Wie viel Prozent oder Anzahl an Bewertungen muss ein Testbericht erreichen, damit er als BEST BEWERTET angezeigt wird ?';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_TOPVOTE_MIN'] = 'Anzahl von votes a Testbericht must have to become a TopVoted Testbericht ?';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_VOTEDAYS_UNKNOWN'] = 'Anzahl der Tage, die G&auml;ste warten m&uuml;ssen, bevor sie einen Testbericht bewerten k&ouml;nnen';
$lang_new[$module_name]['ADMIN_SETTING_GENERAL_VOTEDAYS_UNREGS'] = 'Anzahl der Tage, die nicht registrierte Benutzer (wie zB Admins) warten m&uuml;ssen, bevor sie einen Testbericht bewerten k&ouml;nnen';
$lang_new[$module_name]['ADMIN_SETTING_IMAGE_HEIGHT'] = 'Bildgr&ouml;sse: H&ouml;he';
$lang_new[$module_name]['ADMIN_SETTING_IMAGE_THUMBNAIL_URL'] = 'URL des Thumbnail-Servers<br />(Beispiel: http://www.websitethumbnails.net/view.php?url=)';
$lang_new[$module_name]['ADMIN_SETTING_IMAGE_THUMBNAIL_USE'] = 'Soll ein Thumbnail-Server zur Anzeige der Testbericht-Vorschau verwendet werden ?';
$lang_new[$module_name]['ADMIN_SETTING_IMAGE_TITLE'] = 'Bildverhalten';
$lang_new[$module_name]['ADMIN_SETTING_IMAGE_WIDTH'] = 'Bildgr&ouml;sse: Breite';
$lang_new[$module_name]['ADMIN_SETTING_TABLE_COLOR1'] = 'Tabellen Hintergrundfarbe 1';
$lang_new[$module_name]['ADMIN_SETTING_TABLE_COLOR2'] = 'Tabellen Hintergrundfarbe 2';
$lang_new[$module_name]['ADMIN_SETTING_TABLE_TITLE'] = 'Tabellenverhalten';
$lang_new[$module_name]['ADMIN_SETTING_TOPBOX_HEIGHT'] = 'Top-Box H&ouml;he in Pixel';
$lang_new[$module_name]['ADMIN_SETTING_TOPBOX_SCROLL'] = 'Sollen diese Testberichte als Lauftext angezeigt werden (Scroll) ?';
$lang_new[$module_name]['ADMIN_SETTING_TOPBOX_SCROLL_AMOUNT'] = 'Scroll Wert';
$lang_new[$module_name]['ADMIN_SETTING_TOPBOX_SCROLL_DIRECTION'] = 'Scroll Richtung';
$lang_new[$module_name]['ADMIN_SETTING_TOPBOX_SHOW'] = 'Soll die Top-Box angezeigt werden ?';
$lang_new[$module_name]['ADMIN_SETTING_TOPBOX_SHOW_REVIEWS'] = 'Wie viele Eintr&auml;ge sollen in der Top-Box angezeigt werden ?';
$lang_new[$module_name]['ADMIN_SETTING_USE_SECURITYCODE'] = 'Sicherheitscode verwenden ?';
$lang_new[$module_name]['ADMIN_TRANSFER_CAT'] = 'Kategorie &uuml;bertragen';
$lang_new[$module_name]['ADMIN_VALIDATE_FAILED'] = 'Freigabe fehlgeschlagen';
$lang_new[$module_name]['ADMIN_VALIDATE_OPTIONS'] = 'Optionen';
$lang_new[$module_name]['AND'] = 'und';
$lang_new[$module_name]['AUTHOR'] = 'Autor';
$lang_new[$module_name]['BE_PATIENT'] = 'Einen Moment bitte ...';
$lang_new[$module_name]['BOX_HEADER_NEW'] = 'Hitliste der Neuen Testberichte';
$lang_new[$module_name]['BOX_HEADER_TOP'] = 'Hitliste der beliebtesten Testberichte';
$lang_new[$module_name]['BY'] = 'von';
$lang_new[$module_name]['CATEGORIES'] = 'Kategorien';
$lang_new[$module_name]['CATEGORIES'] = 'Kategorien';
$lang_new[$module_name]['CATEGORIESSUB'] = 'Unterkategorien';
$lang_new[$module_name]['CATEGORY'] = 'Kategorie';
$lang_new[$module_name]['CATEGORYSUB'] = 'Unterkategorie';
$lang_new[$module_name]['COMMENTS'] = 'Kommentare';
$lang_new[$module_name]['COMMENTS_NUMBER'] = 'Anzahl der Kommentare';
$lang_new[$module_name]['COMMENTS_TOTAL'] = 'Gesamt Kommentare';
$lang_new[$module_name]['COPYRIGHT'] = 'Copyright &copy; von';
$lang_new[$module_name]['COPYRIGHT2'] = 'Alle Rechte vorbehalten.';
$lang_new[$module_name]['DATE'] = 'Datum';
$lang_new[$module_name]['DATE_WRITTEN'] = 'hinzugef&uuml;gt am';
$lang_new[$module_name]['DAYS'] = 'Tage';
$lang_new[$module_name]['DAYS_30'] = '30 Tage';
$lang_new[$module_name]['DELETE'] = 'L&ouml;schen';
$lang_new[$module_name]['DESCRIPTION'] = 'Beschreibung';
$lang_new[$module_name]['DOWN'] = 'absteigend';
$lang_new[$module_name]['DO_RATE'] = 'Bewerte/Kommentiere diesen Eintrag';
$lang_new[$module_name]['DO_REPORT_BROKEN'] = 'Defekten Testbericht melden';
$lang_new[$module_name]['DO_SHOW_COMMENTS'] = 'Kommentare';
$lang_new[$module_name]['DO_SHOW_DETAILS'] = 'Details';
$lang_new[$module_name]['DO_VOTE_THIS_SITE'] = 'Stimme f&uuml;r diese Seite';
$lang_new[$module_name]['EDIT'] = 'Bearbeiten';
$lang_new[$module_name]['EDITORIAL'] = 'Einleitung';
$lang_new[$module_name]['EDITORIAL_BY'] = 'Einleitung geschrieben von';
$lang_new[$module_name]['EMAIL'] = 'eMail';
$lang_new[$module_name]['ERROR_CAT_EXISTS'] = 'Die Kategorie oder Unterkategorie, die du versucht hast anzulegen, besteht bereits in unserer Datenbank <br />Bitte gehe zur&uuml;ck und versuche es erneut.';
$lang_new[$module_name]['ERROR_NO_CONFIG'] = 'Es gibt ein Problem mit der Datenbank. Es wurde keine '.$module_name.' Konfiguration gefunden.';
$lang_new[$module_name]['ERROR_NO_DESCRIPTION'] = 'Eine Beschreibung f&uuml;r den Testbericht ist sehr wichtig <br />Bitte gehe zur&uuml;ck und erg&auml;nze es';
$lang_new[$module_name]['ERROR_NO_RID'] = 'Wir haben keinen Testbericht in unserer Datenbank gefunden, der Deinen Angaben entspricht.<br />Bitte gehe zur&uuml;ck und versuche es erneut.';
$lang_new[$module_name]['ERROR_NO_TITLE'] = 'Ein Titel f&uuml;r den Testbericht ist sehr wichtig <br />Bitte gehe zur&uuml;ck und erg&auml;nze es';
$lang_new[$module_name]['ERROR_NO_URL'] = 'Eine URL f&uuml;r den Testbericht ist sehr wichtig <br />Bitte gehe zur&uuml;ck und erg&auml;nze es';
$lang_new[$module_name]['ERROR_SECURITYCODE'] = 'Der eingegebene Sicherheitscode passt nicht. Bitte versuche es erneut.<br />(Vielleicht musst Du die Seite neu laden, sobald Du zur&uuml;ck gegangen bist,<br />damit auch der Sicherheitscode aktualisiert wird.)<br /><br />'._GOBACK;
$lang_new[$module_name]['ERROR_URL_EXISTS'] = 'Die URL zu diesem Testbericht ist bereits in unserer Datenbank vorhanden <br />Bitte gehe zur&uuml;ck und korrigiere es';
$lang_new[$module_name]['ERROR_URL_OR_TITLE_EXISTS'] = 'Die URL zu diesem Testbericht oder der Titel ist bereits in unserer Datenbank vorhanden <br />Bitte gehe zur&uuml;ck und korrigiere es.';
$lang_new[$module_name]['HITS'] = 'Besuche';
$lang_new[$module_name]['IGNORE'] = 'Ignorieren';
$lang_new[$module_name]['IMAGE_PIXEL'] = 'in Pixel';
$lang_new[$module_name]['IN'] = 'In';
$lang_new[$module_name]['INDEX_PAGE'] = 'Index Seite';
$lang_new[$module_name]['INFO_ALLOW_TO_RATE'] = 'Erm&ouml;gliche den Besuchern Deiner Webseite das bewerten Deines Testberichtes hier bei uns!';
$lang_new[$module_name]['INFO_DELETE'] = 'L&ouml;schen (L&ouml;scht den <strong><i>defekten Testbericht</i></strong> und die <strong><i>&Auml;nderungsw&uuml;nsche</i></strong> f&uuml;r den angef&uuml;hrten Testbericht)';
$lang_new[$module_name]['INFO_IGNORE'] = 'Ignorieren (L&ouml;scht alle <strong><i>&Auml;nderungsw&uuml;nsche</i></strong> f&uuml;r den angef&uuml;hrten Testbericht)';
$lang_new[$module_name]['INFO_ISTHSYOURSITE'] = 'Ist das Dein eigener Testbericht ?';
$lang_new[$module_name]['INFO_LOOK_AFTER'] = 'Wir werden Deine Meldung schnellst m&ouml;glichst bearbeiten.';
$lang_new[$module_name]['INFO_NO_SUBCAT'] = '--- Keine Unterkategorie ---';
$lang_new[$module_name]['INFO_ONLYONCE'] = 'Bitte Deine URL nur einmal eintragen.<br />Wir pr&uuml;fen Deine URL, ob sie bereits in unserer Datenbank vorhanden ist.';
$lang_new[$module_name]['INFO_ONLYREGISTERED'] = 'Entschuldige, aber wir erlauben diese Aktion auf unserer Seite nur registrierten Benutzern.<br />Wenn Du ein registrierter Benutzer bist, dann bist Du im Moment nicht angemeldet. Du kannst dich <strong><a href="modules.php?name=Your_Account&amp;module='.$module_name.'">hier</a></strong> anmelden.<br />Oder Du kannst dich <strong><a href="modules.php?name=Your_Account&amp;module='.$module_name.'">hier</a></strong> neu registrieren.';
$lang_new[$module_name]['INFO_PENDING'] = 'Dein Testbericht wird nach &Uuml;berpr&uuml;fung durch unser Team aktiviert.<br />Nach der Freigabe Deines Testberichte wirst Du per eMail informiert.';
$lang_new[$module_name]['INFO_PROMOTE_1'] = 'Hier findest Du ein paar M&ouml;glichkeiten um einen <i>Bewerte meinen Testbericht</i> auf Deiner eigenen Webseite zu plazieren.<br />Damit kannst Du die Anzahl der Stimmen f&uuml;r Deinen Testbericht erh&ouml;hen.<br /> W&auml;hle aus einer der unten aufgef&uuml;hrten M&ouml;glichkeiten eine passende aus und f&uuml;ge den Code, der dabei steht, in Deiner Webseite ein.';
$lang_new[$module_name]['INFO_PROMOTE_2'] = 'Ein einfacher Textlink, der wie folgt aussieht, wenn Du den angegeben Code benutzt:';
$lang_new[$module_name]['INFO_PROMOTE_3'] = 'Falls Du einen Button f&uuml;r die Bewertungen bei uns einf&uuml;gen m&ouml;chtest, k&ouml;nnte das wie folgt aussehen:';
$lang_new[$module_name]['INFO_PROMOTE_4'] = 'Hier nun die M&ouml;glichkeit, direkt von Deiner Seite aus eine Stimme f&uuml;r Deinen Testbericht bei uns einzuf&uuml;gen. <br /><strong>Falls Du zu betr&uuml;gen versuchst, werden wir Deinen Testbericht f&uuml;r immer von unserer Seite entfernen.</strong>';
$lang_new[$module_name]['INFO_PROMOTE_5'] = 'Wir w&uuml;nschen Dir viel Erfolg';
$lang_new[$module_name]['INFO_PROMOTE_HTML_CODE_1'] = 'Folgenden HTML- Code solltest Du in diesem Fall auf Deiner Webseite einf&uuml;gen:';
$lang_new[$module_name]['INFO_PROMOTE_HTML_CODE_2'] = 'Folgenden HTML- Code musst Du f&uuml;r den Button auf Deiner Seite einf&uuml;gen:';
$lang_new[$module_name]['INFO_PROMOTE_HTML_CODE_3'] = 'Die Benutzung dieses Formulars erlaubt es Deinen Besuchern, direkt von Deiner Seite aus abzustimmen. Wir erhalten diese Bewertung und f&uuml;gen sie in unsere Datenbank ein. Das obige Beispiel ist deaktiviert, aber auf Deiner Seite wird es funktionieren, wenn Du den HTML- Code genau so dort einf&uuml;gst. Hier nun der HTML- Code:';
$lang_new[$module_name]['INFO_RATE_ADDED_COMMENT'] = 'Deine Bewertung hilft anderen Benutzern bei der Entscheidung, welche Berichte es Wert sind angeschaut zu werden.';
$lang_new[$module_name]['INFO_RATE_ADDED_THANKYOU'] = 'Danke, dass Du Dir Zeit genommen hast, diesen Bericht auf';
$lang_new[$module_name]['INFO_RATE_ADDED_THANKYOU_2'] = 'zu bewerten.';
$lang_new[$module_name]['INFO_RATE_CANDO'] = 'Schreibe bitte auch ein Kommentar f&uuml;r diesen Testbericht.';
$lang_new[$module_name]['INFO_RATE_CANNOTDO'] = 'Wenn Du registriert w&auml;rst, dann k&ouml;nntest Du Kommentare schreiben f&uuml;r diese Webseite.';
$lang_new[$module_name]['INFO_RATE_COMPLETED_OK'] = 'Vielen Dank f&uuml;r die Bewertung.';
$lang_new[$module_name]['INFO_RATING_1'] = 'Bitte nicht mehr als einmal f&uuml;r den gleichen Testbericht abstimmen.';
$lang_new[$module_name]['INFO_RATING_2'] = 'Die Skala reicht von 1 - 10, wobei 1 die schlechteste und 10 die beste Bewertung ist.';
$lang_new[$module_name]['INFO_RATING_3'] = 'Bitte sei objektiv beim Abstimmen. Wenn jeder mit 1 oder 10 abstimmt, sind die Ergebnisse nicht sonderlich aussagekr&auml;ftig.';
$lang_new[$module_name]['INFO_RATING_4'] = 'Du kannst Dir eine &Uuml;bersicht der <a href="modules.php?name='.$module_name.'&amp;op=TopRated">Top Bewerteten Testberichte</a> anzeigen lassen..';
$lang_new[$module_name]['INFO_RATING_5'] = 'Bitte bewerte nicht Deinen eigenen oder den Testbericht eines direkten Konkurrenten, Du w&auml;rst ohnehin nicht objektiv.';
$lang_new[$module_name]['INFO_REG_LOGGEDIN'] = 'Du bist registriert und angemeldet.';
$lang_new[$module_name]['INFO_REVIEW_IMGURL'] = '<span style="font-size: xx-small;">Bildpfad f&uuml;r lokale Bilddateien (Beispiel: modules/Reviews/photos/myimage.png)<br />F&uuml;r den Zugriff auf entfernte Dateien musst Du die URL eingeben (Beispiel: http://www.evo-german.com/myimage.png)<br />Bleibt das Feld leer und Du gibst bei Testbericht-URL eine URL ein, wird versucht ein Thumbnail der angegebenen Adresse zu erstellen.</span>';
$lang_new[$module_name]['INFO_REVIEW_URL'] = '<span style="font-size: xx-small;">Hier kannst Du eine URL f&uuml;r den Zugriff auf entfernte Testberichte hinterlegen.<br />Ist hier eine URL eingetragen, werden die nachfolgenden Felder ignoriert</span>';
$lang_new[$module_name]['INFO_THANKS'] = 'Danke f&uuml;r die Information.';
$lang_new[$module_name]['INFO_UNREG_LOGGEDOUT'] = 'Du bist kein registrierter Benutzer oder Du bist nicht angemeldet.';
$lang_new[$module_name]['INSTRUCTIONS'] = 'Anleitungen';
$lang_new[$module_name]['IN_DB'] = 'in unserer Datenbank';
$lang_new[$module_name]['IP_ADRESS'] = 'IP Adresse';
$lang_new[$module_name]['MAIL_APPROVED_MESSAGE'] = 'Gratulation! Dein eingereichter Testbericht in unserer Datenbank wurde gepr&uuml;ft und freigegeben. Er ist somit f&uuml;r alle Benutzer unserer Seite erreichbar.';
$lang_new[$module_name]['MAIL_BROWSEURL'] = 'Weitere Testberichte findest Du unter ->';
$lang_new[$module_name]['MAIL_HELLO'] = 'Hallo';
$lang_new[$module_name]['MAIL_SIGNATURE'] = 'Das Team';
$lang_new[$module_name]['MAIL_SITENAME'] = 'Dein Testbericht bei: ';
$lang_new[$module_name]['MAIL_THANKYOU'] = 'Vielen Dank f&uuml;r die Einreichung - Du bist immer auf unserer Seite willkommen';
$lang_new[$module_name]['MAIN_CATEGORY_PAGE'] = $lang_new[$module_name]['MODULE_NAME'] . ' Kategorie Hauptseite';
$lang_new[$module_name]['MESSAGE_ADMIN_SETTINGS_SAVED'] = '<span style="color:green">Deine Moduleinstellungen wurden in der Datenbank gespeichert.<br />&Uuml;berpr&uuml;fe Dein <i>Error Logger</i>, ob es Fehlermeldungen gibt</span>';
$lang_new[$module_name]['MESSAGE_COMMENT_DELETE_ALL'] = 'Alle Kommentare sind aus der Datenbank gel&ouml;scht<br />Hoffentlich war das kein Fehler<br />Sie k&ouml;nnen nicht wieder hergestellt werden';
$lang_new[$module_name]['MESSAGE_EDITORIAL_ADDED'] = 'Die Einleitung wurde erfolgreich &uuml;bernommen und gespeichert!';
$lang_new[$module_name]['MESSAGE_EDITORIAL_MODIFIED'] = 'Deine Einleitung ist erfolgreich abge&auml;ndert!';
$lang_new[$module_name]['MESSAGE_EDITORIAL_REMOVED'] = 'eine Einleitung ist erfolgreich entfernt worden';
$lang_new[$module_name]['MESSAGE_RATING_ADDED'] = 'Dein Testbericht wurde erfolgreich in unserer Datenbank gespeichert';
$lang_new[$module_name]['MESSAGE_REVIEW_ADDED'] = 'Der Testbericht wurde erfolgreich in unserer Datenbank hinterlegt!';
$lang_new[$module_name]['MESSAGE_REVIEW_BROKEN_ADDED'] = 'Vielen Dank f&uuml;r Deine Hilfe bei der Steigerung der Nutzbarkeit dieses Indexes.';
$lang_new[$module_name]['MESSAGE_REVIEW_BROKEN_EXISTS'] = 'Vielen Dank f&uuml;r Deine Hilfe bei der Steigerung der Nutzbarkeit dieses Indexes. <br />Aber ein anderer Benutzer war schneller und hat bereits diesen defekten Testbericht gemeldet.';
$lang_new[$module_name]['MESSAGE_REVIEW_MODIFIED'] = 'Der ge&auml;nderte Testbericht wurde erfolgreich gespeichert!';
$lang_new[$module_name]['MESSAGE_REVIEW_SUBMITTED'] = 'Wir haben Deinen Testbericht-Eintrag erhalten. Danke!';
$lang_new[$module_name]['MESSAGE_REVIEW_SUBMITTED_EMAIL'] = 'Du wirst von uns eine eMail erhalten, sobald Dein Eintrag nach Pr&uuml;fung von unserem Team freigegeben wurde.';
$lang_new[$module_name]['MESSAGE_REVIEW_SUBMITTED_NOEMAIL'] = 'Du hast keine eMail Adresse angegeben, aber wir werden Deinen Testbericht gleich pr&uuml;fen.<br />Schau einfach wieder nach, ob Dein Testbericht aktiviert wurde.';
$lang_new[$module_name]['MESSAGE_REVIEW_VALIDATED'] = 'Der eingereichte Testbericht wurde erfolgreich &uuml;bernommen / freigegeben!';
$lang_new[$module_name]['MODIFY'] = 'Bearbeiten';
$lang_new[$module_name]['MODIFY_REVIEW_REQUEST'] = 'Testbericht &Auml;nderungswunsch';
$lang_new[$module_name]['MOST_POPULAR'] = 'Die beliebtesten';
$lang_new[$module_name]['NAME'] = 'Name';
$lang_new[$module_name]['NEW_LAST30DAY'] = 'letzten 30 Tagen';
$lang_new[$module_name]['NEW_LAST3DAY'] = 'letzten 3 Tage';
$lang_new[$module_name]['NEW_LASTWEEK'] = 'letzte Woche';
$lang_new[$module_name]['NEW_THISWEEK'] = 'diese Woche';
$lang_new[$module_name]['NEW_TODAY'] = 'Heute';
$lang_new[$module_name]['NEW_TOTAL'] = 'Neue Testberichte';
$lang_new[$module_name]['NEW_TOTAL_FORLAST'] = 'Neue Testberichte der letzten';
$lang_new[$module_name]['NONE'] = 'Kein';
$lang_new[$module_name]['NOTE'] = 'Beachte, dass';
$lang_new[$module_name]['OF'] = 'von';
$lang_new[$module_name]['OK'] = 'OK';
$lang_new[$module_name]['ORIGINAL'] = 'Original';
$lang_new[$module_name]['PAGE'] = 'Seite';
$lang_new[$module_name]['PAGE_NEXT'] = 'N&auml;chste Seite';
$lang_new[$module_name]['PAGE_NONEXT'] = 'keine n&auml;chste Seite';
$lang_new[$module_name]['PAGE_NOPREVIOUS'] = 'keine vorige Seite';
$lang_new[$module_name]['PAGE_PREVIOUS'] = 'Vorige Seite';
$lang_new[$module_name]['PICSIZE'] = 'Die maximale Gr&ouml;sse des Bildes sollte sein: ';
$lang_new[$module_name]['PICSIZE_HEIGHT'] = 'H&ouml;he';
$lang_new[$module_name]['PICSIZE_WIDTH'] = 'Breite';
$lang_new[$module_name]['POPULAR'] = 'Beliebt';
$lang_new[$module_name]['PROMOTE_RATING_BUTTON_REVIEW'] = 'Button Testbericht';
$lang_new[$module_name]['PROMOTE_RATING_FORM'] = 'Externe Abstimmbox';
$lang_new[$module_name]['PROMOTE_RATING_ID_REFERER'] = 'im Code entspricht Deiner Seiten- ID in der '.EVO_SERVER_SITENAME.' Datenbank. Bitte achte darauf, dass diese Nummer angegeben ist.';
$lang_new[$module_name]['PROMOTE_RATING_TEXT_REVIEW'] = 'Text Testbericht';
$lang_new[$module_name]['PROMOTE_RATING_THE_NUMBER'] = 'Die Zahl';
$lang_new[$module_name]['PROMOTE_YOUR_WEBSITE'] = 'Werbe f&uuml;r Deinen Testbericht';
$lang_new[$module_name]['RATED_BEST'] = 'Bestbewerteste';
$lang_new[$module_name]['RATED_BEST_HEADER'] = 'Bestbewertete Testberichte - Top';
$lang_new[$module_name]['RATED_NUMBERS'] = 'Anzahl der bewerteten Testberichte';
$lang_new[$module_name]['RATED_TOTAL'] = 'Gesamt bewertete Testberichte';
$lang_new[$module_name]['RATED_USER_AVERAGE'] = 'Durchschnittliche Bewertung der Benutzer';
$lang_new[$module_name]['RATING'] = 'Bewertung';
$lang_new[$module_name]['RATING_BREAKDOWN_VALUES'] = 'Anzahl Bewertungen pro Wert';
$lang_new[$module_name]['RATING_DETAILS'] = 'Details der Bewertung';
$lang_new[$module_name]['RATING_NUMBERS'] = 'Anzahl der Bewertungen';
$lang_new[$module_name]['RATING_OVERALL'] = 'Gesamtbewertung';
$lang_new[$module_name]['RATING_REVIEW'] = 'Bewertung der Testberichte';
$lang_new[$module_name]['RATING_REVIEW_HIGHEST'] = 'H&ouml;chste Bewertung';
$lang_new[$module_name]['RATING_REVIEW_LOWEST'] = 'Niedrigste Bewertung';
$lang_new[$module_name]['RATING_WEIGHT_NOTE'] = '* Bemerkung: Diese Seite gewichtet die Bewertungen von registrierten zu nicht registrierten Benutzern im Verh&auml;ltnis';
$lang_new[$module_name]['RATING_WEIGHT_OUTNOTE'] = '* Bemerkung: Diese Seite gewichtet die Bewertungen von registrierten Benutzern zu externen  W&auml;hlern im Verh&auml;ltnis';
$lang_new[$module_name]['REPORT_BROKEN'] = 'Defekten Testbericht melden';
$lang_new[$module_name]['REVIEW'] = 'Testbericht';
$lang_new[$module_name]['REVIEWS'] = 'Testberichte';
$lang_new[$module_name]['REVIEWS'] = 'Testberichte';
$lang_new[$module_name]['REVIEWS_IN_DB'] = 'Testberichte in unserer Datenbank.';
$lang_new[$module_name]['REVIEWS_NEW'] = 'Neue Testberichte';
$lang_new[$module_name]['REVIEWS_SIGNATURE'] = 'Das Team';
$lang_new[$module_name]['REVIEW_BODY'] = 'Textbereich';
$lang_new[$module_name]['REVIEW_FOOTER'] = 'Fussbereich';
$lang_new[$module_name]['REVIEW_HEADER'] = 'Kopfbereich';
$lang_new[$module_name]['REVIEW_ID'] = 'Testbericht ID';
$lang_new[$module_name]['REVIEW_IMAGE'] = 'Bild';
$lang_new[$module_name]['REVIEW_IMAGE_URL'] = 'Bild URL';
$lang_new[$module_name]['REVIEW_OWNER'] = 'Testbericht Inhaber';
$lang_new[$module_name]['REVIEW_PAGETITLE'] = 'Seitentitel';
$lang_new[$module_name]['REVIEW_PROFILE'] = 'Testbericht Profil';
$lang_new[$module_name]['REVIEW_REQUEST_SUBMITTER'] = 'Testbericht eingetragen von';
$lang_new[$module_name]['REVIEW_SIGNATURE'] = 'Signatur';
$lang_new[$module_name]['REVIEW_SUBMIT'] = 'Neuen Testbericht einreichen';
$lang_new[$module_name]['REVIEW_SUBMITTER'] = 'Testbericht Antragsteller';
$lang_new[$module_name]['REVIEW_SUBMIT_DATE'] = 'Testbericht eingereicht am';
$lang_new[$module_name]['REVIEW_URL'] = 'Testbericht URL';
$lang_new[$module_name]['REVIEW_VALIDATE_DATE'] = 'Testbericht gepr&uuml;ft am';
$lang_new[$module_name]['SCROLL_DOWN'] = 'Nach unten';
$lang_new[$module_name]['SCROLL_UP'] = 'Nach oben';
$lang_new[$module_name]['SEARCH_RESULTS_CATEGORIES'] = 'In Kategorien gefunden';
$lang_new[$module_name]['SEARCH_RESULTS_HEADER'] = 'Suchresultate f&uuml;r Deine Abfrage:';
$lang_new[$module_name]['SEARCH_RESULTS_NO_MATCH'] = 'Sorry, aber wir haben kein Suchresultat in unserer Datenbank gefunden';
$lang_new[$module_name]['SEARCH_RESULTS_OTHER_ENGINES'] = 'in anderen Suchmaschinen';
$lang_new[$module_name]['SEARCH_RESULTS_REVIEWS'] = 'In Testberichte gefunden';
$lang_new[$module_name]['SEARCH_RESULTS_TRYSEARCH'] = 'Versuche die Suche';
$lang_new[$module_name]['SHOW'] = 'Zeige';
$lang_new[$module_name]['SHOW_EDITORIAL'] = 'Einleitung anzeigen';
$lang_new[$module_name]['SHOW_MOSTPOPULAR'] = 'Beliebteste Testberichte anzeigen';
$lang_new[$module_name]['SHOW_NEWSREVIEWS'] = 'Neue Testberichte anzeigen';
$lang_new[$module_name]['SHOW_REVIEW_COMMENTS'] = 'Kommentare anzeigen';
$lang_new[$module_name]['SHOW_TOPRATED'] = 'Best bewertete Testberichte anzeigen';
$lang_new[$module_name]['SORTS_BY'] = 'Testberichte sortieren nach';
$lang_new[$module_name]['SORTS_DATE_DOWN'] = 'Datum (Neue Testberichte zuerst gelistet)';
$lang_new[$module_name]['SORTS_DATE_UP'] = 'Datum (Alte Testberichte zuerst gelistet)';
$lang_new[$module_name]['SORTS_IS'] = 'Testberichte derzeit sortiert nach';
$lang_new[$module_name]['SORTS_POPULARITY_DOWN'] = 'Beliebtheit (Meiste zu wenigsten Hits)';
$lang_new[$module_name]['SORTS_POPULARITY_UP'] = 'Beliebtheit (Wenigste zu meisten Hits)';
$lang_new[$module_name]['SORTS_RATING_DOWN'] = 'Bewertung (H&ouml;chste zu niedrigste Wertungen)';
$lang_new[$module_name]['SORTS_RATING_UP'] = 'Bewertung (Niedrigste zu h&ouml;chste Wertungen)';
$lang_new[$module_name]['SORTS_TITLEAZ'] = 'Titel (A nach Z)';
$lang_new[$module_name]['SORTS_TITLEZA'] = 'Titel (Z nach A)';
$lang_new[$module_name]['SUBMIT_ACCEPT'] = 'Akzeptieren';
$lang_new[$module_name]['SUBMIT_ADD'] = 'Hinzuf&uuml;gen';
$lang_new[$module_name]['SUBMIT_BACK_CATEGORY'] = 'Zur&uuml;ck zur Kategorie';
$lang_new[$module_name]['SUBMIT_DELETE'] = 'L&ouml;schen';
$lang_new[$module_name]['SUBMIT_DOIT'] = 'Durchf&uuml;hren';
$lang_new[$module_name]['SUBMIT_GOBACK'] = _GOBACK;
$lang_new[$module_name]['SUBMIT_MODIFY'] = 'Bearbeiten';
$lang_new[$module_name]['SUBMIT_MODIFY_REQUEST'] = '&Auml;nderungswunsch einreichen';
$lang_new[$module_name]['SUBMIT_RETURN'] = 'Zur&uuml;ck';
$lang_new[$module_name]['SUBMIT_SAVE'] = 'Speichern';
$lang_new[$module_name]['SUBMIT_VOTE'] = 'Abstimmen !';
$lang_new[$module_name]['THERE_ARE'] = 'Es sind ';
$lang_new[$module_name]['TITLE'] = 'Titel';
$lang_new[$module_name]['TO'] = 'zu';
$lang_new[$module_name]['TOTAL'] = 'Gesamt';
$lang_new[$module_name]['TOTAL_REVIEWS'] = 'Gesamt Testberichte';
$lang_new[$module_name]['UP'] = 'aufsteigend';
$lang_new[$module_name]['USER'] = 'Benutzer';
$lang_new[$module_name]['USER_REGISTERED'] = 'Registrierte Benutzer';
$lang_new[$module_name]['USER_REGISTERED_NOT'] = 'G&auml;ste';
$lang_new[$module_name]['VISIT'] = 'Anzeigen';
$lang_new[$module_name]['VOTE'] = 'Abstimmen';
$lang_new[$module_name]['VOTERS_OUTSIDE'] = 'Externe W&auml;hler';
$lang_new[$module_name]['VOTERS_UNREGISTERED'] = 'Nicht registrierte Benutzer (W&auml;hler)';
$lang_new[$module_name]['VOTES'] = 'Abstimmungen';
$lang_new[$module_name]['VOTES_OUTSIDE_NONE'] = 'Keine externen Abstimmungen';
$lang_new[$module_name]['VOTES_REGISTERED_NONE'] = 'Keine Abstimmungen von registrierten Benutzern';
$lang_new[$module_name]['VOTES_TOTAL'] = 'Gesamt Abstimmungen';
$lang_new[$module_name]['VOTES_UNREGISTERED_NONE'] = 'Keine Abstimmungen von nicht registrierten Benutzern';
$lang_new[$module_name]['VOTE_MINIMUM'] = 'Abstimmungen mindestens erforderlich sind';
$lang_new[$module_name]['WARN_CAT_DELETE'] = '<span style="color:red">WARNUNG : Willst Du diese Kategorie wirklich l&ouml;schen ? <br />Es werden alle Unterkategorien und alle eingef&uuml;gten Testberichte gel&ouml;scht !</span>';
$lang_new[$module_name]['WARN_CAT_NOT_FOUND'] = '<span style="color:red">Es gibt keine Kategorie zum L&ouml;schen/&Auml;ndern/Bearbeiten/&Uuml;bertragen</span>';
$lang_new[$module_name]['WARN_COMMENT_DELETE_ALL'] = '<span style="color:red">ACHTUNG<br />Dies wird <i>ALLE</i> Kommentare von <i>JEDEM</i> Testbericht l&ouml;schen.<br />Um Kommentare nur von einem speziellen Testbericht zu l&ouml;schen, w&auml;hle <i>'. $lang_new[$module_name]['ADMIN_MODIFY_REVIEW'] .'</i> aus dem Administrationsmen&uuml;</span>';
$lang_new[$module_name]['WARN_COMMENT_NOT_FOUND'] = '<span style="color:red">Es gibt keinen Kommentar zum L&ouml;schen/&Auml;ndern/Bearbeiten/Freigeben</span>';
$lang_new[$module_name]['WARN_EDITORIAL_NOT_FOUND'] = '<span style="color:red">Es gibt keine Einleitung zu diesem Testbericht!</span>';
$lang_new[$module_name]['WARN_RATE_COMPLETED_TOSHORT'] = '<span style="color:red">Du hast bereits in den letzten '.$anonwaitdays.' Tag(en) f&uuml;r diese Seite abgestimmt.</span>';
$lang_new[$module_name]['WARN_RATE_NOT_SELF'] = '<span style="color:red">Du kannst einen selbst eingereichten Testbericht nicht bewerten.<br/>Alle Bewertungen werden gespeichert und gepr&uuml;ft.</span>';
$lang_new[$module_name]['WARN_RATE_NO_SELECTED'] = '<span style="color:red">Keine Bewertung ausgew&auml;hlt - Keine Stimme gez&auml;hlt.</span>';
$lang_new[$module_name]['WARN_RATE_ONLY_ONCE'] = '<span style="color:red">Du kannst f&uuml;r eine Seite nur einmal abstimmen.<br/>Alle Bewertungen werden gespeichert und gepr&uuml;ft.</span>';
$lang_new[$module_name]['WARN_RATE_OUTSIDE_TOSHORT'] = '<span style="color:red">Es wird innerhalb von '.$outsidewaitdays.' Tag(en) nur eine Bewertung pro IP-Adresse erlaubt.</span>';
$lang_new[$module_name]['WARN_RECORDED'] = '<span style="color:red">Benutzername und IP werden gespeichert. Bitte missbrauche unser System nicht.</span>';
$lang_new[$module_name]['WARN_REVIEW_NOT_FOUND'] = '<span style="color:red">Es gibt keinen Testbericht zum L&ouml;schen/&Auml;ndern/Bearbeiten/Freigeben</span>';
$lang_new[$module_name]['WARN_VOTE_NOT_FOUND'] = '<span style="color:red">Es gibt keine Bewertung zum L&ouml;schen/&Auml;ndern/Bearbeiten/Freigeben</span>';
$lang_new[$module_name]['WEEKS_1'] = '1 Woche';
$lang_new[$module_name]['WEEKS_2'] = '2 Wochen';
$lang_new[$module_name]['WELCOME_USERNAME'] = "Hallo ".UsernameColor($userinfo['username']).", ";

?>