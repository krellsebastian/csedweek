<?
$msg = "Im Zuge der csed-week wurde das Feedback-Formular ausgefüllt:\n\n";
$msg .= "Von ".$_GET["name"]."\n";
$msg .= $_GET["comment"];

mail("contact@catrobat.org", "csed-Feedback", $msg);
echo "Thank you for your feedback!";
?>