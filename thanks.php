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

    <p><?php echo ' Merci ' . ' ' . $_POST['user_firstname'] . ' ' . $_POST['user_lastname'] . ' ' . 'de nous avoir contacté à propos de' . ' " ' . $_POST['user_subject'] . ' ". ' . PHP_EOL; ?></p>
    <br>
    <p><?php echo 'Un de nos conseillers vous contactera soit à l\'adresse' . ' ' . $_POST['user_mail'] . ' ou par téléphone au ' . ' ' . $_POST['user_phone'] . ' ' . ' dans les plus brefs délais pour traiter votre demande :' . PHP_EOL; ?></p>
    <br>
    <p><?php echo $_POST['user_message']; ?></p>

  </body>
</html>

