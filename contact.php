<!DOCTYPE html>
<html lang="en" class= contactHtml>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nous contacter</title>
  <link href="CSS/style.css" rel="stylesheet">
</head>


<body class= contactBody>
  <div class= page-container>
    <?php include "_header.php" ?>
    <div class= content-wrap>
  <h1>Nous contacter</h1>
  <p>Si vous voulez nous contacter, vous pouvez remplir le formulaire ci-dessous.</p>
  <form id="contactForm">
    <section class="contactGrid">
      <section class=contactName>
        <label for="name">Nom:</label><br />
        <input type="text" id="name" name="name" value="Wilder Ranger" /><br />
      </section>
      <section class=contactEmail>
        <label for="email">Email:</label><br />
        <input type="email" id="email" name="email" value="ranger@wild.com" /><br />
      </section>
      <div class="contactImage"></div>
    </section>
    <label for="message">Message:</label><br />
    <textarea id="message" name="message"></textarea>
    <br /><br />
    <input type="submit" value="Envoyer" id="submit" />

  </form>
</div>
<?php include "_footer.php" ?>
</div>
</body>

<script src="script.js"></script>

</html>