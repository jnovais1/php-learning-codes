<?php

class Funcionario {
    public $nome;
    public $telefone;
    public $numFilhos;

function getNumFilhos(){
    echo $this->numFilhos;
}
function setNumFilhos($numFilhos) {
    $this->numFilhos = $numFilhos;
}
function getNome(){
    echo $this->nome;
}
function setNome($nomeFunc) {
    $this->nome = $nomeFunc;
}
function getTelefone(){
    echo $this->telefone;
}
function setTelefone($telefone) {
    $this->telefone = $telefone;
}
function resumo(){
    echo "$this->nome possui $this->numFilhos filhos.<br>
    telefone: $this->telefone";
}

//getters and setters globais.
//Assim nao precisamos criar um get/set para cada atributo do objeto
function __get($variavel){
    echo $this->$variavel;
}
function __set($variavel, $valor){
    $this->$variavel = $valor;
}
}
$joao = new Funcionario();
$p = new Funcionario();

$p->setNome("Joshua");
$p->setNumFilhos(3);
$p->setTelefone("3333-3333");

echo $p->getNome();
echo "<br>";
echo $p->getNumFilhos();
echo "<br>";
echo $p->getTelefone();
echo "<br>";
echo $p->resumo();
echo "<br>";

echo $p->__get('nome');
echo "<br>";
$p->__set('telefone', '5');
echo $p->__get('telefone')
?>
