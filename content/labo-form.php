<div class="laboratoire">
    <form action="" method="post">
      <label for="nom_labo">Nom <span>*</span> :</label>
      <input type="text" name="nom_labo" id="nom_labo" placeholder="Votre Nom"/></br>
      
      <label for="prenom_labo">Prenom <span>*</span> :</label>
      <input type="text" name="prenom_labo" id="prenom_labo" placeholder="Votre Prenom"/></br>

      <label for="birthday_labo">Date de naissance <span>*</span> :</label>
      <input type="date" name="birthday_labo" id="birthday_labo"/></br>

      <label for="sexe_labo">Sexe <span>*</span> :</label>
      <select name="sexe_labo" id="sexe_labo">
        <option value="masculin">Masculin</option>
        <option value="Feminin">Feminin</option>
      </select></br>

      <label for="email_labo">Email <span>*</span> :</label>
      <input type="email" name="email_labo" id="email_labo" placeholder="Votre adresse E-mail"/></br>

      <label for="password_labo"> Mot de passe <span>*</span> :</label>
      <input type="password" name="password_labo" id="password_labo" placeholder="Votre Mot de passe"/></br>

      <label for="confirm_password_labo"> Confirmation de Mot de passe <span>*</span> :</label>
      <input type="password" name="confirm_password_labo" id="confirm_password_labo" placeholder="Confirmer votre Mot de passe"/></br>

      <input type="checkbox" name="confirmation_labo" id="confirmation_labo"/>
      <label id="confirmation_labo" class="terme_butt"><a href="#">J'ai Lue et j'accept les conditions ...</a></label>

      <input type="submit" value="Valider"/></br>

      <label> <span>*</span> Les champs obligatoires</label>
      
      <i class="fa fa-times-circle close-form" aria-hidden="true"></i>
    </form>
  </div>
