<?php
if(isset($_POST['sendmail'])){
    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {

        $nom = htmlspecialchars($_POST['nom']);
        $mail = htmlspecialchars($_POST['mail']);
        $website = htmlspecialchars($_POST['website']);
        $message = htmlspecialchars($_POST['message']);

        $header = "MIME-Version: 1.0\r\n";
        $header.= 'From:"'.$nom.'"<'.$mail.'>'."\n";
        $header.='Content-Type:text/html; charset="UTF-8"'."\n";
        $header.= 'Content-Transfer-Encoding: 8bit';

        $message = '
        <html>
            <body>
                <div align="center">
                    <u>Nom de l\'expediteur :</u>'.$nom.'<br />
                    <u>Mail de l\'expediteur :</u>'.$mail.'<br />
                    <u>Site Web de l\'expediteur :</u>'.$website.'<br />
                    <br />
                    '.nl2br($message).'
                </div>
            </body>
        </html>
        ';
        mail("contact@lucabruno.fr", "CONTACT - LucaBruno.fr", $message, $header);
        $msg = "Votre demande à bien été envoyé !";
    }else {
        $msg = "Tous les champs(*) doivent être complétés";
    }
}
?>