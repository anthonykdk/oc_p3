<?php
function connect () 
{
    try 
    {
        $bdd = new PDO ('mysql:host=anthonykondek.com;dbname=kdomaine_gbaf;charset=utf8', 'kdomaine_akondek' ,'anthony2020');
        return $bdd;
    }   
    catch (Exception $e) 
    {
        die ('Erreur :' .$e->getMessage());
    }
}


try 
{
     $db = new PDO('mysql:host=anthonykondek.com;dbname=kdomaine_gbaf;charset=utf8','kdomaine_akondek','anthony2020', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} 
catch (\Exception $e) 
{
    die('Erreur :' . $e->getMessage());
}
?>