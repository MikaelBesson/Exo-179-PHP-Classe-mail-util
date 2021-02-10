<?php
require './classes/Mail.php';

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>index</title>
</head>
<body>
<?php
if(isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['subject']) && isset($_POST['message'])){
    $name = trim(strip_tags($_POST['nom']));
    $email = trim(strip_tags($_POST['mail']));
    $subject = trim(strip_tags($_POST['subject']));
    $message = trim(strip_tags($_POST['message']));
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $mailer = new Mail('m-b',$email,$subject,$message);
        $mailer->sendMail();
    }
}

?>
    <div id="container">
    <form action="index.php" method="post">
        <label for="nom" id="userName">Nom</label><br>
        <input type="text" name="nom" id="nom" placeholder="Votre nom ici"><br><br>
        <label for="destinataire" id="mailTo">Destinataire</label><br>
        <input type="email" name="mail" id="destinataire" placeholder="Exemple@mail.com"><br><br>
        <label for="subject" id="subject">sujet</label><br>
        <input type="text" name="subject" id="subject" placeholder="Votre sujet ici"><br>
        <label for="message" id="textArea">Votre message</label><br>
        <textarea type="text" name="message" id="message" placeholder="Votre message ici" cols="20%" rows="5"></textarea>
        <button type="submit">Envoyer</button>


    </div>
    </form>

</body>
</html>
