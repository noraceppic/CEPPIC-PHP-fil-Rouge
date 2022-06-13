<form action="index.php?page=login" method="post">
    <div>
        <label for="username">username :</label>
        <input type="text" id="username" name="username" value="<?=$username?>" />
   
        <div>
        <label for="password1">Mot de passe :</label>
        <input type="password" id="password1" name="password1" />
    </div>
    <div>
        <label for="password2">Mot de passe (vérification) :</label>
        <input type="password" id="password2" name="password2" />
    </div> 
    
    <input type="hidden" name="frmLogin" />
   
</form>