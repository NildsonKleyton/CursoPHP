<?php 
require_once 'Pessoa.php';
class Profesor extends Pessoa{
    private $especialidade;
    private $salario;

    public function ReceberAum($aum){
        $this->salario += $aum ;
    }

    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
}
?>