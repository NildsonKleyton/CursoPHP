<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero
{
    public function enterraOsso()
    {
        echo "<p>Enterrando o Osso!</p>";
    }

    public function abanandoRabo()
    {
        echo "<p>Abanando o Rabo!</p>";
    }

    public function emitirSom()
    {
        echo "<p>Au! Au! AuAu!</p>";
    }
}
