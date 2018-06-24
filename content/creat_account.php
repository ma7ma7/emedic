<!DOCTYPE html>
<html>
<head>
  <title>E-Medic</title>
  <link rel="stylesheet" href="..\css\style.css" />
  <link rel="stylesheet" href="..\css\normalize.css" />
  <link rel="stylesheet" href="..\css\font-awesome.min.css" />
  <link rel="stylesheet" href="..\css\creat_account.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo" >
</head>
<body>

<div class="top-section">
  <header>
    <div class="container">
      <h1><span>E</span>-Medic</h1>
      <nav>
        <a href="../index.php">Accueil</a>
        <a href="#">à propos</a>
        <a href="nous-contacter.php">Nous Contacter</a>
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
  <!-- <i class="fa fa-stethoscope" aria-hidden="true"></i>
  <i class="fa fa-user-o" aria-hidden="true"></i> -->

  <!-- <div class="selected_one">
    <div class="top">
        <i class="fa fa-stethoscope" aria-hidden="true"></i>
        <h3><a href=''>Professionnel</a></h3>
        <div class="pro_type">
            <i class="fa fa-flask" aria-hidden="true"></i>
            <i class="fa fa-user-md" aria-hidden="true"></i>
        </div>
    </div>

    <div class="bottom">
        <i class="fa fa-user-o" aria-hidden="true"></i>
        <h3>Patient</h3>
    </div>
  </div> -->

  <div class="login-nav">
    <ul>
      <li><i class="fa fa-stethoscope" aria-hidden="true"></i>Professionnel</li>
      <li class="shoose_one selected-one" data-class="doctor"><i class="fa fa-user-md" aria-hidden="true"></i>Docteur</li>
      <li class="shoose_one selected-one" data-class="laboratoire"><i class="fa fa-flask" aria-hidden="true"></i>Laboratoire</li>
      <li class="selected-one" data-class="patient"><i class="fa fa-user-o" aria-hidden="true"></i>Patient</li>
    </ul>
  </div>

  <div class="patient">
    <form action="" method="post">
      <label for="nom">Nom <span>*</span> :</label>
      <input type="text" name="nom" id="nom" placeholder="Votre Nom"/></br>
      
      <label for="prenom">Prenom <span>*</span> :</label>
      <input type="text" name="prenom" id="prenom" placeholder="Votre Prenom"/></br>

      <label for="birthday">Date de naissance <span>*</span> :</label>
      <input type="date" name="birthday" id="birthday"/></br>

      <label for="">Sexe <span>*</span> :</label>
      <select name="sexe" id="sexe">
        <option value="masculin">Masculin</option>
        <option value="Feminin">Feminin</option>
      </select></br>

      <label for="email">Email <span>*</span> :</label>
      <input type="email" name="email" id="email" placeholder="Votre adresse E-mail"/></br>

      <label for="password"> Mot de passe <span>*</span> :</label>
      <input type="password" name="password" id="password" placeholder="Votre Mot de passe"/></br>

      <label for="confirm_password"> Confirmation de Mot de passe <span>*</span> :</label>
      <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirmer votre Mot de passe"/></br>

      <input type="checkbox" name="confirmation" id="confirmation"/>
      <label id="confirmation" class="terme_butt"><a href="#">J'ai Lue et j'accept les conditions ...</a></label>

      <input type="submit" value="Valider"/></br>

      <label> <span>*</span> Les champs obligatoires</label>
    </form>
  </div>

  <div class="doctor">

  </div>

  <div class="laboratoire">

  </div>

  <?php require('terme.php'); ?>
</div>

</body>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/home-page-scripte.js"></script>
<script src="../js/shoose_one.js"></script>
</html>
