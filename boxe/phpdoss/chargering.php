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
<select name="ring" id="ring">
<?php
$response = $db->query('SELECT * FROM ring');
while ($donnees = $response->fetch())
{
?>
        <option values="<php echo $donnees['ring']: ?>"><?php echo $donnees['nom']; ?></option>
<?php
}
?>
</select>
</html>