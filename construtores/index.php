<?php
    require 'Empregado.php';

    //instancia da classe
    //cria uma objeto
    $empregado1 = new Empregado("Maria",1500);

    //var_dump($empregado1);
    echo " {$empregado1->toString()}";

?>