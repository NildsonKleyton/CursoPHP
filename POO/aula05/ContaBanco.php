<?php

class ContaBanco
{

    private $numconta;
    private $tipo; # Conta Pupança cp - Conta Corrente cc
    private $dono; # nome do dono
    private $saldo; # valor
    private $status; # Aberta ou Fechada

    public function __construct()
    {
        $this->saldo = 0;
        $this->status = false;
        echo "<p>Conta criada com sucesso!!!</p>";
    }

    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta com dinheiro</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta em débito</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta em Finalizada</p>";

        }
    }

    public function depositar($valor)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Depósito de R$ $valor na conta de " . $this->getDono() . ".</p>";
        } else {
            echo "<p>ERRO!!! Impossível depositar</p>";
        }
    }

    public function sacar($valor)
    {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de R$ $valor na conta de " . $this->getDono() . "</p>";
            } else
                echo "<p>Saldo insuficiente</p>";
        } else
            echo "<p>ERRO!!! Impossível sacar</p>";
    }

    public function pagarMensal()
    {
        $valor = 0;
        if ($this->getTipo() == "CC") {
            $valor = 12;
        } elseif ($this->getTipo() == "CP") {
            $valor = 20;
        }

        if ($this->getStatus()) {
            if ($this->getSaldo() > $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Mesalisade de R$ $valor debitada na conta de " . $this->getDono() . "</p>";
            } else {
                echo "<p>ERRO!!! Pagamento não poder ser realizado. Saldo insuficiente</p>";
            }
        } else {
            echo "<p>ERRO!!! Conta inativa ou inexistente</p>";
        }
    }

    public function getNumconta()
    {
        return $this->numconta;
    }

    public function setNumconta($numconta): self
    {
        $this->numconta = $numconta;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($dono): self
    {
        $this->dono = $dono;

        return $this;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo): self
    {
        $this->saldo = $saldo;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }
}
