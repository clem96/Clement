<div class="connection">
<form class="colonne center" method="post" action="index.php?root=traitement&mode=ajout">
    <h3>Nouvelle utilisateur :</h3>
    <div class="row">
        <label for="nom">nom:</label>
        <input name="nom" required>
    </div>

    <div class="row">
        <label for="prenom">prenom:</label>
        <input name="prenom" required>
    </div>

    <div class="row">
        <label for="pseudo">pseudo:</label>
        <input name="pseudo" required>
    </div>

    <div class="row">
        <label for="motdepasse">mot de passe:</label>
        <input name="motdepasse" required>
    </div>

    <div class="row">
        <label for="confirmation">confirmation:</label>
        <input name="confirmation" required>
    </div>

    <div class="row">
        <label for="comte">comte:</label>
        <input name="comte" required>
    </div>

    <div class="row">
        <label for="email">email:</label>
        <input type="mail" name="email" required>
    </div>
    
    <div class="row">
            <button type="submit">Valider</button>
            <button type="reset"><a href="index.php?root=defaut"></a>Annuler</button>
    </div>
    <input name="idUtilisateur" value="0" type="hidden">
</form>
</div>