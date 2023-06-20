<?php 
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

    public function detalhes(){
        echo "<Hr>Livro " . $this->titulo . " ecrito por ". $this->autor;
        echo "<br> Páginas: " . $this->totPaginas . " atual " . $this->pagAtual;;
        echo "<br> Sendo lido por ". $this->leitor->getNome();
    }

    public function abrir(){
        $this->aberto = true;
    }

    public function fechar(){
        $this->aberto = false;
    }

    public function folhear($p){
        if($p > $this->totPaginas){
            $this->pagAtual = 0;
            echo "<br> Não existe a página $p";
        }else{
            $this->pagAtual = $p;
        }

    }

    public function avancar(){
        if ($this->pagAtual < $this->totPaginas)
            $this->pagAtual ++;
    }
    
    public function voltarPag(){
        if ($this->pagAtual != 0 )
            $this->pagAtual --;
    }


    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas): self
    {
        $this->totPaginas = $totPaginas;

        return $this;
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual): self
    {
        $this->pagAtual = $pagAtual;

        return $this;
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function setAberto($aberto): self
    {
        $this->aberto = $aberto;

        return $this;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($leitor): self
    {
        $this->leitor = $leitor;

        return $this;
    }
}
?>