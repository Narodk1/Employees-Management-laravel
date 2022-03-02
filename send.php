<?php
session_start();
require_once 'ChatAct.php';
// Si le message existe et la session aussi
if(!empty($_POST['msg']) && isset($_SESSION['user']))
{

    $msg = htmlspecialchars($_POST['msg']);
    // Appel de la méthode setMessage avec le message + la session
    $chat = new chatAct();
    $chat->setMessage($msg, $_SESSION['user']);

    header('Location: chatAct.php');
    die();
}
else
{
    header('Location: chatAct.php');
    die();
}