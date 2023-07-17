<?php

class Bolsista extends Aluno
{
    private $bolsa;

    public function renovarBolsa(){
        echo "<p>Bolsa renovada!</p?>";
    }

    public function pagarMensalidade(){
        echo "<p><strong>$this->nome</strong> é bolsista! Tem discondo de $this->bolsa%.</p>";
    }

    /**
     * Get the value of bolsa
     */
    public function getBolsa()
    {
        return $this->bolsa;
    }

    /**
     * Set the value of bolsa
     *
     * @return  self
     */
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }
}