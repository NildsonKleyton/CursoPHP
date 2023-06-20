<?php 

class Luta{
    private $desafiado;
    private $desafiante;
    private $rouds;
    private $aprovada;

    public function marcarLuta($l1, $l2){
        if($l1->getCategoria() == $l2->getCategoria() && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar(){
        if($this->aprovada){
            $this->desafiado->status();

            $this->desafiante->status();

            $vencedor = rand(0,2);
            switch ($vencedor) {
                case 0://empate
                    echo "<br><p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1://Desafiado Vence
                    echo "<br><p>".$this->desafiado->getnome()." venceu </p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->prederLuta();
                    
                    break;
                case 2://Desafiante Vence
                    echo "<br><p>".$this->desafiante->getnome()." venceu </p>";
                    $this->desafiado->prederLuta();
                    $this->desafiante->ganharLuta();
                    break;
                default:
                    # code...
                    break;
            }
        } else{
            echo "<p>Luta não pode acontecer</p>";
        }
    }

    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado): self
    {
        $this->desafiado = $desafiado;

        return $this;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante): self
    {
        $this->desafiante = $desafiante;

        return $this;
    }

    public function getRouds()
    {
        return $this->rouds;
    }

    public function setRouds($rouds): self
    {
        $this->rouds = $rouds;

        return $this;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setAprovada($aprovada): self
    {
        $this->aprovada = $aprovada;

        return $this;
    }
}
?>