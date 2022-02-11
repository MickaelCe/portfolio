<?php
if (isset($_POST['send'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $sujet = $_POST['sujet'];
   $mess = $_POST['mess'];

   $errorEmpty = false;
   $errorEmail = false;

   $headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n";
   $headers .= 'From: ' . $email;

   $regexname = "/^[^<>]+$/";
   $regexsubject = "/^[^<>]+$/";
   $regexmess = "/^[^<>]+$/";

    if(empty($name) || empty($sujet) || empty($mess) || empty($email)):
            echo "<span class='error'> Merci de remplir tous les champs </span>" ;
            $errorEmpty = true;
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)):
            echo "<span class='error'> L'email est invalide </span>" ;
            $errorEmail = true;
        elseif (preg_match($regexname,$name) && preg_match($regexsubject,$sujet) && preg_match($regexmess,$mess)) :
            echo "<span class='success'> Message envoyé </span>" ;
            mail('cecen.m@codeur.online', 'Envoi depuis la page Contact', $mess, $headers);
        else :
            echo "<span class='error'>Les '<' et '>' sont interdits</span>";
        endif;
} else {
    echo "Il y a une erreur";
}
?>

<script>
   var errorEmpty ="<?php echo $errorEmpty; ?>";
   var errorEmail ="<?php echo $errorEmail; ?>";

   if (errorEmpty == true){
       $("#name, #mail, #mess, #sujet").addClass("input-error");
   }
   if(errorEmail == true){
       $("#mail").addClass("input-error");
   }
   if(errorEmpty == false && errorEmail == false){
       $("#name, #mail, #mess, #sujet").val("");
   }

</script>