<?php

$msg = "Nom:\nom\n";
$msg .= "E-Mail:\email\n";
$msg .= "Message:\message\n\n";

$recipient = "kbartolini@gaming.tech";
$subject = "Formulaire";

$mailheaders = "From: Mon test de formulaire<> \n";
$mailheaders .= "Reply-To: email\n\n";

mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Email envoyé!</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci </H1>";
echo "<P align=center>";
echo "Votre email à bien été envoyé !</P>";
echo "</BODY></HTML>";

?>
