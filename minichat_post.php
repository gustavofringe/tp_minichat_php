<?php
include 'db/db.php';
$req = $bdd->prepare("INSERT INTO post SET pseudo= ?, message= ?");
$req->execute([$_POST['pseudo'],$_POST['message']]);
header('Location: index.php');
?>