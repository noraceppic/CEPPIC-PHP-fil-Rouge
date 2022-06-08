<form action="index.php?page=login" method="post">
    <div>
        <label for="username">username :</label>
        <input type="text" id="username" name="username" value="<?=$username?>" />
   
    <label for="password">Mot de passe</label>
   <input type="password" name="password" />
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="conxtion" />
    </div>
    <input type="hidden" name="frmLogin" />
   
</form>