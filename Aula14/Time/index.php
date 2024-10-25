<?php
    require_once "jogador.php";
    require_once "time.php";

    $time = new Time();

    $time->setNome("Unidavi");
    $time->setanoFundacao(2000);

    $jogador = new Jogador();
    $jogador->setNome("aaa");
    $jogador->setPosicao("bbb");
    $jogador->setDataNascimento(new DateTime("2000-01-01"));

    $time->addJogador($jogador);
    var_dump($time->getJogadores());
?>