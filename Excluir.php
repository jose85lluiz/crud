<?php

require_once "config.php";
use \Model\Pessoa;

if($_SERVER['REQUEST_METHOD'] == 'GET'){

   $id = $_GET['id'];


$delete = new Pessoa();
$delete -> deleteID($id);
header("location:index.php");
}

?>