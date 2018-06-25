<!DOCTYPE html>
<html>
<head>
  <title>E-Medic</title>
  <link rel="stylesheet" href="..\css\style.css" />
  <link rel="stylesheet" href="..\css\normalize.css" />
  <link rel="stylesheet" href="..\css\font-awesome.min.css" />
  <link rel="stylesheet" href="..\css\creat_account.css"/>
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

  <!-- The dropdown menu -->
  <div class="login-nav">
    <ul>
      <li><i class="fa fa-stethoscope" aria-hidden="true"></i>Professionnel</li>
      <li class="shoose_one selected-one" data-class="doctor"><i class="fa fa-user-md" aria-hidden="true"></i>Docteur</li>
      <li class="shoose_one selected-one" data-class="labo"><i class="fa fa-flask" aria-hidden="true"></i>Laboratoire</li>
      <li class="selected-one" data-class="patient"><i class="fa fa-user-o" aria-hidden="true"></i>Patient</li>
    </ul>
  </div>

  <!-- The patient login form -->
  <?php require('patient.php'); ?>

  <!-- The doctor form -->
  <?php require('doctor-form.php'); ?>

  <!-- The laboratory form -->
  <?php require('labo-form.php'); ?>

  <!-- Add the termes -->
  <?php require('terme.php'); ?>
</div>

</body>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/home-page-scripte.js"></script>
<script src="../js/shoose_one.js"></script>
</html>
