
<!DOCTYPE html>
<html lang="en" class="container-fluid">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
  <header>
    <div class="row">
      <div class="col offset-md-1 col-md-4 col-sm-4 image">
      <img src="images/logo.png" alt="">
      </div>
      <div class="col col-md-6 col-sm-6 pt-5">
        <h1>Université Joseph KI-ZERBO</h1>
        <h3>UFR/SDS</h3>
      </div>
    </div>
  </header>
<main class="pt-5">
  <form method="post" action="script/script.php">
    <fieldset>
      <legend>Formulaire d'Inscription</legend>
      <div class="form_group">
        <label for="subscription_name">Nom</label>
        <input type="text" name="nom" id="subscription_name" required />
      </div>
      <div class="form_group">
        <label for="subscription_username">Prenom</label>
        <input type="text" name="prenom" id="subscription_username" required />
      </div>
      <div class="form_group">
        <label for="subscription_birthdate">Date de naissance</label>
        <input type="date"  name="date_de_naissance" id="subscription_birthdate" required />
      </div>
      <div class="form_group">
        <label for="subscription_date">Date adhesion</label>
        <input type="date"  name="date_adhesion" id="subscription_date" required />
      </div>
      <div class="form_group">
        <label>Genre</label>
        <select name="genre" required>
          <option value="">-- Sélectionnez --</option>
          <option value="masculin">Masculin</option>
          <option value="feminin">Feminin</option>
          <option value="autres">Autres</option>
        </select>
      </div>
      <div class="form_group">
        <label for="subscription_tuteur">Tuteur</label>
        <input type="text"  name="tuteur" id="subscription_tuteur" required />
      </div>
      <button type="submit" name="submit">Inscription</button>
    </fieldset>
  </form>
</main>
<footer>
<p>Copyrigth.co    Email: josehpkyzerbo@gmail.com    Ouagadougou, Burkina Faso</p>
</footer>
<script src="script/script.js"></script>
</body>
</html>