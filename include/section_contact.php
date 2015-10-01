<video autoplay loop no-controls muted>
    <source src="video/video.mp4"  type="video/mp4" />
</video>  
      

<div class="container">
<form class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 contact" method="POST" action="index.php?contact&send">
  <h1 class="text-center"><span>C</span>ontact</h1>
<input class="col-md-8 col-md-offset-2 col-xs-6 col-xs-offset-3" type="email" name="email" placeholder="Votre adresse e-mail" required />
<br />
<textarea class="col-md-8 col-md-offset-2 col-xs-6 col-xs-offset-3" rows='5' cols='40' name="message" placeholder="Ecrivez votre message la-dedans :)" required /></textarea>
<br />
<button class="col-md-4 col-md-offset-4 col-xs-4 col-xs-offset-4 btn btn-danger"><i class="fa fa-envelope"></i> Envoyer</button><br />
</form>
</div>

<?php if (isset($_GET['send']) && isset($_POST) && isset($_POST['email']) && isset($_POST['message']) && !empty($_POST['message']) && !empty($_POST['message'])) {

  $link = new mysqli("bestialscyroot.mysql.db","bestialscyroot","War12wick","bestialscyroot")or die("Erreur de connexion");

  $hour = date("H:i:s");
  $day = date("Y/m/d");

  $add = 'Le '.$day.' à '.$hour;

  $link->query("INSERT INTO Contact_bestial(Email,Message,Date) VALUES ('$_POST[email]','$_POST[message]','$add')") or die("Erreur query");

  echo "<script>alert(\"Message envoyé !! \")</script>";

  header("Refresh: 0;url=index.php?contact");

  require("PHPMailer/class.phpmailer.php");


  // Envoi à l'utilisateur
      $mail = new phpmailer();
      $mail->IsHTML(true);
      $mail->CharSet = 'UTF-8';
      $mail->name = str_shuffle(0123456799);
      $mail->FromName = 'Bestial Soul - formulaire de contact';
      $mail->Subject = "$_POST[email]";
      
      $mail->Body = "<body style='color: #6D6E72'>
      <div style='padding: 5%; font-family: caviar; background: url(http://bestialsoul.com/img/navbar.jpg); color: #6d6e72'>
        <div style='background-color: white; padding: 4%'>
          <h1 style='color: #000; text-align: left; margin: 0% ; Float: left; font-family: Verdana; width: 50%'>PixOFHeaven</h1>
          <p style='text-align: justify ;color: #ff0000; Float: left; font-family: -webkit-body; font-size: 1.3vw'><strong>Un Bestial est passé par le formulaire de contact, voici les infos :</strong></p>
          <p style='padding: 2%; border: 1px #C5C5C5 solid; Box-shadow: 0 0 10px 1px #C5C5C5; Margin-top: 20%; color: #6d6e72; font-size: 1.3vw'>Email : $_POST[email]</p>
          <p style='padding: 2%; border: 1px #C5C5C5 solid; Box-shadow: 0 0 10px 1px #C5C5C5; Margin-top: 3%; color: #6d6e72; font-size: 1.3vw'>Son message : $_POST[message]</p>
        </div>
        <div style='text-align: center; font-size: 0.8vw; color: #ff0000; text-shadow: 0 0 10px #ff0000'>
            <p>Bot de PixOFHeaven</p>
            <p style='margin-top: 1%'>© 2015 Tout droits réservés - Bestial Soul</p>
            </div>
      </div>
      </body>";

      $txt='This email was sent in HTML format. Please make sure your preferences allow you to view HTML emails.'; 
      $mail->AltBody = $txt; 

      $mail->AddAddress("bestialsoulband@gmail.com");
      $mail->Send();
      


} ?>