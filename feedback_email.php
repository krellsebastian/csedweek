<?
$msg = "Im Zuge der csed-week wurde das Feedback-Formular ausgefüllt:\n\n";
$msg .= "Von ".$_GET["name"]."\n";
$msg .= $_GET["comment"];

mail("skrell@gmx.at", "csed-Feedback", $msg);
echo "Danke für Ihr Feedback!";
?>