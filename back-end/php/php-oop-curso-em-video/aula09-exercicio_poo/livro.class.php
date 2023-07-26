<?php

require_once "pessoa.class.php";
require_once "publicacao.class.php";

class Livro implements publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->titulo       = $titulo;
        $this->autor        = $autor;
        $this->totPaginas    = $totPaginas;
        $this->pagAtual     = 0;
        $this->aberto       = false;
        $this->leitor       = $leitor;
    }
    
    public function detalhes(){
        echo "<hr>";
        echo "<p>Livro ".$this->titulo." escrito por ".$this->autor."</p>";
        echo "<p>Total de Páginas ".$this->totPaginas." e a Página Atual é ".$this->pagAtual."</p>";
        echo "<p>Sendo lido por ".$this->leitor->getNome()."</p>";
    }
    
    private function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    
    private function setAutor($autor){
        $this->autor = $autor;
    }
    
    private function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }
    
    private function setpagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }
    
    private function setAberto($aberto){
        $this->aberto = $aberto;
    }
    
    private function setLeitor($leitor){
        $this->leitor = $leitor;
    }
    
    private function getTitulo(){
        return $this->titulo;
    }
    
     private function getAutor(){
        return $this->autor;
    }
    
     private function getTotPaginas(){
        return $this->totPaginas;
    }
    
     private function getPagAtual(){
        return $this->pagAtual;
    }
    
     private function getAberto(){
        return $this->aberto;
    }
    
     private function getLeitor(){
        return $this->leitor;
    }    
    
    public function abrir(){
        $this->aberto = true;
    }
    
    public function fechar(){
        $this->aberto = false;
    }
    
    public function folhear($pagina){
        if ($pagina > $this->totPaginas){
            $this->pagAtual = 0;
        }    
        else{
            $this->pagAtual = $pagina;
        }
    }
            
    public function avancarPag(){
        $this->pagAtual++;
    }
    public function voltarPag(){
        $this->pagAtual--;
    } 
    
}

?>