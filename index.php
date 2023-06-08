<?php

require_once "config.php";

use \Model\Pessoa;
//use \Model\Endereco;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,200;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/records.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>CRUD</title>
    
   
</head>
<body>
	
    <header>
        <h1 class="header-title">Cadastro de Pessoas</h1>
    </header>
    <main>
        <a href="Cadastrar.php" class="button" >Cadastrar</a>
        <table class="records">
            <thead>
            
       </tbody>
        </table>
       </thead>
        <div class="modal" id="modal">
            <div class="modal-content">
                <header class="modal-header">
                	<div style="text-align:center">
                   <h2>PESSOAS CADASTRADAS:</h2>
               </div>
                   <?php	

            $pessoa = new Pessoa();


            $dados = $pessoa ->listAll();
             
             $pos = "left";
            

            foreach ($dados as $i => $value) {

                    
                   echo " 
                
                  <table cellpadding='20' align=$pos>
                  <tr> 
                  <td  valing='top'>

                    <b>$value[idpessoa]</b></br>
                    <b> Nome: </b>$value[desnome]</br>
                    <b>Cpf: </b> $value[descpf] </br>
                    <b>Celular:</b>$value[desfone]</br>
                    
           
                <a href='/crud/Editar.php?id=$value[idpessoa]' class='button_blue'>Editar</a>
                <a href='/crud/Excluir.php?id=$value[idpessoa]'class='button_red'>Excluir</a>
                
                </td>

               </tr>

               </table>
                
               ";} ?>
                    
                </header>
                
                <footer class="modal-footer">
                    
                </footer>
            </div>
        </div>
    </main>
    <footer>
       
    </footer>
</body>
</html>






