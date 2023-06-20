<?php

class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    
    public function apresentar()
    {
        printf("<p>Lutador: %s</p>", $this->getNome());
        printf("<p>Origem: %s</p>", $this->getNacionalidade());
        printf("<p>Idade: %d</p>",$this->getIdade());
        printf("<p>Altura: %.2f</p>",$this->getAltura());
        printf("<p>Pesando: %.2f Kg</p>",$this->getPeso());
        printf("<p>Ganhou: %d</p>",$this->getVitorias());
        printf("<p>Perdeu: %d</p>",$this->getDerrotas());
        printf("<p>Empatou: %d</p>",$this->getEmpates());

    }
    public function status()
    {
        printf("<p>Lutador %s é um peso %s com %d vitorias, %d detoras e %d emtapes.</p>"
        ,$this->getNome(),$this->getCategoria(),$this->getVitorias(),$this->getDerrotas(),$this->getEmpates());
    }
    public function ganharLuta()
    {
        $this->vitorias++ ;
    }
    public function prederLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade): self
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso): self
    {
        $this->peso = $peso;
        
        $this->setCategoria();

        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria(): self
    {
        $categoria="Inválido";
        if($this->peso >= 93){
            $categoria = "Pesado";
        }elseif ($this->peso >= 70.3) {
            $categoria = "Médio";
        }elseif($this->peso >= 56.7){
            $categoria = "Leve";
        }

        $this->categoria = $categoria;

        return $this;
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function setVitorias($vitorias): self
    {
        $this->vitorias = $vitorias;

        return $this;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas): self
    {
        $this->derrotas = $derrotas;

        return $this;
    }

    public function getEmpates()
    {
        return $this->empates;
    }

    public function setEmpates($empates): self
    {
        $this->empates = $empates;

        return $this;
    }
}
