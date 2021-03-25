<!doctype html>
<html lang="fr">

<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_lastname" required="">
    </div>
    <div>
        <label  for="prenom">Prénom :</label>
        <input  type="text"  id="prenom"  name="user_firstname" required="">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required="">
    </div>
    <div>
        <label  for="phone">Téléphone :</label>
        <input  type="tel"  id="phone" pattern="[0-9]{10}" name="user_phone_number" required="">
    </div>
    <div>
        <label  for="subject-choice">Choisir un sujet :</label>
        <select id="subject-choice"  name="user_subject" required="">
            <option value="">-- Choisir une option --</option>
            <option value="loto">Gagner au loto</option>
            <option value="vivre1000ans">Comment vivre 1000ans</option>
            <option value="kahoot">Les futures réponses du Kahoot</option>
            <option value="avatar2">Savoir si Avatar 2 sera une daube</option>
        </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" required=""></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

</html>