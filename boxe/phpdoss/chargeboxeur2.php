<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
try{
    $dsn = "mysql:dbname=boxe;host=localhost";
    $user="root";
    $password= "";

    $db = new PDO($dsn, $user,$password);
}catch(PDOException $e){
    die('Erreur'.$e);
}
?>
<select name="boxeur2" id="boxeur2">
<?php
$response = $db->query('SELECT * FROM boxeur');
while ($donnees = $response->fetch())
{
?>
        <option values="<php echo $donnees['boxeur']: ?>"><?php echo $donnees['Nom']; ?></option>
<?php
}
?>
</select>
</html>