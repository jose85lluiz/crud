<?php


namespace Model;

use Sql;


class Pessoa{
 public $id;

 public $nome ;
 
 public $endereco;

 public $cpf;

 public $fone;

public function getID(){

 return $this -> id;
}

public function setID($id){

    $this-> nome = $id;

}

 public function getNome(){

 return $this -> nome;
}

public function setNome($nome){

    $this-> nome = $nome;

}

public function getEndereco(){

 return $this -> endereco;
}

public function setEndereco($endereco){

	$this -> endereco = $endereco;

}
public function getCpf(){

return $this -> cpf;

}
public function setCpf($cpf){

 $this -> cpf = $cpf;

 }
 public function getFone(){

 return $this -> fone;
}

public function setFone($fone){

    $this-> nome = $fone;

}
 
 public function loadID($id){

$sql = new Sql();
return $sql -> select("SELECT * FROM tb_pessoas  WHERE  idpessoa =:ID ",array(


':ID'=>$id));

 }
 public function updateID($nome,$cpf,$fone,$id){

$sql = new Sql();
return $sql -> query("UPDATE tb_pessoas SET desnome= :NOME, descpf= :CPF, desfone= :FONE  WHERE idpessoa =:ID ",

array(
 ":ID"  => $id,
 ":NOME" => $nome,
 ":CPF" =>  $cpf,
 ":FONE" => $fone
));

 }

public function listAll(){


$sql = new Sql();
return $sql -> select("SELECT * FROM tb_pessoas ");

 }
 
 public function deleteID($id){

$sql = new Sql();
$sql -> select("DELETE FROM tb_pessoas WHERE idpessoa= :ID", array(

":ID" => $id

));

 }


public function cadastrarPessoa($id,$nome,$cpf,$fone){

$sql = new Sql();
$sql -> select("INSERT INTO tb_pessoas(idpessoa,desnome,descpf,desfone)VALUES(:ID, :NOME, :CPF, :FONE)", 

array(
  ":ID"  => $id,
 ":NOME" => $nome,
 ":CPF" =>  $cpf,
 ":FONE" => $fone
));

}

 }

?>