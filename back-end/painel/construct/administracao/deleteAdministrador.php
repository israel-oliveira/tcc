<?php
    include  (__DIR__.'/../../../widgets/Model/dados.php');

    $deleteAdministrador = new Dados;
    $deleteAdministrador = $deleteAdministrador->deleteDadosEspecificos('administradores',$_GET['id']);

    header('Location: ../../index.php?tela=administradores');
?>