<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador
{

    private $volume;
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->setVolume(100);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    public function ligar()
    {
        $this->setLigado(true);
    }

    public function deligar()
    {
        $this->setLigado(false);
    }

    public function abrirMenu()
    {
        echo "<br>Está ligado? " . ($this->getLigado() ? "Sim!" : "Não!");
        echo "<br>Está tocando? " . ($this->getTocando() ? "Sim!" : "Não!");
        printf("<br>Volume: %d ",  $this->getVolume());
        for ($i = 0; $i < $this->getVolume(); $i += 10) {
            if ($i < 20)
                echo "░"; #ALT+176
            elseif ($i < 50)
                echo "▒"; #ALT+177
            elseif ($i < 80)
                echo "▓"; #ALT+178
            else
                echo "█"; #ALT+219
        }
        echo "<br>";
    }

    public function fecharMenu()
    {
        echo "<br>Fechando Menu...";
    }

    public function maisVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function menosVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function ligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function desligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function play()
    {
        if ($this->getLigado() && !$this->getTocando()) {
            $this->setTocando(true);
        }
    }

    public function pause()
    {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }

    private function getVolume()
    {
        return $this->volume;
    }

    private function setVolume($volume)
    {
        $this->volume = $volume;
    }

    private function getLigado()
    {
        return $this->ligado;
    }

    private function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }

    private function getTocando()
    {
        return $this->tocando;
    }

    private function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }
}
