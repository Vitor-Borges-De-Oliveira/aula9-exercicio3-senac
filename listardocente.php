<?php

require_once('conexaodocente.php');

$sql = "select * from tbldocente";

$resultado = $connect->query($sql);

    while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)){

    echo  "Nº de registro: ". $linha['iddocente']               ."<br>";      
    echo  "Docente: ". $linha['docente']                 ."<br>";      
    echo  "Especialidade: ". $linha['especialidade']           ."<br>";
    echo  "Salário por hora: ". $linha['salhora']                 ."<br>";                  
    echo  "Disponibilidade: ". $linha['disponibilidade']         ."<br>";          

    echo "<button>Editar</button> | <button>Apagar</button>";

    echo "<hr>";

}