<?php

function getUser($username) 
{
    require('connect_bd.php');
    $req = $db->prepare('SELECT id_user, name, firstname, username, password, question, answer FROM users WHERE username = ?');
    $req->execute(array($username));
    $user = $req->fetch();
    return $user;
}

function getAnswer($answer, $username) 
{
    require('connect_bd.php');
    $req = $db->prepare('SELECT id_user, name, firstname, username, password, question, answer FROM users WHERE answer = ? AND username = ?');
    $req->execute(array($answer, $username));
    $answer = $req->fetch();
    return $answer;
}

function updatePass($password, $username) 
{
    require('connect_bd.php');
    $req = $db->prepare('UPDATE users SET password = ? WHERE username = ?');
    $req->execute(array($password, $username));
}

?>