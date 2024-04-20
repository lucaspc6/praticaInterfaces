<?php

namespace App\Src;

Class Whatsapp implements Mensageiro {
    public function enviar($mensagem){
        echo "Olá, essa mensagem foi enviada pelo Whatsapp para Lucas\n "; 
    }
}