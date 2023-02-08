<?php
class Pessoa{
    public $nome = null;
    
    function __construct($nome){
        $this->nome = $nome;
        echo "Objeto criado: $nome <br>";
    }

    function __get($variavel){
        echo $this->$variavel;
    }

    function __set($variavel, $valor){
        $this->$variavel = $valor;
    }
}
//Instanciando os objetos
$pessoa = new Pessoa('Juan');
$pessoa2 = new Pessoa('Roberto');

//
echo $pessoa->__get('nome');
echo "<br>";
echo $pessoa2->__get('nome');
echo "<br>";
$pessoa->__set('nome', 'Jhow');
$pessoa2->__set('nome', 'Jaw');

echo $pessoa->__get('nome');
echo "<br>";
echo $pessoa2->__get('nome');

?>