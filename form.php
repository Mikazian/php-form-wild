<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulaire en PHP</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <form action="thanks.php" method="post">
      <div class="form-container">
        <label for="first-name">Prénom</label>
        <input type="text" id="first-name" name="user_firstname" />
        <label for="last-name">Nom</label>
        <input type="text" id="last-name" name="user_lastname" />
        <label for="mail">E-mail</label>
        <input type="email" id="mail" name="user_mail" />
        <label for="number-phone">Numéro de téléphone</label>
        <input type="tel" id="phone" name="user_phone" />
        <label for="subject">Sujet</label>
        <select name="user_subject" id="subject">
            <option>JavaScript</option>
            <option>PHP</option>
            <option>HTML</option>
            <option>CSS</option>
        </select>
        <textarea id="message" name="user_message">Votre message...</textarea>
        <div class="btn-form">
          <button type="submit">Envoyer</button>
          <button type="reset">Annuler</button>
        </div>
      </div>   
    </form>
    <?php
        var_dump($_POST);
     ?>
  </body>
</html>
