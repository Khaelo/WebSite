<?php
//Mail
if(isset($_POST['sendmail'])){
    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
        $header = "MIME-Version: 1.0\r\n";
        $header.= 'From:"'.$_POST['nom'].'"<'.$_POST['mail'].'>' . "\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.= 'Content-Transfer-Encoding: 8bit';

        $message = '
        <html>
            <body>
                <div align="center">
                    <u>Nom de l\'expediteur :</u>' . $_POST['nom'] . '<br />
                    <u>Mail de l\'expediteur :</u>' . $_POST['mail'] . '<br />
                    <u>Site Web de l\'expediteur :</u>' . $_POST['website'] . '<br />
                    <br />
                    ' . nl2br($_POST['message']) . '
                </div>
            </body>
        </html>
        ';

        mail("contact@lucabruno.fr", "CONTACT - LucaBruno.fr", $message, $header);
    }
    else
    {
        $msg="Tous les champs doivent être complétés";
    }
}
?>