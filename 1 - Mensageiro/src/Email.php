<?php

namespace App\Src;

class Email implements Mensageiro {
    public function enviar($mensagem){
        echo "Olá, essa mensagem foi enviada pelo Email para Carvalho\n";
    }
}