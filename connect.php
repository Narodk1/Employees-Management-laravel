<?php
session_start();
if(!empty($_POST['pseudo'])) // Si le pseudo existe et n'est pas vide
{

    $pseudo = htmlspecialchars($_POST['pseudo']);
    // Si le pseudo ne comporte pas de caracetères spéciaux regex a test!!! ..
    if(!preg_match('/[^A-Za-z0-9\-]/', $pseudo))
    {
        $_SESSION['user'] = $pseudo;
        header('Location:chatAct.php');
        die();
    }
    else
    {
        echo "Merci de saisir un pseudo correct";
    }
}
else
{
    header('Location:index.php');
    die();
}