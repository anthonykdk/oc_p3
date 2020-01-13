<?php

function insert ($firstname, $name, $username, $password, $question, $answer)  
{   
    require ('connect_bd.php');
    
    try 
    {
        
        $db = connect();

        $req = $db->prepare('INSERT INTO users ( firstname, name, username, password, question, answer, created_at) VALUES (:firstname, :name, :username, :password, :question, :answer, NOW() )');

            $req->execute(array(
            'firstname' => $firstname , 
            'name' => $name , 
            'username' => $username , 
            'password' => $password ,
            'question' => $question ,
            'answer' => $answer ,
            ));

        return $req;
    } 
    catch (\Throwable $th) 
    {
    return NULL;
    }
}
?>