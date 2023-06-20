<?php 
class Caneta{
    private $carga;
    private $cor;
    private $modelo;
    private $ponta;
    private $tampada;

    public function __construct($g , $c, $m, $p)
    {
        $this->setCarga($g);
        $this->setCor($c);
        $this->setModelo($m); 
        $this->setPonta($p);
        $this->tampar();
       
    }

    public function tampar(){
        $this->tampada = true;
    }
    
    public function getCarga()
    {
        return $this->carga;
    }
    public function setCarga($g)
    {
        $this-> carga = $g;
    }

    public function getCor(){
        return $this->cor;
    }    
    public function setCor($c){
        $this->cor = $c;
    }
    
      public function getModelo(){
          return $this->modelo;
      }
      public function setModelo($m){
          $this->modelo = $m;
      }
    
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p)
    {
        $this->ponta = $p;
    }
        
    public function getTampada()
    {
        return $this->tampada;
    }
    public function setTampada($t)
    {
        $this->tampada = $t;
    }

}
