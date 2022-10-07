<!DOCTYPE html>
<html lang="en" class=contactHtml>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nous contacter</title>
  <link href="CSS/style.css" rel="stylesheet">
</head>


<body class="contactBody">
  <?php include "_header.php" ?>
  <div>
    <h1>Nous contacter</h1>
    <p>Si vous voulez nous contacter, vous pouvez remplir le formulaire ci-dessous.</p>
  </div>
  <form id="contactForm" action="/validation.php" method="POST">
    <section class="contactGrid">
      <section class=contactName>
        <label for="name">Nom:</label><br />
        <input type="text" id="name" name="name" placeholder="Wilder Ranger" arial-label="nom" required /><br />
      </section>
      <section class=contactEmail>
        <label for="email">Email:</label><br />
        <input type="email" id="email" name="email" placeholder="ranger@wild.com" arial-label="email" required /><br />
      </section>
      <div class="contactImage"></div>
    </section>
    <label for="message">Message:</label><br />
    <textarea id="message" name="message" placeholder="Votre message" arial-label="message" required></textarea>
    <br /><br />
    <input type="submit" value="Envoyer" id="submit" />

  </form>
  <?php include "_footer.php" ?>
</body>

<script src="script.js"></script>

</html>