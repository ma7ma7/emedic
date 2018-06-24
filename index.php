<!DOCTYPE html>
<html>
<head>
  <title>E-Medic</title>
  <link rel="stylesheet" href="css\style.css" />
  <link rel="stylesheet" href="css\normalize.css" />
  <link rel="stylesheet" href="css\font-awesome.min.css" />
  
</head>
<body>

<div class="top-section">
  <header>
    <div class="container">
      <h1><span>E</span>-Medic</h1>
      <nav>
        <a href="#" class="selected">Accueil</a>
        <a href="#">à propos</a>
        <a href="content/nous-contacter.php">Nous Contacter</a>
        <a href="#" class="facebook">
          <i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#" class="instagram">
          <i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#" class="twitter">
          <i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#" class="google">
          <i class="fa fa-google-plus" aria-hidden="true"></i></a>
        <a href="#" class="search">
          <i class="fa fa-search" aria-hidden="true"></i></a>
      </nav>
    </div>
  </header>

  <div class="search-label">
    <div class="content">
      <div class="arrow-up"></div>
      <form>
        <input type="search" placeholder="tapez un mot" />
      </form>
    </div>
  </div>

  <section class="se-connecter">
    <h2>se connecter</h2>
    <form>
      <label>E-mail : </label>
      <input type="email"  placeholder="email / nom d'utilistaeur"/>
      <br />
      <label>Mot de passe : </label>
      <input type="password" placeholder="*******" />
      <input type="submit" value="Connexion" />
    </form>
    <p>
      <a href='content/creat_account.php'>ou Créer un compte ?</a>
    </p>
  </section>
</div>

</body>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/home-page-scripte.js"></script>
</html>
