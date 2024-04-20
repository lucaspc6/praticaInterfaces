<?php

namespace App\Src;

class SMS implements Mensageiro{
    public function enviar($mensagem){
        echo "Olá, essa mensagem foi enviada pelo SMS para Pereira\n ";
    }
}