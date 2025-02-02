<?php 

$setHTMLLanguageCode = "de";

$locale['title']  =  "Deine Mailadresse: ";

$locale['HowManyMailArrivedBevore']  = "es gibt "; //Counter
$locale['MailHaveBeArrivedAfter']  = " neue Mails.";

$locale['MailArrived']  = "<strong>neue eMails</strong> sind eingetroffen.";

$locale['TranslationForRefresh']  = "Aktualisieren!";

$locale['MailboxReady']  =  "Deine Mailadresse ist bereit.";

$locale['TranslationforCopy']  =  "Kopieren";

$locale['ChangeMailUsername']  = "Adresse wechseln";
$locale['SetToRandom']  = "Zuf&auml;llige Mailadresse generieren";
$locale['UseOwnUsername']  = "oder eigene Adresse anlegen:";

$locale['TranslationForDomain']  = "Domain";

$locale['OpenMailbox']  = "&Ouml;ffne Mailbox";

$locale['TranslationForDownload']  =  "Download";
$locale['TranslationForDelete']  =  "L&ouml;schen";

$locale['EmptyMailbox']  = "<p>Das Postfach ist leer. Solange diese Seite ge&ouml;ffnet ist, wird Automatisch nach neuen E-Mails gesucht...</p>";

$onlynumber['delete_messages_older_than'] = preg_replace('![^0-9]!', '', $config['delete_messages_older_than']); 
$locale['QuickSummary']  = "Dies ist ein Einweg-Postfachdienst.  Wer Ihren Benutzernamen kennt, kann Ihre E-Mails lesen. <br/>Emails werden automatisch und unwiederbringlich gel&ouml;scht nach ". $onlynumber['delete_messages_older_than']." Tagen.";
$locale['collapse']  = "Mehr Infos";
$locale['long-about-1']  = "<p class=\"text-justify\">Diese Einweg-Mailbox h&auml;lt Ihre Hauptmailbox frei von Spam.</p>";
$locale['long-about-2']  = "<p class=\"text-justify\">W&auml;hlen Sie einfach eine Adresse und verwenden Sie sie auf Websites, denen Sie nicht vertrauen und wo Sie die Private Haupt-E-Mail-Adresse nicht preisgeben wollen. <br/>Sobald Sie fertig sind, können Sie die Mailbox einfach vergessen. <br/> Der ganze Spam bleibt hier wird nicht im Privaten Mailaccount landen.</p>";
$locale['long-about-3']  = "<p class=\"text-justify\">Sie wählen die Adresse aus, die Sie verwenden m&ouml;chten, und empfangene E-Mails werden automatisch angezeigt. <br/>Es gibt keine Registrierung und keine Passwörter. <br/>Wenn Sie die Adresse kennen, können Sie die E-Mails lesen.<br/><br/>             <strong>Grunds&auml;tzlich sind alle E-Mails &ouml;ffentlich. <br/>Verwenden Sie es also nicht für vertrauliche Daten.</strong></p>";

$locale['imprintanddisclaimer']  = "Rechtliche Informationen - Impressum, Haftungsausschluss und mehr...";

$locale['ourdomains'] = "&Uuml;bersicht der verf&uuml;gbaren Domains";

$locale['success'] = "Erfolgreich";
$locale['copied'] = "Kopiert!";
$locale['show'] = "Anzeigen";

$locale['adsLocale'] = "Werbeanzeige:";

$locale['Copyright']  = "<small><a href=\"https://github.com/disposable-mailbox/disposable-mailbox\"><strong>disposable-mailbox</strong></a> ".$config['versionnumber']." (DE)</small>";

?>
